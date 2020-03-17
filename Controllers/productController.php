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
    function create()
    {

        if (!empty($_POST)) 
        {

            require(ROOT . $this->service);
            $product = new ProductService();

            if ($product->createProduct($db, $_POST))
            {
                header("Location: " . WEBROOT . $this->redIndex);
            }
        }

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