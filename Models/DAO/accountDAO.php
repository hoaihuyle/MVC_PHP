<?php
class AccountDAO extends Model
{
    
    public function fetchAll($db){
        return $db->fetchAll('accounts');
    }

    public function fetchByCol($db,$id){
        return $db->fetchByCol('accounts','id_acco',$id);
    }

    function fetchByColOther($db){
        try {
            //code...
            return $db->fetchByColOther('accounts','status','1'); 
        } catch (\Throwable $th) {
            //throw $th;
            return $err = 'Try late!!';
        }
         
    }

    public function update($db, $id, $data){

        return $db->update('accounts', $data, array('id_acco'=>$id));
    }

    public function insert($db, $data){

        return $db->insert('accounts', $data ); 
    }

    public function delete($db, $id){

        return $db->delete('accounts', $id, 'id_acco'); 
    }
    
    public function checkUser($db, $id){
        return $db->fetchWhere('accounts', "id_acco = ".$id);
    }

    public function checkEmail($db, $table, $request){
        return $db->fetchOne($table, "email ='".$request."' ");
      }

    public function CountAcount($db){
        return $db->countTable("accounts");
    }
}
?>