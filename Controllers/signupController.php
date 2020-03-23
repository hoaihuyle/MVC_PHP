<?php
class signupController extends Controller
{
    

    var $index = '/';
    var $signup = '/signup'; 
 
    function __construct()
    {
        parent::__construct();
        $this->callMenu();
    }

    function index()
    {   
        $this->render("signup");
    }

    function postRegister(){ 
      require(ROOT.$this->regis);
      $register = new registerService();
      if(isset($_POST)){ 
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

          if(empty($_POST['email'])){
            $error['email'] = 'Email không được để trống'; 
          }
          else{
            //Check isset phone
            $is_check = $register->checkEmail($db,'accounts',$_POST['email']);
            if($is_check != null){
              $error['email'] = 'Email đã tồn tại'; 
            }
            $request['email'] = $_POST['email'];
          }

          if (empty($_POST["password"])) {
            $error['password'] = "Password không được để trống";
          } 
          else {
            $request['password'] = password_hash($_POST["password"],PASSWORD_BCRYPT);
          }

          if(empty($_POST['address'])){
            $error['address'] = 'Địa chỉ không được để trống'; 
          }
          else {
            $request['address'] = $_POST['address'];
          }
          if($_POST != null){
            $val = [
              'val_name' => $_POST['name_acco'],
              'val_phone' => $_POST['phone'],
              'val_email' => $_POST['email'],
              'val_address' => $_POST['address'],
            ];
          }
          else{$val = [];}
          $request['role'] = 2;
          if(empty($error)){
            $insert = $register->create($db, 'accounts', $request);
            if($insert>0){

              echo "<script>alert('Đăng ký thành công, giờ đây bạn có thể đăng nhập!!'); location=' /'</script> ";
            }
            else {
              $_SESSION['error']="Thêm mới thất bại";
              $this->set(array_merge($error, $val));
              $this->render('/signup');
            }
          }
          else{
              $this->set(array_merge($val, $error));
              $this->render('/signup');
          }


      }

    }

    function postLogin(){
      require(ROOT.$this->log);
      $login = new loginService();

      if(isset($_POST)){
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
                 $_SESSION['name_id'] = $val['id_acco'];
                 $_SESSION['name_acco'] = $val['name_acco'];
                 $_SESSION['role'] = $val['role'];
                  $_SESSION['success'] = "Đăng nhập thành công";
                  header("Location: /"); 
              }
              else {
                  $error['errors'] ='Sai tên tài khoản hoặc mật khẩu';
                  $this->set($error, $request);
                  $this->render('/signup');
              }
          }
          else{
              $error['errors'] ='Bạn không có quyền đăng nhập';
              $this->set($error,$request);
              $this->render('/signup');
          }


      } 
    }
    function logOut(){
        session_destroy();
        header('location: /');
    }
}
?> 