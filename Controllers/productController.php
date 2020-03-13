<?php
class ProductController extends Controller
{
    var $service ="Services/productService.php";
    var $red="admin/products/";
    var $redIndex="product/index";

    function index()
    {
        require(ROOT . $this->service);
        $product = new ProductService();

        $d['productInfos'] = $product->listProduct($db);  
        $this->set($d);

        $this->render($this->red.__FUNCTION__);
    }
    // http://domain/cotroler/edit/12
    function create()
    {

        if (!empty($_POST)) 
        {

            require(ROOT . $this->service);
            $product = new ProductService();

            if ($product->createProduct($db, $_POST))
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
        $product = new ProductService();
        
        $d['productInfo'] = $product->findProduct($db, $id); 

        if (!empty($_POST))
        {

            if ($product->editProduct($db, $id, $_POST))
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
        $product = new ProductService();
        if ($product->deleteProduct($db, $id))
        {
            header("Location: " . WEBROOT . $this->redIndex);
        }
        header("Location: " . WEBROOT . $this->redIndex);
    }  
}
?>