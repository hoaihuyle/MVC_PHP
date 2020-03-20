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
        $this->set($prod);
        $this->render('product_detail');
    }

    function card($id){

    }

    function giohang($id){
        require(ROOT . $this->service);
        $product = new ProductService();  
        $prod = $product->findProduct($db,$id);
        // $this->helper->_debug($prod);
//        $this->helper->_debug($prod);
        if($prod != null){
            if($prod[0]['count']!=0){
                // echo "<script>alert('Sản phẩm đã hết, vui lòng lựa chọn sản phẩm khác!!'); location=' /'</script> ";
            }
            else
            {
                if(! isset($_SESSION['cart'][$id]))//$id là key phân biệt các sp với nhau
                {
                    //tạo mới giỏ hàng
                    $_SESSION['cart'][$id]['name_prod'] = $prod[0]['name_prod'];
                    $_SESSION['cart'][$id]['image'] = $prod[0]['image'];
                    $_SESSION['cart'][$id]['discount'] = $prod[0]['discount'];
                    $_SESSION['cart'][$id]['price'] = ((100-$prod[0]['discount']) * $prod[0]['price'])/100;
                    $_SESSION['cart'][$id]['qty'] = 1;//số lượng
                }
                else
                {
                    $_SESSION['cart'][$id]['qty'] += 1;
                    //cập nhật giỏ hàng
                }
            }
        }
        else {
             echo "<script>alert('Sản phẩm không tồn tại, vui lòng lựa chọn sản phẩm khác!!'); location=' /'</script> ";
        }

        $this->render('card');
    }

    function Cart(){
        $this->render('card');
    }

    function aboutUs(){
        $this->render('about_us'); 
    }
}
?>