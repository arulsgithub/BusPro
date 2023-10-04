<?php

    require '_functions.php';
    $conn = db_connect();
?>


<!-- <header>
        <nav id="navbar">
            <ul>
                <li class="nav-item">
                    <?php 
                        echo $user_name;
                    ?>
                </li>
                <li class="nav-item">
                    <img class="adminDp" src="../assets/img/admin_pic.jpg" alt="Admin Profile Pic" width="22px" height="22px">
                </li>
            </ul>
        </nav>
    </header> -->
    <main id="container">
        <div id="sidebar" style="background-color:black">
            <h4><i class="fas fa-bus"></i> BusPro</h4>
            <div>
               <!-- <img class="adminDp" src="../assets/img/userav-min.png" height="125px" alt="Admin Profile Pic">-->
                <p>
                   <!-- <?php  echo '@'.$user_name;  ?> -->
                </p>
                <p>User</p>
            </div>
            <ul id="options">
                <li class="option <?php if($page=='dashboard'){ echo 'active';}?>"> 
                    <a href="./cust_dashboard.php">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                
               
                <li class="option <?php if($page=='bus'){ echo 'active';}?>">
                    <a href="cust_bus.php">
                    <i class="fas fa-bus"></i> Buses
                    </a>
                </li>
                <li class="option <?php if($page=='route'){ echo 'active';}?>">
                    <a href="cust_route.php">
                    <i class="fas fa-road"></i> Routes    
                    </a>
                </li>
                
                <li class="option <?php if($page=='customer'){ echo 'active';}?>">
                    <a href="reserve.php">
                    <i class="fas fa-users"></i> Register now
                    </a>
                </li>
                <li class="option <?php if($page=='booking'){ echo 'active';}?>">
                    <a href="cust_booking.php">
                    <i class="fas fa-ticket-alt"></i> Book now
                    </a>
                </li>
                <li class="option <?php if($page=='seat'){ echo 'active';}?>">
                    <a href="cust_seat.php">
                    <i class="fas fa-th"></i> Seats
                    </a>
                </li>
                <!--<li class="option <?php if($page=='signup'){ echo 'active';}?>">
                    <a href="./signup.php">
                    <i class="fas fa-user-lock"></i> Add New Admin        
                    </a>
                </li>-->
                <li class="option <?php if($page=='seat'){ echo 'active';}?>">
                    <a href="download.php">
                    <i class="fas fa-th"></i> Get ticket
                    </a>
                </li>
            </ul>
        </div>
        <div id="main-content">
            <section id="welcome">
                <ul>
                    <li class="welcome-item">Welcome
                        <span id="USER">
                            <?php 
                         //       echo $user_fullname;
                            ?>
                        </span>
                    </li>
                    <li class="welcome-item">
                        <button id="logout" class="btn-sm">
                            <a href="../assets/partials/cust_logout.php">LOGOUT</a>
                        </button>
                    </li>
                </ul>
            </section>