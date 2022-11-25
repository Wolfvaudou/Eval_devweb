<?php
switch($result){
				case 0:?>
					<h3>"Accès denied"</h3>
<?php
                     break;
				case 1:?>
					<h3>"Acces granted"<h3>
					<a href="/admin"><input type="button" value="accéder à espace admin"></a>
<?php
                     break;
				default:?>
					<h1>"Stop breaking my work,please"<h1>	
<?php
                    break;
				
			}

?>