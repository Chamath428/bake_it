<?php $pagename="Order for an Event"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-specialMenu.css">
	<script src="<?php echo BASEURL ?>/public/js/customer/message.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/customer/navbar.js" defer></script>
	<script src="<?php echo BASEURL; ?>/public/js/customer/menu.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Order for an Event</title>
</head>
<body>

	<header>
	<?php require_once('navbar.php'); ?>
	</header>

	<section>
		<div class="side-panel">
			<h2>Catagories</h2>
			<ul class="catagory">
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/1"; ?>">Bread</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/2"; ?>">Pastry</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/3"; ?>">Cake</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/4"; ?>">Burger</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/5"; ?>">Snacks</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/6"; ?>">Donut</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/7"; ?>">Muffin</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/8"; ?>">Sweets</a></li>
				<li><a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/9"; ?>">Baverages</a></li>
			</ul>
		</div>

		<div class="burger-container">

				<?php 
				if (sizeof($data)>0) {
				foreach ($data as $key => $item) {?>
					<div class="burger-item">
						<img src="<?php echo BASEURL; ?>/public/images/b1.png">
						<h3><?php echo $item['item_name']; ?></h3>
						<span><?php echo "RS.".$item['price']; ?></span><br>
						<button id="add-button-<?php echo $key ?>" class="add-button" onclick="buttonControl('add-button-<?php echo $key ?>','close-button-<?php echo $key ?>')"><a>Add to special cart</a></button>
						<button id="close-button-<?php echo $key ?>" class="close-button" onclick="buttonControl('add-button-<?php echo $key ?>','close-button-<?php echo $key ?>')"><a>Remove from special cart</a></button>
					</div>
				<?php }
				}else{?>
					<div class="no-burger">
						<span>Sorry!No itms to show</span>
					</div>
				<?php } ?>


			</div>
		
	</section>

	<?php require_once('footer.php'); ?>
</html>