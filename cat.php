<?php



$current_url = $_SERVER['PHP_SELF'];



    $output='';
    $query='';
    $fil_by_cat='';
    $fil_by_pri='';
    $sort="";



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


<?php
    if(isset($_GET["cat"])){
        $cat=$_GET["cat"];


        if($cat!=""){
            $query2=mysqli_query($conn, "SELECT * from products where category='$cat'");

            while($row2=mysqli_fetch_array($query2)){
                $fil_by_cat.= '
                <a href="index.php?desc='.$row2["id"].'"> <div class="prod_card">
                <div class="prod_img">
                    <img src="uploads/'.$row2["image"].'" alt="">
                </div>
        
               <div class="prod_text">
               <h3>'.$row2["category"].'</h3>
               <h1>'.$row2["product"].'</h1>
               <h3>₦ '.$row2["price"].'</h3>
               </div>
            </div></a>
                ';
            }
        }
        


    }
?>


<?php
    if(isset($_GET["from"]) && isset($_GET["to"])){
        $from_amount=$_GET["from"];
        $to_amount=$_GET["to"];


   
            $get_pri_fil=mysqli_query($conn, "SELECT * from products where price<='$to_amount' and price>='$from_amount'");

            while($row2=mysqli_fetch_array($get_pri_fil)){
                $fil_by_pri.= '
                <a href="index.php?desc='.$row2["id"].'"> <div class="prod_card">
                <div class="prod_img">
                    <img src="uploads/'.$row2["image"].'" alt="">
                </div>
        
               <div class="prod_text">
               <h3>'.$row2["category"].'</h3>
               <h1>'.$row2["product"].'</h1>
               <h3>₦ '.$row2["price"].'</h3>
               </div>
            </div></a>
                ';
            }
        
        


    }
?>



<?php
    if(isset($_POST["price"])){
        $from=$_POST["from"];
        $to=$_POST["to"];


        if($from!="" or $to!=""){

          
           
                header("location: index.php?cat&from=$from&to=$to");
            

          

         
        }
        


    }
?>



<?php
    if(isset($_GET["q"])){
        $q=$_GET["q"];

        $sort_query=mysqli_query($conn, "SELECT * from products order by quantity $q");

        while($row2=mysqli_fetch_array($sort_query)){
            $sort.= '
            <a href="index.php?desc='.$row2["id"].'"> <div class="prod_card">
            <div class="prod_img">
                <img src="uploads/'.$row2["image"].'" alt="">
            </div>
    
           <div class="prod_text">
           <h3>'.$row2["category"].'</h3>
           <h1>'.$row2["product"].'</h1>
           <h3>₦ '.$row2["price"].'</h3>
           </div>
        </div></a>
            ';
        }
    }
?>




<h1>PRODUCTS</h1>
<div class="container sec3">
            <div class="cent">
                <div class="filter_cont">
                    <div class="filter_op">
                        <h4>Categories</h4>

                        <div class="cat_drop">
                            <ul>
                                <li><a href="index.php?cat">All</a></li>
                                <li><a href="index.php?cat=home Appliances">Home Appliances</a></li>
                                <li><a href="index.php?cat=furniture">furniture</a></li>
                                <li><a href="index.php?cat=fashion">fashion</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="filter_op">
                        <h4>Price</h4>

                     <form action="" method="post">   <div class="price_drop">
                            <div class="input">
                            <input type="number"  name="from" id="from">
                            <span><i class="fa-solid fa-minus"></i></span>
                            <input type="number" name="to" id="to">
                            </div>
                          

                            <button name="price" id="apply">apply</button>
                        </div></form>
                    </div>

                    <div class="filter_op">
                        <h4>Availability</h4>

                        <div class="stock_drop">
                             <li><a href="index.php?cat&q=desc">Most Available</a></li>
                             <li><a href="index.php?cat&q=asc">Least Available</a></li>
                        </div>
                    </div>

                  
                </div>

                <div class="prod_cont">
                    <?php
                    
                    
                    if($cat!=""){
                        echo $fil_by_cat;
                    }

                    else if(isset($_GET["from"]) && isset($_GET["to"])){
                        echo $fil_by_pri;
                    }

                    else if(isset($_GET["q"])){
                        echo $sort;
                    }

                    else{
                        echo $output;
                    }
                   
                    
                    ?>
                </div>
            </div>
        </div>