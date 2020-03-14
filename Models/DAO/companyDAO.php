<?php
class CompanyDAO extends Model
{
    
    public function fetchAll($db){
        return $db->fetchAll('companies');
    }

    public function fetchByCol($db,$id){
        return $db->fetchByCol('companies','id_comp',$id);
    }

    function fetchByColOther($db){
        try {
            //code...
            return $db->fetchByColOther('companies','status','1'); 
        } catch (\Throwable $th) {
            //throw $th;
            return $err = 'Try late!!';
        } 
         
    }

    public function update($db, $id, $data){

        return $db->update('companies', $data, array('id_comp'=>$id));
    }

    public function insert($db, $data){

        return $db->insert('companies', $data ); 
    }

    public function delete($db, $id){

        return $db->delete('companies', $id, 'id_comp'); 
    }
 
}
?>