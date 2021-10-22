<head>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-header.css">
    <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-header.js" defer ></script>
    <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-availability.js"></script>
</head>


<div class="container">
<div class="navigation" id="mySidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()" onmouseover="leftBakeIt()">
        <ul>
            <li>
                <a href="<?php echo BASEURL."/dashboardController"; ?>" class="active">
                    <span class="icon"><i class="fas fa-th-large"></i></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?php echo BASEURL."/deliveriesController"; ?>" class="hrf">
                    <span class="icon"><i class="fas fa-motorcycle"></i></span>
                    <span class="title">Deliveries</span>
                </a>
            </li>
            <li>
                <a href="<?php echo BASEURL."/deliveriesController/getDeliveryOverview"; ?>" class="hrf">
                    <span class="icon"><i class="fas fa-bookmark"></i></span>
                    <span class="title">Overview</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- <div class="toggle"><span onclick="leftBakeIt()"><i  id="menuBtn" class="fas fa-bars"></i></span></div> -->
       <div id="arrowAnim">
            <div class="arrowSliding">
                <div class="arrow"></div>
            </div>
            <div class="arrowSliding delay1">
                <div class="arrow"></div>
            </div>
            <div class="arrowSliding delay2">
                <div class="arrow"></div>
            </div>
            <div class="arrowSliding delay3">
                <div class="arrow"></div>
            </div>
        </div>


        <div id="arrowAnim-left">
            <div class="arrowSliding-left">
                <div class="arrow-left"></div>
            </div>
            <div class="arrowSliding delay1-letf">
                <div class="arrow-left"></div>
            </div>
            <div class="arrowSliding delay2-left">
                <div class="arrow-left"></div>
            </div>
            <div class="arrowSliding delay3-left">
                <div class="arrow-left"></div>
            </div>
        </div>

</div>

<header class="header-container">
    <div class="bake-it" id="bakeId">
        <span class="bakeit">Bake_it</span>
    </div>
    <span id="available">You are available for deliveries</span>
    <div class="header-icons"> 
        <span class="user-icon"><a href="profile.php"><i id="user" class="fas fa-user"></i></a></span>
        <span class="text">You logged in as : Delivery Person</span>
        <span class="bell-icon"><a href="#"><i class="fas fa-bell"></i></a></span>
        <span class ="sign-out"><a href="#"><i class="fas fa-sign-out-alt"></i></a></span>
        <span class="text"><a href="#">Logout</a></span>
        <span class="side-toggle">
            <a href="#" class="icon" onclick="sidetoggle()">
                <i class="fa fa-bars"></i>
            </a>
        </span>
    </div>
</header>

 <!-- javascript:void(0); -->