
<?php

    
require_once("{$ROOT}{$DS}model{$DS}modelProduct.php");




if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des Produit";
        $view = "product";
       	$tab_p = ModelProduct::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$u = ModelProduct::select($id);
				if($u!=null){
					$pagetitle = "Details de produit";
					$view = "detailProduct";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$del = ModelProduct::select($id);
			if($del!=null){
			$del->delete($id);
			header('Location: index.php?controller=admin&action=product');
			}
		}
	    break;
		

		
	case "created":
        if(isset($_REQUEST['titre']) && isset($_REQUEST['description'])
          && isset($_REQUEST['prix'])){
			
			$image=$_FILES['image']['name']; 
			$expimage=explode('.',$image);
			$imageexptype=$expimage[1];
			date_default_timezone_set('Australia/Melbourne');
			$date = date('m/d/Yh:i:sa', time());
			$rand=rand(10000,99999);
			$encname=$date.$rand;
			$imagename=md5($encname).'.'.$imageexptype;
			$imagepath="assets/images/".$imagename;
			move_uploaded_file($_FILES["image"]["tmp_name"],$imagepath);
			
			
			
			
			$titre = $_REQUEST["titre"];
			$description = $_REQUEST["description"];
            $image = $imagename;
			$prix = $_REQUEST["prix"];
            
			$id = NULL;


			
				$u = new ModelProduct($titre, $description, $image, $prix);	
			
				$tab = array(
				"id" => $id,    
				"titre" => $titre,
				"description" => $description,
                "image" => $image,
                "prix" => $prix
				);				
				$u->insert($tab);
			
				header('Location: index.php?controller=admin&action=product');
			
		}
		break;
	
	case "update":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$up = ModelProduct::select($id);
			if($up!=null){
				$pagetitle = "Modifier le projet";
				$view = "updateProjet";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
	
        if(isset($_REQUEST['id']) && isset($_REQUEST['titre'])
         && isset($_REQUEST['description']) && isset($_REQUEST['image'])
         && isset($_REQUEST['prix'])){
			$id = $_REQUEST['id'];
			$tab = array(
   			 "id" => $_REQUEST["ncin"],
   			 "titre" => $_REQUEST["titre"],
                "description" => $_REQUEST["description"],
                "image" => $_REQUEST["image"],
   			 "prix" => $_REQUEST["prix"]
   			 );
			$o = ModelProduct::select($id);
			if($o!=null){
				$u = $o->update($tab, $id);		
				$pagetitle = "Projet modifié";
				$view = "updatedProjet";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;




}



 
?>