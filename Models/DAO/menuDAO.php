<?php
class MenuDAO extends Model
{
    
    public function fetchAll($db){
        return $db->fetchAll('menu');
    }

    public function fetchByCol($db,$id){
        return $db->fetchByCol('menu','id_menu',$id);
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

    public function updateColById($db, $id, $data){
        return $db->updateColById('menu', $id, $data);
    }
 
}
?>