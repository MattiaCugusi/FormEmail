<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mittente = $_POST["mittente"];
    $destinatario = $_POST["destinatario"];
    $oggetto = $_POST["oggetto"];
    $corpo = $_POST["corpo"];

    echo "<h1>Mail creata</h1>
    <div style='background-color:light-blue'>
      <p>Mittente:$mittente</p>
      <p>Destinatario:$destinatario</p>
      <p>Oggetto:$oggetto</p>
      </div>
      <h3>Corpo del messaggio:</h3>
      <p>$corpo</p>
    </div>";
    ?>
</body>
</html>