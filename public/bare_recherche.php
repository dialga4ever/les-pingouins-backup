<form action="/?page=article" method="post">
    <input type="text" id="search" name="search" value="<?php
      if(isset($_POST["search"])){
        echo $_POST["search"];
      } else {
        echo "Entrez votre recherche";
      }
      ?>">
    <input type="submit" id="submit" name="submit" value="Chercher">
</form>
