<?php
class MenuController extends Controller
{
    var $service ="Services/menuService.php";
    var $serviceC ="Services/categoryService.php";
    var $red="admin/menu/";
    var $redIndex="menu/index";

    function index()
    {
        require(ROOT . $this->service);
        $news = new MenuService();

        require(ROOT . $this->serviceC);
        $category = new CategoryService();

        $d['categoryInfos'] = $category->listCategory($db); 
        $d['menuInfos'] = $news->listMenu($db);  
        $this->set($d);

        $this->render($this->red.__FUNCTION__);
    }
    // http://domain/cotroler/edit/12
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

    /**
     * Redirect edit page
     * If have a POST
     * - Edit information in table Menu
     * - Loop: Update menu_id in table Category
     */
    function edit($id)
    {
        require(ROOT . $this->service);
        $menu = new MenuService();

        require(ROOT . $this->serviceC);
        $category = new CategoryService();

        $d['categoryInfos'] = $category->findCategoryMenu($db, $id);  
        $d['menuInfo'] = $menu->findMenu($db, $id); 
        
        if (!empty($_POST))
        {
            // var_dump($_POST);die();
            if ($menu->editMenu($db, $id, $_POST))
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
                //     $category-> editCategory($db, $p, array('menu_id' => $id));
                //     // $data[] = array('id_cate' => $p, 'menu_id'=> $id);
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
        $news = new MenuService();
        if ($news->deleteMenu($db, $id))
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