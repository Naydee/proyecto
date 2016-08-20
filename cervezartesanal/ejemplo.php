<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cervezasart";
 
    $conn = new mysqli($servername, $username, $password, $dbname);
 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
 
    $sql = "SELECT * FROM chingoneria";
    $result = $conn->query($sql);
 




    $conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
        table td{ padding: 10px; }
        img{ width: 100px; }
    </style>
</head>
<body>
    <table border="1">
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><img src="<?php echo $row['Cerveza']; ?>"></td>
            <td><?php echo $row['Precio']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>


