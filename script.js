function Ajajax(){
  $.ajax({
    url: "add_article.php",
    type: "POST",
    success: function(articles){
      for (var i = 0; i < articles.length; i++) {
        var template = $(".card").clone();
        $(".card-img-top").attr("src",articles[i].Image);
        $(".card h5").text(articles[i].Titre);
        $(".card p").text(articles[i].Synopsis);
        $(".like").text(articles[i].NbreLyke);
        $(".comm").text(articles[i].NbreComm);
        $(".vues").text(articles[i].NbreViews);
        $(".card").fadeIn('slow');
        $("#cacard").prepend(template);
        id_last_article = articles[i].id;
      }
    },
    error: function(){
      alert("Oh no !");
    },
    dataType: "json"
  }
  )
}
