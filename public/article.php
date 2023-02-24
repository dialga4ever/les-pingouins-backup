<?php
$mysqli = new mysqli("localhost", "les_pingouins", "3275644de7ef8dcc0401", "les_pingouins");
?>

<!DOCTYPE html>

<html>
  <body >
<?php
if(isset($_GET["a"])){
    $article = $mysqli->real_escape_string($_GET["a"]);
    $results = $mysqli->query("SELECT texte FROM `articles` WHERE ident='$article'")->fetch_all();
    echo $results[0][0];
    die();
}

if(isset($_POST["search"])){
  $search = str_replace(" ", "%", $_POST["search"]);
  $search = $mysqli->real_escape_string($search);
  $results1 = $mysqli->query("SELECT ident FROM `articles` WHERE ident LIKE '%$search%'")->fetch_all();
  $results2 = $mysqli->query("SELECT ident FROM `articles` WHERE texte LIKE '%$search%' AND NOT ident LIKE '%$search%'")->fetch_all();
  $nb_results = count($results1) + count($results2);
  echo "<h3>$nb_results articles trouvés.</h3>";
  foreach($results1 as $result){
    echo "<div class='corps'><a href=\"?page=article&a=$result[0]\">$result[0]</a></div>";
  }
  foreach($results2 as $result){
    echo "<div class='corps'><a href=\"?page=article&a=$result[0]\">$result[0]</a></div>";
  }
}
?>
  </body>
</html>
