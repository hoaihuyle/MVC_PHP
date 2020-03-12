<?php
class AccountController extends Controller
{
    var $service ="Services/accountService.php";
    var $red="admin/accounts/";
    var $redIndex="account/index";

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
}
?>