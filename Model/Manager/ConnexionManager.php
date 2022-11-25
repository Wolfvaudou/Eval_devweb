<?php
	class connexionManager extends BaseManager
	{
		public function __construct($datasource)
		{
			parent::__construct("user","user",$datasource);	
		}
		
		public function Login($mail,$password)
		{
			$req = $this->_bdd->prepare("SELECT * FROM user WHERE email=? AND passwords=? ");
			$req->execute(array($mail,$password));  
			$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"User");
			if($req->fetch()){
				return 1;
			}
			else{
				return 0;
			}
		}
	}	