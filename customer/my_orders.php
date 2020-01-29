<center><!--  center Begin  -->

    <h1> My Orders </h1>

    <p class="lead"> Your orders on one place</p>

    <p class="text-muted">

        If you have any questions, feel free to <a href="../contact.php">Contact Us</a>. Our Customer Service work <strong>24/7</strong>

    </p>

</center><!--  center Finish  -->


<hr>


<div class="table-responsive"><!--  table-responsive Begin  -->

    <table class="table table-bordered table-hover"><!--  table table-bordered table-hover Begin  -->

        <thead><!--  thead Begin  -->

            <tr><!--  tr Begin  -->

                <th> ON: </th>
                <th> Due Amount: </th>
                <th> Invoice No: </th>
                <th> Qty: </th>
                <th> Size: </th>
                <th> Custom Size: </th>
                <th> Order Date:</th>
                <th> Paid / Unpaid: </th>
                <th> Status: </th>
                <th> Order Process: </th>

            </tr><!--  tr Finish  -->

        </thead><!--  thead Finish  -->

        <tbody><!--  tbody Begin  -->

          <?php

           $customer_session = $_SESSION['customer_email'];
           $get_customer = "SELECT * FROM customer WHERE customer_email='$customer_session'";
           $run_customer = mysqli_query($con,$get_customer);
           $row_customer = mysqli_fetch_array($run_customer);
           $customer_id = $row_customer['customer_id'];
           $get_orders = "SELECT * FROM customer_orders WHERE customer_id='$customer_id'";
           $run_orders = mysqli_query($con,$get_orders);

           $i = 0;

           while($row_orders = mysqli_fetch_array($run_orders)) {

                $order_id = $row_orders['order_id'];
                $due_amount = $row_orders['due_amount'];
                $invoice_no = $row_orders['invoice_no'];
                $qty = $row_orders['qty'];
                $size = $row_orders['size'];
                $custom_size = $row_orders['custom_size'];
                $order_date = substr($row_orders['order_date'],0,11);
                $order_status = $row_orders['order_status'];

                $get_process = "SELECT * FROM payments WHERE invoice_no='$invoice_no'";
                $run_process = mysqli_query($con,$get_process);
                $row_process = mysqli_fetch_array($run_process);

                $payment_process = $row_process['payment_process'];

                $i++;

                if($order_status=='Pending') {

                    $order_status = 'Unpaid';

                } else {

                    $order_status = 'Paid';

                }

           ?>

            <tr><!--  tr Begin  -->

                <th> <?php echo $i; ?> </th>

                <td> Rp <?php echo $due_amount; ?> </td>
                <td> <?php echo $invoice_no; ?> </td>
                <td> <?php echo $qty; ?> </td>
                <td> <?php echo $custom_size; ?> </td>
                <td> <?php echo $size; ?> </td>
                <td> <?php echo $order_date; ?> </td>
                <td> <?php echo $order_status; ?> </td>
                <td> <?php echo $payment_process; ?> </td>

                  <td>

                      <a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" class="btn btn-primary btn-sm"> Confirm Paid </a>

                  </td>

            </tr><!--  tr Finish  -->

            <?php } ?>

        </tbody><!--  tbody Finish  -->

    </table><!--  table table-bordered table-hover Finish  -->

    <hr>

    <center><!--  center Begin  -->

        <h1> Payment Method </h1>

        <p class="text-muted">

            If you have any questions, feel free to <a href="../contact.php">Contact Us</a>. Our Customer Service work <strong>24/7</strong>

        </p>

    </center><!--  center Finish  -->


    <hr>


    <div class="table-responsive"><!--  table-responsive Begin  -->

        <table class="table table-bordered table-hover table-striped"><!--  table table-bordered table-hover Begin  -->

            <thead><!--  thead Begin  -->

                <tr><!--  tr Begin  -->

                    <th> Bank </th>
                    <th> Nomor Rekening </th>
                    <th> A.N </th>

                </tr><!--  tr Finish  -->

            </thead><!--  thead Finish  -->

            <tbody><!--  tbody Begin  -->

               <td> Mandiri </td>
               <td> 123 123 123 123 </td>
               <td> Ningsih </td>

            </tbody><!--  tbody Finish  -->

            <tbody><!--  tbody Begin  -->

               <td> BCA </td>
               <td> 123 123 123 123 </td>
               <td> Ningsih </td>

            </tbody><!--  tbody Finish  -->

            <tbody><!--  tbody Begin  -->

               <td> BNI </td>
               <td> 123 123 123 123 </td>
               <td> Ningsih </td>

            </tbody><!--  tbody Finish  -->

        </table><!--  table table-bordered table-hover Finish  -->

    </div><!--  table-responsive Finish  -->
