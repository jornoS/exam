<?php
include_once ('class/offerte.php');
$call = new offerte();
$fetch = $call->FetchOfferte();
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
            <th>offerte nummer</th>
            <th>datum</th>
            <th>status</th>
            <th>prijs</th>
            <th>Beschrijving</th>
        </tr>
        <?php foreach($fetch as $row) : ?>
        <tr>
        <td><?= $row['Offerte_Nummer'] ?></td>
        <td><?= $row['datum'] ?></td>
        <td><?= $row['status'] ?></td>
        <td><?= $row['prijs'] ?></td>
        <td><?= $row['Beschrijving'] ?></td>
        <td><a href="UpdateKlant.php?ID=<?= $row['Klant_ID'] ?>">
        UPDATE
        </a></td>
        <td><a href="?ID=<?= $row['Klant_ID'] ?>">
        DELETE
         </a></td>
        </tr>
<?php endforeach; ?>
    </table>
    <!-- </form> -->
    <a href="CreateOffert.php">Nieuwe Offert</a>
    </div>
</body>
</html>