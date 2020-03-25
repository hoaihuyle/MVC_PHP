<?php
class orderDAO extends Model
{
    function addOrder($db,$table, $dt){
      return $db->insert($table,$dt);
    }
    function getIdOrder($db,$table, $column){
      return $db->fetchMaxId($table, $column);  
    }
}
?>