<?php
class CategoryController extends Controller
{
    var $service ="Services/categoryService.php";
    var $serviceM ="Services/menuService.php";
    var $red="admin/categories/";
    var $redIndex="category/index";

    function __construct()
    {
        if( $_SESSION['role'] != 0 || !isset($_SESSION['role']) )
            header('location: /');
    }

    function index()
    {
        require(ROOT . $this->serviceM);
        $menu = new MenuService();

        require(ROOT . $this->service);
        $categories = new CategoryService();

        $d['categoryInfos'] = $categories->listCategory($db);  
        $d['menuInfos'] = $menu->listMenu($db);  

        $this->set($d);

        $this->render($this->red.__FUNCTION__);
    }
 
    function create()
    {
        require(ROOT . $this->serviceM);
        $menu = new MenuService();
        $d['menuInfos'] = $menu->listMenu($db); 

        if (!empty($_POST))
        {
            require(ROOT . $this->service);
            $categories = new CategoryService();
 
            if ($categories->createCategory($db, $_POST))
            {
                header("Location: " . WEBROOT . $this->redIndex);
            }
        }
        
        $this->set($d);
        $this->render($this->red.__FUNCTION__);
    }

    function sort()
    {
        $this->render($this->red.__FUNCTION__);
    }

    function edit($id)
    {
        require(ROOT . $this->serviceM);
        $menu = new MenuService();

        require(ROOT . $this->service);
        $category = new CategoryService();

        
        $d['category'] = $category->findCategory($db, $id); 
        $d['menuInfos'] = $menu->listMenu($db); 

        if (!empty($_POST))
        {
            // var_dump($_POST); die();
            if ($category->editCategory($db, $id, $_POST))
            {
                header("Location: " . WEBROOT . $this->redIndex);
            }else{
                $d['error'] = " <div class='message p-3 bg-danger text-white'> Cập nhập thông tin không thành công</div>";
                $this->set($d);
            }
        }
        
        $this->set($d);
        // $this->render('admin/form-validation');
        $this->render($this->red.__FUNCTION__);
    }

    function delete($id)
    {
        require(ROOT . $this->service);
        $categories = new CategoryService();
        if ($categories->deleteCategory($db, $id))
        {
            header("Location: " . WEBROOT . $this->redIndex);
        }
        header("Location: " . WEBROOT . $this->redIndex);
    }  
}
?>