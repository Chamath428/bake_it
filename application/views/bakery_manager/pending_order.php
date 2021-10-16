<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/bakery_manager/pending_order.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../public/js/bakery_manager/pending_order.js" defer></script>
    <script src="../../../public/js/bakery_manager/header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Pending Order</title>
</head>
<body>
   

    <?php require_once("header_orders.php"); ?>
   <div class="bgg" id="body">
        <div class="pending">Pending Order</div>

        <div class="table">
        <table class="content-table">
            <thead>
                <tr>
                    <th>Order No</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Outlet </th>
                    
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>001</td>
                    <td>chocolate</td>
                    <td>10Kg</td>
                    <td>Deniyaya</td>  
                    
                    
                </tr>
                <tr>
                    <td>002</td>
                    <td>sweet rolls</td>
                    <td>130</td>
                    <td>Matara</td>  
                    
                    
                </tr>
                <tr>
                    <td>003</td>
                    <td>rolls</td>
                    <td>400</td>
                    <td>Akuressa</td>  
                    
                    
                    
                </tr>
            </tbody>
        </table>
        </div>
   </div>
     
      <?php require_once("footer.php"); ?>
 