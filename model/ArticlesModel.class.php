<?php

class ArticlesModel{

  public function getCheckedArticles(){
    $bdd=tryCatch();
    $query=$bdd->prepare('SELECT * FROM `articles` WHERE checkedArticles = "Publique" ORDER BY `dateArticles` DESC');
    $query->execute();
    $articles=$query->fetchAll(PDO::FETCH_ASSOC);
    return $articles;
  }

  public function getArticles(){
    $bdd=tryCatch();
    $query=$bdd->prepare('SELECT * FROM `articles` ORDER BY `articles`.`dateArticles` DESC');
    $query->execute();
    $articles=$query->fetchAll(PDO::FETCH_ASSOC);
    return $articles;
  }

  public function getYoursArticles(){
    $bdd=tryCatch();
    $query=$bdd->prepare('SELECT * FROM `articles` WHERE `auteurArticles` = ? ');
    $query->execute([$_SESSION["user"]["pseudo"]]);
    $articles=$query->fetchAll(PDO::FETCH_ASSOC);
    return $articles;
  }

  public function getArticle($id){
    $bdd=tryCatch();
    $idArticle=$id;
    $query=$bdd->prepare('SELECT * FROM `articles` WHERE idArticles = ?');
    $query->execute([$idArticle]);
    $article=$query->fetch(PDO::FETCH_ASSOC);
    return $article;
  }

  public function createArticle($form){
    $bdd=tryCatch();
    $query=$bdd->prepare("
    INSERT INTO `articles` (`titleArticles`, `auteurArticles`, `dateArticles`, `textArticles`, `checkedArticles`)
    VALUES (?,?,?,?,?)");
    $query->execute([$form['titleArticles'],$form['auteurArticles'],$form['dateArticles'],$form['textArticles'],$form['checkedArticles']]);
    }

  public function deleteArticle($id){
    $bdd=tryCatch();
    $idArticle=$id;
    $query=$bdd->prepare('DELETE FROM `articles` WHERE `idArticles` = ? ');
    $query->execute([$idArticle]);
  }

  public function checkedArticle($id){
    $bdd=tryCatch();
    $idArticle=$id;
    $query=$bdd->prepare('UPDATE articles SET checkedArticles = "Publique"  WHERE idArticles = ? AND checkedArticles = "Vérification" ');
    $query->execute([$idArticle]);
  }

  public function uncheckedArticle($id){
    $bdd=tryCatch();
    $idArticle=$id;
    $query=$bdd->prepare('UPDATE articles SET checkedArticles = "Vérification" WHERE idArticles = ? AND checkedArticles = "Publique"');
    $query->execute([$idArticle]);
  }
}
