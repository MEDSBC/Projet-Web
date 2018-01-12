<?php  
include 'ConnexionBD.php' ;
 class users{

 	private static $email ; 
 	private static $nom ; 
 	private static $prenom ;

 		public function __construct() {
 			
 		}

		public function inserer ($email,$nom,$prenom,$id)
 		{
 			// $sql = "insert into table (adresse) values ('".$row."')";
 		$_bdd = ConnexionBD::getInstance();
 		$requete = "insert into user values('".$email."','".$nom."','".$prenom."',".$id.")";
 		
 			$req = $_bdd->prepare($requete);
			$req->execute();	
 		}

 		public function get_users ()
 		{
 			// $sql = "insert into table (adresse) values ('".$row."')";
 			$_bdd = ConnexionBD::getInstance();
 			$req = $_bdd->prepare("select * from user");
			$res = $req->execute();	
			return  $req->fetchAll(PDO::FETCH_NUM);
 		}
 	}

 	


 ?>