<?php

    $output='';

    $query=mysqli_query($conn, "SELECT * from cart");

    while($row=mysqli_fetch_array($query)){
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
              <div class="dec">
              <i class="fa-solid fa-minus"></i>
              </div>

                  <div class="q_num">
                      '.$row["quantity"].'
                  </div>

               <div class="inc">
               <i class="fa-solid fa-plus"></i>
              </div>


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
                            <h1>₦ 12000</h1>

                        </div>
                        <div class="ne">
                            
                        <h3>Delivery</h3>
                            <h1>₦ 2000</h1>
                        </div>
                    </div>

                    <button>CHECKOUT (₦ 21000)</button>
                </div>
            </div>
        </div>