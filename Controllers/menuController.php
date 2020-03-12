<?php
class MenuController extends Controller
{
    var $service ="Services/menuService.php";
    var $index="admin/menu/";

    function index()
    {
        require(ROOT . $this->service);
        $news = new MenuService();

        $d['menuInfos'] = $news->listMenu($db);   
        $this->set($d);

        $this->render($this->index.__FUNCTION__);
    }
    // http://domain/cotroler/edit/12
    function create()
    {
        $this->render($this->index.__FUNCTION__);
    }

    function edit($id)
    {
        require(ROOT . $this->service);
        $news = new MenuService();
        
        $d['menuInfo'] = $news->findMenu($db, $id); 
        
        if (!empty($_POST["name_menu"]))
        {
            var_dump($_POST);
            die();
            // if ($task->edit($id, $_POST["title"], $_POST["description"]))
            // {
            //     header("Location: " . WEBROOT . "tasks/index");
            // }
        }
        
        $this->set($d);
        // $this->render('admin/form-validation');
        $this->render($this->index.__FUNCTION__);
    }  

}
?>