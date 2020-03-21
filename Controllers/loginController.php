<?php
class loginController extends Controller
{
  var $index="admin/login/";
  var $login ="Services/loginService.php";
  var $menu = 'menu/index';

  function index(){
      if(isset($_SESSION['name_id']))
      {
          echo "<script>alert('Bạn đang đăng nhập, không thể thực hiện thao tác này!!'); location=' /menu'</script> ";
      }
      else
      $this->render($this->index.__FUNCTION__);
  } 
  function postLogin(){ 
    require(ROOT.$this->login);
    $log = new loginService();
//
    if (isset($_POST)) {
      if (empty($_POST["phone"])) {
        $error['phone'] = "Số điện thoại không được để trống";
      } else {
        $request['phone'] = $_POST["phone"];
      }
      if (empty($_POST["password"])) {
        $error['password'] = "Password không được để trống";
      } else {
        $request['password'] = $_POST["password"];
      }
//
      if(empty($error)){
          $val = $log->postLogin($db, $request); 
          if($val && $val['role'] == 0 && password_verify($_POST["password"], $val['password'])){
              $_SESSION['name_id'] = $val['id_acco'];
              $_SESSION['name_acco'] = $val['name_acco'];
              $_SESSION['role'] = $val['role'];
              $_SESSION['success'] = "Đăng nhập thành công";
                header("Location: /menu");
          }
          else {
              $error['error'] = 'Sai tên đăng nhập hoặc mật khẩu';
              $this->set($error);
              $this->render('admin/login/index');

          }
      }
      else
      {
          $error['error'] = 'Mật khẩu số điện thoại không được để trống';  
              $this->set($error);
              $this->render('admin/login/index'); 
      }

    }
    else
    {
        $error['error'] = 'Không thể đăng nhập';
          $this->set($error);
              $this->render('admin/login/index'); 
    }
  }


}
?>