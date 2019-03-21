function Ajajax(){
  $.ajax({
    url: "add_article.php",
    type: "POST",
    success: function(articles){
      // for (var i = 0; i < articles.length; i++) {
      //   var template = $(".card").clone();
      //   $("#cacard").prepend(template);
      //   var clone = $("#cacard").clone().attr('id', 'cacard' + articles.id );
      //   var selector =  '#cacard' + articles.id;
      //   var text2 = selector + " h5";
      //   var content = selector + " p";
      //   $(".card-img-top").attr("src",articles[i].Image);
      //   $(".card h5").text(articles[i].Titre);
      //   $(".card p").text(articles[i].Synopsis);
      //   $(".like").text(articles[i].NbreLyke);
      //   $(".comm").text(articles[i].NbreComm);
      //   $(".vues").text(articles[i].NbreViews);
      //   $(".card").fadeIn('slow');
      //   id_last_article = articles[i].id;
        articles.forEach(function(article) {
           var clone = $("#cacard").clone().attr('id', 'cacard' + article.id );
           var selector =  '#cacard' + article.id;
           var text2 = selector + " h5";
           var content = selector + " p";
           var image = selector + " img";
           var lyke = selector + " #lyke";
           var comm = selector + " #comm";
           var views = selector + " #views";
           $("#main").append(clone);

            $(text2).text(article.Titre);
            $(content).text(article.Synopsis);
            $(image).attr("src",article.Image);
            $(lyke).text(article.NbreLyke);
            $(comm).text(article.NbreComm);
            $(views).text(article.NbreViews);


            id_last_article = article.id;
      }
    )},
    error: function(){
      alert("Oh no !");
    },
    dataType: "json"
  }
  )
}
