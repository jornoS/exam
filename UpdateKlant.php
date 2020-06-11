<?php
include_once ('Class/klant.php');
if (isset($_GET['ID']) && !empty($_GET['ID'])) {
    $call = new klant();
    $fetch = $call->FetchKlant($_GET['ID']);
} else {
    echo "no id found";
}
if (isset($_POST['submit'])) {

    $call = new klant();
    $send = $call->UpdateKlant($_GET['ID'],$_POST['Klant_Naam'],$_POST['adres'],$_POST['telefoon'],$_POST['Postcode'],$_POST['memo']);
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
<?php foreach($fetch as $row) : ?>
    <form action="" method="post">
    <p>Naam</p>
    <input type="text" name="Klant_Naam" value="<?= $row['Klant_Naam'] ?>">
    <br>
    <p>adres</p>
    <input type="text" name="adres" value="<?= $row['adres'] ?>">
    <br>
    <p>telefoon</p>
    <input type="number" name="telefoon" value="<?= $row['telefoon'] ?>">
    <br>
    <p>postcode</p>
    <input type="text" name="Postcode" value="<?= $row['Postcode'] ?>">
    <br>
    <p>memo</p>
    <input type="text" name="memo" value="<?= $row['memo'] ?>">
    <br>
    <button type="submit" name="submit">UPDATE</button>
    </form>
    <a href="KlantTabel.php">Back</a>
<?php endforeach;?>
</body>
</html>