//GROUPS
  function saveArticle(){
    let idArticle = $(this).attr("id");
    $.post({url:"index.php?ajax=saveArticle",data:{idArticle:idArticle}});
  }

  function deleteArticle(){
     $(this).closest("tr").replaceWith("<tr> Cette article est supprimé </tr>");
    let idArticle = $(this).attr("id");
    $.post({url:"index.php?ajax=deleteArticle",data:{idArticle:idArticle}});
  }

  function checkArticle(){
    let idArticle = $(this).attr("id");
    const dataArticles = JSON.parse(sessionStorage.getItem('dataKey'));
    console.log('start test');
    for (let i = 0; i < dataArticles.length; i++) {
      for (const key of Object.entries(dataArticles[i])) {
        if (key == 'idArticles') {
          //verifier que la value est idArticle (au dessus)
          //verifier si c'est check ou uncheck et changer la ligne
          //renvoyer au mysql et au session storage
        }
      }
    }
  }
