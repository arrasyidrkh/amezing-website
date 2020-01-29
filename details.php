<?php

    $active='Shop';
    include("includes/header.php");

?>

   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->

            <div class="col-md-3"><!-- col-md-3 Begin -->

   <?php

    include("includes/sidebar.php");

    ?>

           </div><!-- col-md-3 Finish -->

           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div id="mainImage"><!-- #mainImage Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                   <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                                   <li data-target="#myCarousel" data-slide-to="1"></li>
                               </ol><!-- carousel-indicators Finish -->

                               <div class="carousel-inner">
                                   <div class="item active">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img_1; ?>" alt="Product 3-a"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img_2; ?>" alt="Product 3-b"></center>
                                   </div>
                               </div>

                               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- left carousel-control Finish -->

                               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- right carousel-control Finish -->

                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->
                   </div><!-- col-sm-6 Finish -->

                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div class="box-details"><!-- box Begin -->
                           <h1 class="text-center"><?php echo $pro_name; ?></h1>

                           <?php add_cart(); ?>

                           <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                               <div class="form-group"><!-- form-group Begin -->
                                   <label for="" class="col-md-5 control-label">Quantity</label>

                                   <div class="col-md-7"><!-- col-md-7 Begin -->
                                          <select name="product_qty" id="" class="form-control"><!-- select Begin -->
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           </select><!-- select Finish -->

                                    </div><!-- col-md-7 Finish -->

                               </div><!-- form-group Finish -->

                               <div class="form-group"><!-- form-group Begin -->
                                   <label class="col-md-5 control-label">Size</label>

                                   <div class="col-md-7"><!-- col-md-7 Begin -->

                                     <select name="product_size" class="form-control" required  oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product') disabled"><!-- form-control Begin -->

                                       <option disabled selected>Select a Size</option>
                                       <option>36</option>
                                       <option>37</option>
                                       <option>38</option>
                                       <option>39</option>
                                       <option>40</option>


                                     </select><!-- form-control Finish -->

                                   </div><!-- col-md-7 Finish -->
                               </div><!-- form-group Finish -->

                               <div class="form-group"><!-- form-group Begin -->
                                   <label for="" class="col-md-5 control-label">Custom Size</label>

                                   <div class="col-md-7"><!-- col-md-7 Begin -->

                                          <input type="text" class="form-control" name="custom_size">

                                    </div><!-- col-md-7 Finish -->

                               </div><!-- form-group Finish -->

                               <p class="price">Rp <?php echo $pro_price; ?></p>

                               <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>

                           </form><!-- form-horizontal Finish -->

                       </div><!-- box Finish -->

                       <div class="row" id="thumbs"><!-- row Begin -->

                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="0"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img_1; ?>" alt="product 1" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->

                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="1"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img_2; ?>" alt="product 2" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->

                       </div><!-- row Finish -->

                   </div><!-- col-sm-6 Finish -->


               </div><!-- row Finish -->

               <div class="box-details" id="details"><!-- box Begin -->

                       <h4>Product Details</h4>

                   <p>

                       <?php echo $pro_desc; ?>

                   </p>

                       <h4>Size</h4>

                       <ul>
                           <li>36-40</li>
                           <li>Custom Size</li>
                       </ul>

                       <h4>Stock : <?php echo $pro_stock ?></h4>

                       <hr>

               </div><!-- box Finish -->

               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box-details"><!-- box same-height headline Begin -->
                           <h3 class="text-center">You Maybe Also Like</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->

                   <?php

                        $get_products = "SELECT * FROM product ORDER BY rand() LIMIT 0,2";
                        $run_products = mysqli_query($con,$get_products);

                        while($row_products=mysqli_fetch_array($run_products)){

                            $pro_id = $row_products['product_id'];
                            $pro_name = $row_products['product_name'];
                            $pro_img_1 = $row_products['product_img_1'];
                            $pro_price = $row_products['product_price'];

                            echo "

                              <div class='col-md-4 col-sm-6 center-responsive'>

                                  <div class='product same-height'>

                                      <a href='details.php?pro_id=$pro_id'>

                                          <img class='img-responsive' src='admin_area/product_images/$pro_img_1'

                                      </a>

                                      <div class='text'>

                                          <h3> <a href='details.php?pro_id=$pro_id'> $pro_name </a> </h3>

                                          <p class='price'> Rp $pro_price </p>

                                      </div>

                                  </div>

                              </div>

                            ";

                        }

                    ?>

               </div><!-- #row same-heigh-row Finish -->

               <hr>

           </div><!-- col-md-9 Finish -->

           <form action="details.php" method="post" enctype="multipart/form-data"><!-- form Begin -->

               <h4>Feedbacks</h4>

               <div class="form-group"><!-- form-group Begin -->

                   <label>Nama</label>

                   <input type="text" class="form-control" name="f_name" required>

               </div><!-- form-group Finish -->

               <div class="form-group"><!-- form-group Begin -->

                   <label>Message</label>

                   <input type="text" class="form-control" name="f_comment" required>

               </div><!-- form-group Finish -->

               <div class="text-center"><!-- text-center Begin -->

                   <button type="submit" name="comment" class="btn btn-primary">

                   Comment

                   </button>

               </div><!-- text-center Finish -->

           </form><!-- form Finish -->

           <div class="box-details" id="details"><!-- box Begin -->

                   <hr>

                   <?php

                        $get_feedback = "SELECT * FROM feedback ORDER BY 1 DESC LIMIT 0,3";
                        $run_feedback = mysqli_query($con,$get_feedback);

                        while($row_feedback=mysqli_fetch_array($run_feedback)){

                            $feedback_name = $row_feedback['feedback_name'];
                            $feedback_comment = $row_feedback['feedback_comment'];

                            echo "

                              <h4>$feedback_name</h4>
                              <p>$feedback_comment<p>

                              <hr>

                            ";

                        }

                    ?>

           </div><!-- box Finish -->

       </div><!-- container Finish -->
   </div><!-- #content Finish -->

   <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>
</html>

<?php

if(isset($_POST['comment'])){

    $f_name = $_POST['f_name'];
    $f_comment = $_POST['f_comment'];

    $insert_feedback = "INSERT INTO feedback (feedback_name,feedback_comment) VALUES ('$f_name','$f_comment')";

    $run_feedback = mysqli_query($con,$insert_feedback);

    if($run_feedback) {

        echo "<script>alert('Thanks for your feedback!!')</script>";
        echo "<script>window.open('shop.php','_self')</script>";

    }

}

 ?>
