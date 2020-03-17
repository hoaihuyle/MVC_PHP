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
    public function  fetchsql($db,$cate_id,$comp_id){
         
         $sql="SELECT * FROM products WHERE ";    
        if($cate_id==0&&$comp_id!=0){
            $sql.="comp_id='".$comp_id."'";
            return $db->fetchsql($sql);
        } 
        if($comp_id==0&&$cate_id!=0){
            $sql.="cate_id='".$cate_id."'";
            return $db->fetchsql($sql);
        }
        if($comp_id!=0&&$cate_id!=0){
            $sql.="cate_id='".$cate_id."'".' AND '."comp_id='".$comp_id."'";
             return $db->fetchsql($sql);
        }
        else{
            $sql.='1';
            return $db->fetchsql($sql);
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
}
?>