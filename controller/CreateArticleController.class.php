<?php

class CreateArticleController{

  public function displayFormArticle(){
      $template='newArticle';
      include 'www/templates/layout.phtml';
  }

  public function createArticleSubmit(){

      if(!empty($_POST)){
        $form = ['titleArticles' => $_POST['titleArticles'],
                'auteurArticles' => $_SESSION["user"]['pseudo'],
                'dateArticles' => date("Y-m-d H:i:s"),
                'textArticles' => $_POST['textArticles'],
                'checkedArticles' => 'Vérification'];
      }
var_dump($form);
      $ArticlesModel=new ArticlesModel();
      $ArticlesModel->createArticle($form);

    header("Location: index.php");
  }


}
