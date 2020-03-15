<?php
class AccountController extends Controller 
{
    var $service ="Services/accountService.php";
    var $red="admin/accounts/";
    var $redIndex="account/index";
    var $accUser = 'myAccount';
    var $editUser = 'editAccounts';
     
    function index()
    {
        require(ROOT . $this->service);
        $accounts = new AccountService();

        $d['accountInfos'] = $accounts->listAccount($db);  
        $this->set($d);

        $this->render($this->red.__FUNCTION__);
    }
 
    function create()
    {
        if (!empty($_POST))
        {
            require(ROOT . $this->service);
            $accounts = new AccountService();

            if ($accounts->createAccount($db, $_POST))
            {
                header("Location: " . WEBROOT . $this->redIndex);
            }
        }

        $this->render($this->red.__FUNCTION__);
    }

    function sort()
    {
        $this->render($this->red.__FUNCTION__);
    }

    function edit($id)
    {
        require(ROOT . $this->service);
        $accounts = new AccountService();
        
        $d['accountInfo'] = $accounts->findAccount($db, $id); 

        if (!empty($_POST))
        {

            if ($accounts->editAccount($db, $id, $_POST))
            {
                header("Location: " . WEBROOT . $this->redIndex);
            }
        }
        
        $this->set($d);
        // $this->render('admin/form-validation');
        $this->render($this->red.__FUNCTION__);
    }

    function delete($id)
    {
        require(ROOT . $this->service);
        $accounts = new AccountService();
        if ($accounts->deleteAccount($db, $id))
        {
            header("Location: " . WEBROOT . $this->redIndex);
        }
        header("Location: " . WEBROOT . $this->redIndex);
    }  

    function detailUser(){
        require(ROOT . $this->service);
        $accounts = new AccountService(); 
        return $accounts->checkUser($db, $_SESSION['name_id']);  
    }

    function myUser(){ 
        $user['user'] = $this->detailUser();
        $this->set($user);
        $this->render($this->accUser);
    }

    function editMyUser(){
        $user['user'] = $this->detailUser();
        $this->set($user);
        $this->render($this->editUser);
    }

    function postEditUser(){ 
        require(ROOT . $this->service);
        $accounts = new AccountService(); 
        $userOld = $accounts->checkUser($db, $_SESSION['name_id']); 
        if($_POST){
            $userNew['name_acco'] = $_POST['name_acco']; 
            $userNew['address'] = $_POST['address'];
            if(!password_verify( $_POST['password'],$userOld['password']) && $_POST['password'] != null)
                $userNew['password'] = password_hash($_POST['password'],PASSWORD_BCRYPT);    
            // $this->helper->_debug($accounts); 
            $is_check = $accounts->checkEmail($db,'accounts',$_POST['email']);
            if($is_check != null && $_POST['email'] != $userOld['email']   ){
                $error['errEmail'] = 'Email đã tồn tại'; 
              }else
            $userNew['email'] = $_POST['email'];  
            if(!isset($error)){
                if ($accounts->editAccount($db, $_SESSION['name_id'], $userNew))
                {  
                    $user['user'] = $accounts->checkUser($db, $_SESSION['name_id']);
                    $user['nofitication'] = 'Sửa thành công';
                    $this->set($user);
                    $this->render($this->editUser);
                }
                else {  
                    $user['user'] = $accounts->checkUser($db, $_SESSION['name_id']);
                    $user['nofitication'] = 'Chỉnh sửa không thành công';
                    $this->set($user);
                    $this->render($this->editUser);
                }
            }
            else{
                $user['user'] = $accounts->checkUser($db, $_SESSION['name_id']);
                $this->set(array_merge($user, $error));
                $this->render($this->editUser);
            }
            
            
            
        } 
    }
}
?>