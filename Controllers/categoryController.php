<?php
class CategoryController extends Controller
{
    var $service ="Services/categoryService.php";
    var $red="admin/categories/";
    var $redIndex="category/index";

    function index()
    {
        require(ROOT . $this->service);
        $categories = new CategoryService();

        $d['categoryInfos'] = $categories->listCategory($db);  
        $this->set($d);

        $this->render($this->red.__FUNCTION__);
    }
 
    function create()
    {
        if (!empty($_POST))
        {
            require(ROOT . $this->service);
            $categories = new CategoryService();

            if ($categories->createCategory($db, $_POST))
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
        $categories = new CategoryService();
        
        $d['categoryInfo'] = $categories->findCategory($db, $id); 

        if (!empty($_POST))
        {

            if ($categories->editCategory($db, $id, $_POST))
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
        $categories = new CategoryService();
        if ($categories->deleteCategory($db, $id))
        {
            header("Location: " . WEBROOT . $this->redIndex);
        }
        header("Location: " . WEBROOT . $this->redIndex);
    }  
}
?>