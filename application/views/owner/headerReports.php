
    <div class="container">
        <div class="navigation" id="mySidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
            <ul>
                <li>
                     <a href="<?php echo BASEURL."/dashboardController" ?>" class="active">
                        <span class="icon"><i class="fas fa-th-large"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                     <a href="<?php echo BASEURL."/ownerReportController" ?>" class="active">
                        <span class="icon"><i class="fas fa-chart-pie"></i></span>
                        <span class="title">Overview</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL."/ownerReportController/salesReports" ?>" class="hrf">
                        <span class="icon"><i class="fas fa-file-pdf"></i></span>
                        <span class="title">Total Sales Report</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL."/ownerReportController/itemReports" ?>" class="hrf">
                        <span class="icon"><i class="fab fa-elementor"></i></span>
                        <span class="title">Categories Sales Report</span>
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
        <span class="user-icon"><a href="<?php echo BASEURL . '/profileEmployeeController' ?>"><i id="user" class="fas fa-user"></i></a></span>
        <span class="text">You logged in as : Owner</span>
        <span class="bell-icon" onclick="toggleNotifi()">
            <a href="">
                <i class="fas fa-bell">
                    <!-- ?php include "notificationPanel.php" ?> -->
                </i> 
            </a>
        </span>
        <span class="sign-out"><a href="<?php echo BASEURL . '/loginController/logout' ?>"><i class="fas fa-sign-out-alt"></i></a></span>
        <!-- <span class="text"><a href="#">Logout</a></span> -->
        <span class="side-toggle">
            <a href="#" class="icon" onclick="sidetoggle()">
                <!-- <a href="" class="icon"> -->
                <i class="fa fa-bars"></i>
            </a>
        </span>
        <span class="text"><a href="<?php echo BASEURL . '/loginController/logout' ?>">Logout</a></span>
    </div>
        </header>

 
