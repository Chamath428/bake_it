<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/orderDetails.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/header_index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/footer.css">
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/header.js" defer ></script>
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/orderpopup.js" defer ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<body class="bgg">
    <?php include "headerOrders.php"?>
    <div id="body" class="container-1">
        <div class="container-2">
            <div class="heading">
              <h1>Order Details</h1>
            </div>
            <div id="popup-1" class="popup-container">
            <div class="mid-box">
                <h2 style="margin-bottom:15px" style="text-align: center;">Assign Delivery Person</h2>
                <?php
                 
                $i=0;
                $order_id=$data[0][0]['order_id'];
                $order_type=$data[0][0]['order_type'];
                foreach($data[2] as $key => $availableDeliveryPersons){?>
                <div class="row1">
                  <div class="d-person"><?php echo $availableDeliveryPersons['full_name'];?></div>
                <a href="<?php echo BASEURL."/branchManagerOrderController/updateDeliveryPerson/".$availableDeliveryPersons['staff_id']."/".$order_id."/".$order_type ?>">
                  <button onclick="closePopup()">Assign</button>
                </a>
                </div>
                <?php
                $i++;
                }?>
              </div>
            </div>
            <div id="popup-2" class="popup-container">
            <div class="mid-box">
                  <h3 style="margin-bottom:15px" style="text-align: center;">Are you sure to decline?</h3>
                  <div class="yes-no">
                  <a href="<?php echo BASEURL."/branchManagerOrderController/updateStatusDecline/".$order_id."/".$order_type?>">  
                    <button onclick="closePopup2()">Yes Decline</button>
                  </a>
                    <button onclick="closePopup2()">Cancel</button>
                  </div>
              </div>
              
          </div>
          <div id="popup-3" class="popup-container">
            <div class="mid-box">
                  <h3 style="margin-bottom:15px" style="text-align: center;">Are You Sure Sending the Order?</h3>
                  <div class="yes-no">
                  <a href="<?php echo BASEURL."/branchManagerOrderController/updateStatusSendToBakery/".$order_id?>">

                    <button onclick="closePopup3()">Yes Send it</button>

                  </a>
                    <button onclick="closePopup3()">No</button>
                  </div>
              </div>
              
          </div>
            <div class="order-details">
               
                    <div class="basic-details"> 
                    <table> 
                      <?php
                      $i=0;
                      $order_status=0;
                      $order_id=0;
                      foreach($data[0] as $key => $basicOrderDetails){?>
                            <tr> 
                                <td>Order ID</td> 
                                <td><?php echo $basicOrderDetails['order_id'];?></td> 
                            </tr> 
                            <tr> 
                                <td>Customer Name</td> 
                                <td><?php echo $basicOrderDetails['full_name'];?></td> 
                            </tr> 
                            <tr> 
                                <td>Contact Number</td> 
                                <td><?php echo $basicOrderDetails['contact_number'];?></td> 
                            </tr> 
                            <tr> 
                                <td>Order Status</td> 
                                <td><?php if($basicOrderDetails['order_status'] == 1 ){echo "Order Accepted";}
                                elseif($basicOrderDetails['order_status'] == 2 ){echo "Order Accepted";}
                                elseif($basicOrderDetails['order_status']== 3){echo "Assigned a Delivery Person";}
                                elseif($basicOrderDetails['order_status']== 4){echo "Send to Bakery";}
                                elseif($basicOrderDetails['order_status']== 5){echo "Prepared the Order";}?></td> 
                            </tr> 
                            <tr> 
                                <td>Needed Date</td> 
                                <td><?php echo $basicOrderDetails['needed_date'];?></td> 
                            </tr> 
                            <tr> 
                                <td>Needed Date</td> 
                                <td><?php echo $basicOrderDetails['needed_time'];?></td> 
                            </tr>

                            <?php if($basicOrderDetails['receiving_method']==2){?>
                            <tr> 
                                <td>Location</td> 
                                <td><a href="#"><?php echo $basicOrderDetails['address'];?></a></td> 
                            </tr>
                            <?php 
                            }?>
                            <tr> 
                                <td>Payment Method</td> 
                                <td><?php if ($basicOrderDetails['payment_type'] == 1) {echo "Cash Payment";} 
                                else {echo "Card Payment";}?></td> 
                                <!-- <td><a href="">Dilantha Malagamuwa</a></td> --> 
                            </tr>

                            <?php if($basicOrderDetails['receiving_method']==1){?>
                            <tr> 
                              <td>Delivery Person</td> 
                              <td><?php if (isset($basicOrderDetails['delivery_person_id'])){echo $basicOrderDetails['delivery_person_id'];}
                              else{echo "Not Assigned";}?></td> 
                              <!-- <td><a href="">Dilantha Malagamuwa</a></td> --> 
                          </tr>
                          <?php
                            }?> 
                          <?php
                          $i++;
                          $order_status=$basicOrderDetails['order_status'];
                          $order_id=$basicOrderDetails['order_id'];
                          }?>
                        </table> 
                    </div>
            </div>
            <div class="order-details-table">
            <table id="orderDetails">
                    <thead>
                      <tr>
                        <th>Item ID</th>
                        <th>Food Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      $i=0;
                      $subtotal=0;
                      $receiving_method=0;
                      $paid_amount=0;
                      $grand_total=0;

                      foreach($data[1] as $key => $orderItemDetails){?>
                      <tr>
                        <td><?php echo $orderItemDetails['item_id'];?></td>
                        <td>
                          <div class="cell">
                            <div class="image"><img src="<?php echo BASEURL;?>/public/images/branchManager/b1.png" alt=""></div>
                            <div><p><?php echo $orderItemDetails['item_name'];?></p></div>
                          </div>
                        </td>
                        <td><?php echo $orderItemDetails['price'];?></td>
                        <td><?php echo $orderItemDetails['quantity'];?></td>
                      </tr>
                      <?php
                      $i++;
                      $subtotal+=$orderItemDetails['price']*$orderItemDetails['quantity'];
                      $receiving_method=$orderItemDetails['receiving_method'];
                      $paid_amount=$orderItemDetails['paid_amount'];
                      }?>
                      
                    </tbody>
                  </table>
            </div>
            <div class="total-container"> 
              <table> 
               <tr> 
                <td>Subtotal</td> 
                <td><?php echo $subtotal.".00 LKR";?></td> 
               </tr> 
               <tr> 
                <td>Delivery Tax</td> 
                <td><?php if($receiving_method==2) {echo "300.00 LKR";} else {echo "0.00 LKR";}?></td> 
               </tr> 
               <tr> 
                <td>Advance Payment</td> 
                <td><?php echo $paid_amount.".00 LKR";?></td> 
               </tr>
               <tr> 
                <td>Grand Total to Pay</td> 
                <td><?php if($receiving_method==2){
                  $grand_total=($subtotal+300-($paid_amount));
                  echo $grand_total.".00 LKR";}
                  else{
                    $grand_total=($subtotal-$paid_amount);
                    echo $grand_total.".00 LKR";}?></td> 
               </tr> 
              </table> 
             </div>
             <div class="btn-container">
               <button class="btn" onclick="popup2()">Decline</button>
               <div class="btns">
                 <?php if($order_status!=3 and $receiving_method==2){?>
                 <button class="btn" onclick="assign()">Assigned <br> Delivery Person</button>
                 <?php
                 }?>
                <button class="btn" onclick="popup3()">Send Order <br> To Bakery</button></div>
             </div>
        </div>
    </div>
    <?php include "footer.php"?>    
</body>
</html>