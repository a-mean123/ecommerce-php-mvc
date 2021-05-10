<?php

    

$pagetitle = 'Admin';
$view = 'admin';
$controller = 'admin';
  

require("{$ROOT}{$DS}view{$DS}admin.php");
require_once("./model/modelContact.php");
require_once("./model/modelProduct.php");
require_once("./model/modelBlog.php");





if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="product";	
	
switch ($action) {
    case "product":
        $pagetitle = "Admin panel";
        $view = "getAllProduct";
       
        $tab_p = modelProduct::getAll();
        require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
        break;


    case "contact":
        $pagetitle = "Admin panel";
        $view = "getAllContact";
        $tab_c = modelContact::getAll();
       //	$tab_c = modelContact::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
        break;

      
            
            
            case "blog":
                $pagetitle = "Admin panel";
                $view = "getAllBlog";
               $tab_b = modelBlog::getAll();//appel au modèle pour gerer la BD
                require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
                break;


       


                    case "createproduct":
                        
                        $pagetitle = "Admin panel";
                        $view = "ajoutProduit";
                       require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
                        break;   

                        case "readproduct":	
                            if(isset($_REQUEST['id'])){
                                $id = $_REQUEST['id'];
                                $u = modelProduct::select($id);
                                    if($u!=null){
                                        $pagetitle = "Details de produit";
                                        $view = "updateProduct";
                                        require ("{$ROOT}{$DS}admin.php");
                                    }
                                }	
                            break;

                 

                            case "createblog":
                              
                                $pagetitle = "Admin panel";
                                $view = "ajoutBlog";
                               require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
                                break;   


                                case "read":	
                                    if(isset($_REQUEST['id'])){
                                        $id = $_REQUEST['id'];
                                        $u = ModelBlog::select($id);
                                            if($u!=null){
                                                $pagetitle = "Details de blog";
                                                $view = "updateBlog";
                                                require ("{$ROOT}{$DS}admin.php");
                                            }
                                        }	
                                    break;



                                    case "readblog":	
                                        if(isset($_REQUEST['id'])){
                                            $id = $_REQUEST['id'];
                                            $u = ModelBlog::select($id);
                                                if($u!=null){
                                                    $pagetitle = "Details de blog";
                                                    $view = "updateBlog";
                                                    require ("{$ROOT}{$DS}admin.php");
                                                }
                                            }	
                                        break;
}



 
?>
