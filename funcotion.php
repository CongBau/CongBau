<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       // connect to the database
       require 'connect.php';
       // Create sqL to insert data
       $sqL = "INSERT INTO flights (Origin, Destination,Duration) VALUES ('Hà Nội','Paris','4000')";
       // run the  sqL query
       $conn->query($sqL);
       // close the connection 
       $conn-> close();
    ?>
</body>
</html>