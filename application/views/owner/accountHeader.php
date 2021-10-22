<head>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/owner/owner-header.css">
    <script src="<?php echo BASEURL ?>/public/js/owner/owner-header.js" defer ></script>
</head>


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
                    <a href="<?php echo BASEURL."/createEmployeeAccountController" ?>" class="hrf">
                        <span class="icon"><i class="fas fa-user-plus"></i></span>
                        <span class="title">Create</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL."/createEmployeeAccountController/getEmployeeAccounts" ?>" class="hrf">
                        <span class="icon"><i class="fas fa-search"></i></span>
                        <span class="title">Search</span>
                    </a>
                </li>
            </ul>
        </div>
   
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
                <span class="user-icon"><a href="profile.php"><i id="user" class="fas fa-user"></i></a>You logged in as : Owner</span>
                <span class="bell-icon"><a href="#"><i class="fas fa-bell"></i></a></span>
                <span class ="sign-out"><a href="<?php echo BASEURL.'/loginController/logout' ?>"><i class="fas fa-sign-out-alt"></i>Logout</a></span>
             </div>
        </header>

 