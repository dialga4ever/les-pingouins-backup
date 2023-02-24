<?php
$mysqli = new mysqli("localhost", "les_pingouins", "3275644de7ef8dcc0401", "les_pingouins");

if(isset($_POST["submit"])){
  $nom = $mysqli->real_escape_string(htmlspecialchars($_POST["nom"]));
  $message = $mysqli->real_escape_string(htmlspecialchars($_POST["message"]));
  $mysqli->query("INSERT INTO `commentaires` (`nom`, `commentaire`, `date`) VALUES ('$nom', '$message', current_timestamp());");
}
?>

<!DOCTYPE html>

<html>
  <body >

<h1> Laissez un commentaire ici ! </h1>

 <form action="/?page=commentaires" method="post">
    <div class="corps"><label for="nom">Nom<br></label>
    <input type="text" id="nom" name="nom">
    <br>Message
    <div><textarea id="message" name="message">Votre message...</textarea></div>
    <input type="submit" id="submit" name="submit" value="Envoyer">
    </div>
</form> 

<?php
$results = $mysqli->query("SELECT * FROM `commentaires` WHERE 1 ORDER BY id DESC;")->fetch_all();
foreach($results as $comment){
  echo "<hr><div class='corps'>$comment[1] - le $comment[3]</div><div class='corps'>$comment[2]</div>";
}
?>



  </body>
</html>
