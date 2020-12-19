<?php

session_start();
include 'config/database.php';

spl_autoload_register(function ($class) {
    //verifie que controller se trouve dans le nom d instanciation
    if(strstr($class, "Controller")){
        //charge les controllers
            if(strstr($class, "admin")){

            include 'controller/admin/' . $class . '.class.php';
    }
    else{
        include 'controller/' . $class . '.class.php';
    }

    }
    else if(strstr($class ,"Model")){
        //charge les modeles
        include 'model/' . $class . '.class.php';
    }
});

if(isset($_GET['page'])){
    switch($_GET['page']){
    case 'createAccount':
        $CreateAccountController=new CreateAccountController();
        $CreateAccountController->displayFormAccount();
    break;
    case 'createAccountSubmit':
        $CreateAccountController=new CreateAccountController();
        $CreateAccountController->createAccountSubmit();
    break;
    case 'connectAccount':
        $ConnectAccountController=new ConnectAccountController();
        $ConnectAccountController->displayFormAccount();
    break;
    case 'connectAccountSubmit':
        $ConnectAccountController=new ConnectAccountController();
        $ConnectAccountController->connectAccountSubmit();
    break;
    case 'disconnectAccount':
        $ConnectAccountController=new ConnectAccountController();
        $ConnectAccountController->disconnectAccount();
    break;
    case 'connectNewAccount':
        $ConnectAccountController=new ConnectAccountController();
        $ConnectAccountController->connectNewAccount($_GET['id']);
    break;
    case 'yourAccount':
        $YourAccountController=new YourAccountController();
        $YourAccountController->displayYourAccount();
    break;
    case 'createArticle':
        $CreateArticleController=new CreateArticleController();
        $CreateArticleController->displayFormArticle();
    break;
    case 'createArticleSubmit':
        $CreateArticleController=new CreateArticleController();
        $CreateArticleController->createArticleSubmit();
    break;
    case 'articleDetails':
        $ArticlesController=new ArticlesController();
        $ArticlesController->displayArticle($_GET['id']);
    break;
    case 'saveArticle':
        $YourAccountController=new YourAccountController();
        $YourAccountController->saveArticle($_GET['id']);
    break;
    default:
    }
}
else if(isset($_GET['ajax'])){
    switch($_GET['ajax']){
    case 'getDataArticles':
        $AdminController=new AdminController();
        $AdminController->getDataArticles();
    break;
    case 'saveArticle':
        $idArticle=$_POST["idArticle"];
        $YourAccountController=new YourAccountController();
        $YourAccountController->saveArticle($idArticle);
    break;
    case 'deleteArticle':
        $idArticle=$_POST["idArticle"];
        $ArticlesController=new ArticlesController();
        $ArticlesController->deleteArticle($idArticle);
    break;
    }
}
else if(isset($_GET['admin'])){
    switch($_GET['admin']){
    case 'admin':
        $AdminController=new AdminController();
        $AdminController->displayAdminForm();
    break;
    case 'createAdmin':
        $AdminController=new AdminController();
        $AdminController->createAdmin();
    break;
    case 'connectAdmin':
        $AdminController=new AdminController();
        $AdminController->connectAdmin();
    break;
    case 'articleDetails':
        $ArticlesController=new ArticlesController();
        $ArticlesController->displayArticle($_GET['id']);
    break;
    case 'articleChecked':
      if ($_GET['check'] == 'Publique') {
        $AdminController=new AdminController();
        $AdminController->uncheckedArticle($_GET['id']);
      }
      else if ($_GET['check'] == 'Vérification') {
        $AdminController=new AdminController();
        $AdminController->checkedArticle($_GET['id']);
      }
    break;
    case 'restrictUser':
      if ($_GET['check'] == 'non') {
        $AdminController=new AdminController();
        $AdminController->restrictUser($_GET['id']);
      }
      else if ($_GET['check'] == 'oui') {
        $AdminController=new AdminController();
        $AdminController->derestrictUser($_GET['id']);
      }
    break;
    case 'homeAdmin':
    if(isset($_SESSION["admin"])){
      $AdminController=new AdminController();
      $AdminController->displayAdmin();
    break;
    }
  }
}
  else{
    if(!isset($_SESSION["user"])){
      $AccueilController=new AccueilController();
      $AccueilController->displayAccueil();
      }

    if(isset($_SESSION["user"])){
      $AccueilController=new AccueilController();
      $AccueilController->displayArticles();
      }
  }
