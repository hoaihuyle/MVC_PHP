<?php
class AdminController extends Controller
{
    var $order ="Services/orderService.php";
    var $service ="Services/accountService.php";

    function __construct()
    {
        parent::__construct();
        if( $_SESSION['role'] != 0 || !isset($_SESSION['role']) )
            header('location: /');
    }

    function index()
    {
        require(ROOT . $this->service);
        $accounts = new AccountService();
        require(ROOT . $this->order);
        $order = new OrderService();

        $d['account'] = $accounts->CountAcount($db);  
        $d['static'] = $order->listOrders($db);

        $this->set($d);
        $this->render("admin/index");
    }
}
?>