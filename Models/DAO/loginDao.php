<?php
class loginDAO extends Model
{
    // Lây thông tin người dùng đăng nhập
    function fetchOneVal($db, $request){
        try{
            return $db->fetchOne('users',"name='". $request['name']."'AND password ='".$request['password']."'");	
        }catch(\Throwable $e){
            return $err = 'Try Again !';
        }
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