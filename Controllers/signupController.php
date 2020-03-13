<?php
class signupController extends Controller
{
    var $regis ="Services/registerService.php";
    var $log = "Services/loginService.php";

    var $index = '/';
    var $signup = '/signup';

    function index()
    {   
        $this->render("signup");
    }

    function postRegister(){
      require(ROOT.$this->regis);
      $register = new registerService();

      if($_SERVER['REQUEST_METHOD'] == "POST"){
          if (empty($_POST["name_acco"])) {
            $error['name_acco'] = "Họ tên khách hàng không được để trống";
          } else {
            $request['name_acco'] = $_POST["name_acco"];
          }
        
          if(empty($_POST['phone'])){  
            $error['phone'] = 'Số điện thoại không được để trống';
          }
          else{
            //Check isset phone
            $is_check = $register->checkPhone($db, 'accounts',$_POST['phone']);
            if($is_check != null){
              $error['phone'] = 'Số điện thoại đã tồn tại'; 
            }
            $request['phone'] = $_POST['phone'];
          }

          if (empty($_POST["password"])) {
            $error['password'] = "Password không được để trống";
          } else {
            $request['password'] = password_hash($_POST["password"],PASSWORD_BCRYPT);
          } 

          if(empty($_POST['address'])){
            $error['address'] = 'Địa chỉ không được để trống';
          }
          else {
            $request['address'] = $_POST['address'];
          } 
          $request['role'] = 2;
          if(empty($error)){ 
            $insert = $register->create($db, 'accounts', $request);
            if($insert>0){
              $_SESSION['success'] = 'Tạo tài khoản thành công';
              header('location:' . $this->index);
            }
            else {
              $_SESSION['error']="Thêm mới thất bại";
              header("Location: " . $_SERVER["HTTP_REFERER"]); 
            }
          }
          else{
            header("Location: " . $_SERVER["HTTP_REFERER"]);
          }
          
            
      } 
      
    }

    function postLogin(){
      require(ROOT.$this->log);
      $login = new loginService();

      if($_SERVER['REQUEST_METHOD'] == "POST"){
          if (empty($_POST["phone"])) {
            $error['phone'] = "Họ tên khách hàng không được để trống";
          } else {
            $request['phone'] = $_POST["phone"];
          }
        
          if(empty($_POST['password'])){  
            $error['password'] = 'Số điện thoại không được để trống';
          }
          else{ 
            $request['password'] = $_POST['password'];
          } 
          if(empty($error)){ 

             $val = $login->postLogin($db, $request);  
             if($val && $val['role'] != 0 && password_verify($_POST["password"], $val['password'])){ 
                  $_SESSION['name_id'] = $val['id'];
                  $_SESSION['success'] = "Đăng nhập thành công";
                  header("Location: /"); 
              }
              else {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
              }
          }
          else{
            header("Location: " . $_SERVER["HTTP_REFERER"]);
          }
          
            
      } 
    }
}
?>