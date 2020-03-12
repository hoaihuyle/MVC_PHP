<?php
class MenuController extends Controller
{
    var $service ="Services/menuService.php";
    var $red="admin/menu/";
    var $redIndex="menu/index";

    function index()
    {
        require(ROOT . $this->service);
        $news = new MenuService();

        $d['menuInfos'] = $news->listMenu($db);  
        $this->set($d);

        $this->render($this->red.__FUNCTION__);
    }
 
    function create()
    {
        if (!empty($_POST))
        {
            require(ROOT . $this->service);
            $news = new MenuService();

            if ($news->createMenu($db, $_POST))
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
        $news = new MenuService();
        
        $d['menuInfo'] = $news->findMenu($db, $id); 

        if (!empty($_POST))
        {

            if ($news->editMenu($db, $id, $_POST))
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
        $news = new MenuService();
        if ($news->deleteMenu($db, $id))
        {
            header("Location: " . WEBROOT . $this->redIndex);
        }
        header("Location: " . WEBROOT . $this->redIndex);
    }  
}
?>