<?php

class CreateAccountController{

    public function displayFormAccount(){
        $template='createAccount';
        include 'www/templates/layout.phtml';
    }

    public function createAccountSubmit(){

      if(!empty($_POST)){
        $form = ['pseudo' => $_POST['pseudo'],
                'lastNameUser' => $_POST['lastNameUser'],
                'firstNameUser' => $_POST['firstNameUser'],
                'emailUser' => $_POST['emailUser'],
                'passwordUser' => password_hash($_POST['passwordUser'], PASSWORD_DEFAULT)];
      }

      $UserModel=new UserModel();
      $email = $UserModel->checkDuplicates($form);

      if ($email == false) {

        $UserModel=new UserModel();
        $id = $UserModel->createAccount($form);

        header("Location: index.php?page=connectNewAccount&id=$id");
      }

    else {
        header("Location: index.php?page=createAccount");
    }
  }
}
