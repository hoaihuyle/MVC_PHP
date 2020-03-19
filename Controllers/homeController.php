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
        $prod['total'] = count($product->listsProduct($db,'products','cate_id', $id, $page));
        $prod['product'] = $product->listsProductPagi($db,'products','cate_id', $id, $page, $prod['total'], $pagi);
        $prod['totalPage'] = ceil($prod['total']/$pagi);
        $prod['activePage']=$pag;
        $prod['total'] % $pagi == 0 ? $prod['countShow'] = $pagi : $prod['countShow'] = $prod['total'] % $pagi ;

        // die();
        // $this->helper->_debug($prod);
//         die();
        $this->set($prod);
        $this->render('products');
    }

    function product($id){
        require(ROOT . $this->service);
        $product = new ProductService();  
        $prod['prod'] = $product->findProduct($db,$id);
        $prod['CateName'] = $product->getCate($db,'categories','id_cate ='.$prod['prod'][0]['cate_id']);  
        // $prod['ProdQT'] = $product-
        $this->set($prod);
        $this->render('product_detail');
    }

    function aboutUs(){
        $this->render('about_us'); 
    }
}
?>