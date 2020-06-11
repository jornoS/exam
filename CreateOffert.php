<?php
include_once ('Class/offerte.php');
if (isset($_POST['submit'])) {
    $call = new offerte();
    $send = $call->AddOfferte($_POST['Klant_ID'],$_POST['prijs'],$_POST['Beschrijving'],$_POST['date'],$_POST['status']);
}
include_once ('Class/klant.php');
    $call = new klant();
    $fetch = $call->FetchKlant(null);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equziv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <p>Klant</p>
    <select type="Klant_ID" name="Klant_ID">
    <?php foreach($fetch as $row) : ?>
    <option value="<?= $row['Klant_ID'] ?>"><?= $row['Klant_Naam'] ?></option>
    <?php endforeach;?>
    </select>
    <br>
    <p>Prijs</p>
    <input type="number" name="prijs">
    <br>
    <p>Beschrijving</p>
    <input type="text" name="Beschrijving">
    <br>
    <p>Datum</p>
    <input min="<?= date("Y-m-d") ?>" type="date" name="date" value="date">
    <br>
    <p>Status</p>
    <select type="text" name="status">
    <option value="1">akkoord</option>
    <option value="2">afgewezen</option>
    <option value="3">wacht op antwoord</option>
    </select>
    <br>
    <button type="submit" name="submit">ADD</button>
    </form>
    <a href="OffertTabel.php">Back</a>
    
</body>
</html>