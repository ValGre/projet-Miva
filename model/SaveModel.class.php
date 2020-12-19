<?php

class SaveModel{

  public function checkDuplicateSave($id){
    $bdd=tryCatch();
    $query=$bdd->prepare('SELECT idUser,idArticles FROM `save` WHERE idUser=? AND idArticles=?');
    $query->execute([$_SESSION["user"]["idUser"],$id]);
    $user=$query->fetch(PDO::FETCH_ASSOC);
    return $user;
  }

  public function saveArticle($id){
    $bdd=tryCatch();
    $query=$bdd->prepare("
    INSERT INTO `save` (`idUser`,`idArticles`)
    VALUES (?,?)");
    $query->execute([$_SESSION["user"]["idUser"],$id]);

  }
  public function getSavedArticles($id){
    $bdd=tryCatch();
    $query=$bdd->prepare("
    SELECT * FROM `save` WHERE idUser = ? AND idArticles = ?");
    $query->execute([$_SESSION["user"]["idUser"],$id]);
    $savedArticle=$query->fetch(PDO::FETCH_ASSOC);
    return $savedArticle;
  }

  public function getSavedArticlesByIdUser(){
    $bdd=tryCatch();
    $query=$bdd->prepare("
    SELECT *
    FROM `save` INNER JOIN `articles`ON save.idArticles = articles.idArticles WHERE idUser = ?");
    $query->execute([$_SESSION["user"]["idUser"]]);
    $savedArticles=$query->fetchAll(PDO::FETCH_ASSOC);
    return $savedArticles;
  }

  public function deleteSaveByIdArticle($idArticle){
    $bdd=tryCatch();
    $query=$bdd->prepare('DELETE FROM `save` WHERE idArticles = ?');
    $query->execute([$idArticle]);
  }
}
