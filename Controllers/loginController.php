<?php
class loginController extends Controller
{
    var $index="admin/login/";
    var $login ="Services/loginService.php";
    

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

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $request['name'] = "Tên đăng nhập không được để trống";
            } else {
              $request['name'] = $_POST["name"];
            }
          
            if (empty($_POST["password"])) {
              $request['password'] = "Password không được để trống";
            } else {
              $request['password'] = $_POST["password"];
            } 

            $val = $log->postLogin($db, $request);
            
            var_dump($val);

            if($val)
    		{  
                $_SESSION['name_id'] = $val['id'];
    			$_SESSION['success'] = "Đăng nhập thành công";
                header("Location: /menu");
    		}        
    		else
    		{
                // $_SESSION['error']="Sai tên đăng nhập hoặc mật khẩu";  
                header("Location: " . $_SERVER["HTTP_REFERER"]); 
    		}	 
          
        }
        
    }

    function logout(){
      unset($_SESSION['name_id']);
      header('location: /login');
    }

}
?>