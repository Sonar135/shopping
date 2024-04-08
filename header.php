<?php
  ob_start();
  session_start();
  include 'connect.php';


?>









<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/b782cf5553.js" crossorigin="anonymous"></script>  
    <link rel="icon" type="image/x-icon" href="images\kisspng-babcock-university-university-of-ibadan-academic-d-5b1c90eb26da71.7889147215285987631592-removebg-preview.png">
    <link rel="stylesheet" href="header.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
</head>
<body>

<div class="loader">
  <img src="images\8-removebg-preview.png" alt="">
</div>
    <div class="nav">
      <div class="cent">
        <div class="logo_cont">
       <a href="index.php">  <h1>GREDDA</h1></a> 
        </div>

        <ul class="menu">
          <li>
            <a href="index.php">home</a>
          </li>

          <li>
            <a href="index.php?cat">products</a>
          </li>

          <li>
            <a href="">blog</a>
          </li>

          <li>
            <a href="">pages</a>
          </li>

          <li>
            <a href="">contact</a>
          </li>
        </ul>

        <ul class="ext">
          <li><a href=""></a> <i class="fa-solid fa-magnifying-glass"></i></li>
          <li><a href="index.php?cart"><i class="fa-solid fa-cart-shopping"></i></a> </li>
       
        </ul>
      </div>
     
    </div>
</body>
<script src="min.js"></script>
<script src="main.js"></script>

<script>
  $(window).on("load", ()=>{
    $(".loader").fadeOut("slow")
    $("body").css("overflow-y", "scroll");
  });
</script>
</html>






