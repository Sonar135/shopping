<?php

    $output='';
    $disable_dec='';
    $total_cost=0;
    $disable_check='';
    $total_payment=0;
    $delivery=0;

    $query=mysqli_query($conn, "SELECT * from cart");
    $disable_check= (mysqli_num_rows($query) < 1) ?'disabled':'';
    while($row=mysqli_fetch_array($query)){

      $disable_dec = ($row["quantity"] < 2) ? 'disabled' : '';
     

      $row["price"]*=$row["quantity"];

      $total_cost+=$row["price"];

      $delivery=(mysqli_num_rows($query) > 0) ?2000: 0;

      $total_payment=$delivery+$total_cost;

        $output.= '
        <div class="c_cont">
        <div class="top">
          <div class="det">
              <div class="cart_img">
                  <img src="uploads/'.$row["image"].'" alt="">
              </div>

              <div class="prod_data">
                  <h3>'.$row["product"].'</h3>
                  <h4>'.$row["category"].'</h4>
              </div>
          </div>

          <div class="price">
          <h1> ₦ '.$row["price"].'</h1>
          </div>
      </div>

      <div class="bottom">
         <a href="remove.php?id='.$row["id"].'" class=""><div class="remove">
          <i class="fa-solid fa-trash"></i>
          <h3>REMOVE</h3>
          </div></a> 

          <div class="quant">
             <a href="dec.php?id='.$row["id"].'" class=""><button '.$disable_dec.' class="dec">
              <i class="fa-solid fa-minus"></i>
              </button></a> 

                  <div class="q_num">
                      '.$row["quantity"].'
                  </div>

             <a href="inc.php?id='.$row["id"].'" class="">  <button class="inc">
               <i class="fa-solid fa-plus"></i>
              </button></a>


          </div>
      </div>
    </div>
        ';
    }
?>







<h1>CART</h1>

<div class="container sec5">
            <div class="cent">
                <div class="c_prod">
           

                    <?php echo $output?>

           
                </div>

                <div class="total_cont">
                    <h1>CART SUMMARY</h1>

                    <div class="summ_box">
                        <div class="ne">
                            <h3>Subtotal</h3>
                            <h1>₦ <?php echo $total_cost?></h1>

                        </div>
                        <div class="ne">
                            
                        <h3>Delivery</h3>
                            <h1>₦ <?php echo $delivery?></h1>
                        </div>
                    </div>

                    <button <?php echo $disable_check?>>CHECKOUT (₦ <?php echo $total_payment?>)</button>
                </div>
            </div>
        </div>