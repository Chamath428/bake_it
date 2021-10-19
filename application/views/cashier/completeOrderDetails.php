<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/cashier/cashier-complete-details.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/cashier/cashier-footer.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <!-- <script src="" defer></script> -->
    <title> complete order details</title>
</head>
<body>

      

      <header>
          <div class="header-container">
                <!-- <div class="title"> -->
                    <span class="bakeit" id="bakeId">Bake_it</span>
                <!-- </div> -->
                <!-- <div class="header-icons"> -->
                    <span class="user-icon"><a href="profile.php"><i id="user" class="fas fa-user"></i></a></span>
                    <span class="bell-icon"><a href="#"><i class="fas fa-bell"></i></a></span>
                <!-- </div> -->
            </div>
     </header>
     <div class="back-arrow">
              <a href="completedOrder.php" class="herf-hand-point">
                <i class='fa' id="back-hand-point">&#xf0a5; </i>
              </a>
           
      </div>

      <div class="order-no">Order - 000#</div>
    <div class="content">
          
        <div class="details">
              <table class="content-table">
                  <tbody>

                    <tr>
                        <td>Order Id</td>
                        <td>......</td>  
                        
                    </tr>
                    <tr>
                        <td>Order Type</td>
                        <td>......</td>  
                      
                    </tr>
                    <tr>
                        <td>Outlet</td>
                        <td>......</td>

                    </tr>
                    <tr>
                      <td>Status</td>
                      <td>......</td>

                  </tr>
                  <tr>
                      <td>Date</td>
                      <td>......</td>

                  </tr>
                  <tr>
                      <td>......</td>
                      <td>......</td>

                  </tr>
                </tbody>
            </table>
            <div class="rate">
                <h3>Rate :</h3><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
      
        </div>
    </div>
     
<?php include('footer.php'); ?>