<?php

class AdminController{

    public function displayAdminForm(){

        $template='admin';
        include 'www/templates/layout.phtml';
    }

    public function createAdmin(){

        $AdminsModel = new AdminsModel();
        $AdminsModel->createAdmin();
    }

    public function connectAdmin(){

      if(!empty($_POST)){
        $form = ['nameAdmin' => $_POST['nameAdmin'],
                'passwordAdmin' =>$_POST['passwordAdmin']];


        $AdminsModel = new AdminsModel();
        $password = $AdminsModel->getpassword($form);

      if(password_verify($_POST['passwordAdmin'], $password['passwordAdmin'])){
        unset($_SESSION['user']);
        $_SESSION['admin'] = $_POST['nameAdmin'];
      header("Location: index.php?admin=homeAdmin");
      exit;
      }
        else{
          header("Location: index.php?admin=admin");
        }
      }
    }

    public function getDataArticles(){

      $ArticlesModel = new ArticlesModel();
      $articles = $ArticlesModel->getArticles();
      echo json_encode ($articles);
    }

    public function displayAdmin(){

      $UserModel = new UserModel();
      $users= $UserModel->getUsers();

      $ArticlesModel = new ArticlesModel();
      $articles = $ArticlesModel->getArticles();

      $template='homeAdmin';
      include 'www/templates/layout.phtml';
    }

    public function checkedArticle($id){
      $ArticlesModel = new ArticlesModel();
      $ArticlesModel->checkedArticle($id);

    header("Location: index.php?admin=homeAdmin");
    }

    public function uncheckedArticle($id){
      $ArticlesModel = new ArticlesModel();
      $ArticlesModel->uncheckedArticle($id);

    header("Location: index.php?admin=homeAdmin");
    }
}
