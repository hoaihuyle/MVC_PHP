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
     * List all product by where
     */
    function prodCateWhere($db, $table, $where){

        $product = new ProductDAO();
        $products =  $product->prodCateWhere($db, $table, $where); 
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

    function getCate($db,$table, $id){
        $product = new ProductDAO();
        return $product->getCate($db,$table, $id);
    }
    /**
     * Lists all product
     */
    function listsProduct($db, $table, $col, $id){
        $product = new ProductDAO();
        return $product->listsProduct($db, $table, $col, $id);
    }
    function listProductViews($db, $table,$column, $limit){
        $product = new ProductDAO();
        return $product->listProductViews($db, $table, $column, $limit);
    }


     /** 
     * List category by ID 
     * @id_cate 
     */
    function fetchByCateID($db, $id){
        $category = new CategoryDAO();
        $categories =  $category->fetchByCateID($db, 'id_cate', $id); 

        return $categories;
    }
    /**
     * List product in each page
     * parameter: @db, @table, @col: column where, @id: value where, @page: number page, @total: total of page, @pagi: 
     */
    function listsProductPagi($db, $table, $col, $id, $page, $total, $pagi)
    {
        $product = new ProductDAO();
        $sql = "SELECT * FROM {$table} as tb WHERE $col = $id";
        return $product->listsProductPagi($db, $sql, $page, $total, $pagi);
    }
    /** 
     * Seach > nhi?u di?u ki?n
     */
    function  fetchsql($db,$cate_id,$comp_id,$str3,$str4){
         $product = new ProductDAO();
         $products =  $product-> fetchsql($db,$cate_id,$comp_id,$str3,$str4);
         return $products;
    } 

    function listProdiscount($db, $table, $where){
        $product = new ProductDAO();
        $products =  $product->listProdiscount($db,$table, $where);
        return $products;
    }
    public function lastID($db){
        $product = new ProductDAO();
        $products =  $product->lastID($db);
        return $products;
    } 
    // setting product 
    public function createSett_Product($db, $data){
        $product = new ProductDAO();
        $products =  $product->insertsett_product($db, $data); 
        return $products;
    }
     function listsett_product($db){

        $product = new ProductDAO();
        $products =  $product->allsett_product($db); 
        return $products;
    }
    function findSett_Product($db,$id){
        $product = new ProductDAO();
        $products =  $product->findSett_Product($db,$id); 
        return $products;
    }
    function deleteSet_Product($db,$id){
        $product = new ProductDAO();
        $products =  $product->deleteSet_Product($db,$id); 
        return $products;
    }
}