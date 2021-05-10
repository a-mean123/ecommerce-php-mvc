<?php

$ROOT = __DIR__;
$DS = DIRECTORY_SEPARATOR;

$controleur_default = 'home';


if(!isset($_REQUEST['controller']))
    $controller = $controleur_default;

    else $controller = $_REQUEST['controller'];

    switch($controller){

        case 'blog':
            require("{$ROOT}{$DS}controller{$DS}controllerBlog.php");
            break;

        case 'home':
                require("{$ROOT}{$DS}controller{$DS}controllerHome.php");
                break;
      case 'contact':
              require("{$ROOT}{$DS}controller{$DS}controllerContact.php");
             break;
             case 'product':
                require("{$ROOT}{$DS}controller{$DS}controllerProduct.php");
               break; 
               case 'about':
                require("{$ROOT}{$DS}controller{$DS}controllerAbout.php");
               break; 

               case 'admin':
                require("{$ROOT}{$DS}controller{$DS}controllerAdmin.php");
               break;   
               
               case 'login':
                require("{$ROOT}{$DS}controller{$DS}controllerLogin.php");
               break;   
    }


?>