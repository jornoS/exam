<?php
include_once ('class/klant.php');
$call = new klant();
$fetch = $call->FetchKlant(NULL);
if (isset($_GET['ID']) && !empty($_GET['ID'])) {
    $call = new klant();
    $explosion = $call->DeleteKlant($_GET['ID']);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="header"><h1>TCR Paint</h1></div>
<div class="nav">
    <ul>
    <li><a href="index.php">Hoofdpagina</a></li>
    <li><a href="KlantTabel.php">Klanten</a></li>
    <li><a href="FactTabel.php">Facturen</a></li>
    <li><a href="CreateOffert.php">Offerte</a></li>
    </ul>
    </div>
    <div class="form">
<form action="" method="GET">
    <table>
        <tr>
            <th>Naam</th>
            <th>adres</th>
            <th>telefoon</th>
            <th>postcode</th>
            <th>memo</th>
        </tr>
        <?php foreach($fetch as $row) : ?>
        <tr>
        <td><?= $row['Klant_Naam'] ?></td>
        <td><?= $row['adres'] ?></td>
        <td><?= $row['telefoon'] ?></td>
        <td><?= $row['Postcode'] ?></td>
        <td><?= $row['memo'] ?></td>
        <td><a href="UpdateKlant.php?ID=<?= $row['Klant_ID'] ?>">
        UPDATE
        </a></td>
        <td><a href="?ID=<?= $row['Klant_ID'] ?>">
        DELETE
         </a></td>
        </tr>
<?php endforeach; ?>
    </table>
    </form>
    <a href="CreateKlant.php">Nieuwe klant</a>
    </div>
</body>
</html>