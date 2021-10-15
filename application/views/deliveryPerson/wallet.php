<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/deliveryPerson/deliveryPerson-wallet.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/deliveryPerson/table.css">


</head>
<body>
      <section class="header">
        <?php include('header.php'); ?>
       </section>
   
        <div class="wallet-container" id="body">
            <h1 class="wallet-topic">Transactions of the Day</h1>
            <div class="text">
                <label for="recv-amount">Amount Received from Shop</label>
                <div class="text-fill">
                    <input type="text" name="name" id="amount"  placeholder="" value="5000LKR">
                </div>
            </div>
            <div class="wallet-table">
            <h3 id="table-caption">Wallet Details</h3>
            <table id="table-wallet">
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Order Amount</th>
                        <th>Amount Paid</th>
                        <th>Return</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td label="Order Id">001</td>
                        <td label="Order Amount">1450.00LKR</td>
                        <td label="Amount Paid">1500.00LKR</td>
                        <td label="Return">50.00LKR</td>
                    </tr>
                    <tr>
                    <td label="Order Id">002</td>
                        <td label="Order Amount">1000.00LKR</td>
                        <td label="Amount Paid">1000.00LKR</td>
                        <td label="Return">0.00LKR</td>
                    </tr>
                    <tr>
                        <td label="Order Id">003</td>
                        <td label="Order Amount">1050.00LKR</td>
                        <td label="Amount Paid">1500.00LKR</td>
                        <td label="Return">450.00LKR</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="text">
                <label for="retrn-amount">Return Amount to the shop</label>
                <div class="text-fill">
                    <input type="text" name="name" id="amount"  placeholder="" value="8500LKR">
                </div>
            </div>
        </div>
        <div class="footer">
            <?php include('footer.php'); ?>  
        </div>
</body>
</html>