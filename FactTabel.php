<?php
include_once ('class/factuur.php');
$call = new factuur();
$fetch = $call->FetchFactuur();
// if (isset($_GET['ID']) && !empty($_GET['ID'])) {
//     $call = new klant();
//     $explosion-><3 = $call->DeleteKlant($_GET['ID']);
// }
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
    <li><a href="OffertTabel.php">Offerte</a></li>
    </ul>
    </div>
    <div class="form">
<!-- <form action="" method="GET"> -->
    <table>
        <tr>
            <th>Factuur nummer</th>
            <th>Offerte nummer</th>
            <th>Klant naam</th>
            <th>Klant adres</th>
            <th>Klant telefoon</th>
            <th>Klant postcode</th>
            <th>KlusNaam</th>
            <th>Prijs</th>
            <th>Factuur datum</th>
            <th>Status</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
        <?php foreach($fetch as $row) : ?>
        <tr>
        <td><?= $row['Factuur_ID'] ?></td>
        <td><?= $row['Offerte_ID'] ?></td>
        <td><?= $row['Klant_Naam'] ?></td>
        <td><?= $row['adres'] ?></td>
        <td><?= $row['telefoon'] ?></td>
        <td><?= $row['Postcode'] ?></td>
        <td><?= $row['KlusNaam'] ?></td>
        <td><?= $row['Prijs'] ?></td>
        <td><?= $row['Datum'] ?></td>
        <td><?= $row['Status'] ?></td>
        <td><a href="UpdateKlant.php?ID=<?= $row['Factuur_ID'] ?>">
        UPDATE
        </a></td>
        <td><a href="?ID=<?= $row['Factuur_ID'] ?>">
        DELETE
         </a></td>
        </tr>
<?php endforeach; ?>
    </table>
    <!-- </form> -->
    <!-- it will be never be created. -->
    <a href="CreateFactuur.php">Nieuwe Factuur</a>
    </div>
</body>
</html>