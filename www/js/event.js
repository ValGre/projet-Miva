//GROUPS
  function saveArticle(){
    let idArticle = $(this).attr("id");
    $.post({url:"index.php?ajax=saveArticle",data:{idArticle:idArticle}});
  }

  function deleteArticle(){
     $(this).closest("tr").remove();
    let idArticle = $(this).attr("id");
    $.post({url:"index.php?ajax=deleteArticle",data:{idArticle:idArticle}});
  }
