<?php
class ProductDAO extends Model
{
    
    public function fetchAll($db){
        return $db->fetchAll('products');
    }

    public function fetchByCol($db,$id){
        return $db->fetchByCol('products','id_prod',$id);
    }

    public function prodCateWhere($db, $table, $where){
        return $db->fetchArr($table, $where);
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
    public function  fetchsql($db,$cate_id,$comp_id,$str3,$str4){
         
         $sql="SELECT * FROM products WHERE ";    
        if($cate_id==0&&$comp_id!=0&&$str3==""&&$str4==""){
            $sql.="comp_id='".$comp_id."'";
            return $db->fetchsql($sql);
        } 
         if($cate_id==0&&$comp_id!=0&&$str3!=""&&$str4==""){
            $sql.="comp_id='".$comp_id."'".' AND ';
            $str5=explode("-", $str3);
            $str3=$str5[2]."/".$str5[1]."/".$str5[0];
            $sql.="created>='".$str3."'";
            return $db->fetchsql($sql);
        } 
        if($cate_id==0&&$comp_id!=0&&$str3==""&&$str4!=""){
            $sql.="comp_id='".$comp_id."'".' AND ';
            $str6=explode("-", $str4);
            $str4=$str6[2]."/".$str6[1]."/".$str6[0];
            $sql.="created<='".$str4."'";
            return $db->fetchsql($sql);
        } 
        if($cate_id==0&&$comp_id!=0&&$str3!=""&&$str4!=""){
            $sql.="comp_id='".$comp_id."'".' AND ';
            $str6=explode("-", $str3);
            $str4=$str6[2]."/".$str6[1]."/".$str6[0];
            $str5=explode("-", $str3);
            $str3=$str5[2]."/".$str5[1]."/".$str5[0];
            $sql.="created<='".$str4."'".' AND ';
            $sql.="created>='".$str3."'";
            return $db->fetchsql($sql);
        } 
        if($comp_id==0&&$cate_id!=0&&$str3==""&&$str4==""){
            $sql.="cate_id='".$cate_id."'";
            
            return $db->fetchsql($sql);
        }
        if($comp_id==0&&$cate_id!=0&&$str3==""&&$str4!=""){
            $sql.="cate_id='".$cate_id."'".' AND ';
            $str6=explode("-", $str3);
            $str4=$str6[2]."/".$str6[1]."/".$str6[0];
            $sql.="created<='".$str4."'";
            return $db->fetchsql($sql);
        }
        if($comp_id==0&&$cate_id!=0&&$str3!=""&&$str4==""){
            $sql.="cate_id='".$cate_id."'".' AND ';
            $str5=explode("-", $str3);
            $str3=$str5[2]."/".$str5[1]."/".$str5[0];
            $sql.="created>='".$str3."'";
            return $db->fetchsql($sql);
        }
        if($comp_id==0&&$cate_id!=0&&$str3!=""&&$str4!=""){
            $sql.="cate_id='".$cate_id."'".' AND ';
            $str6=explode("-", $str4);
            $str4=$str6[2]."/".$str6[1]."/".$str6[0];
            $str5=explode("-", $str3);
            $str3=$str5[2]."/".$str5[1]."/".$str5[0];
            $sql.="created>='".$str3."'".' AND ';
            $sql.="created<='".$str4."'";
          
            return $db->fetchsql($sql);
        }
        if($comp_id!=0&&$cate_id!=0&&$str3==""&&$str4==""){
            $sql.="cate_id='".$cate_id."'".' AND '."comp_id='".$comp_id."'";
             return $db->fetchsql($sql);
        }
         if($comp_id!=0&&$cate_id!=0&&$str3!=""&&$str4==""){
            $sql.="cate_id='".$cate_id."'".' AND '."comp_id='".$comp_id."'".' AND ';
            $str5=explode("-", $str3);
            $str3=$str5[2]."/".$str5[1]."/".$str5[0];
            $sql.="created>='".$str3."'";
             return $db->fetchsql($sql);
        }
        if($comp_id!=0&&$cate_id!=0&&$str3==""&&$str4!=""){
            $sql.="cate_id='".$cate_id."'".' AND '."comp_id='".$comp_id."'".' AND ';
            $str6=explode("-", $str4);
            $str3=$str6[2]."/".$str6[1]."/".$str6[0];
            $sql.="created<='".$str3."'";
             return $db->fetchsql($sql);
        }
         if($comp_id!=0&&$cate_id!=0&&$str3!=""&&$str4!=""){
            $sql.="cate_id='".$cate_id."'".' AND '."comp_id='".$comp_id."'".' AND ';
            $str6=explode("-", $str3);
            $str4=$str6[2]."/".$str6[1]."/".$str6[0];
            $str5=explode("-", $str3);
            $str3=$str5[2]."/".$str5[1]."/".$str5[0];
            $sql.="created<='".$str4."'".' AND ';
            $sql.="created>='".$str3."'";
             return $db->fetchsql($sql);
        }
        if($comp_id==0&&$cate_id==0&&$str3==""&&$str4=="")
        {
            $sql.='1';
            return $db->fetchsql($sql);
        }
        if($comp_id==0&&$cate_id==0&&$str3==""&&$str4!="")
        {   $str5=explode("-", $str4);
            $str4=$str5[2]."/".$str5[1]."/".$str5[0];
            $sql.="created<='".$str4."'";
            return $db->fetchsql($sql);
        }   
        if($comp_id==0&&$cate_id==0&&$str3!=""&&$str4==""){
            $str5=explode("-", $str3);
            $str3=$str5[2]."/".$str5[1]."/".$str5[0];
            $sql.="created>='".$str3."'";
            return $db->fetchsql($sql);
        }
        if($comp_id==0&&$cate_id==0&&$str3!=""&&$str4!=""){
            $str5=explode("-", $str3);
            $str3=$str5[2]."/".$str5[1]."/".$str5[0];
            $str6=explode("-", $str4);
            $str4=$str5[2]."/".$str6[1]."/".$str6[0];
            $sql.="created>='".$str3."'".' AND  ';
            $sql.="created<='".$str4."'";
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

    public function fetchByCateID($db, $col, $id){
        return $db->fetchByCol('categories', $col,$id);
    }
    public function listsProductPagi($db, $sql, $page, $total, $pagi){
        return $db->fetchJoneDetail($sql, $page, $total, $pagi);
    }
 
    public function listProductViews($db, $table, $column , $limit){
        return $db->fetchMax($table, $column , $limit);
    }
    public function listProdiscount($db, $table, $where){
        return $db->fetchArr($table, $where);
    }
    
    // table setting_product
   public function insertsett_product($db, $data){

        return $db->insert('setting_product', $data ); 
    }
    public function allsett_product($db){
        return $db->fetchAll('setting_product');
    }
    public function findSett_Product($db,$id){
        $sql="SELECT * FROM  setting_product WHERE prod_id='".$id."'";
        return $db->fetchsql($sql);
    }
    public function deleteSet_Product($db,$id){
      $sql="prod_id='".$id."'";
    return $db->deletesql('setting_product', $sql); 

    }

}
?>