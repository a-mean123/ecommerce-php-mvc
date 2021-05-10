<?php


require_once("./config/conf.php");

class Model {

    private static $pdo;

    public static function Init(){

        $host = Conf::getHostname();
        $dbname = Conf::getDatabase();
        $login = Conf::getLogin();
        $pass = Conf::getPassword();

        try {
            self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $login,$pass);

        } catch (PDOException $e) {
            die($e->getMessage());
        }


    }
	public static function getAll(){
	    $SQL="SELECT * FROM ".static::$table." ORDER BY id DESC";
		$rep = model::$pdo->query($SQL);
	    $rep->setFetchMode(PDO::FETCH_CLASS, 'model'.ucfirst(static::$table));
	    return $rep->fetchAll();
	}


	public static function getOld(){
	    $SQL="SELECT * FROM ".static::$table;
		$rep = model::$pdo->query($SQL);
	    $rep->setFetchMode(PDO::FETCH_CLASS, 'model'.ucfirst(static::$table));
	    return $rep->fetchAll();
	}

	public static function getBestPrice(){
	    $SQL="SELECT * FROM ".static::$table." ORDER BY prix";
		$rep = model::$pdo->query($SQL);
	    $rep->setFetchMode(PDO::FETCH_CLASS, 'model'.ucfirst(static::$table));
	    return $rep->fetchAll();
	}

	public static function getBestOldestPrices(){
	    $SQL="SELECT * FROM ".static::$table." ORDER BY prix , id LIMIT 8";
		$rep = model::$pdo->query($SQL);
	    $rep->setFetchMode(PDO::FETCH_CLASS, 'model'.ucfirst(static::$table));
	    return $rep->fetchAll();
	}

	public static function getTwoLatest(){
	    $SQL="SELECT * FROM ".static::$table." ORDER BY id DESC  LIMIT 2";
		$rep = model::$pdo->query($SQL);
	    $rep->setFetchMode(PDO::FETCH_CLASS, 'model'.ucfirst(static::$table));
	    return $rep->fetchAll();
	}


    public function select($cle_primaire) {
	    $sql = "SELECT * from ".static::$table." WHERE ".static::$primary."=:cle_primaire";
	    $req_prep = model::$pdo->prepare($sql);
	    $req_prep->bindParam(":cle_primaire", $cle_primaire);
	    $req_prep->execute();
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'model'.ucfirst(static::$table));
	    if ($req_prep->rowCount()==0){
			return null;
			die();
	  	}else{
			$rslt = $req_prep->fetch();
			return $rslt;
		}
	      
  	}


	public function delete($cle_primaire) {
		$sql = "DELETE FROM ".static::$table." WHERE ".static::$primary."=:cle_primaire";
		$req_prep = model::$pdo->prepare($sql);
		$req_prep->bindParam(":cle_primaire", $cle_primaire);
		$req_prep->execute();
	}

	public function update($tab, $cle_primaire) {
		$sql = "UPDATE ".static::$table." SET";
		foreach ($tab as $cle => $valeur){
			$sql .=" ".$cle."=:new".$cle.",";
		}
		$sql=rtrim($sql,",");
		$sql.=" WHERE ".static::$primary."=:oldid;";
		
		  $req_prep = model::$pdo->prepare($sql);
		  $values = array();
	  
	  foreach ($tab as $cle => $valeur){
				$values[":new".$cle] = $valeur;
		  }

		  $values[":oldid"] = $cle_primaire;
		  $req_prep->execute($values);
		  $obj = model::select($tab[static::$primary]);
		  return $obj;
  }

 


  public function login($username, $password) {
	$sql = "SELECT * from user WHERE ".static::$user."=:username AND ".static::$pass."=:password";
	$req_prep = model::$pdo->prepare($sql);
	$req_prep->bindParam(":username", $username);
	$req_prep->bindParam(":password", $password);
	
	$req_prep->execute();
	$req_prep->setFetchMode(PDO::FETCH_CLASS, 'model'.ucfirst(static::$table));
	echo ($req_prep);
	if ($req_prep->rowCount()==0){
		return null;
		die();
	  }else{
		
		$rslt = $req_prep;
		return $rslt;
	}
	  
  }




  public function insert($tab){
    $sql = "INSERT INTO ".static::$table." VALUES(";
    foreach ($tab as $cle => $valeur){
		$sql .=" :".$cle.",";
	}
	$sql=rtrim($sql,",");
	echo"hehehehheheh";
	$sql.=");";
    $req_prep = model::$pdo->prepare($sql);
    $values = array();
    foreach ($tab as $cle => $valeur)
      		$values[":".$cle] = $valeur;
	$req_prep->execute($values);
	
  }

}

Model::Init();

?>