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
        $this->helper->_debug('thạnh');
        die();
        require(ROOT . $this->serviceComp);
        $company = new CompanyService();

        require(ROOT . $this->serviceCate);
        $category = new CategoryService();

        $d['companyInfos'] = $company->listCompany($db);
        $d['categoryInfos'] = $category->listCategory($db);

        if (!empty($_POST)) 
        {

           
            if ($_FILES['img']['size']=='')
            {
                $link_img=$_POST['anh_hi'];
            } 
            else {
            //upload ảnh
                if(($_FILES['img']['type']!="image/gif")
                &&($_FILES['img']['type']!="image/png")
                &&($_FILES['img']['type']!="image/jpg")
                &&($_FILES['img']['type']!="image/jpeg"))
                {
                    $message="File Không Đúng Định Dạng";  
                }
                else{
                    if ($_FILES['img']['size']>6000000) {
                        $message="Kích Thước Phải Nhỏ Hơn 6MB";
                    }
                    else{ 
                        $img=$_FILES['img']['name'];
                        $link_img=$img;
                        echo($this->helper->testConnect());
                        die();
                        $link_img = $this->helper->uploadImagesThumb($_FILES['img'], 'upload/uploadUser/', 'upload/uploadUser/thumb/');
                    }
                }
                var_dump($_POST);
                die();
                $sql="SELECT picture FROM applicant WHERE id={$userInfo[0]['aid']}";
                $query_a=mysqli_query($dbc,$sql); 
                $anhInfo=mysqli_fetch_assoc($query_a);
                unlink('upload/uploadUser/'.$anhInfo['picture']);
                // unlink('../upload/images/'.$anhInfo['files']);
                unlink('upload/uploadUser/thumb/'.$anhInfo['picture']);
                
            }
            var_dump($_POST);
            die();
            $query_up="UPDATE applicant SET picture='{$link_img}' WHERE id={$userInfo[0]['aid']}";

            $result_up=mysqli_query($dbc,$query_up);

            if(mysqli_affected_rows($dbc)==1){
                //echo "<p style='color:green;'>Sửa Thành Công</p>";
                header('Location: /account/'.$userInfo[0]['uid']);
            }
            else{
                echo "<p class='required'>Thông Tin Vẫn Chưa Được Chỉnh Sửa</p>";
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