<?php
class statisController extends Controller
{
    var $order ="Services/orderService.php";
    var $serviceComp ="Services/companyService.php";
    var $serviceCate ="Services/categoryService.php";
    var $red="admin/statis/";


    function __construct()
    {
        parent::__construct();
        if( $_SESSION['role'] != 0 || !isset($_SESSION['role']) )
            header('location: /');
    }

    function index()
    {

        $this->render("admin/index");
    }

    function account()
    {
        require(ROOT . $this->order);
        $order = new OrderService();

        $d['orderInfos'] = $order->listOrderAccount($db, "orders", "acco_id", "accounts",'id_acco');  
        // var_dump($order->listOrderAccount($db, "orders", "acco_id is not null"));
        // die();
        $this->set($d);
        $this->render($this->red.__FUNCTION__);
    }

    function user()
    {
        require(ROOT . $this->order);
        $order = new OrderService();

        $d['orderInfos'] = $order->listOrderAccount($db, "orders", "orders.none_id", "none",'none.none_id');  
        // var_dump($order->listOrderAccount($db, "orders", "acco_id is not null"));
        // die();
        $this->set($d);
        $this->render($this->red.__FUNCTION__);

    }

    function product($id)
    {
        require(ROOT . $this->serviceCate);
        $category = new CategoryService();

        require(ROOT . $this->order);
        $order = new OrderService();

        require(ROOT . $this->serviceComp);
        $company = new CompanyService();

        $d['companyInfos'] = $company->listCompany($db); 
        $d['productInfos'] = $order->listOrderProduct($db, "products", "orders", "id_prod",'prod_id', 'id_orde='.$id);  
        $d['orderInfos'] = $order->listOrderAccount($db, "orders", "orders.none_id", "none",'none.none_id'); 
        $d['categoryInfos'] = $category->listCategory($db);

        $this->set($d);

        $this->render($this->red.__FUNCTION__);
    }

    function logout(){
        session_destroy();
        header('location: /login');
    }
}
?>