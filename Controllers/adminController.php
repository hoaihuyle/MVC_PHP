<?php
class AdminController extends Controller
{
    function __construct()
    {
        parent::__construct();
        if( $_SESSION['role'] != 0 || !isset($_SESSION['role']) )
            header('location: /');
    }

    function index()
    {
        $this->render("admin/index");
    }
}
?>