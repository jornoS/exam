<?php
include 'PDO.php';
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
    <h1>Invoer</h1>
    <form action="" method="post">
        <input type="text" name="" placeholder="Factuur_nr">
        <br>
        <select name="" placeholder="">
        <option value="">-----</option>
        <?php
        if ($result->rowCount() > 0) {
        while($row = $result->fetch()) {
            echo "<option>". $row["Naam"]. "</option>";
        }
        } else {
            echo "0 results";
         }
        ?>
        </select>
        <br>
        <input type="text" name="" placeholder="prijs">
        <br>
        <input type="text" name="" placeholder="Datum">
        <br>
        <button>Save</button>
    </form>
</body>
</html>
