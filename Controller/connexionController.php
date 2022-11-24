
<?php

    class connexionController extends BaseController
    {
		public function connexion()
		{
			$this->view("connexion","Page de connexion");	
		}
		public function Authenticate()
		{
			$this->connexionManager->Login($_POST["login1"],$_POST["mypassword"]);
			

		}
	}