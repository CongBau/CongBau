<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       require 'connect.php';
       $sqL = "INSERT INTO flights (Origin, Destination,Duration) VALUES ('Hà Nội','Paris','4000')"; 
       $conn->query($sql);
       $conn-> close();
    ?>
</body>
</html>