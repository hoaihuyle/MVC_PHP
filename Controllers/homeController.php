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

    function Category($id){
        require(ROOT . $this->service);
        $product = new ProductService(); 

        $prod['Cate'] = $product->getCate($db,'categories','id_cate ='.$id);
        $prod['product'] = $product->listsProduct($db,'products','cate_id', $id);

        // $this->helper->_debug($prod);
        // die(); 
        $this->set($prod);
        $this->render('products');
    }

    function product($id){
        require(ROOT . $this->service);
        $product = new ProductService();

        $prod['prod'] = $product->findProduct($db,$id);

//        $this->helper->_debug($prod);
//
//        die();
        $this->set($prod);
        $this->render('product_detail');
    }
}
?>