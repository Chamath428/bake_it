<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-menu-items.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="<?php echo BASEURL ?>/public/js/owner/owner-menu-items.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/owner/owner-header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Menu Items</title>
</head>

<body>

    <?php require_once('header.php'); ?>


    <div class="content" id="body">

        <div class="menu-items-topic">Menu Items</div>

        <div class="drop-down-list">
            <div class="branch">
                <label for="branch">Branch</label>
                <select placeholder="Select branch">
                    <option>Kasbewa</option>
                    <option>Bahtharamulla</option>
                    <option>Piliyandala</option>

                </select>
            </div>

            <div class="category-list">
                <label for="category">Category</label>
                <select placeholder="Select category">
                    <option>Bread</option>
                    <option>Roll</option>
                    <option>Muffin</option>
                    <option>Cake</option>
                    <option>Sweet good</option>

                </select>
            </div>
            <div class="view-btn">
                <button onclick="category1()">View</button>
            </div>

        </div>


        <div class="category-table">
            <div id="category1-table">
                <h4>Bread items</h4>
                <table class="content-table">
                    <thead>
                        <tr>

                            <th>Item Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>1</td>

                            <td>White Bread</td>
                            <td>RS.60.00</td>

                            <td> <input type="checkbox" id="Check-box1" onclick="myFunction(this.id)"></td>
                        </tr>
                        <tr>

                            <td>2</td>

<<<<<<< HEAD
                            <td>Sandwich Bread</td>
                            <td>RS.65.00</td>
=======

                            <td>Sandwich Bread</td>
                            <td>RS.65.00</td>

>>>>>>> 7b54052f2b4b76186bde42f4c8ab845142862ef7

                            <td> <input type="checkbox" id="Check-box2" onclick="myFunction(this.id)"></td>


                        </tr>
                        <tr>

                            <td>3</td>

                            <td>Kurakkn Bread</td>
<<<<<<< HEAD
=======

>>>>>>> 7b54052f2b4b76186bde42f4c8ab845142862ef7
                            <td>RS.120.00</td>

                            <td> <input type="checkbox" id="Check-box3" onclick="myFunction(this.id)"></td>


                        </tr>
                    </tbody>
                </table>
                <div class="btn">
                    <div class="add-item-btn">
                        <a href="<?php echo BASEURL . "/ownerMenuController/addMenuItem" ?>"> <button>Add Item</button></a>
                    </div>
                    <div class="delete-btn" id="delbtn">
                        <button onclick="delFunction()">Delete</button>
                    </div>

                </div>

            </div>



        </div>


    </div>

    <?php include('footer.php'); ?>