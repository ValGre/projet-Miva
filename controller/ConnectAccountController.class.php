<?php

class ConnectAccountController{

  public function displayFormAccount(){
      $template='connectAccount';
      include 'www/templates/layout.phtml';
  }

  public function connectAccountSubmit(){

    if(!empty($_POST)){
      $form = ['emailUser' => $_POST['emailUser'],
              'passwordUser' =>$_POST['passwordUser']];

    $UserModel=new UserModel();
    $password = $UserModel->getPassword($form);

    if(password_verify($_POST['passwordUser'], $password['passwordUser'])){

      $UserModel=new UserModel();
      $user = $UserModel->getUser($form);

    $_SESSION['user'] = $user;
      header("Location: index.php");
      exit;
    }
    else{
          header("Location: index.php?page=connectAccount");
        }
    }
  }

    public function connectNewAccount($id){

      $UserModel=new UserModel();
      $user = $UserModel->connectNewAccount($id);

      $_SESSION['user'] = $user;
        header("Location: index.php");
        exit;
  }

    public function disconnectAccount(){
      session_destroy();
      header("Location: index.php");
      exit;
  }

}
