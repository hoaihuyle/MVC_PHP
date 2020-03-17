<?php 
$db = new Database();
require(ROOT . 'Models/DAO/productDAO.php');
class ProductService extends Service{
 
    
    /**
     * List all product
     */
    function listProduct($db){

        $product = new ProductDAO();
        $products =  $product->fetchAll($db); 
        return $products;
    }

    /** 
     * List product by ID
     */
    function findProduct($db, $id){
        $product = new ProductDAO();
        $products =  $product->fetchByCol($db, $id); 

        return $products;
    }

     /** 
     * Update product by ID
     */
    function editProduct($db, $id,$data){
        $product = new ProductDAO();
        $products =  $product->update($db, $id, $data ); 

        return $products;
    }

    /** 
     * Create product
     */
    function createProduct($db, $data){
        $product = new ProductDAO();
        $products =  $product->insert($db, $data ); 

        return $products;
    }

    /** 
     * Delete product by ID
     */
    function deleteProduct($db, $id){
        $product = new ProductDAO();
        $products =  $product->delete($db, $id); 

        return $products;
    }
    /** 
     * Seach > nhiều điều kiện
     */
    public function  fetchsql($db,$cate_id,$comp_id){
         $product = new ProductDAO();
         $products =  $product-> fetchsql($db,$cate_id,$comp_id);
         return $products;
    } 
}

?>