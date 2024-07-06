<!-- Header Section -->
<header class="header sticky-top">
            <nav class="navbar navbar-expand-md navbar-light">
                <!-- Logo  -->
                <a class="navbar-brand" href="index.php" >
                    <img src="img/logo.png" class="logo">
                </a>

                <!-- Menu Button For Small Screen -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Nav Sign In & Sign Up button -->

                <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                    <ul class="navbar-nav">
                        <?php 
                        //check if user is loging or not 
                        if(!isset($_SESSION["user_id"])) {

                        ?>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#signup-modal">
                                <i class="fas fa-user">SignUp</i>
                            </a>
                        </li>
                        <div class="nav-vl"></div>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#login-modal">
                                <i class="fas fa-sign-in-alt">Login</i>
                            </a>
                        </li>
                        <?php
                        } else{
                        ?>
                        <div class="nav-name">
                            Hi, <?php echo $_SESSION["full_name"] ?>
                        </div>
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <i class="fas fa-user"></i> Dashboard
                            </a>
                        </li>
                        <div class="nav-vl"></div>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
         </header>

 <!-- loading  -->
<div id="loading"></div> 