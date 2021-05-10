
<?php

    

$pagetitle = 'Home';
$view = 'home';
$controller = 'home';
  



    
require_once("{$ROOT}{$DS}model{$DS}modelProduct.php");
require_once("{$ROOT}{$DS}model{$DS}modelBlog.php");





if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
       
     
        $tab_p = ModelProduct::getAll();//appel au modèle pour gerer la BD
       	$tab_best = ModelProduct::getBestPrice();//appel au modèle pour gerer la BD
       	$tab_old = ModelProduct::getOld();//appel au modèle pour gerer la BD
       	$tab_bestOld = ModelProduct::getBestOldestPrices();//appel au modèle pour gerer la BD
        $tab_news = modelBlog::getTwoLatest();   
           require("{$ROOT}{$DS}view{$DS}view.php");

        break;
    
    }

?>