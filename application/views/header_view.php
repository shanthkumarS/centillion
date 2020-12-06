<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>HearFon</title>
      <!-- SEO Meta Tags-->
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <!-- Viewport-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Favicon and Touch Icons-->
      <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
      <link rel="mask-icon" color="#343b43" href="safari-pinned-tab.svg">
      <meta name="msapplication-TileColor" content="#603cba">
      <meta name="theme-color" content="#ffffff">
      <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
      <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>assets/css/vendor.min.css">
      <!-- Main Theme Styles + Bootstrap-->
      <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>assets/css/theme.min.css">
      <!-- owl-carousel-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
      <!-- Responsive-->
      <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>assets/css/responsive.css">
      <!-- Modernizr-->
      <script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>
   </head>
   <!-- Body-->
   <body>
      <!-- Off-Canvas Menu-->
      <div class="offcanvas-container is-triggered offcanvas-container-reverse" id="mobile-menu">
         <span class="offcanvas-close"><i class="fe-icon-x"></i></span>
         <div class="px-4 pb-4">
            <h6>Menu</h6>
            <div class="d-flex justify-content-between pt-2">
               <div class="btn-group w-100 mr-2">
                  <!--<a class="btn btn-secondary btn-sm btn-block dropdown-toggle" href="#" data-toggle="dropdown"><img src="img/flags/en.png" alt="English"/>English</a>-->
               </div>
               <a class="btn btn-primary btn-sm btn-block" href="<?php echo base_url(); ?>login"><i class="fe-icon-user"></i>&nbsp;Login</a>
            </div>
         </div>
         <div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 235px); top: 144px;">
            <!-- Mobile Menu-->
            <div class="accordion mobile-menu" id="accordion-menu">
               <!-- Home-->
               <div class="card">
                  <div class="card-header"><a class="mobile-menu-link active" href="<?php echo base_url(); ?>">Home</a></div>
                  <div class="collapse" id="home-submenu" data-parent="#accordion-menu">
                  </div>
               </div>
               <!-- Hearing Test-->
               <div class="card">
                  <div class="card-header"><a class="mobile-menu-link" href="<?php echo base_url(); ?>hearingtest">Hearing Test</a></div>
                  
               </div>
               <!-- Shop Hearing Aids-->
               <div class="card">
                  <div class="card-header"><a class="mobile-menu-link" href="<?php echo base_url(); ?>shophearingaids">Shop Hearing Aids</a></div>
                  
               </div>
               <!-- Shop Accessories-->
               <div class="card">
                  <div class="card-header"><a class="mobile-menu-link" href="?php echo base_url(); ?>shopacessories">Shop Accessories</a></div>
                 
               </div>
               <!-- How It Works?-->
               <div class="card">
                  <div class="card-header"><a class="mobile-menu-link" href="<?php echo base_url(); ?>howitworks">How It Works?</a></div>
                  
               </div>
               <!-- Media Gallery-->
               <div class="card">
                  <div class="card-header"><a class="mobile-menu-link" href="<?php echo base_url(); ?>mediagallery">Media Gallery</a></div>
                  
               </div>
               <!-- Support-->
               <div class="card">
                  <div class="card-header"><a class="mobile-menu-link" href="<?php echo base_url(); ?>getsupport">Support</a></div>
               </div>
               <!-- Contact-->
               <div class="card">
                  <div class="card-header"><a class="mobile-menu-link" href="<?php echo base_url(); ?>contact">contact</a></div>
               </div>
            </div>
         </div>
         <div class="offcanvas-footer px-4 pt-3 pb-2 text-center"><a class="social-btn sb-style-3 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-3 sb-facebook" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-3 sb-pinterest" href="#"><i class="socicon-pinterest"></i></a><a class="social-btn sb-style-3 sb-instagram" href="#"><i class="socicon-instagram"></i></a></div>
      </div>
      <!-- Off-Canvas Shopping Cart-->
      <div class="offcanvas-container is-triggered offcanvas-container-reverse" id="shopping-cart">
         <span class="offcanvas-close"><i class="fe-icon-x"></i></span>
         <div class="px-4">
            <h6>Your Cart</h6>
            <div class="widget widget-cart pt-2">
               <?php if (property_exists($user, 'cartItems') && $user->getCartItems() != NULL) :?>
                  <?php $cartItemCount = count($user->getCartItems())?>
                  <?php foreach($user->getCartItems() as $cartItem) :?>
                     <a class="featured-product" href="javascript:;">
                        <div class="featured-product-thumb"><img src="<?php echo base_url(); ?>assets/img/cart-1.png" alt="Product Image"/>
                        </div>
                        <div class="featured-product-info">
                           <h5 class="featured-product-title"><?php echo $cartItem->getName()?></h5>
                           <span class="featured-product-price"><?php echo $cartItem->getDescription();?></span>
                        </div>
                        <span class="remove-product"><i class="fe-icon-x"></i></span>
                     </a>
                  <?php endforeach ?>
               <?php endif ?>
               <hr class="mt-3 mb-3">
               <div class="d-flex justify-content-between pt-3"><a class="btn btn-primary btn-block btn-sm mr-2" href="<?php echo base_url(); ?>cart">View Cart</a><a class="btn btn-accent btn-block mt-0 btn-sm" href="<?php echo base_url(); ?>logout">Logout</a></div>
            </div>
         </div>
      </div>
      <!-- Navbar: Default-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <header class="navbar-wrapper navbar-sticky">
         <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo/logo.png" alt=""/></a></div>
         <div class="d-table-cell w-100 align-middle pl-md-3">
            <div class="navbar-top d-none d-lg-flex justify-content-between align-items-center">
               <div></div>
               <!-- Search-->
               <div>
                  <ul class="list-inline mb-0">
                     <a class="navbar-link mr-3" href="mailto:info@hearfon.com"><i class="fe-icon-mail"></i>info@hearfon.com</a><a class="navbar-link mr-3" href="tel:1800 103 0822"><i class="fe-icon-phone"></i>1800 103 0822</a>
                     <a href="#" data-toggle="search" class="text_d_none"><i class="fe-icon-search"></i></a>
                  </ul>
               </div>
            </div>
            <div class="navbar justify-content-end justify-content-lg-between">
               <form class="search-box" method="get">
                  <input type="text" id="site-search" placeholder="Type A or C to see suggestions"><span class="search-close"><i class="fe-icon-x"></i></span>
               </form>
               <!-- Main Menu-->
               <ul class="navbar-nav d-none d-lg-block">
                  <!-- Hearing Test-->
                  <li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="<?php echo base_url(); ?>hearingtest">Hearing Test</a></li>
                  <!-- Shop Hearing Aids-->
                  <li class="nav-item dropdown-toggle"><a class="nav-link" href="<?php echo base_url(); ?>shophearingaids">Shop Hearing Aids</a>
                  </li>
                  <!-- Shop Accessories-->
                  <li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="<?php echo base_url(); ?>shopacessories">Shop Accessories</a>
                  </li>
                  <!-- How It Works?-->
                  <li class="nav-item dropdown-toggle"><a class="nav-link" href="<?php echo base_url(); ?>Howitworks">How It Works?</a></li>
                  <!-- Media Gallery-->
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>mediagallery">Media Gallery</a></li>
                  <!-- Support-->
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>getsupport">Support</a></li>
                  <!-- Contact-->
               </ul>
               <div>
                  <!--<ul class="navbar-buttons d-inline-block">
                     <li class="dropdown-toggle"><a class="navbar-link" href="javascript:;"><i class="fe-icon-user"></i>Login/Register</a>
                                <div class="dropdown-menu right-aligned p-3 text-center" style="min-width: 200px;">
                                  <p class="text-sm opacity-70">Sign in to your account or register new one to have full control over your orders, receive bonuses and more.</p><a class="btn btn-primary btn-sm btn-block" href="account-login.html">Sign In</a>
                                  <p class="text-sm text-muted mt-3 mb-0">New customer? <a href='account-login.html'>Register</a></p>
                                </div>
                              </li>
                             </ul>-->
                  <?php if(property_exists($user, 'userId') && $user->getUserId() != NULL ) :?>
                     <p class="mr-2 d-none d-xl-inline-block text_d_none cust-log">Hello <?php echo $user->getName();?></p>
                     <ul class="navbar-buttons d-inline-block align-middle mr-lg-2">
                        <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a></li>
                        <li><a href="#shopping-cart" data-toggle="offcanvas"><i class="fe-icon-shopping-cart"></i></a><span class="badge badge-danger"><?php if(isset($cartItemCount)) echo $cartItemCount; else echo 0; ?></span></li>
                     </ul>
                  <?php else :?>
                     <a class="mr-2 d-none d-xl-inline-block text_d_none cust-log" href="<?php echo base_url(); ?>login"><i class="fe-icon-user"></i>Login/Register</a>
                  <?php endif ?>
               </div>
            </div>
         </div>
      </header>