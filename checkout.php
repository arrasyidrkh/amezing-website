<?php

    $active='Checkout';
    include("includes/header.php");

?>

   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->

          <?php

           if(!isset($_SESSION['customer_email'])) {

              include("customer/customer_login.php");

           } else {

              include("customer/process_checkout.php");

           }

           ?>


       </div><!-- container Finish -->
   </div><!-- #content Finish -->

   <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>
</html>
