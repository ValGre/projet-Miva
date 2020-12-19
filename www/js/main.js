//VARIABLES

//FONCTIONS
function data(){
    $.get("index.php?ajax=getDataArticles",function(data){
      sessionStorage.setItem('dataKey' , data);
      console.log(JSON.parse(sessionStorage.getItem('dataKey')));
    });
};

//CODE PRINCIPAL
$(function(){

data();

  let checkButton = document.querySelectorAll(".checkButton");
  for (let i = 0; i < checkButton.length; i++) {
  checkButton[i].addEventListener("click",checkArticle);
  }

  let saveButton = document.querySelectorAll(".saveArticleButton");
  for (let i = 0; i < saveButton.length; i++) {
  saveButton[i].addEventListener("click",saveArticle);
  }

  let deleteButton = document.querySelectorAll(".deleteArticleButton");
  for (let i = 0; i < deleteButton.length; i++) {
  deleteButton[i].addEventListener("click",deleteArticle);
  }

});
