<?php

class UserModel{

  public function createAccount($form){
    $bdd=tryCatch();
    $query=$bdd->prepare("INSERT INTO `user` (`pseudo`, `firstNameUser`, `lastNameUser`, `emailUser`, `passwordUser`)
    VALUES (?,?,?,?,?)");
    $query->execute([$form['pseudo'],$form['firstNameUser'],$form['lastNameUser'],$form['emailUser'],$form['passwordUser']]);
    $id = $bdd->lastInsertId();
    return $id;
  }

  public function checkDuplicates($form){
    $bdd=tryCatch();
    $query=$bdd->prepare('SELECT emailUser FROM `user` WHERE emailUser=?');
    $query->execute([$form['emailUser']]);
    $user=$query->fetch(PDO::FETCH_ASSOC);
    return $user;
  }

  public function getPassword($form){
    $bdd=tryCatch();
    $query=$bdd->prepare('SELECT passwordUser FROM `user` WHERE emailUser=?');
    $query->execute([$form['emailUser']]);
    $user=$query->fetch(PDO::FETCH_ASSOC);
    return $user;
  }

  public function getUser($form){
    $bdd=tryCatch();
    $query=$bdd->prepare('SELECT * FROM `user` WHERE emailUser=?');
    $query->execute([$form['emailUser']]);
    $user=$query->fetch(PDO::FETCH_ASSOC);
    return $user;
  }

  public function getUsers(){
    $bdd=tryCatch();
    $query=$bdd->prepare('SELECT * FROM `user`');
    $query->execute();
    $users=$query->fetchAll(PDO::FETCH_ASSOC);
    return $users;
  }

  public function connectNewAccount($id){

    $bdd=tryCatch();
    $query=$bdd->prepare('SELECT * FROM `user` WHERE idUser=?');
    $query->execute([$id]);
    $user=$query->fetch(PDO::FETCH_ASSOC);
    return $user;
  }

  public function restrictUser($id){
    $bdd=tryCatch();
    $idUser=$id;
    $query=$bdd->prepare('UPDATE user SET restrictUser = "oui" WHERE idUser = ? AND restrictUser = "non"');
    $query->execute([$idUser]);
  }

  public function derestrictUser($id){
    $bdd=tryCatch();
    $idUser=$id;
    $query=$bdd->prepare('UPDATE user SET restrictUser = "non" WHERE idUser = ? AND restrictUser = "oui"');
    $query->execute([$idUser]);
  }
}
