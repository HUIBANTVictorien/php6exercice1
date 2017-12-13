<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>exercice 1 partie 6 php</title>
</head>
<body>
  <a href="index.php?nom=Nemare&amp;prenom=Jean">Jean Nemare</a>
  <p>
    <?php
    if (isset($_GET['nom']) && ($_GET['prenom'])) {
      echo 'Bonjour ' .$_GET['nom'] .' '. $_GET['prenom'];
    } 
    ?>
  </p>
</body>
</html>
