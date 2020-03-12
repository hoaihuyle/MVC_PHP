<?php
class CategoryDAO extends Model
{
    
    public function fetchAll($db){
        return $db->fetchAll('categories');
    }

    public function fetchByCol($db,$id){
        return $db->fetchByCol('categories','id_cate',$id);
    }

    function fetchByColOther($db){
        try {
            //code...
            return $db->fetchByColOther('categories','status','1'); 
        } catch (\Throwable $th) {
            //throw $th;
            return $err = 'Try late!!';
        }
         
    }

    public function update($db, $id, $data){

        return $db->update('categories', $data, array('id_cate'=>$id));
    }

    public function insert($db, $data){

        return $db->insert('categories', $data ); 
    }

    public function delete($db, $id){

        return $db->delete('categories', $id, 'id_cate'); 
    }
 
}
?>