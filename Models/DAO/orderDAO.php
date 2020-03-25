<?php
class orderDAO extends Model
{
    function addOrder($db,$table, $dt){
      return $db->insert($table,$dt);
    }
   
}
?>