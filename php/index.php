<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
   <body> 
    <?php
     // befor if statement
        echo "THE GAME";
        if ($_GET["reponese"] == "yes") //if-1 statement; condittion: $_GET["reponese"] == "yes"
        {
         echo "HAS BEEN QUITED"; // if-1 code block 
        }
         if ($_GET["reponese"] == "no") //if-2 statement ; condition: $_GET["responese"] == "no" 
        {
          echo "WILL BE CONTINNUED IN 3 SECONDS"; // if-2 code block
        } 
        // after if statement 
        echo "<br>AF IF STATENMENT";
        ?>
   </body>
</html>