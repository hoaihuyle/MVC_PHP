<?php
class CompanyController extends Controller
{
    var $service ="Services/companyService.php";
    var $red="admin/companies/";
    var $redIndex="company/index";

    function __construct()
    {
        parent::__construct();
        if( $_SESSION['role'] != 0 || !isset($_SESSION['role']) )
            header('location: /');
    }


    function index()
    {
        require(ROOT . $this->service);
        $news = new CompanyService();

        $d['companyInfos'] = $news->listCompany($db);  
        $this->set($d);

        $this->render($this->red.__FUNCTION__);
    }
    // http://domain/cotroler/edit/12
    function create()
    {
        if (!empty($_POST))
        {
            require(ROOT . $this->service);
            $news = new CompanyService();

            if ($news->createCompany($db, $_POST))
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
        $news = new CompanyService();
        
        $d['companyInfo'] = $news->findCompany($db, $id); 

        if (!empty($_POST))
        {

            if ($news->editCompany($db, $id, $_POST))
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
        $news = new CompanyService();
        if ($news->deleteCompany($db, $id))
        {
            header("Location: " . WEBROOT . $this->redIndex);
        }
        header("Location: " . WEBROOT . $this->redIndex);
    }  
}
?>