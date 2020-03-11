<?php
class loginController extends Controller
{
    var $index="admin/login/";
    var $service ="Services/loginService.php";

    function index(){ 
       $this->render($this->index.__FUNCTION__);
    }
    
    function postLogin(){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["username"])) {
              $username = "Tên đăng nhập không được để trống";
            } else {
              $username = $_POST["username"];
            }
          
            if (empty($_POST["password"])) {
              $password = "Password không được để trống";
            } else {
              $username = $_POST["password"];
            }
             
          }
        $this->render($this->index.__FUNCTION__);
    }

}
?>