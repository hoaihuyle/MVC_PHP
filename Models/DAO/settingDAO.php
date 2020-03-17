<?php
class SettingDAO extends Model
{
    
    public function fetchAll($db){
        return $db->fetchAll('setting');
    }

    public function fetchByCol($db,$id){
        return $db->fetchByCol('setting','id_setting',$id);
    }

    function fetchByColOther($db){
        try {
            //code...
            return $db->fetchByColOther('setting','status','1'); 
        } catch (\Throwable $th) {
            //throw $th;
            return $err = 'Try late!!';
        }
         
    }

    public function update($db, $id, $data){

        return $db->update('setting', $data, array('id_setting'=>$id));
    }

    public function insert($db, $data){

        return $db->insert('setting', $data ); 
    }

    public function delete($db, $id){

        return $db->delete('setting', $id, 'id_setting'); 
    }

    /**
     * List setting by flag = 0
     */
    function listSettingWhere($db){
        return $db->fetchWhere('setting', "'flag' = '0'");
    }
 
}
?>