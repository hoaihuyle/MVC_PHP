<?php 

$db = new Database();
require(ROOT . 'Models/DAO/categoryDAO.php');
class CategoryService extends Service{

    
    /**
     * List all category
     */
    function listCategory($db){

        $category = new CategoryDAO();
        $categories =  $category->fetchAll($db); 
        return $categories;
    }

    /** 
     * List category by ID 
     * @id_cate 
     */
    function findCategory($db, $id){
        $category = new CategoryDAO();
        $categories =  $category->fetchByCol($db, 'id_cate', $id); 

        return $categories;
    }

     /** 
     * List category by id
     * @menu_id
     */
    function findCategoryMenu($db, $id){
        $category = new CategoryDAO();
        $categories =  $category->fetchByCol($db, 'menu_id', $id); 

        return $categories;
    }

     /** 
     * Update category by ID
     */
    function editCategory($db, $id,$data){
        $category = new CategoryDAO();
        $categories =  $category->update($db, $id, $data ); 
 
        return $categories;
    }

    /** 
     * Create category
     */
    function createCategory($db, $data){
        $category = new CategoryDAO();
        $categories =  $category->insert($db, $data ); 

        return $categories;
    }

    /** 
     * Delete category by ID
     */
    function deleteCategory($db, $id){
        $category = new CategoryDAO();
        $categories =  $category->delete($db, $id); 

        return $categories;
    }
}

?>