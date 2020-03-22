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
        $limit = 8;
        require(ROOT . $this->service); 
        $product = new ProductService();  
        $categories = new CategoryService();
        $prod['sp_views'] = $product->listProductViews($db, 'products', 'count' ,$limit);        
        $prod['cateViews'] = $categories->ShowlistCategory($db);
        foreach($prod['cateViews'] as $ct){
            $p['cate'] = $product->prodCateWhere($db, 'products', 'cate_id ='.$ct['id_cate'].' limit 8');
            $prod['prod_cate'][] = array_merge($ct, $p);
        }
        // $this->helper->_debug($prod['prod_cate']);
        // die();

        // $this->helper->_debug($prod['prod_cate']);
        // die();
        $this->set($prod);
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
        $data = ['count' => $prod['prod'][0]['count'] + 1];
        $update = $product->editProduct($db, $id, $data );
        $prod['CateName'] = $product->getCate($db,'categories','id_cate ='.$prod['prod'][0]['cate_id']);
        $prod['listProdLienquan'] = $product->prodCateWhere($db, 'products', 'cate_id ='.$prod['CateName']['id_cate'].' limit 15');
        $prod['sp_views'] = $product->listProductViews($db, 'products', 'count' ,10); 
        $prod['prod_discount'] = $product->listProdiscount($db, 'products', 'discount > 0 limit 5');
        // $this->helper->_debug($prod);
        // die();
        $this->set($prod);
        $this->render('product_detail');
    }

    function card($id){

    }

    function giohang($id){  
        require(ROOT . $this->service);
        $product = new ProductService();  
        $prod = $product->findProduct($db,$id); 
        // if($prod != null){
            // if($prod[0]['count']!=0){
            //     // echo "<script>alert('Sản phẩm đã hết, vui lòng lựa chọn sản phẩm khác!!'); location=' /'</script> ";
            // }
            // else
            // {
                if(! isset($_SESSION['cart'][$id]))//$id là key phân biệt các sp với nhau
                {
                    //tạo mới giỏ hàng
                    $_SESSION['cart'][$id]['name_prod'] = $prod[0]['name_prod'];
                    $_SESSION['cart'][$id]['image'] = $prod[0]['image'];
                    $_SESSION['cart'][$id]['discount'] = $prod[0]['discount'];
                    $_SESSION['cart'][$id]['price'] = ((100-$prod[0]['discount']) * $prod[0]['price'])/100;
                    $_SESSION['cart'][$id]['price_old'] = $prod[0]['price'];
                    $_SESSION['cart'][$id]['qty'] = 1;//số lượng
                }
                else
                {
                    $_SESSION['cart'][$id]['qty'] += 1;
                    //cập nhật giỏ hàng
                }
            // }
        // }
        // else {
        //      echo "Sản phẩm không tồn tại, vui lòng lựa chọn sản phẩm khác!!'); location='/'";
        // }
        // echo 'Sản phẩm đã được thêm vào giỏ hàng'; 
        echo count($_SESSION['cart']);
    }

    function updateCart(){
        // var_dump($_POST['idProd'][0]); 
        // die();
        if(!empty($_POST)){
            $to['tongtienup'] = $_POST['tongtienup'];
            for($i = 0; $i< count($_POST['idProd']); $i++){
                if(isset($_SESSION['cart'][$_POST['idProd'][$i]])){  
                    $_SESSION['cart'][$_POST['idProd'][$i]]['qty'] = $_POST['quality'][$i];//số lượng
                }
            }
            $this->set($to); 
        } 
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function Cart(){
        $this->render('card');
    }

    function delCart($id){

        unset($_SESSION['cart'][$id]);
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function aboutUs(){
        $this->render('about_us'); 
    }
}
?>