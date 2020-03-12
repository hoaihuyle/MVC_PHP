<?php
class registerController extends Controller
{
    var $index="admin/register/";
    var $register ="Services/registerService.php";
    

    function index(){ 
      require(ROOT . $this->register);
        $this->render($this->index.__FUNCTION__);
    }
    
    

}
?>