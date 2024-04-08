<?php

    $output='';

    $query=mysqli_query($conn, "SELECT * from products order by rand() limit 4");

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




<div class="container sec1">
            <div class="cent">
                <div class="img">

                </div>
                
                <div class="text">
                    <h3>Shop is fun</h3>

                    <h1>BROWSE OUR</h1>
                    <h1> PREMIUM PRODUCTS</h1>
                    <p>Us which over of signs divide dominion deep fill bring they're meat beho upon own earth without morning over third. Their male dry. They are great appear whose land fly grass.</p>

                  <a href="index.php?cat"><button>Browse Now</button></a>  
                </div>
            </div>
        </div>


        <div class="container sec2">

            <div class="cent">
                <h3>popular items in the market</h3>
                <h1>BEST SELLERS</h1>

                <div class="prod_cont">
              
                    <?php echo $output?>
              
                </div>
            </div>
        </div>