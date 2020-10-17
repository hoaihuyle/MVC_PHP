<?php 

require(ROOT . 'Models/DAO/noneDAO.php');

class noneService extends Service{
 
    function addClient($db, $table, $dt)
    {
      $none = new noneDAO();
      $none =  $none->addClient($db,$table, $dt); 
      
      return $none;
    }
   
}    
?>