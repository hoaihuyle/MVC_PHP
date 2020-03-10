<?php

    class Controller
    {
        var $vars = [];
        var $menu = "_menu";
        var $myUntils = "myUntils";
        var $default = "default";
        var $layout_header ="includes/_header";

        // function __construct(){
        //     // require(ROOT . 'Models/DAO/menuDAO.php');
        //     // $menu = new MenuDAO();
        //     require(ROOT . 'Services/menuService.php');
        //     $menu = new MenuService();
        //     $d['menu'] = $menu->listMenuByParent($db);  
        //     $this->set($d);
        // }

        /**
         * return array data in model and set value to variable $var
         *  */    
        function set($d)
        {
            $this->vars = array_merge($this->vars, $d);
        }

        /**
         * $filename -> name file In Views by del 'Controller' 
         * render HTML. Value saved in $vars will show to View
         * return html file $func, $menu, $layout(default)
         */
        function render($filename)
        {
            extract($this->vars);

            $ex='';
            $explode_filename = explode('/', $filename);
            if($explode_filename[0]=='admin'){
                $ex = 'admin/';
            }else{

                ob_start();
                require(ROOT . "Views/includes/" . $this->menu . '.php');
                $content_for_Menu = ob_get_clean();
            }

            ob_start();
            require(ROOT . "Views/" . $this->myUntils . '.php');
            $content_for_myUntils = ob_get_clean();

            ob_start();
            require(ROOT . "Views/" . $filename . '.php');
            $content_for_default = ob_get_clean();



            if ($this->default == false)
            {

                isset($content_for_myUntils)?$content_for_myUntils:''; 

                $content_for_default;

                isset($content_for_Menu)?$content_for_Menu:''; 
            }
            else
            {
                require(ROOT . "Views/" . $ex . $this->layout_header . '.php');
                require(ROOT . "Views/" . $ex . $this->default . '.php');
            }
        }

        private function secure_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        protected function secure_form($form)
        {
            foreach ($form as $key => $value)
            {
                $form[$key] = $this->secure_input($value);
            }
        }

    }
?>