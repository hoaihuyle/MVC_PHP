<?php 

$db = new Database();
require(ROOT . 'Models/DAO/loginDAO.php');
class loginService extends Service{

    function postLogin($db,$request){
      $login = new loginDAO(); 

      $val = $login->fetchOneVal($db,$request);

      return $val;

    }

     
  function findMenu($db, $id){
      $menu = new MenuDAO();
      $menus =  $menu->fetchByCol($db, $id); 

      return $menus;
  }
   
}

?>