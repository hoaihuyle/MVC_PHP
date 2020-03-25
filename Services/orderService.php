<?php 
$db = new Database();
require(ROOT . 'Models/DAO/orderDAO.php');
class orderService extends Service{
  
  function addOrder($db, $table, $dt){
    $order = new orderDAO();
    $order =  $order->addOrder($db,$table, $dt); 
    return $order;
  }
  function getIdOrder($db,$table, $column){
    $order = new orderDAO();
    $order =  $order->getIdOrder($db,$table, $column); 
    return $order;
  }
   
}    
?>