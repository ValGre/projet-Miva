<?php

class YourAccountController{

  public function displayYourAccount(){

      $ArticlesModel = new ArticlesModel();
      $articles = $ArticlesModel->getYoursArticles();

      $SaveModel = new SaveModel ();
      $savedArticles = $SaveModel ->getSavedArticlesByIdUser();

  $template='yourAccount';
  include 'www/templates/layout.phtml';
  }

  public function saveArticle($id){

    $SaveModel = new SaveModel();
    $verif = $SaveModel->checkDuplicateSave($id);

    if ($verif == false) {
      $SaveModel = new SaveModel();
      $SaveModel = $SaveModel->saveArticle($id);

    }
  }
}
