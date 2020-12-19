<?php

class AccueilController{

    public function displayAccueil(){
        $template='accueil';
        include 'www/templates/layout.phtml';
    }

    public function displayArticles(){

      $ArticlesModel=new ArticlesModel();
      $articles = $ArticlesModel->getCheckedArticles();

      $template='allArticles';
      include 'www/templates/layout.phtml';
    }
}
