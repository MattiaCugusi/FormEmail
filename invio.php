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

    $caratteri = strlen($corpo);
    $parole = str_word_count($corpo);
    echo "<h1>Mail creata</h1>
    <h3>Informazioni</h3>
    
    <div style='background-color:lightblue; padding: 3px'>
      <hr>
      <p>Mittente: " . $mittente . "</p>
      <hr>
      <p>Destinatario: " . $destinatario . "</p>
      <hr>
      <p>Oggetto: " .$oggetto . "</p>
      <hr>
      </div>
      <h3>Corpo del messaggio:</h3>
      <div style='background-color: orange; padding: 3px; width: 50%;'>
      <p>" . $corpo . "</p>
    </div>
    <hr>
    <h3>Statistiche corpo mail</h3>
    <div style='background-color: grey; padding: 3px;'>
    <p>Lunghezza corpo e-mail: " . $caratteri . " caratteri; </p>
    <p>Numero parole contenute nel corpo della mail: "  . $parole . " 
    </div>
    ";
    
    ?>
</body>
</html>