<?php
    include "connect.php";


    if(isset($_GET["id"])){
        $id=$_GET["id"];
    }


    $delete=mysqli_query($conn, "DELETE from cart where id='$id'");

    if($delete){
        header("location: index.php?cart");
    }
?>