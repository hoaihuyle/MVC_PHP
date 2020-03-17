<?php
class ProductDAO extends Model
{
    
    public function fetchAll($db){
        return $db->fetchAll('products');
    }

    public function fetchByCol($db,$id){
        return $db->fetchByCol('products','id_prod',$id);
    }

    function fetchByColOther($db){
        try {
            //code...
            return $db->fetchByColOther('products','status','1'); 
        } catch (\Throwable $th) {
            //throw $th;
            return $err = 'Try late!!';
        }
         
    }

    public function update($db, $id, $data){

        return $db->update('products', $data, array('id_prod'=>$id));
    }

    public function insert($db, $data){

        return $db->insert('products', $data ); 
    }

    public function delete($db, $id){

        return $db->delete('products', $id, 'id_prod'); 
    }
 
    public function getCate($db, $table, $id){
        return $db->fetchWhere($table, $id);
    }
    public function listsProduct($db, $table, $col, $id){
        return $db->fetchByCol($table, $col, $id);
    }
    public function fetchByCateID($db, $col, $id){
        return $db->fetchByCol('categories', $col,$id);
    }
}
?>