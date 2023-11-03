<?php 

    require "db.php";
    session_start();

	$payment_id = $statusMsg = ''; 
	$ordStatus = 'error';
	$id = '';

	// Check whether stripe token is not empty

	if(!empty($_POST['stripeToken'])){

		// Get Token, Card and User Info from Form
		$token = $_POST['stripeToken'];
		$card_no = $_POST['card_number'];
		$card_cvc = $_POST['card_cvc'];
		$card_exp_month = $_POST['card_exp_month'];
		$card_exp_year = $_POST['card_exp_year'];
		$c_oid=$_SESSION["owner_id"];
        $id=$_SESSION["u_id"];
        $cat_id=$_SESSION["cat_id"];
        $price=$_SESSION["cat_amount"];

		$query_u=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM userinfo WHERE id=$id"));
		$query_c=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM catalog WHERE cid=$cat_id"));

		// Include STRIPE PHP Library
		require_once('stripe-php/init.php');

		// set API Key
		$stripe = array(
		"SecretKey"=>"sk_test_51NxCXUFGNkysYLrU75Um1JQaklJzThVT9PMIleedKVtG3ZnJ2ypwTAkOZDykvrHvD8lwmdZm6Fpw4RNCm7lQUkJS002Eq8c3j5",
		"PublishableKey"=>"pk_test_51NxCXUFGNkysYLrU7VkflRQY8bboi1s0m7qIJ9DtEIzWDJNnB2SSozpQTbD2B2XLUn8lKcatbe9FAw50WClXp36800TXEUn4ia"
		);

		// Set your secret key: remember to change this to your live secret key in production
		// See your keys here: https://dashboard.stripe.com/account/apikeys
		\Stripe\Stripe::setApiKey($stripe['SecretKey']);

		// Add customer to stripe 
	    $customer = \Stripe\Customer::create(array( 
	        'email' => $query_u['email'], 
	        'source'  => $token,
	        'name' => $query_u['username'],
	        'description'=>$price
	    ));

	    // Generate Unique order ID 
	    $orderID = strtoupper(str_replace('.','',uniqid('', true)));
	     
	    // Convert price to cents 
	    $itemPrice = ($price*100);
	    $currency = "usd";
	   

	    // Charge a credit or a debit card 
	    $charge = \Stripe\Charge::create(array( 
	        'customer' => $customer->id, 
	        'amount'   => $itemPrice, 
	        'currency' => $currency,  
	        'metadata' => array( 
	            'order_id' => $orderID 
	        ) 
	    ));

	    // Retrieve charge details 
    	$chargeJson = $charge->jsonSerialize();

    	// Check whether the charge is successful 
    	if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){ 

	        // Order details 
	        $transactionID = $chargeJson['id']; 
	        $paidAmount = $chargeJson['amount']; 
	        $paidCurrency = $chargeJson['currency']; 
	        $payment_status = $chargeJson['status'];
	        $payment_date = date("Y-m-d H:i:s");
	        $dt_tm = date('Y-m-d H:i:s');

	        // Insert tansaction data into the database

	        $sql = "INSERT INTO catalog_book(buyr_id,cat_id,card_number,card_expmonth,card_expyear,stat,transid,added_date)
VALUES ('$id','$cat_id','$card_no','$card_exp_month','$card_exp_year','$payment_status','$transactionID','$dt_tm')";
			
			
	        mysqli_query($con,$sql) or die("Mysql Error Stripe-Charge(SQL)".mysqli_error($con));

    		

	        // If the order is successful 
	        if($payment_status == 'succeeded'){ 
	            $ordStatus = 'success'; 
	            $statusMsg = 'Your Payment has been Successful!'; 
	    	} else{ 
	            $statusMsg = "Your Payment has Failed!"; 
	        } 
	    } else{ 
	        //print '<pre>';print_r($chargeJson); 
	        $statusMsg = "Transaction has been failed!"; 
	    } 
	} else{ 
	    $statusMsg = "Error on form submission."; 
	} 
	
?>

<!DOCTYPE html>
<html>
	<head>
        <title> Stripe Payment Gateway Integration in PHP </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/stripe.css">
    </head>

    <div class="container">
        <h2 style="text-align: center; color: blue;">Stripe Payment Gateway Integration in PHP </h2>
        <h4 style="text-align: center;">This is - Stripe Payment Success URL </h4>
        <br>
        <div class="row">
	        <div class="col-lg-12">
				<div class="status">
					<h1 class="<?php echo $ordStatus; ?>"><?php echo $statusMsg; ?></h1>
				
					<h4 class="heading">Payment Information - </h4>
					<br>
					
					<p><b>Transaction ID:</b> <?php echo $transactionID; ?></p>
					<p><b>Paid Amount:</b> <?php echo $paidAmount.' '.$paidCurrency; ?> ($<?php echo $price;?>.00)</p>
					<p><b>Payment Status:</b> <?php echo $payment_status; ?></p>
					<h4 class="heading">Product Information - </h4>
					<br>
					<p><b>Catalog Name:</b> <?php echo $query_c['c_name']; ?></p>
					<p><b>Catalog Details:</b> <?php echo $query_c['c_detail']; ?></p>
					<p><b>Price:</b> <?php echo $price.' '.$currency; ?> ($<?php echo $price;?>.00)</p>
				</div>
				<a href='login_backend.php' class='btn btn-primary'>Back to home</a>
			</div>
		</div>
	</div>
</html>