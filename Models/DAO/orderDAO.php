<?php
class orderDAO extends Model
{
    function addOrder($db,$table, $dt){
      return $db->insert($table,$dt);
    }
    function getIdOrder($db,$table, $column){
      return $db->fetchMaxId($table, $column);  
    }
    function listOrderAccount($db, $table1, $col1, $table2, $col2){
      $sql="SELECT *, SUM(realPrice*quality) as total FROM ".$table1." JOIN ".$table2." ON ".$col1." = ".$col2." WHERE ".$col1." is not null GROUP BY id_orde";
      return $db->fetchsql($sql); 
    }
    

    function listOrderProduct($db, $table1,  $table2, $col1, $col2, $id){

      return $db->fetchAllTb1JoinWhere($table1, $table2, $col1, $col2, $id); 
    }

    function fetchAll($db){
      return $db->fetchAll("orders"); 
    }
}
?>