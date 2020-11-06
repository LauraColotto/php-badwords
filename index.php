<?php

$text = "Antani, come se fosse antani, anche per il direttore, la supercazzola con scappellamento.";

$badword = $_GET["badword"];

$newText = str_replace($badword, "***", $text);

$lengh = strlen($text);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<h2>Il testo è: </h2>
<p><?php echo($text)?></p>

<h3>Ed è lungo: <?php echo($lengh)?> caratteri</h3>

<h2>Il testo censurato è:</h2>
<?php echo($newText)?>


</body>
</html>
