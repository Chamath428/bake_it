<div class="container">
    <div class="navigation" id="mySidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()" onmouseover="leftBakeIt()">
        <ul>
            <li>
                <a href="<?php echo BASEURL ?>" class="active">
                    <span class="icon"><i class="fas fa-th-large"></i></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>

                <a href="<?php echo BASEURL . "/rawMaterialController" ?>" class="hrf">

                    <span class="icon"><i class="fas fa-warehouse"></i></span>
                    <span class="title">Raw Materials</span>
                </a>
            </li>
            <li>
                <a href="<?php echo BASEURL . "/bakeryManagerOrderController" ?>" class="hrf">
                    <span class="icon"><i class="fas fa-truck"></i></span>
                    <span class="title">Orders</span>
                </a>
            </li>
            <li>
                <a href="<?php echo BASEURL . "/bakeryManagerDailyRequirementController" ?>" class="hrf">
                    <span class="icon"><i class="fas fa-tasks"></i></span>
                    <span class="title">Daily Requirement</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- <div class="toggle"><span ><i  id="menuBtn" class="fas fa-bars"></i></span></div> -->
    <!-- <div id="arrowAnim">
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
        </div> -->


    <!-- <div id="arrowAnim-left">
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
        </div> -->



    <div>
        <button class="logo-name__button">
            <i class="fas fa-angle-double-right" id="logo-name__icon"></i>
        </button>
        <button class="logo-name__button_left">
            <i class="fas fa-angle-double-left" id="logo-name__icon_left"></i>
        </button>
    </div>

</div>

<header class="header-container">
    <div class="bake-it" id="bakeId">
        <span class="bakeit">Bake_it</span>
    </div>
    <div class="header-icons">
        <span class="user-icon"><a href="<?php echo BASEURL . "/profileEmployeeController"; ?>"><i id="user" class="fas fa-user"></i></a>You logged in as : Bakery Manager</span>
        <span class="bell-icon"><a href="#"><i class="fas fa-bell"></i></a></span>
        <span class="sign-out"><a href="<?php echo BASEURL . '/loginController/logout' ?>"><i class="fas fa-sign-out-alt"></i>Logout</a></span>
    </div>
</header>