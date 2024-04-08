<?php
    include 'header.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="hero">
       
        <?php
            if(isset($_GET["cat"])){
                include "cat.php";
            }


            else if(isset($_GET["cart"])){
                include "cart.php";
            }

            else if(isset($_GET["desc"])){
                include "desc.php";
            }

            else{
                include "home.php";
            }
        ?>
      
    </div>
</body>
</html>