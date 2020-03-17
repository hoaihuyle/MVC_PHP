<?php
class HomeController extends Controller
{ 
    var $service = 'Services/productService.php';  
    function __construct(){ 
        parent::__construct();
        $this->callMenu();
    }
    function index()
    {  
        $this->render("index");
    }

    function category($id, $pag){
        $pagi = 9;
        $page = isset($pag)?$pag:0;
        require(ROOT . $this->service);
        $product = new ProductService(); 

        $prod['Cate'] = $product->getCate($db,'categories','id_cate ='.$id);
        $total = count($product->listsProduct($db,'products','cate_id', $id, $page));
        $prod['product'] = $product->listsProductPagi($db,'products','cate_id', $id, $page, $total, $pagi);
        $prod['totalPage'] = ceil($total/$pagi);
        $prod['activePage']=$pag;
        // die();
        // $this->helper->_debug($prod);
        // die(); 
        $this->set($prod);
        $this->render('products');
    }

    function product($id){
        require(ROOT . $this->service);
        $product = new ProductService(); 
        $this->render('product_detail');
    }
}
?>