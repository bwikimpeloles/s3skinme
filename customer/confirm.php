<?php
include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
?>


<?php
if(isset($_GET['order_id'])){
$update_id = $_GET['order_id'];
}
$complete = "Complete";
$update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";
$run_customer_order = mysqli_query($con,$update_customer_order);
$update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";
$run_pending_order = mysqli_query($con,$update_pending_order);
if($run_pending_order){
echo "<script>alert('Payment has has been confirmed')</script>";
echo "<script>window.open('../admin_area/index.php?view_orders','_self')</script>";
}


?>
