
<?php

    class connexionController extends BaseController
    {
		public function connexion()
		{
			$this->view("connexion","Page de connexion");	
		}
		public function Authenticate()
		{
			var_dump($_POST["login"]);
		}
	}