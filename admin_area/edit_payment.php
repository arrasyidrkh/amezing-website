<?php

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    }else{

?>

<?php

    if(isset($_GET['edit_payment'])){

        $edit_payment_id = $_GET['edit_payment'];
        $process = "Ongoing";

        $edit_payment = "UPDATE payments SET payment_process='$process' WHERE payment_id='$edit_payment_id'";
        $run_edit = mysqli_query($con,$edit_payment);

        if($run_edit){

            echo "<script>alert('One of Your Payment Has Been Processed')</script>";

            echo "<script>window.open('index.php?view_payments','_self')</script>";

        }

    }

?>




<?php } ?>
