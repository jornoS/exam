<?php
include_once ('Class/klant.php');
if (isset($_POST['submit'])) {
    $call = new klant();
    $send = $call->AddKlant($_POST['Klant_Naam'],$_POST['adres'],$_POST['telefoon'],$_POST['Postcode'],$_POST['memo']);
}
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
    <form action="" method="post">
    <p>Naam</p>
    <input type="text" name="Klant_Naam">
    <br>
    <p>adres</p>
    <input type="text" name="adres">
    <br>
    <p>telefoon</p>
    <input type="number" name="telefoon">
    <br>
    <p>postcode</p>
    <input type="text" name="Postcode">
    <br>
    <p>memo</p>
    <input type="text" name="memo">
    <br>
    <button type="submit" name="submit">ADD</button>
    </form>
    <a href="KlantTabel.php">Back</a>
</body>
</html>