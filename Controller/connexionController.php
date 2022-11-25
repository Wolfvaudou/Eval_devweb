
<?php

    class connexionController extends BaseController
    {
		public function connexion()
		{
			$this->view("connexion","connection page");	
		}
		public function Authenticate()
		{
			$results=$this->connexionManager->Login($_POST["login1"],$_POST["mypassword"]);
			$this->addParam("result",$results);
			$this->view("connexionresp","connection page");	
			

		}
	}