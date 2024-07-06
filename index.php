<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- head_link-->
          <?php include "includes/head_link.php" ?>
        <!-- Home Css File -->
         <link rel="stylesheet" href="css/home.css">

        <title>Welcome | PGLife</title>
    </head>
    <body>
        <!--Header Section -->
        <?php include "includes/header.php" ?>
   
        <!-- Banner Portion  -->
        <section class="banner-container">
            <!-- Text See On Banner -->
            <h2 class="white pb-3">Happiness per Square Foot</h2>
            
            <!-- Search Bar On Banner -->
            <form class="search-form" action="property_list.php" method="GET">
                <div class="input-group city-search">
                    <input type="text" name="city" placeholder="Enter Your City To Search For PGs"
                    class="form-control input-city" id="city"/>

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </section>

        <!-- section for page container to show city -->

        <section class="page-container">
            <!-- Text To Show Major Cities -->
            <h1 class="city-heading">Major Cities</h1>
            <!-- Row to Show City Image-->
            <div class="row">
                <div class="city-card-container col-md">
                    <a href="property_list.php?city=Mumbai">
                        <div class="city-card rounded-circle">
                            <img src="img/mumbai.png" alt="mumbai" class="city-img"/>
                        </div>
                    </a>
                </div>
                <div class="city-card-container col-md">
                    <a href="property_list.php?city=Delhi">

                        <div class="city-card rounded-circle">
                            <img src="img/delhi.png" alt="delhi" class="city-img"/>
                        </div>
                        
                    </a>
                </div>
                <div class="city-card-container col-md">
                    <a href="property_list.php?city=Bangaluru">

                        <div class="city-card rounded-circle">
                            <img src="img/bangalore.png" alt="bangalore" class="city-img">
                        </div>
                        
                    </a>
                </div>
                <div class="city-card-container col-md">
                    <a href="property_list.php?city=Hyderabad">

                        <div class="city-card rounded-circle">
                            <img src="img/hyderabad.png" alt="hyderabad" class="city-img">
                        </div>
                        
                    </a>
                </div>
            </div>
        </section>

        <!-- SignUp Modal-->
        <?php include "includes/signup_modal.php";
        
        //Login Modal
        include "includes/login_modal.php";
        ?>
        
        

         <!--Website Footer-->
         <?php include "includes/footer.php" ?>
    </body>

</html>