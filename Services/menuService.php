<?php 

require(ROOT . 'Models/DAO/menuDAO.php');

class MenuService extends Service
{
    /**
     * List all child menu
     * return array[][]
     */
    function listMenuByParent($db)
    {
        $menu = new MenuDAO();

        $dataPa = $dataChil = $data =[];
        $menus = $menu->fetchByColOther($db); 
        $i=0; 

        foreach ($menus as $menu) {
            $menu['parent'] == 0 ? $dataPa[] = $menu : $dataChil[] = $menu;
            $i++;
        }

        $i=0;
        
        foreach ($dataPa as $pa) {
            $data[$i] = $pa;
            $arr=[];
            
            foreach ($dataChil as $child) {
                $pa['id'] == $child['parent'] ? $arr[] = $child : null; 
            }
            
            $data[$i]['child'] = $arr;
            $i++;
        }

        // foreach($data as $x){
        //     // if($x['child']!){
        //     echo'<pre>';
        //     var_dump($x['child']);
        //     echo'</pre>';
        //     if($x['child']==null) echo 'null';
        //     // }
        // }
        // die();
        return $data;
    }  
    
    /**
     * List all menu
     */
    function listMenu($db)
    {
        $menu = new MenuDAO();
        $menus =  $menu->fetchAll($db); 

        return $menus;
    }

    /**
     * List menu by flag = 0
     */
    function listMenuWhere($db)
    {
        $menu = new MenuDAO();
        $menus =  $menu->fetchAll($db);

        return $menus;
    }

    /** 
     * List menu by ID
     */
    function findMenu($db, $id)
    {
        $menu = new MenuDAO();
        $menus =  $menu->fetchByCol($db, $id); 

        return $menus;
    }

     /** 
     * Update menu by ID
     */
    function editMenu($db, $id,$data)
    {
        $menu = new MenuDAO();
        $menus =  $menu->update($db, $id, $data ); 

        return $menus;
    }

    /** 
     * Create menu
     */
    function createMenu($db, $data)
    {
        $menu = new MenuDAO();
        $menus =  $menu->insert($db, $data ); 

        return $menus;
    }

    /** 
     * Delete menu by ID
     */
    function deleteMenu($db, $id)
    {
        $menu = new MenuDAO();
        $menus =  $menu->delete($db, $id); 

        return $menus;
    }
}
?>