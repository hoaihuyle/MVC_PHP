<?php 

require(ROOT . 'Models/DAO/registerDAO.php');

class registerService extends Service
{

  function create($db,$table,$request)
  {
      $register = new registerDao(); 
      $newRegister = $register->create($db, $table, $request);
      
      return $newRegister; 
  }

  function checkPhone($db, $table, $request)
  {
      $register = new registerDao();
      $checkPhone = $register->checkPhone($db, $table, $request);
      
      return $checkPhone;
  } 

  function checkEmail($db,$table, $request)
  {
      $register = new registerDao();
      $checkEmail = $register->checkEmail($db, $table, $request);

      return $checkEmail;
  }
   
}

?>