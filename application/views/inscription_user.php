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
      <title>Contact</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/css_login/style.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>">
      <link rel="stylesheet" type="image/gif" href="<?php echo base_url('assets/images/fevicon.png'); ?>">
      <link rel="stylesheet"  href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css'); ?>">
      <link rel="stylesheet"  href="<?php echo base_url('https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css'); ?>">
      <link rel="stylesheet"  href="<?php echo base_url('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'); ?>">
      <link rel="stylesheet"  href="<?php echo base_url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Sen:wght@400;700;800&display=swap'); ?>">
   
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
                     <div class="login_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : +01 1234567890</span></a></div>
                  </form>
                  <a class="logo" href="index.html"><img src="<?php echo base_url('assets/images/logo.png'); ?>"></a></a>
                  <span class="toggle" onclick="openNav()"><i class="fa fa-bars"></i></span>
                  <div class="login_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : Demo@gmail.com</span></a></div>
               </nav>
            </div>
         </div>
      </div>
      <!-- header section end -->
      <!-- layout main section start -->
      <div class="container-fluid">
         <div class="layout_main">
      <!-- layout main section start -->
      <div class="container-fluid">
         <div class="layout_main">
            <!-- banner section start -->
            <div class="banner_section">
               <div class="container">
                  <div class="menu_main">
                     <div class="custome_menu">
                        <ul>
                           <li><a href="index.html">Home</a></li>
                           <li><a href="service.html">Services</a></li>
                           <li><a href="about.html">About</a></li>
                           <li><a href="blog.html">Blog</a></li>
                           <li><a href="shop.html">Shop</a></li>
                           <li class="active"><a href="contact.html">Contacts</a></li>
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
            </div>
            <!-- banner section end -->
            <!-- contact section start -->
            <section class="book_section layout_padding">
               <div class="container">
                 <div class="row">
                   <div class="col">

                   <form id="insert_user_form" method="post" action = "<?php echo base_url('crud_controller/insert_user'); ?>">
                       <h3>
                         CREER <span>VOTRE COMPTE</span>
                       </h3>
                       <div class="form-row ">
                         <div class="form-group col-lg-4">
                           <label for="nom">Nom: </label>
                           <input type="text" class="form-control" id="nom" name="nom" placeholder="">
                         </div>
                         <div class="form-group col-lg-4">
                           <label for="prenom">Prenom: </label>
                           <input type="text" class="form-control" id="prenom" name="prenom" placeholder="">
                         </div>
                         <div class="form-group col-lg-4">
                           <label for="mail">Mail: </label>
                           <input type="email" class="form-control" id="mail" name="mail" placeholder="">
                         </div>
                         <div class="form-group col-lg-4">
                           <label for="genre">Genre:</label>
                           <select class="form-control wide" name="genre"  id="genre">
                             <option value="Normal distribution ">Sélectionnez votre genre</option>
                             <option value="masculin">Masculin</option>
                             <option value="féminin">Féminin</option>
                           </select>
                         </div>
                         <div class="form-group col-lg-4">
                           <label for="taille">Taille(m)</label>
                           <input type="text" class="form-control" id="taille" name="taille" placeholder="">
                         </div>
                         <div class="form-group col-lg-4">
                           <label for="poids">Poids(kg)</label>
                           <input type="text" class="form-control" id="poids" name="poids" placeholder="">
                         </div>
                         <div class="form-group col-lg-4">
                           <label for="objectif">Objectif</label>
                           <select name="objectif" class="form-control wide" id="objectif">
                              <?php foreach ($objectif as $objectifs) { ?>
                                    <option value="<?php echo $objectifs->id_objectif; ?>"><?php echo $objectifs->nom_objectif; ?></option>
                              <?php } ?>
                           </select>
                         </div>
                       </div>
                       <div class="form-row ">
                         <div class="form-group col-lg-4">
                           <label for="mdp">Mot de passe</label>
                           <input type="password" class="form-control" id="mdp" name="mdp" placeholder="XXXXXXXXXX">
                         </div>
                         <div class="form-group col-lg-4">
                           <label for="mdp_confirmation">Confirmer mot de passe</label>
                           <input type="password" class="form-control" id="mdp_confirmation" name="mdp_confirmation" placeholder="XXXXXXXXXX">
                         </div>
                       </div>
                       <div class="btn-box">
                         <button type="submit" class="btn ">Submit Now</button>
                       </div>
                     </form>
                   </div>
                 </div>
               </div>
             </section>
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
                                 <li class="active"><a href="index.html">Home</a></li>
                                 <li><a href="about.html">About</a></li>
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
                           <div class="map_icon"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left15">demo@gmail.com</span></a></div>
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
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/jquery-3.0.0.min.js"></script>
      <script src="assets/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="assets/js/custom.js"></script>
      <!-- javascript --> 
      <script src="assets/js/owl.carousel.js"></script>
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