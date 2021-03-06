<head>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/header_index.css">
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/header.js" defer ></script>
</head>

    <div class="container">
        <div class="navigation" id="mySidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
            <ul>
                <li>
                     <a href="<?php echo BASEURL; ?>" class="active">
                        <span class="icon"><i class="fas fa-th-large"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                     <a href="<?php echo BASEURL."./branchManagerReportController" ?>" class="active">
                        <span class="icon"><i class="fas fa-chart-pie"></i></span>
                        <span class="title">Overview</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL."/branchManagerReportController/getTotalSalesReport" ?>" class="hrf">
                        <span class="icon"><i class="fas fa-user-cog"></i></span>
                        <span class="title">Total Sales Report</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL."/branchManagerReportController/getItemWiseSalesReport" ?>" class="hrf">
                        <span class="icon"><i class="fab fa-elementor"></i></span>
                        <span class="title">Category Sales Reports</span>
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
</div>
       <header class="header-container">
            <div class="bake-it" id="bakeId">
                <span class="bakeit">Bake_it</span>
           </div>
            <div class="header-icons"> 
                <span class="user-icon"><a href="<?php echo BASEURL."/profileEmployeeController"; ?>"><i id="user" class="fas fa-user"></i></a>You logged in as : Branch Manager</span>
                <span class="bell-icon"><a href="#"><i class="fas fa-bell"></i></a></span>
                <span class ="sign-out"><a href="<?php echo BASEURL.'/loginController/logout' ?>"><i class="fas fa-sign-out-alt"></i>Logout</a></span>
             </div>
        </header>
