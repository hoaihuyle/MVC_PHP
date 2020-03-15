<?php
class ProductController extends Controller
{
    var $service ="Services/productService.php";
    var $serviceComp ="Services/companyService.php";
    var $serviceCate ="Services/categoryService.php";
    var $red="admin/products/";
    var $redIndex="product/index";


    function __construct()
    {
        parent::__construct();
        if( $_SESSION['role'] != 0 || !isset($_SESSION['role']) )
            header('location: /');
    }

    function index()
    {
        require(ROOT . $this->service);
        $product = new ProductService();

        require(ROOT . $this->serviceComp);
        $company = new CompanyService();

        require(ROOT . $this->serviceCate);
        $category = new CategoryService();

        $d['productInfos'] = $product->listProduct($db);  
        $d['companyInfos'] = $company->listCompany($db);
        $d['categoryInfos'] = $category->listCategory($db);
        //long
        $this->set($d);

        $this->render($this->red.__FUNCTION__);
    }
    // http://domain/cotroler/edit/12
    function create()
    {
        require(ROOT . $this->serviceComp);
        $company = new CompanyService();

        require(ROOT . $this->serviceCate);
        $category = new CategoryService();

        $d['companyInfos'] = $company->listCompany($db);
        $d['categoryInfos'] = $category->listCategory($db);

        if (!empty($_POST)) 
        {
            if(isset($_FILES["image"]) && !empty($_FILES['image']['name'])){
                $allowed =  array('gif','png' ,'jpg');
                $filename = $_FILES['image']['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                $messageError = "";

                if ($_FILES["image"]["error"] > 0) {
                    $messageError .= "Lỗi quá trình mở file.";
                }

                if (!in_array($ext, $allowed)) {
                    $messageError .= " File không đúng định dạng.";
                }

                if ($_FILES["image"]["size"] > 6*1024*1024) {
                    $messageError .= " Dung lượng file không được lớn hơn 6MB.";
                }

                if($messageError == ""){
                    $img = $this->helper->uploadImagesThumb($_FILES['image'], 'uploads/products/', 'uploads/products/thumb/');
                }else {
                    $message = $messageError;
                }
            } else { 
                $img = ''; 
            }
            require(ROOT . $this->service);
            $product = new ProductService();

            if ($product->createProduct($db, $_POST))
            {
                header("Location: " . WEBROOT . $this->redIndex);
            }else{
                $d['error'] = " <div class='message p-3 bg-danger text-white'> Cập nhập thông tin không thành công</div>";
            }
        }

        $this->set($d);
        
        $this->render($this->red.__FUNCTION__);
    }

    function sort()
    {
        $this->render($this->red.__FUNCTION__);
    }

    function edit($id)
    {
        require(ROOT . $this->service);
        $product = new ProductService();
        
        $d['productInfo'] = $product->findProduct($db, $id); 

        if (!empty($_POST))
        {

            if ($product->editProduct($db, $id, $_POST))
            {
                header("Location: " . WEBROOT . $this->redIndex);
            }else{
                $d['error'] = " <div class='message p-3 bg-danger text-white'> Cập nhập thông tin không thành công</div>";
            }
        }
        
        $this->set($d);
        // $this->render('admin/form-validation');
        $this->render($this->red.__FUNCTION__);
    }  

    function delete($id)
    {
        require(ROOT . $this->service);
        $product = new ProductService();
        if ($product->deleteProduct($db, $id))
        {
            header("Location: " . WEBROOT . $this->redIndex);
        }
        header("Location: " . WEBROOT . $this->redIndex);
    }  
}
?>