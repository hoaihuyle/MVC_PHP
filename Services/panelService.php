<?php 
$db = new Database();
require(ROOT . 'Models/DAO/panelDAO.php');
class panelService extends Service{
  
  function createPanel($db, $table, $dt){
    $panel = new panelDAO();
    $panel =  $panel->createPanel($db,$table, $dt); 
    return $panel;
  } 
   
  function listPanel($db, $sql){
    $panel = new panelDAO();
    $panel =  $panel->listPanel($db,$sql); 
    return $panel;
  }

  function editPanel($db,$table, $id){
    $panel = new panelDAO();
    $panel =  $panel->editPanel($db,$table,$id); 
    return $panel;
  }

  function saveEditPan($db, $table, $dt, $where){
    $panel = new panelDAO();
    $panel =  $panel->saveEditPan($db, $table, $dt, $where); 
    return $panel;
  }

  function delPanel($db, $table, $id){
    $panel = new panelDAO();
    $panel =  $panel->delPanel($db, $table, $id); 
    return $panel;
  }
}    
?>