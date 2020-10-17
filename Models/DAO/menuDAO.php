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

    public function update($db, $id, $data){

        return $db->update('menu', $data, array('id_menu'=>$id));
    }

    public function insert($db, $data){

        return $db->insert('menu', $data ); 
    }

    public function delete($db, $id){

        return $db->delete('menu', $id, 'id_menu'); 
    }

    /**
     * List menu by flag = 0
     */
    function listMenuWhere($db){
        return $db->fetchWhere('menu', "'flag' = '0'");
    }
 
}
?>