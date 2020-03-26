<?php
class ProductController extends Controller
{
    var $service ="Services/productService.php";
    var $serviceComp ="Services/companyService.php";
    var $serviceCate ="Services/categoryService.php";
    var $serviceset ="Services/settingService.php";
    var $red="admin/products/";
    var $redIndex="product/index";

    
    function __construct()
    {
        parent::__construct();
        if( $_SESSION['role'] != 0 || !isset($_SESSION['role']) )
            header('location: /');
    }
    function seach($str, $str2,$str3,$str4){
        // var_dump($_GET);
        require(ROOT . $this->service);
        $product = new ProductService();

        require(ROOT . $this->serviceComp);
        $company = new CompanyService();

        require(ROOT . $this->serviceCate);
        $category = new CategoryService();
        
        $d['productInfos'] = $product->fetchsql($db,$str,$str2,$str3,$str4);  
        $d['companyInfos'] = $company->listCompany($db);
        
        if($str3!=""){
            $d['str3']=$str3;
           
        }
        if($str4!=""){
            $d['str4']=$str4;
        }
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
        $d['setting_product']=$product->listsett_product($db);

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
        require(ROOT . $this->serviceset);
        $setting = new SettingService();
        $d['companyInfos'] = $company->listCompany($db);
        $d['categoryInfos'] = $category->listCategory($db);
        $d['setting'] = $setting->listSetting2($db);
        $d['setting1']=array_keys($d['setting']);
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
            $data= array(
                "name_prod"=>$_POST['name_prod'],
                "cate_id"=>$_POST['cate_id'],
                "comp_id"=>$_POST['comp_id'],
                "price"=>$_POST['price'],
                "uses_prod"=>$_POST["uses_prod"],
                "discount"=>$_POST["discount"],
                "flag"=>$_POST["flag"],
                "barcode"=>$_POST["barcode"],
                "description"=>$_POST["description"],
                "price_manu"=>$_POST["price_manu"],
                "image"=>$_POST["image"]
                 ) ;

            if ($product->createProduct($db, $data))
            { 
                $data3=$product->listProduct($db);
                $id;
                foreach ($data3 as  $value) {
                    $id=$value["id_prod"];
                }
                foreach ($_POST["menu_id"] as $value) {
                    
                    $data4=["prod_id"=>$id,"sett_key"=>$value];
                    $product->createSett_Product($db,$data4);
                }
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
        require(ROOT . $this->serviceset);
        $setting = new SettingService();
        $d['companyInfos'] = $company->listCompany($db);
        $d['categoryInfos'] = $category->listCategory($db);        
        $d['productInfo'] = $product->findProduct($db, $id); 
        $d['setting'] = $setting->listSetting2($db);
        $setting1=array_keys($d['setting']);
        $d['sett_product1']=$product->findSett_Product($db,$id);
        $sett_product1=$product->findSett_Product($db,$id);
       
       foreach($setting1 as $key=> $value){

            for($y=0;$y<count($sett_product1);$y++){
             if($value==$sett_product1[$y]["sett_key"])
             {
                unset($setting1[$key]);
              }
            }
        
        }
       
        $d['setting1']=$setting1;
       
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
            $data= array(
                "name_prod"=>$_POST['name_prod'],
                "cate_id"=>$_POST['cate_id'],
                "comp_id"=>$_POST['comp_id'],
                "price"=>$_POST['price'],
                "uses_prod"=>$_POST["uses_prod"],
                "discount"=>$_POST["discount"],
                "flag"=>$_POST["flag"],
                "barcode"=>$_POST["barcode"],
                "description"=>$_POST["description"],
                "price_manu"=>$_POST["price_manu"],
                "image"=>$_POST["image"],
                 ) ;
            if ($product->editProduct($db, $id, $data) || isset($_POST['id_sett']))
            {   
                $product->deleteSet_Product($db,$id);
                foreach ($_POST["id_sett"] as $value) {
                    $data4=["prod_id"=>$id,"sett_key"=>$value];
                    $product->createSett_Product($db,$data4);
                }

                header("Location: " . WEBROOT . $this->redIndex);
            }
            else{
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