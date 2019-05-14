<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exercice 5</title>
</head>
<body>
  <h1>Exercice 5</h1>

  <?php
  $gender = 'homme';
  echo 'Est-ce un(e) ' . $gender . ' ? ';
  if ($gender != 'homme') {
    echo 'C\'est une développeuse !!!';
  }
  else {
    echo 'C\'est un développeur !!!';
  }
  ?>

</body>
</html>
