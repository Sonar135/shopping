<?php
    if(isset($_GET["desc"])){
        $id=$_GET["desc"];
    }

    if(isset($_GET["added"])){
        echo '  <div class="message" id="message">
        added to cart
    </div>';
    }


    $products='';
    $disabled='';

    $output= mysqli_query($conn, "SELECT * from products where id='$id'");
    $get_cart= mysqli_query($conn, "SELECT * from cart where product_id='$id'");

    if(mysqli_num_rows($get_cart)> 0){
        $disabled='disabled';
    }



    while($row=mysqli_fetch_array($output)){

        $product=$row["product"];
        $category=$row["category"];
        $price=$row["price"];
        $image=$row["image"];

        $products.='            <div class="image">
        <img src="uploads/'.$row["image"].'" alt="">
    </div>

    <div class="other">
        <h1>'.$row["product"].'</h1>

        <div class="star_array">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        </div>

        <div class="desc">

            '.$row["description"].'

        </div>

      <form action="" class="" method="post"> <div class="quantity">
            <div class="dec">
            <i class="fa-solid fa-minus"></i>
            </div>

            <input type="text" value="1" id="input" name="quantity" readonly>

            <div class="inc">
            <i class="fa-solid fa-plus"></i>
            </div>
        </div>


        <button '.$disabled.' name="cart">Add To Cart</button></form> 
    </div>';
    }





    if(isset($_POST["cart"])){
        $quantity=$_POST["quantity"];

        $get_curr_quan=mysqli_query($conn,"SELECT * from products where id=$id");

        $curr_row=mysqli_fetch_array($get_curr_quan);

        if($curr_row["quantity"]<$quantity){
            echo '  <div class="message" id="message">
            quantity exceeds stock
        </div>';
        }

        else{
            $insert=mysqli_query($conn, "INSERT into cart (product, category, price, quantity, image, product_id) 
            values('$product', '$category', '$price', '$quantity', '$image', '$id')");

            if($insert){

                header("location: index.php?desc=$id&added");
               
            }
        }
    }


?>




<h1>PRODUCT DETAILS</h1>
        <div class="container sec4">
          
            <div class="cent">
                <?php echo $products?>
            </div>
        </div>