
<?php
session_start();
class AdminController extends BaseController
{
    public function admin()
    {
        if (isset($_SESSION['login']) && $_SESSION['login']=="Il0vedevweb"){
        $this->view("admin","Admin page");
        }
        else{
         echo "Did you try to trick me?";
        }	
    }
}