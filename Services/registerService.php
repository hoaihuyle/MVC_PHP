<?php 

$db = new Database();
require(ROOT . 'Models/DAO/registerDAO.php');
class registerService extends Service{

  function create($db,$table,$request){
    $register = new registerDao(); 
    return $register->create($db, $table, $request);
  }

  function checkPhone($db, $table, $request){
    $register = new registerDao();
    return $register->checkPhone($db, $table, $request);
  } 

  function checkEmail($db,$table, $request){
    $register = new registerDao();
    return $register->checkEmail($db, $table, $request);
  }
   
}

?>