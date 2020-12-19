<?php

class ArticlesController{

  public function displayArticle($id){

    $ArticlesModel = new ArticlesModel();
    $article = $ArticlesModel->getArticle($id);

    $SaveModel = new SaveModel();
    $verif = $SaveModel->getSavedArticles($id);

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
