<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/cashier/cashier-quick-order-details.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/cashier/cashier-header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/cashier/cashier-footer.css">
    <script src="<?php echo BASEURL ?>/public/js/cashier/cashier-quick-order-details.js" defer></script>
    <script src="<?php echo BASEURL; ?>/public/js/cashier/cashier-header.js" defer></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>

<body class="bgg">
    <?php require_once("headerOrder.php"); ?>

    <div id="body" class="container-1">
        <div class="container-2">
            <div class="heading">
                <h3>Quick Order Details</h3>
            </div>

            <div class="order-details">

                <div class="basic-details">
                    <table>
                        <tr>
                            <td>Order ID</td>
                            <td><?php echo $data[1]['order_id'] ?></td>
                        </tr>
                        <?php if (!empty($data[2])) {?>
                        <tr>
                            <td>Customer Name</td>
                            <td><?php echo $data[2]['full_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Contact Number</td>
                            <td><?php echo $data[2]['contact_number'] ?></td>
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
                                    echo "Order Completed";
                                    break;
                                case '7':
                                    echo "Declined by the Shop";
                                    break;
                                case '8':
                                    echo "Order Canceled";
                                    break;
                                
                                default:
                                    echo "Order Status";
                                    break;
                            }  ?></td>
                        </tr>

                        <tr>
                        <td>Reciving Method</td>
                            <td><a href=""><?php switch ($data[1]['delivery_type']) {
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

                        <tr>
                            <td>Payment Method</td>
                            <td><?php switch ($data[1]['payment_type']) {
                                case '1':
                                    echo "Cash";
                                    break;
                                case '2':
                                    echo "Card";
                                    break;
                                
                                default:
                                    echo "Not specified";
                                    break;
                            } ?></td>
                        </tr>

                        <tr>
                            <td>Payment Method</td>
                            <td><?php switch ($data[1]['order_type']) {
                                case '1':
                                    echo "Quick Order";
                                    break;
                                case '2':
                                    echo "Special Order";
                                    break;
                                
                                default:
                                    echo "Not specified";
                                    break;
                            } ?></td>
                        </tr>

                        <?php if ($data[1]['delivery_type']==2) {?>
                        <tr>
                            <td>Delivery Person</td>
                            <td><a href=""><?php echo $data[1]['delivery_person_id'] ?></a></td>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
            <div class="order-details-table">
                <div class="cart-containter">
                <table id="orderDetails">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                $grandTotal=0;
                foreach ($data[3] as $key => $items) { ?>
        
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

                    </tbody>
                </table>
                </div>
            </div>
            <div class="total-container">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td><?php echo $grandTotal.".00 LKR" ?></td>
                    </tr>
                    <tr>
                        <td>Delivery Tax</td>
                        <td><?php if ($data[1]['delivery_type']==2) {
                            echo "200.00 LKR";
                        }else echo "00.00 LKR"; ?></td>
                    </tr>
                    <tr>
                        <td>Grand Total</td>
                        <td><?php echo $data[1]['total_amount'].".00 LKR" ?></td>
                    </tr>
                    <tr>
                        <td>Paid Amount</td>
                        <td><?php echo $data[1]['paid_amount'].".00 LKR" ?></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>


    <?php include "footer.php" ?>
</body>

</html>