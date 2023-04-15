<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "
<div style=\"display: flex;\">
<img  src=\"http://aimbjpj6.beget.tech/pic/cruise.jpg\" alt=\"" . $arrType[$_SESSION['type']]['name'] . "\">
<div>
  <p>Уважаемый, " . $_SESSION['name'] . "!</p>
  <p>Вы приобрели путевку:<br>
    ". $arrType[$_SESSION['type']]['name'] .", страна ". $arrCountryNames[$_SESSION['country']] .".</p>
  <p>В путевку входят: " . $arrEat[$_SESSION['eat']]['name'] . "</p>
  <p>Дополнительные услуги: <br>
    " . $par . "</p>
  <p>Полная стоимость тура: <b>" . '2000' . "</b></p>
</div>
</div>"
?>
</body>
</html>