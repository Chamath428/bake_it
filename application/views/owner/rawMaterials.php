<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-raw-materials.css" class="rel">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-footer.css" class="rel">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-header.css" class="rel">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
	<script src="<?php echo BASEURL ?>/public/js/owner/owner-raw-materials.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/owner/owner-header.js" defer></script>
	<script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
	<title>Raw Materials</title>
</head>

<body>

	<?php require_once("header.php"); ?>

	<div class="bgg" id="body">
		<div class="middle-section">
			<div class="category">
				<h3>Select Category</h3>
				<select placeholder="Select Category">
					<option>Category 1</option>
					<option>Category 2</option>
					<option>Category 3</option>
					<option>Category 4</option>
					<option>Category 5</option>
					<option>Category 6</option>

				</select>
			<button class="get-btn">Get Item List</button>

			</div>

			<header class="topic">
				<h3>Raw Materials</h3>
			</header>
			<article>


				<div class="search-container">
					<form action="#">
						<input type="text" placeholder="Search.." name="search">
						<button type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>

				<table class="inventory">
					<thead>
						<tr>
							<th></th>
							<th>Item Id</th>
							<th>Item Name</th>
							<th>Available</th>

						</tr>
					</thead>
				</table>
				<div class="data-content-scroll">
					<table id="dataTable">
						<tbody>
							<tr>
								<td><input type="checkbox" id="Check-box" name="chk"></td>
								<td><span contenteditable>###</span></td>
								<td><span contenteditable>item1</span></td>
								<td><span contenteditable>15</span></td>
							</tr>

						</tbody>
					</table>
					<input class="del-row" type="button" value="Delete Item" onclick="deleteRow('dataTable')" />
					<input class="add" type="button" onclick="addRow('dataTable')" value="Add Item">
				</div>

				<button class="save-btn" onclick="itemSave()">Save</button>
			</article>




		</div>
	</div>


	<?php require_once("footer.php"); ?>