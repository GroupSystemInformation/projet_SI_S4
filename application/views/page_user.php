<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Foodfinda</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css')?>">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url('assets/images/fevicon.png')?>" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css')?>">

      
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css')?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <!-- header section start -->
      <div class="container-fluid">
         <div class="header_section">
            <div class="container">
               <nav class="navbar navbar-light bg-light justify-content-between">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.html">Home</a>
                     <a href="service.html">Services</a>
                     <a href="about.html">About</a>
                     <a href="blog.html">Blog</a>
                     <a href="shop.html">Shop</a>
                     <a href="contacts.html">Contacts</a>
                  </div>
                  <form class="form-inline ">
                     <div class="login_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Tèl : 034567890</span></a></div>
                  </form>
                  <a class="logo" href="index.html"><img src="<?php echo base_url('assets/images/logo.png')?>"></a></a>
                  <span class="toggle" onclick="openNav()"><i class="fa fa-bars"></i></span>
                  <div class="login_text"><a href="#"><i class="fa fa-money" aria-hidden="true"></i><span class="padding_left10">portefeuille : <?php echo($user->argent)."Ar"; ?></span></a></div>
               </nav>
            </div>
         </div>
      </div>
      <!-- header section end -->
      <!-- layout main section start -->
      <div class="container-fluid">
         <div class="layout_main">
            <!-- banner section start -->
            <div class="banner_section">
               <div class="container">
                  <div class="menu_main">
                     <div class="custome_menu">
                        <ul>
                           <li class="active"><a href="index.html">Accueil</a></li>
                           <li><a href="service.html">Services</a></li>
                           <li><a href="about.html">A propos</a></li>
                           <li><a href="blog.html">Blog</a></li>
                           <li><a href="shop.html">Shop</a></li>
                           <?php if ($user->estAdmin == 1): ?>
                              <li><a href="<?php echo base_url('Crud_controller/lien_admin'); ?>">Page admin</a></li>
                           <?php endif; ?>

                           <?php if ($user->estAdmin == 0): ?>
                              <li><a href="<?php echo base_url('Crud_controller/get_proposition_regime'); ?>">Regime</a></li>
                           <?php endif; ?>
                        </ul>
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="<?php echo base_url('Crud_controller/lien_login'); ?>">Login</a></li>
                           <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div id="main_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <h1 class="banner_taital">Préparez-vous à transformer votre mode de vie et à atteindre vos objectifs de santé et de bien-être </h1>
                                 <!-- <h1 class="banner_text">YOUR CITY</h1> -->
                                 <div class="banner_main">
                                    <div class="dropdown">
                                       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                                       </button>
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                       </div>
                                    </div>
                                    <div class="main">
                                       <!-- Another variation with a button -->
                                       <div class="input-group">
                                          <input type="text" class="form-control" placeholder="Search">
                                          <div class="input-group-append">
                                             <button class="btn btn-secondary" type="button" style="background-color: #ffffff; border-color:#ffffff ">
                                             <i class="fa fa-search" style="color: #191919;"></i>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- <div class="ordernow_bt"><a href="#">Commandez maintenant</a></div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <h1 class="banner_taital">Atteignez vos objectifs de santé et de bien-être avec notre approche intégrée de sport et de régime alimentaire.</h1>
                                 <!-- <h1 class="banner_text">YOUR CITY</h1> -->
                                 <div class="banner_main">
                                    <div class="dropdown">
                                       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                                       </button>
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                       </div>
                                    </div>
                                    <div class="main">
                                       <!-- Another variation with a button -->
                                       <div class="input-group">
                                          <input type="text" class="form-control" placeholder="Search this blog">
                                          <div class="input-group-append">
                                             <button class="btn btn-secondary" type="button" style="background-color: #ffffff; border-color:#ffffff ">
                                             <i class="fa fa-search" style="color: #191919;"></i>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- <div class="ordernow_bt"><a href="#">Commandez maintenant</a></div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <h1 class="banner_taital">Rejoignez notre communauté dynamique et laissez-nous vous guider vers une vie active et nourrissante. </h1>
                                 <!-- <h1 class="banner_text">YOUR CITY</h1> -->
                                 <div class="banner_main">
                                    <div class="dropdown">
                                       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                                       </button>
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                       </div>
                                    </div>
                                    <div class="main">
                                       <!-- Another variation with a button -->
                                       <div class="input-group">
                                          <input type="text" class="form-control" placeholder="Search this blog">
                                          <div class="input-group-append">
                                             <button class="btn btn-secondary" type="button" style="background-color: #ffffff; border-color:#ffffff ">
                                             <i class="fa fa-search" style="color: #191919;"></i>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- <div class="ordernow_bt"><a href="#">Commandez maintenant</a></div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
            <!-- banner section end -->
            <!-- service section start -->
            <div class="service_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1 class="service_taital">Recherches rapides</h1>
                     </div>
                  </div>
                  <div class="service_section_2">
                     <div class="row">
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="assets/images/breakfast-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Breakfast</h4>
                           <div class="seemore_bt"><a href="#">voir plus</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="assets/images/delivery-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Delivery</h4>
                           <div class="seemore_bt"><a href="#">voir plus</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="assets/images/dinner-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Dinner</h4>
                           <div class="seemore_bt"><a href="#">voir plus</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="assets/images/coffee-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Coffee</h4>
                           <div class="seemore_bt"><a href="#">voir plus</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="assets/images/alcohol-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Alcohol</h4>
                           <div class="seemore_bt"><a href="#">voir plus</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="assets/images/diningtable-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Diningtable</h4>
                           <div class="seemore_bt"><a href="#">voir plus</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- service section end -->
            <!-- blog section start -->
            <div class="blog_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1 class="blog_taital">Collections Food In city</h1>
                     </div>
                  </div>
               </div>
            </div>
            <div class="blog_section_2 layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="blog_img"><img src="assets/images/sport4.jpg"></div>
                     </div>
                     <div class="col-md-6">
                        <div class="blog_taital_main">
                           <h1 class="blog_text">Exercice</h1>
                           <p class="lorem_text">
                              Courez vers une meilleure santé et une silhouette tonique grâce à la course : renforcez votre cœur, brûlez des calories et atteignez vos objectifs de perte de poids tout en vous sentant revigoré et plein d'énergie. Rejoignez-nous pour faire de chaque pas une victoire vers une meilleure forme physique et une confiance retrouvée.</p>
                           <div class="readmore_btn"><a href="#">En savoir plus </a></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="blog_img"><img src="assets/images/proteine1.jpg"></div>
                     </div>
                     <div class="col-md-6">
                        <div class="blog_taital_main">
                           <h1 class="blog_text">Aliment riche en proteine</h1>
                           <p class="lorem_text"> L'image met en valeur la qualité et la valeur nutritionnelle de cet aliment, une source essentielle de nutriments pour soutenir votre croissance musculaire et atteindre vos objectifs de poids.Nourrissez votre corps avec les éléments nécessaires pour atteindre votre poids idéal et construire une silhouette forte et saine.</p>
                           <div class="readmore_btn"><a href="#">En savoir plus </a></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="blog_img"><img src="assets/images/avocat.jpg"></div>
                     </div>
                     <div class="col-md-6">
                        <div class="blog_taital_main">
                           <h1 class="blog_text">Low carb</h1>
                           <p class="lorem_text">Découvrez notre publicité mettant en avant un aliment spécialement conçu pour aider les personnes à perdre du poids. L'image met en valeur cet aliment sain et délicieux, qui peut être une excellente option pour soutenir votre parcours de perte de poids. Rejoignez-nous pour explorer des recettes alléchantes, des conseils nutritionnels et un soutien personnalisé pour vous aider à atteindre vos objectifs de perte de poids de manière durable et équilibrée.</p>
                           <div class="readmore_btn"><a href="#">En savoir plus </a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- blog section end -->
            <!-- shop section start -->
            <div class="shop_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <h1 class="shop_taital">Get the <br><span style="color: #18191a;">Food Finda App</span></h1>
                        <p class="shop_text">Long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                        <div class="app_icon_main">
                           <div class="app_icon"><img src="assets/images/icon-1.png"></div>
                           <div class="app_icon"><img src="assets/images/icon-2.png"></div>
                        </div>
                        <div class="download_bt"><a href="#">Download Now</a></div>
                     </div>
                     <div class="col-md-6">
                        <div class="mobile_img"><img src="assets/images/mobile-img.png"></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- shop section end -->
            <!-- testimonial section start -->
            <div class="testimonial_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1 class="testimonial_taital">Inscrivez-vous</h1>
                     </div>
                  </div>
                  <div id="my_slider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="testimonial_section_2">
                              <div class="row">
                                 <div class="col-md-4">
                                    <h4 class="customer_text"></h4>
                                    <div class="pub_img"><img src="assets/images/proteine1.jpg"></div>
                                    
                                 </div>
                                 <div class="col-md-4">
                                    <h4 class="customer_text"></h4>
                                    <div class="pub_img"><img src="assets/images/proteine1.jpg"></div>
                                    
                                 </div>
                                 <div class="col-md-4">
                                    <h4 class="customer_text"></h4>
                                    <div class="pub_img"><img src="assets/images/sport1.jpg"></div>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial_section_2">
                              <div class="row">
                                 <div class="col-md-4">
                                    <h4 class="customer_text"></h4>
                                    <div class="pub_img"><img src="assets/images/proteine.jpg"></div>
                                    
                                 </div>
                                 <div class="col-md-4">
                                    <h4 class="customer_text"></h4>
                                    <div class="pub_img"><img src="assets/images/sport7.jpg"></div>
                                    
                                 </div>
                                 <div class="col-md-4">
                                    <h4 class="customer_text"></h4>
                                    <div class="pub_img"><img src="assets/images/avocat.jpg"></div>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial_section_2">
                              <div class="row">
                                 <div class="col-md-4">
                                    <h4 class="customer_text"></h4>
                                    <div class="pub_img"><img src="assets/images/avocat.jpg"></div>
                                    
                                 </div>
                                 <div class="col-md-4">
                                    <h4 class="customer_text"></h4>
                                    <div class="pub_img"><img src="assets/images/avocat.jpg"></div>
                                    
                                 </div>
                                 <div class="col-md-4">
                                    <h4 class="customer_text"></h4>
                                    <div class="pub_img"><img src="assets/images/avocat.jpg"></div>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                     <i class="fa fa-arrow-left"></i>
                     </a>
                     <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                     <i class="fa fa-arrow-right"></i>
                     </a>
                  </div>
               </div>
            </div>
            <!-- testimonial section end -->
            <!-- contact section start
            <div class="contact_section layout_padding">
               <div class="container">
                  <div class="contact_section_2">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="contact_taital">Get In Touch</h1>
                           <form action="">
                              <div class="mail_section_1">
                                 <input type="text" class="mail_text" placeholder="Name" name="Name">
                                 <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number"> 
                                 <input type="text" class="mail_text" placeholder="Email" name="Email">
                                 <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                                 <div class="send_bt"><a href="#">SEND</a></div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- order section start -->
                     <!-- <div class="order_section">
                        <div class="order_taital_main">
                           <h1 class="order_taital">Order Best food at time</h1>
                           <div class="order_bt"><a href="#">Commandez maintenant</a></div>
                        </div>
                     </div>
                     <!-- order section end -->
                  <!-- </div>
               </div> -->
            <!-- </div> --> -->
            <!-- contact section end -->
            <!-- footer section start -->
            <div class="footer_section">
               <div class="container">
                  <div class="footer_sectio_2">
                     <div class="row">
                        <div class="col-lg-3 col-md-6">
                           <h2 class="footer_logo">Foodfinda</h2>
                           <p class="footer_text">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of </p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <h2 class="useful_text">Navigation</h2>
                           <div class="footer_menu">
                              <ul>
                                 <li class="active"><a href="index.html">Accueil</a></li>
                                 <li><a href="about.html">A propos</a></li>
                                 <li><a href="location.html">Location</a></li>
                                 <li><a href="service.html">Services</a></li>
                                 <li><a href="features.html">Features</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <h2 class="useful_text">Contact Info</h2>
                           <p class="address_text">Office Address</p>
                           <div class="map_icon"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left15">Loram ipusm New York, NY 36524</span></a></div>
                           <p class="address_text">Customer Service:</p>
                           <div class="map_icon"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left15">( +01 1234567890 )</span></a></div>
                           <div class="map_icon"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left15">food@gmail.com</span></a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <h2 class="useful_text">Discover</h2>
                           <div class="subscribe_menu">
                              <ul>
                                 <li><a href="#">Help</a></li>
                                 <li><a href="#">How It Works</a></li>
                                 <li><a href="#">subscribe</a></li>
                                 <li><a href="contact.html">Contact Us</a></li>
                              </ul>
                           </div>
                           <div class="social_icon">
                              <ul>
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- footer section end -->
         </div>
      </div>
      <!-- layout main section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 
   </body>
</html>