<?php
	class ProjectManager extends BaseManager
	{
		public function __construct($datasource)
		{
			parent::__construct("projects","Project",$datasource);	
		}
		
		public function getByMail($mail)
		{
			$req = $this->_bdd->prepare("SELECT * FROM user WHERE mail=?");
			$req->execute(array($mail));
			$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"User");
		}
    }
