<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exercice 3</title>
</head>
<body>
  <h1>Exercice 3</h1>

  <?php
  $age = 11;
  $gender = "femme";

  if ($gender == "homme" && $age <=17) {
    echo "Vous êtes un homme mineur.";
  }
  elseif ($gender == "femme" && $age <=17) {
    echo "Vous êtes une femme mineure.";
  }
  elseif ($gender == "femme" && $age >=18) {
    echo "Vous êtes une femme majeure.";
  }
  else {
    echo "Vous êtes un homme majeur.";
  }

  ?>

</body>
</html>
