<?php
class registerDAO extends Model
{
   

    public function create($db, $table, $request){ 
        return $db->insert($table,$request);
    }

    public function checkPhone($db, $table, $request){
      return $db->fetchOne($table,"phone ='".$request."' ");
  }

    
 
}
?>