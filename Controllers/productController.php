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
    function seach($str, $str2){
        // var_dump($_GET);
        require(ROOT . $this->service);
        $product = new ProductService();

        require(ROOT . $this->serviceComp);
        $company = new CompanyService();

        require(ROOT . $this->serviceCate);
        $category = new CategoryService();
        $d['productInfos'] = $product->fetchsql($db,$str,$str2);  
        $d['companyInfos'] = $company->listCompany($db);
        $d['categoryInfos'] = $category->listCategory($db);
        if(intval($str)==true){
          $d['cate_id1']=$str;
        
         
        }
        if(intval($str2)==true){
          $d['comp_id1']=$str2;
        }
        $this->set($d);
        $this->render($this->red.'index');

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
        $this->set($d);

        $this->render($this->red.__FUNCTION__);
    }
    // http://domain/cotroler/edit/12
    /**
     * Create product with function movetouploadImageThumb
     * @company - CompanyService
     * @category - CategoryService
     *  return companyInfos, categoryInfos, error
     */
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
                    $link_img = $this->helper->uploadImagesThumb($_FILES['image'], 'uploads/products/', 'uploads/products/thumb/');
                }else {
                    $message = $messageError;
                }
            } else { 
                $link_img = ''; 
            }
            //add image to POST
            $_POST['image']= $link_img;
            require(ROOT . $this->service);
            $product = new ProductService();

            if ($product->createProduct($db, $_POST))
            {
                header("Location: " . WEBROOT . $this->redIndex);
            }else{
                unlink(ROOT.'upload/products/'.$img);
                $d['error'] = " <div class='message p-3 bg-danger text-white'> Cập nhập thông tin không thành công</div>";
            }
        }

        $this->set($d);
        
        $this->render($this->red.__FUNCTION__);
    }

    /**
     * Create product with function movetouploadImageThumb
     * @company - CompanyService
     * @category - CategoryService
     * @product - ProductService
     *  return companyInfos, categoryInfos, error, productInfo
     */
    function edit($id)
    {
        require(ROOT . $this->serviceComp);
        $company = new CompanyService();

        require(ROOT . $this->serviceCate);
        $category = new CategoryService();

        require(ROOT . $this->service);
        $product = new ProductService();

        $d['companyInfos'] = $company->listCompany($db);
        $d['categoryInfos'] = $category->listCategory($db);        
        $d['productInfo'] = $product->findProduct($db, $id); 

        if (!empty($_POST))
        {
            if (!$_FILES['image']['size']=='')
            {
            //upload ảnh
                if(($_FILES['image']['type']!="image/gif")
                &&($_FILES['image']['type']!="image/png")
                &&($_FILES['image']['type']!="image/jpg")
                &&($_FILES['image']['type']!="image/jpeg"))
                {
                    $message="File Không Đúng Định Dạng";  
                }
                else
                    if ($_FILES['image']['size']>6000000) 
                {
                    $message="Kích Thước Phải Nhỏ Hơn 6MB";
                }
                else
                { 
                    $img=$_FILES['image']['name'];
                    $link_img=$img;
                    $link_img = $this->helper->uploadImagesThumb($_FILES['image'], 'uploads/products/', 'uploads/products/thumb/');
                    
                     //Get link old image to delete
                    $oldImage = $_POST['image'];
                    // var_dump($oldImage);
                    // die();
                    unlink(ROOT.'uploads/products/'.$oldImage);
                    // unlink('../upload/thumb/'.$anhInfo['files']);

                    //Add image to POST
                    $_POST['image'] = $link_img;
                }
            }

            if ($product->editProduct($db, $id, $_POST))
            {
                header("Location: " . WEBROOT . $this->redIndex);
            }else{
                if(isset($message)){ $d['error']=$message; }else $d['error'] = " <div class='message p-3 bg-danger text-white'> Cập nhập thông tin không thành công</div>";
            }
        }
        $this->set($d);
        // $this->render('admin/form-validation');
        $this->render($this->red.__FUNCTION__);
    } 
    
    /**
     * Delete
     */
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