
<?php
session_start();

    class connexionController extends BaseController
    {
		public function connexion()
		{
			session_destroy();
			$this->view("connexion","connection page");	
		}
		public function Authenticate()
		{
			$results=$this->connexionManager->Login($_POST["login1"],$_POST["mypassword"]);
			$this->addParam("result",$results);
			if($results=1){
				$_SESSION['login']="Il0vedevweb";
			}
			$this->view("connexionresp","connection page");	
			

		}
		public function admin()
		{
			$this->view("admin","Admin page");	
		}
	}