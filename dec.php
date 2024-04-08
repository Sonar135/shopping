<?php
    include "connect.php";


    if(isset($_GET["id"])){
        $id=$_GET["id"];
    }

    $get_qua=mysqli_query($conn, "SELECT quantity from cart where id='$id'");

    $quantity=mysqli_fetch_assoc($get_qua)["quantity"];

    $quantity-=1;


    $update=mysqli_query($conn, "update cart set quantity='$quantity' where id='$id'");

    if($update){
        header("location: index.php?cart");
    }
?>