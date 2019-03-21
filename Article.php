<?php
function allMessage(){

    $connec = new PDO('mysql:dbname=Blog', 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT * FROM message ORDER BY id DESC;");
    $request->execute();
    return $request->fetchAll();
}

$messages = allMessage();

function getLike(){
  $connec = new PDO('mysql:dbname=Blog', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT Lyke FROM avis;");
  $request->execute();
  return $request->fetchAll();
}
$likes = getLike();

function getDislike(){
  $connec = new PDO('mysql:dbname=Blog', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT Dislike FROM avis;");
  $request->execute();
  return $request->fetchAll();
}
$dislikes = getDislike();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
      <script  src="script.js"></script>
      <link rel="stylesheet" href="main.css">
    <title>Blog</title>
  </head>
  <body>
    <header>
      <img src="Pictures/Squirrel.png" alt="">
      <nav>
        <ul>
          <li><a href="acceuil.html">Acceuil</a></li>
          <li><a href="Article.php">Lien 1</a></li>
          <li><a href="users.php">Lien 2</a></li>
        </ul>
      </nav>
    </header>
    <section id="ababou">
    <h1>Au programme, dans ce patch 1.02 :</h1>

    <p>Réduction des ralentissements dans les menus</p>
    <p>Correction du bug qui rendait invisibles les projectiles</p>
    <p>Correction de l'animation de téléportation de Decapre</p>
    <p>Correction du bug audio de Rolento</p>
    <p>Correction des effets sonores sur les attaques focus rouges</p>
    <p>Lorsque Akuma utilisera son coup de pied écrasé, les effets sonores se déclencheront</p>
    <p>Dans le menu Options, section graphismes, le texte en bas de l'écran ne sera plus coupé</p>
    <p>Les personnages qui apparaissaient parfois dans certains leaderboards sans raison n'y seront plus</p>
    <p>Les ID online qui n'apparaissaient pas correctement ont été corrigées</p>
    <p>L'ID online ne se déplacera plus si vous décidez de changer la position de la barre de vie</p>
    <p>Et d'autres petits correctifs de bugs idiots</p>

    <img id="like" src="Like.png" alt="" width="50px" onclick="Like();"><?php foreach($likes as $key => $like) echo $like['Lyke'] ?></img>
    <img id="dislike" src="Dislike.png" alt="" width="50px" onclick="Dislike();"><?php foreach($dislikes as $key => $dislike) echo $dislike['Dislike'] ?></img>
    <br>
      <textarea id="comment" name="comm" rows="8" cols="100" size=10 placeholder="Texte" value="" required></textarea><br>
      <input type="submit" onclick="sendMessage();" value="Envoyer"><br><br>
        <table border="2">
          <tr>
            <th>Date</th>
            <th>Message</th>
          </tr>
          <?php foreach($messages as $key => $message) :?>
            <tr>

              <td><?php echo $message['datetime'] ?></td>
              <td><?php echo $message['content'] ?></td>
            </tr>
          <?php endforeach ?>
          <div id="tab"></div>
        </table>
      </section>
  </body>
</html>
