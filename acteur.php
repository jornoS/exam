<?php
include 'connectieA.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<table>
    <tr>
    <th>voornaam</th>
    <th>achternaam</th>
    </tr>
    <?php
            if ($result->rowCount() > 0) {
        while($row = $result->fetch()) {
            echo "<tr>";
            echo "<td>". $row['VOORNAAM']. "</td>";
            echo "<td>". $row['ACHTERNAAM']. "</td>";
            echo "<td>". "<a href='delete.php?id=$row[NR]'>delete</a>". "</td>";
            echo "</tr>";
        }
        } else {
            echo "0 results";
         }
    ?>
</table>
</body>
</html>