//VARIABLES

//FONCTIONS


//CODE PRINCIPAL
$(function(){


  let saveButton = document.querySelectorAll(".saveArticleButton");
  for (let i = 0; i < saveButton.length; i++) {
  saveButton[i].addEventListener("click",saveArticle);
  }

  let deleteButton = document.querySelectorAll(".deleteArticleButton");
  for (let i = 0; i < deleteButton.length; i++) {
  deleteButton[i].addEventListener("click",deleteArticle);
  }

});
