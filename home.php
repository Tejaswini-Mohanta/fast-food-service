
<?php
include 'includes/connect.php';
$user_id = $_SESSION['user_id'];

	if($_SESSION['customer_sid']==session_id())
	{
		?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Favicons-->
  <link rel="icon" href="images/favicon/fast.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/fast.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/fast.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/foodaap.css" type="text/css" rel="stylesheet" media="screen,projection">

   <style type="text/css">
  .input-field div.error{
    position: relative;
    top: -1rem;
    left: 0rem;
    font-size: 0.8rem;
    color:#FF4081;
    -webkit-transform: translateY(0%);
    -ms-transform: translateY(0%);
    -o-transform: translateY(0%);
    transform: translateY(0%);
  }
  .input-field label.active{
      width:100%;
  }
  .left-alert input[type=text] + label:after, 
  .left-alert input[type=password] + label:after, 
  .left-alert input[type=email] + label:after, 
  .left-alert input[type=url] + label:after, 
  .left-alert input[type=time] + label:after,
  .left-alert input[type=date] + label:after, 
  .left-alert input[type=datetime-local] + label:after, 
  .left-alert input[type=tel] + label:after, 
  .left-alert input[type=number] + label:after, 
  .left-alert input[type=search] + label:after, 
  .left-alert textarea.materialize-textarea + label:after{
      left:0px;
  }
  .right-alert input[type=text] + label:after, 
  .right-alert input[type=password] + label:after, 
  .right-alert input[type=email] + label:after, 
  .right-alert input[type=url] + label:after, 
  .right-alert input[type=time] + label:after,
  .right-alert input[type=date] + label:after, 
  .right-alert input[type=datetime-local] + label:after, 
  .right-alert input[type=tel] + label:after, 
  .right-alert input[type=number] + label:after, 
  .right-alert input[type=search] + label:after, 
  .right-alert textarea.materialize-textarea + label:after{
      right:70px;
  }
  header .logo-wrapper{
  font-size: 2.5rem;
  font-weight: bolder;
  color:#666;
}

header .logo-wrapper i{
  padding-right: 1.5rem;
  color:red;
}
.navbar{
    position: fixed;
  display: flex;
  align-items: center;
  /* justify-content: space-between; */
}
.navbar a{
    
  font-size: 2rem;
  margin-left: 2rem;
  color:white;
}

.navbar a:hover{
  color:red;
}

  </style> 
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper">
                      <a href="#" class="brand-logo darken-1"><i class="fas fa-utensils"></i>Fast Food Junction </a>
                      <span class="logo-text">Logo</span></h1></li>
                    </ul>				
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
				 <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="routers/logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="col col s8 m8 l8">
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $name;?> <i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal"><?php echo $role;?></p>
                </div>
            </div>
            </li>
            <li class="bold "><a href="home.php" class="waves-effect waves-cyan"><i class="mdi-action-home"></i>Home</a>
            </li>	
            <li class="bold"><a href="index.php" class="waves-effect waves-cyan"><i class="mdi-editor-border-color"></i> Order Food</a>
            </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Orders</a>
                            <div class="collapsible-body">
                                <ul>
								<li><a href="orders.php">All Orders</a>
                                </li>
								<?php
									$sql = mysqli_query($con, "SELECT DISTINCT status FROM orders WHERE customer_id = $user_id;");
									while($row = mysqli_fetch_array($sql)){
                                    echo '<li><a href="orders.php?status='.$row['status'].'">'.$row['status'].'</a>
                                    </li>';
									}
									?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-question-answer"></i>Tickets</a>
                            <div class="collapsible-body">
                                <ul>
								<li><a href="tickets.php">All Tickets</a>
                                </li>
								<?php
									$sql = mysqli_query($con, "SELECT DISTINCT status FROM tickets WHERE poster_id = $user_id AND not deleted;");
									while($row = mysqli_fetch_array($sql)){
                                    echo '<li><a href="tickets.php?status='.$row['status'].'">'.$row['status'].'</a>
                                    </li>';
									}
									?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>			
            <li class="bold active"><a href="details.php" class="waves-effect waves-cyan"><i class="mdi-social-person"></i> Edit Details</a>
            </li>			
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <div id="menu-bar" class="fas fa-bars"></div>

                    <nav class="navbar">
                    <a href="#home">home</a>
                    <a href="#speciality">speciality</a>
                    <a href="#popular">popular</a>
                    <a href="#gallery">gallery</a>
                    <a href="#review">review</a>
                    <a href="index.php" class="waves-effect waves-cyan">order Food</a>
                
                </nav>
                <section class="home" id="home">

              <div class="content">
        <h3>Fast food is our specialty</h3>
        <p>Hungry? We deliver!</p>
        <a href="index.php" class="btn">order now</a>
    </div>

    <div class="image">
        <img src="foodapp/home-img.png" alt="">
    </div>

</section>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        <section class="speciality" id="speciality">

<h1 class="heading"> our <span>speciality</span> </h1>

<div class="box-container">

    <div class="box">
        <img class="image" src="foodapp/s-img-1.jpg" alt="">
        <div class="content">
            <img src="foodapp/s-1.png" alt="">
            <h3>tasty burger</h3>
            
        </div>
    </div>
    <div class="box">
        <img class="image" src="foodapp/s-img-2.jpg" alt="">
        <div class="content">
            <img src="foodapp/s-2.png" alt="">
            <h3>tasty pizza</h3>
            
        </div>
    </div>
    <div class="box">
        <img class="image" src="foodapp/s-img-3.jpg" alt="">
        <div class="content">
            <img src="foodapp/s-3.png" alt="">
            <h3>cold ice-cream</h3>
        </div>
    </div>
    <div class="box">
        <img class="image" src="foodapp/s-img-4.jpg" alt="">
        <div class="content">
            <img src="foodapp/s-4.png" alt="">
            <h3>cold drinks</h3>
        </div>
    </div>
    <div class="box">
        <img class="image" src="foodapp/s-img-5.jpg" alt="">
        <div class="content">
            <img src="foodapp/s-5.png" alt="">
            <h3>tasty sweets</h3>
            
        </div>
    </div>
    <div class="box">
        <img class="image" src="foodapp/s-img-6.jpg" alt="">
        <div class="content">
            <img src="foodapp/s-6.png" alt="">
            <h3>healty breakfast</h3>
            
        </div>
    </div>

</div>

</section>
<section class="popular" id="popular">

    <h1 class="heading"> most <span>popular</span> foods </h1>

    <div class="box-container">

        <div class="box">
            <span class="price"> ₹5 - ₹80 </span>
            <img src="foodapp/p-8.jpg" alt="">
            <h3>tasty Samosa</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="index.php" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹30 - ₹90 </span>
            <img src="foodapp/dahi-bara-aloo-dum.jpg" alt="">
            <h3>Dahi-bara-aloo-dum</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="index.php" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹45 - ₹220 </span>
            <img src="foodapp/Masala-Dosa.jpg" alt="">
            <h3>Dosa</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="index.php" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹5 - ₹100 </span>
            <img src="foodapp/p-3.jpg" alt="">
            <h3>tasty sweets</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="index.php" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹5 - ₹20 </span>
            <img src="foodapp/Indian_Panipuri.jpg" alt="">
            <h3>Gupchup</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="index.php" class="btn">order now</a>
        </div>

        <div class="box">
            <span class="price"> ₹20 - ₹60 </span>
            <img src="foodapp/chawmin.jpg" alt="">
            <h3>Chowmein</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="index.php" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹20 - ₹80 </span>
            <img src="foodapp/momo.jpeg" alt="">
            <h3>Momos</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="index.php" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹25 - ₹60 </span>
            <img src="foodapp/roll.jpg" alt="">
            <h3>Rolls</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="index.php" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹40 - ₹80 </span>
            <img src="foodapp/Lassi.jpg" alt="">
            <h3>Lassi</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="index.php" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹50 - ₹200  </span>
            <img src="foodapp/p-1.jpg" alt="">
            <h3>tasty burger</h3> 
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="index.php" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹5 - ₹100 </span>
            <img src="foodapp/ice-cream.jpg" alt="">
            <h3>Ice-cream</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="index.php" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₹45 - ₹90 </span>
            <img src="foodapp/Crispy-Chicken-Pakoda.jpg" alt="">
            <h3>Chicken-Pakoda</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="index.php" class="btn">order now</a>
        </div>
    </div>

</section>
<div class="step-container">

<h1 class="heading">how it <span>works</span></h1>

<section class="steps">

    <div class="box">
        <img src="foodapp/step-1.jpg" alt="">
        <h3>choose your favorite food</h3>
    </div>
    <div class="box">
        <img src="foodapp/step-2.jpg" alt="">
        <h3>free and fast delivery</h3>
    </div>
    <div class="box">
        <img src="foodapp/step-3.jpg" alt="">
        <h3>easy payments methods</h3>
    </div>
    <div class="box">
        <img src="foodapp/step-4.jpg" alt="">
        <h3>and finally, enjoy your food</h3>
    </div>

</section>

</div>
<section class="gallery" id="gallery">

    <h1 class="heading"> our food <span> gallery </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="foodapp/g-1.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Hungry? We deliver!</p>
                <a href="index.php" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="foodapp/g-2.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Hungry? We deliver!</p>
                <a href="index.php" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="foodapp/g-3.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Hungry? We deliver!</p>
                <a href="index.php" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="foodapp/g-4.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Hungry? We deliver!</p>
                <a href="index.php" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="foodapp/p-7.jpeg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Hungry? We deliver!</p>
                <a href="index.php" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="foodapp/g-6.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Hungry? We deliver!</p>
                <a href="index.php" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="foodapp/g-7.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Hungry? We deliver!</p>
                <a href="index.php" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="foodapp/g-8.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Hungry? We deliver!</p>
                <a href="index.php" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="foodapp/g-9.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Hungry? We deliver!</p>
                <a href="index.php" class="btn">order now</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> our users <span>reviews</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="foodapp/pic1.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>This site wprks like a charm! Hassel-free and service was good.</p>
        </div>
        <div class="box">
            <img src="foodapp/pic2.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>The food they deliverd it was really delicious taste with great quality.</p>
        </div>
        <div class="box">
            <img src="foodapp/pic3.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Do yourself a favor and visit this lovely site. The service is unmatched.</p>
        </div>

    </div>

</section>
    

      </section>
      <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2017 <a class="grey-text text-lighten-4" href="#" target="_blank">Tejaswini & Shruti</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="#">Tejaswini & Shruti</a></span>
        </div>
    </div>
  </footer>
    <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--angularjs-->
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/additional-methods.min.js"></script>
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript">
    // $("#formValidate").validate({
    //     rules: {
    //         username: {
    //             required: true,
    //             minlength: 5,
	// 			maxlength: 10
    //         },
    //         name: {
    //             required: true,
    //             minlength: 5,
	// 			maxlength: 15
    //         },
    //         email: {
	// 			required: true,
	// 			maxlength: 35,
	// 		},
	// 		password: {
	// 			required: true,
	// 			minlength: 5,
	// 			maxlength: 16,
	// 		},
    //         phone: {
	// 			required: true,
	// 			minlength: 4,
	// 			maxlength: 11
	// 		},
	// 		address: {
	// 			required: true,
	// 			minlength: 10,
	// 			maxlength: 300
	// 		},
    //     },
    //     messages: {
    //         username: {
    //             required: "Enter username",
    //             minlength: "Minimum 5 characters are required.",
    //             maxlength: "Maximum 10 characters are required."				
    //         },
    //         name: {
    //             required: "Enter name",
    //             minlength: "Minimum 5 characters are required.",
    //             maxlength: "Maximum 15 characters are required."
    //         },
    //         email: {
	// 			required: "Enter email",
    //             maxlength: "Maximum 35 characters are required."				
	// 		},
	// 		password: {
	// 			required: "Enter password",
	// 			minlength: "Minimum 5 characters are required.",
    //             maxlength: "Maximum 16 characters are required."				
	// 		},
    //         phone:{
	// 			required: "Specify contact number.",
	// 			minlength: "Minimum 4 characters are required.",
    //             maxlength: "Maximum 11 digits are accepted."				
	// 		},	
    //         address:{
	// 			required: "Specify address",
	// 			minlength: "Minimum 10 characters are required.",
    //             maxlength: "Maximum 300 characters are accepted."				
	// 		},			
    //     },
    //     errorElement : 'div',
    //     errorPlacement: function(error, element) {
    //       var placement = $(element).data('error');
    //       if (placement) {
    //         $(placement).append(error)
    //       } else {
    //         error.insertAfter(element);
    //       }
    //     }
    //  });
    </script>
</body>

</html>
<?php
	}
	else
	{
		if($_SESSION['admin_sid']==session_id())
		{
			header("location:admin-page.php");		
		}
		else{
			header("location:login.php");
		}
	}
?>