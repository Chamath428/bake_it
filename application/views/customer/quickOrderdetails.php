<?php $pagename="order details"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/customer/customer-orderdetails.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-messageboxes.css">
	<script src="<?php echo BASEURL ?>/public/js/customer/orderDetails.js" defer></script>
	<script src="<?php echo BASEURL; ?>/public/js/navbar.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo BASEURL?>/public/css/customer/customer-orderRate.css">
    <script src="<?php echo BASEURL ?>/public/js/customer/orderRate.js" defer></script>


	<title>Order Details</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section class="order-details">

		<?php if (isset($data['confirmation'])){?>
			<div class="confirm-alert">
			  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			  <p><?php echo $data['confirmation']; ?></p>
			</div>
			<?php } ?>

		<div class="basic-details">
			<table>

					<tr>
						<td>Order ID</td>
						<td><?php echo $data[1]['order_id'] ?></td>
					</tr>
					<tr>
						<td>Placed Date</td>
						<td><?php echo substr($data[1]['placed_date'], 0,10); ?></td>
					</tr>
					<?php if ($data[1]['order_type']==2) { ?>

						<tr>
							<td>Required Date</td>
							<td><?php echo $data[1]['needed_date']; ?></td>
						</tr>
						<tr>
							<td>Required Time</td>
							<td><?php echo $data[1]['needed_time']; ?></td>
						</tr>

					<?php } ?>
					<tr>
						<td>Order Status</td>
						<td><?php switch ($data[1]['order_status']) {
							case '1':
								echo "Pending to accept";
								break;
							case '2':
								echo "Accepted";
								break;
							case '3':
								echo "On the way";
								break;
							case '4':
								echo "Send order to the bakery";
								break;
							case '5':
								echo "Cooking Completed";
								break;
							case '6':
								echo "Completed";
								break;
							case '7':
								echo "Declined by the shop";
								break;
							case '8':
								echo "Cancled";
								break;
							
							default:
								echo "Order Status";
								break;
						}  ?></td>
					</tr>
					<tr>
						<td>Reciving Method</td>
						<td><a href=""><?php switch ( $data[1]['reveiving_method']) {
							case '2':
								echo "Home delivery";
								break;
							case '1':
								echo "Pick up from shop";
								break;
							
							default:
								echo "Not specified";
								break;
						} ?></a></td>
					</tr>
					<?php if ($data[1]['reveiving_method']==2) {?>
						<tr>
							<td>Delivery Person</td>
							<td><a href=""><?php echo $data[1]['delivery_person_id'] ?></a></td>
						</tr>
					<?php } ?>
			</table>
		</div>

		<div class="food-details">		
			<div class="desktop-cart">
			<div class="cart-containter">
				<table>
					<tr>
						<th>Product</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>
				<?php 
				$grandTotal=0;
				foreach ($data[2] as $key => $items) { ?>
		
					<tr>
						<td>
							<div class="product-container">
								<img src="<?php echo BASEURL ?>/public/images/b1.png">
								<div>
									<p><?php echo $items['item_name']; ?></p>
								</div>
							</div>
						</td>
						<td>
							<p><?php echo $items['price'].".00 LKR"; ?></p>
						</td>
						<td>
							<div>
	 							<input type="text" name="" value="<?php echo $items['quantity']; ?>" readonly="">
	 						</div>
						</td>
						<td>
							<p><?php echo $items['price']*$items['quantity'].".00 LKR"; ?></p>
						</td>
					</tr>
				<?php 
					$grandTotal+=$items['price']*$items['quantity'];
				}?>
				</table>
			</div>
		</div>



		<div class="mobile-cart">
			<div class="cart-containterm">
			<?php foreach ($data[2] as $key => $items) {?>
			
	 			<table>
	 				<tr>
	 					<td>
	 						<div class="product-image">
	 							<img src="<?php echo BASEURL ?>/public/images/b1.png" width="40px" height="40px">
	 						</div>
	 					</td>
	 					<td></td>
	 				</tr>
	 				<tr>
	 					<td>Product</td>
	 					<td><?php echo $items['item_name']; ?></td>
	 				</tr>
	 				<tr>
	 					<td>Price</td>
	 					<td><?php echo  $items['price'].".00 LKR"; ?></td>
	 				</tr>
	 				<tr>
	 					<td>Quantity</td>
	 					<td>
	 						<div>
	 							<input type="text" name="" value="<?php echo $items['quantity'] ?>" readonly="">
	 						</div>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>Total</td>
	 					<td><?php echo $items['price']*$items['quantity'].".00 LKR"; ?></td>
	 				</tr>
	 			</table>
 			<?php  } ?>
 		</div>
		</div>
		</div>

		<div class="total-container">
			<table>
				<tr>
					<td>Subtotal</td>
					<td><?php if($data[1]['reveiving_method']==2){echo ($grandTotal-200).".00 LKR";}else {echo $grandTotal.".00 LKR";} ?></td>
				</tr>
				<tr>
					<td>Delivery Tax</td>
					<td><?php if($data[1]['reveiving_method']==2){echo "200.00 LKR";}else echo ".00 LKR"; ?></td>
				</tr>
				<tr>
					<td>Grand Total</td>
					<td><?php echo $grandTotal.".00 LKR" ?></td>
				</tr>
			</table>
		</div>

		<?php if ($data[1]['order_status']==1) {?>

			<div class="buttons">
			
			<button type="button"><a href="<?php echo BASEURL."/myordersController/cancelOrder/".$data[1]['order_id']; ?>">Cancle-Order</a></button>

		</div>

		<?php } ?>

<?php if ($data[1]['order_status']==6) {?>
		<div class="buttons">
			
			<button data-modal-target="#modal">Rate Order</button>
			<button><a href="<?php echo BASEURL."/cartController"; ?>">Re-Order</a></button>

		</div>

	</section>


	<div class="modal" id="modal">
    <div class="modal-header">
    	<?php if ($data[1]['order_status']==6) {?>
      <div class="title">Rate the order</div>
      <button data-close-button class="close-button">&times;</button>
      <?php } ?>
    </div>
    <div class="modal-body">

	<!--  -->

	<div class="rate-container">
      <div class="post">
        <div class="text">Thanks for rating us!</div>
        <div class="edit">EDIT</div>
      </div>
      <form method="post" action="<?php echo BASEURL."/myordersController/rateOrder/".$data[1]['order_id']."/".$data[1]['menu_id']."/".$data[1]['customer_id'] ?>">
      <div class="star-widget">
        <input type="radio" name="rate" id="rate-5" value="5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4" value="4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3" value="3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2" value="2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1" value="1">
        <label for="rate-1" class="fas fa-star"></label>
        <div class="form">
          <header></header>
          <div class="textarea">
            <textarea name="review" cols="30" placeholder="Share your experience with all.."></textarea>
          </div>
          <div class="sub-btn">
            <button class="submit-rate" type="submit">Post</button>
          </div>
        </div>
        </form>
      </div>
<!--  -->

    </div>

    </div>
  </div>
  <div id="overlay"></div>

  		<?php } ?>

	<?php require_once('footer.php'); ?>

</html>