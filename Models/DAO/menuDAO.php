<?php
class MenuDAO extends Model
{
    
    public function fetchAll($db){
        return $db->fetchAll('menu');
    }

    public function fetchID($db,$id){
        return $db->fetchID('menu',$id);
    }

    function fetchByColOther($db){
        try {
            //code...
            return $db->fetchByColOther('menu','status','1'); 
        } catch (\Throwable $th) {
            //throw $th;
            return $err = 'Try late!!';
        }
        
    }
 
}
?>