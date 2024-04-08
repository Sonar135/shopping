<?php

    $output='';

    $query=mysqli_query($conn, "SELECT * from products order by rand()");

    while($row=mysqli_fetch_array($query)){
        $output.= '
        <a href="index.php?desc='.$row["id"].'"> <div class="prod_card">
        <div class="prod_img">
            <img src="uploads/'.$row["image"].'" alt="">
        </div>

       <div class="prod_text">
       <h3>'.$row["category"].'</h3>
       <h1>'.$row["product"].'</h1>
       <h3>₦ '.$row["price"].'</h3>
       </div>
    </div></a>
        ';
    }
?>




<h1>PRODUCTS</h1>
<div class="container sec3">
            <div class="cent">
                <div class="filter_cont">
                    <div class="filter_op">
                        <h4>Categories</h4>
                    </div>

                    <div class="filter_op">
                        <h4>Price</h4>
                    </div>

                    <div class="filter_op">
                        <h4>Availability</h4>
                    </div>

                  
                </div>

                <div class="prod_cont">
                    <?php echo $output?>
                </div>
            </div>
        </div>