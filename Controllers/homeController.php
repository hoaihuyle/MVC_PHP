<?php
class HomeController extends Controller
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

        $d['menuInfos'] = $news->listMenuWhere($db);
        $d['categoryInfos'] = $category->listCategory($db);
        $this->set($d);

        $this->render("index");
    }
}
?>