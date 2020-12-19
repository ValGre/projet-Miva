<?php

class AdminsModel{

  public function createAdmin(){
    $bdd=tryCatch();
    $query=$bdd->prepare("
    INSERT INTO `admins`(`nameAdmin`,`passwordAdmin`)
    VALUES (?,?)");
    $query->execute(['admin',password_hash("admin", PASSWORD_DEFAULT)]);
  }
  public function getPassword($form){
    $bdd=tryCatch();
    $query=$bdd->prepare('SELECT passwordAdmin FROM `admins` WHERE nameAdmin=?');
    $query->execute([$form['nameAdmin']]);
    $admin=$query->fetch(PDO::FETCH_ASSOC);
    return $admin;
  }
}
