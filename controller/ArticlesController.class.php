<?php

class ArticlesController{

  public function displayArticle($id){

    $displayButton = true;

    $SaveModel = new SaveModel();
    $verif = $SaveModel->getSavedArticles($id);

    if ($verif['idArticles'] == $id) {
      $displayButton = false;
    }

    $ArticlesModel = new ArticlesModel();
    $article = $ArticlesModel->getArticle($id);

    $template='article';
    include 'www/templates/layout.phtml';
  }

  public function deleteArticle($idArticle){
    $SaveModel = new SaveModel();
    $SaveModel = $SaveModel->deleteSaveByIdArticle($idArticle);

    $ArticlesModel = new ArticlesModel();
    $ArticlesModel->deleteArticle($idArticle);

  }
}
