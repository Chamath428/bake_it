<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="../../../public/js/deliveryPerson/deliveries.js"></script> -->
    <link rel="stylesheet" type="text/css" href="../../../public/css/deliveryPerson/deliveries.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/deliveryPerson/table.css">
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <div id="header">
        ?php include('header.php')?> 
    </div>   -->
    <div class="delivery-body">
        <!--table for Delivery History-->
        <h3 id="table-caption">Delivery History</h3>
        <div class="year">
            <label for="Year">Year</label>
                <select placeholder="Select Year" >
                    <option>2021</option>
                    <option>2020</option>
                    <option>2019</option>
                    <option>2018</option>
                    <option>2017</option>
                    <option>2016</option>
                </select>
        </div>
        <div class="month">
            <label for="Month">Year</label>
                <select placeholder="Select Month" >
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                </select>
        </div>
        <div class="month">
            <label for="Month">Year</label>
                <select placeholder="Select Month" >
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                </select>
        </div>
        <table id="Delivery-History" onclick="showHistory()">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Order Id</th>
                    <th>Location</th>
                    <th>Payment</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td label="Time">10.00 a.m</td>
                    <td label="Order No">1</td>
                    <td label="Location">Panadura</td>
                    <td label="Payment">Rs.1450.00</td>
                    <td class="click more-details"><button>More details</button></td>
                </tr>
                <tr>
                    <td label="Time">10.00 a.m</td>
                    <td label="Order No">2</td>
                    <td label="Location">Panadura</td>
                    <td label="Payment">Rs.1450.00</td>
                    <td class="click more-details"><button>More details</button></td>
                </tr>
                <tr>
                    <td label="Time">10.00 a.m</td>
                    <td label="Order No">3</td>
                    <td label="Location">Panadura</td>
                    <td label="Payment">Rs.1450.00</td>
                    <td class="click more-details"><button>More details</button></td>
                </tr>
                <tr>
                    <td label="Time">10.00 a.m</td>
                    <td label="Order No">4</td>
                    <td label="Location">Panadura</td>
                    <td label="Payment">Rs.1450.00</td>
                    <td class="click more-details"><button>More details</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <?php include('footer.php');?>  
    </div>
    
</body>
</html>