<?php
class SettingController extends Controller
{
    var $service ="Services/settingService.php";
    var $red="admin/settings/";
    var $redIndex="setting/index";


    function __construct()
    {
        parent::__construct();
        if( $_SESSION['role'] != 0 || !isset($_SESSION['role']) )
            header('location: /');
    }

    function index()
    {
        require(ROOT . $this->service);
        $news = new SettingService();

        $d['settingInfos'] = $news->listSetting($db);  
        $this->set($d);

        $this->render($this->red.__FUNCTION__);
    }
    // http://domain/cotroler/edit/12
    function create()
    { 
        require(ROOT . $this->service);
        $news = new SettingService();
        $d['settingInfos']=$news->listSetting1($db); 
        $this->set($d);
        if (!empty($_POST))
        {    
            if($_POST['menu_id']=="add_new"){
                $data=array_values($_POST);
                $y=1;
                for($x=3;$x<count($data);$x++)
                {
                  $data1=array(
                    "key_sett"=>$_POST['key_sett'],
                    "key_display"=>$data[$x],
                    "key_id"=> $y,
                    "name_display"=>$_POST['name_display']
                   );
                 $y++;
                 $news->createSetting($db, $data1);
                }
                 header('location: /setting/index');
                
            }
            else { 
               $a=$news->findSettingkey_sett($db,$_POST['menu_id']);
               $b= count($a)+1;
               $data=array_values($_POST);
               for($x=3;$x<count($data);$x++)
                {
                  $data1=array(
                    "key_sett"=>$_POST['menu_id'],
                    "key_display"=>$data[$x],
                    "key_id"=> $b,
                    "name_display"=>$a[0]['name_display']
                   );
                 $b++;
                 $news->createSetting($db, $data1);
                }
                 header('location: /setting/index');
            }
         }

        $this->render($this->red.__FUNCTION__);
    }

    function sort()
    {
        $this->render($this->red.__FUNCTION__);
    }

    /**
     * Redirect edit page
     * If have a POST
     * - Edit information in table Setting
     * - Loop: Update setting_id in table Category
     */
    function edit($id)
    {
        require(ROOT . $this->service);
        $setting = new SettingService();

        $d['settingInfo'] = $setting->findSetting($db, $id); 

        
        if (!empty($_POST))
        {
            // var_dump($_POST);die();
            if ($setting->editSetting($db, $id, $_POST))
            {
                header("Location: " . WEBROOT . $this->redIndex);
            }else{
                $d['error'] = " <div class='message p-3 bg-danger text-white'> Cập nhập thông tin không thành công</div>";
                $this->set($d);
            }
            // if(!isset($_POST["example3_length"])){
               
            // }else{
                // unset($_POST['example3_length']);
                // foreach($_POST as $key => $p){
                //     $category-> editCategory($db, $p, array('setting_id' => $id));
                //     // $data[] = array('id_cate' => $p, 'setting_id'=> $id);
                // }
                // if ()
                // {
                //     $d['error'] = "Cập nhập thông tin thành công";
                //     $this->set($d);
                // }else{
                //     $d['error'] = "Cập nhập thông tin không thành công";
                //     $this->set($d);
                // }
            // }
           
        }
        
        $this->set($d);
        // $this->render('admin/form-validation');
        $this->render($this->red.__FUNCTION__);
    }  

    function delete($id)
    {
        require(ROOT . $this->service);
        $news = new SettingService();
        if ($news->deleteSetting($db, $id))
        {
            header("Location: " . WEBROOT . $this->redIndex);
        }
        header("Location: " . WEBROOT . $this->redIndex);
    }
    function logout(){
        session_destroy();
        header('location: /login');
    }
}
?>