<?php 
$db = new Database();
require(ROOT . 'Models/DAO/settingDAO.php');
class SettingService extends Service{

    /**
     * List all child setting
     * return array[][]
     */
    function listSettingByParent($db){
       
        $setting = new SettingDAO();
       
        $dataPa=[];
        $dataChil=[];
        
        $data[]=[];
        $settings =  $setting->fetchByColOther($db); 
        $i=0; 

        foreach ($settings as $setting){
            if($setting['parent']==0){
               $dataPa[] = $setting;
            }
            else{
                $dataChil[] = $setting;
            }          
            $i++;
        }

        $i=0;
        
        foreach($dataPa as $pa){
            $data[$i] = $pa;
            $arr=[];
            foreach($dataChil as $child){
                if($pa['id']==$child['parent'])
                $arr[] = $child; 
            }
            $data[$i]['child']=$arr;
            $i++;
        }

        // foreach($data as $x){
        //     // if($x['child']!){
        //     echo'<pre>';
        //     var_dump($x['child']);
        //     echo'</pre>';
        //     if($x['child']==null) echo 'null';
        //     // }
        // }
        // die();
        return $data;
    }  
    
    /**
     * List all setting
     */
    function listSetting($db){

        $setting = new SettingDAO();
        $settings =  $setting->fetchAll($db); 
        return $settings;
    }

    /**
     * List setting by flag = 0
     */
    function listSettingWhere($db){
        $setting = new SettingDAO();
        $settings =  $setting->fetchAll($db);
        return $settings;
    }

    /** 
     * List setting by ID
     */
    function findSetting($db, $id){
        $setting = new SettingDAO();
        $settings =  $setting->fetchByCol($db, $id); 

        return $settings;
    }

     /** 
     * Update setting by ID
     */
    function editSetting($db, $id,$data){
        $setting = new SettingDAO();
        $settings =  $setting->update($db, $id, $data ); 

        return $settings;
    }

    /** 
     * Create setting
     */
    function createSetting($db, $data){
        $setting = new SettingDAO();
        $settings =  $setting->insert($db, $data ); 

        return $settings;
    }

    /** 
     * Delete setting by ID
     */
    function deleteSetting($db, $id){
        $setting = new SettingDAO();
        $settings =  $setting->delete($db, $id); 

        return $settings;
    }

    function selectWhere($db, $where){
        $setting = new SettingDAO();
        $settings =  $setting->selectWhere($db, $where); 

        return $settings;
    }
}

?>