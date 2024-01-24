<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
      echo "Accesso Consentito";
    } else {
      echo "Accesso Negato";
    }
  } else {
    echo "Tutti i field sono richiesti";
  }
  ?>

  <!-- Form -->
  <form method="get">
    <label for="name">Nome</label>
    <input type="text" name="name" />
    <br>

    <label for="mail">Email</label>
    <input type="email" name="mail" />
    <br>

    <label for="age">Età</label>
    <input type="text" name="age" />
    <br>

    <input type="submit" value="Accedi" />
  </form>
</body>
</html>