
<!-- Page Content-->
    <section class="bg-center-top bg-no-repeat" style="background-color: #f5f5f5;">
      <div class="container pt-md-4 pb-md-4">
        <div class="row align-items-center banner-hear">
          <div class="col-xl-8 col-md-4 py-5 text-center text-md-left the-font">
            <h1 class="h2 block-title">Listen To Life!<span class="d-block">Online hearing test & hearing aids from the comfort of your home.</span></h1>
            
            <div class="pt-3"><a class="scroll-to btn btn-primary mr-3 mb-3" href="<?php echo base_url(); ?>hearingtest">Hearing Test</a>
			<a class="btn btn-accent mb-3" href="<?php echo base_url(); ?>shophearingaids">Shop Hearing Aid</a></div>
		      
          </div>
		  <div class="cust-banner-img"><img class="d-block mx-auto" src="<?php echo base_url(); ?>assets/img/book-sec.png" alt="">
		    
			
		  </div>
         
		  <div class="comment">
                        <a href="#"><img src="<?php echo base_url(); ?>assets/img/vedio.png" alt="" class="img-fluid"></a><br>
                        <a href="#"><img src="<?php echo base_url(); ?>assets/img/message.png" alt="" class="img-fluid"></a>
            </div>
        </div>
		
      </div>
	  <div class="container">
            
			<h3 class="h4 text-center pb-4 head-text m-pt">What You Get?</h3>
            <div class="row">
        <div class="col-lg-4 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
          <div class="icon-box text-center mx-auto">
            <div class="icon-box-icon"><i class="fa fa-deaf" aria-hidden="true"></i></div>
            <h3 class="icon-box-title">Powerful, Discrete Hearing Aids</h3>
            <p class="icon-box-text">Our virtually invisible hearing aids provide amazing clarity.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
          <div class="icon-box text-center mx-auto">
            <div class="icon-box-icon"><i class="fa fa-stethoscope" aria-hidden="true"></i></div>
            <h3 class="icon-box-title">On Demand Care</h3>
            <p class="icon-box-text">Get specialist care from the comfort of your home with HearFon Connect App.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
          <div class="icon-box text-center mx-auto">
            <div class="icon-box-icon"><i class="fa fa-heartbeat" aria-hidden="true"></i></div>
            <h3 class="icon-box-title">Great Value</h3>
            <p class="icon-box-text">Listen to life with our range of products. Easy finance also available.</p>
          </div>
        </div>
        
      </div>
         </div>
    </section>
	<section class="pb-4" style="background-color:#f5f5f5">
	<div class="container">
      <h3 class="h4 text-center pb-4 pt-4 head-text">Our Product Category</h3>
    </div> 
    </section>
	<section class="pb-4">
	<div class="container">
      <div class="row aos-init aos-animate topsnap" data-aos="fade-up" data-aos-duration="3000">
               <div class="col-lg-6 col-md-6 pr-0 cust-padd">
			    
                  <div class="shopnow">
                     <span><img src="<?php echo base_url(); ?>assets/img/hearingaid.jpg" alt="" class="img-fluid">
					  <div class="product2-text">
                        <p>Hearing Aids</p>
                        <a href="<?php echo base_url(); ?>shophearingaids">SHOP NOW <i class="fa fa-long-arrow-right"></i></a>
                     </div></span>
                    
					
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 pl-0 cust-padd">
                  <div class="shopnow">
                     <span><img src="<?php echo base_url(); ?>assets/img/accer.jpg" alt="" class="img-fluid"><div class="product2-text">
                        <p>Accessories</p>
                        <a href="<?php echo base_url(); ?>shopacessories">SHOP NOW <i class="fa fa-long-arrow-right"></i></a>
                     </div></span>
                     
                  </div>
                
               </div>
            </div>
    </div> 
    </section>
	
	<section class="pb-0">
	<div class="container">
      <h3 class="h4 text-center pb-4 pt-4 head-text">Shop Hearing Aids by Category</h3>
	  <!-- Tabs Style 2 -->
<ul class="nav nav-tabs nav-tabs-style-3 cust-tab-style" role="tablist">
  <li class="nav-item br">
    <a class="nav-link active" href="#bha" data-toggle="tab" role="tab">
     
      Bluetooth Hearing Aids
    </a>
  </li>
  <li class="nav-item br">
    <a class="nav-link" href="#iha" data-toggle="tab" role="tab">
     
      Invisible Hearing Aids
    </a>
  </li>
  <li class="nav-item br">
    <a class="nav-link" href="#bte" data-toggle="tab" role="tab">
     
      Behind the Ear
    </a>
  </li>
  <li class="nav-item br">
    <a class="nav-link" href="#citc" data-toggle="tab" role="tab">
     
      Completely in the Canal
    </a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="#ritc" data-toggle="tab" role="tab">
     
     Receiver in ihe Canal
    </a>
  </li>
  
</ul>
<div class="tab-content">
  <div class="tab-pane fade show active" id="bha" role="tabpanel">
  
    <div class="row pb-0 mb-1 pb-4 mb-1 pt-4">
      <!-- Product-->
      <?php if(isset($items) && !empty($items)) :?>
      <?php foreach($items as $item) :?>
         <div class="col-xs-15 col-sm-15 col-md-15 col-lg-15 mb-30 pb-2">
            <div class="product-card mx-auto procasrd">
             <a class="product-thumb" href="#"><img src="<?php echo base_url(); ?>assets/img/product/product.png" alt="Product Thumbnail"></a>
              <div class="product-card-body pcb-cust">
                <h5 class="product-title"><a href="#"><?php echo $item->getName()?></a></h5>
				<span class="product-price  text-color"><i class="fa fa-inr" aria-hidden="true"></i> 1000</span>
              </div>
              <div class="product-buttons-wrap">
                <div class="product-buttons">
                 <div class="product-button"><a href="#" data-toast="" data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product" data-toast-message="added to comparison table!"><i class="fa fa-eye" aria-hidden="true"></i></a></div>
				   <div class="product-button"><a href="#" data-toast="" data-toast-position="topRight" data-toast-type="info" data-toast-icon="fe-icon-help-circle" data-toast-title="Product" data-toast-message="added to your wishlist!"><i class="fe-icon-heart"></i></a></div>
                  <div class="product-button"><a href=<?php echo base_url() . "/cart/addItemToCart/" . $item->getItemId()?> data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Product" data-toast-message="added to cart successfuly!"><i class="fe-icon-shopping-cart"></i></a></div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach ?>
          <?php endif ?>
          </div>
        </div>
		 <div class="tab-pane fade" id="iha" role="tabpanel">
    <p class="text-muted">Products</p>
  </div>
  <div class="tab-pane fade" id="bte" role="tabpanel">
   <p class="text-muted">Products</p>
  </div>
  <div class="tab-pane fade" id="citc" role="tabpanel">
    <p class="text-muted">Products</p>
  </div>
  <div class="tab-pane fade" id="ritc" role="tabpanel">
    <p class="text-muted">Products</p>
  </div>
  </div>
</div>

    </div> 
    </section>
	 <h3 class="h4 text-center pb-4 pt-4 head-text">Begin Your Test for Better Hearing</h3>
<section class="test" style="background:url('<?php echo base_url(); ?>assets/img/test-banner.jpg');background-size: cover;">
	<div class="container">
     
	  <!-- Tabs Style 2 -->
      <div class=" d-flex align-items-center">
               <div class="overlay-text aos-init aos-animate" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                  <h5 class="head-title">TAKE OUR FREE ONLINE HEARING HEALTH TEST</h5>
                  <p class="para-text">Test your hearing with our free online hearing test. The test only takes a few minutes and gives an initial assessment of your hearing and will provide the early indicators of any possible hearing loss.</p>
                  <!-- <a type="submit" class="theme-button mt-5">BEGIN TEST</a> -->
				  <div class="pt-3"><a class="scroll-to btn btn-primary mr-3 mb-3" href=<?php echo base_url() . "/StripeController"?>>Pay the Fee</a></div>
               </div>
            </div>
      </div>

    </div> 
	
    </section>
	<section style="background-color: #f5f5f5;">
	<div class="bottom-section">
               <div class="row m-0">
                  <div class="col-lg-4 col-md-6 bord-right">
                    <div class="icon-box icon-box-horizontal d-sm-table text-center text-sm-left cust-icon">
					  <div class="d-sm-table-cell align-top">
						<div class="icon-box-image"><img src="<?php echo base_url(); ?>assets/img/test1.png" alt="Image icon"></div>
					  </div>
					  <div class="d-sm-table-cell align-top pl-sm-4">
						<h3 class="icon-box-title">I'm Researching Hearing Loss</h3>
						<p class="icon-box-text"><a class="icon-box-link" href="#">Compare Hearing Aid Solutions<i class="fe-icon-arrow-right"></i></a>
					  </div>
					</div>
                  </div>
                  <div class="col-lg-4 col-md-6 bord-right">
                     
					 <div class="icon-box icon-box-horizontal d-sm-table text-center text-sm-left cust-icon">
              <div class="d-sm-table-cell align-top">
                <div class="icon-box-image"><img src="<?php echo base_url(); ?>assets/img/test2.png" alt="Image icon"></div>
              </div>
              <div class="d-sm-table-cell align-top pl-sm-4">
                <h3 class="icon-box-title">I'm New to Hearing Loss</h3>
                <p class="icon-box-text"><a class="icon-box-link" href="#">Understanding Hearing Loss<i class="fe-icon-arrow-right"></i></a>
              </div>
            </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                   
			<div class="icon-box icon-box-horizontal d-sm-table text-center text-sm-left cust-icon">
              <div class="d-sm-table-cell align-top">
                <div class="icon-box-image"><img src="<?php echo base_url(); ?>assets/img/test3.png" alt="Image icon"></div>
              </div>
              <div class="d-sm-table-cell align-top pl-sm-4">
                <h3 class="icon-box-title">Contact a Hearing Consultant</h3>
                <p class="icon-box-text"><a class="icon-box-link" href="#">Call or Chat Now<i class="fe-icon-arrow-right"></i></a>
              </div>
            </div>
                  </div>
               </div>
            </div>
			</section>
			<h3 class="h4 text-center pb-4 pt-4 head-text">Testimonials</h3>
	
	    
        
	      <section id="Testimonial" class="Testimonial testimonial-bg">
         <div class="container p-0">
           
            
               <div class="innner-section" data-aos="flip-left"
               data-aos-easing="ease-out-cubic"
               data-aos-duration="2000">
                 
				<div class="demo">
                <div class="container nopadding">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <p class="description">
                        I don’t mind using hearing aids as long as they are invisible. Thanks to HearFon, my hearing aids can’t be seen, but I can hear better and clear.
                        </p>
                        <h3 class="title">P Rao</h3>
                        
                    </div>
 
                    <div class="testimonial">
                    <p class="description">
                        I don’t mind using hearing aids as long as they are invisible. Thanks to HearFon, my hearing aids can’t be seen, but I can hear better and clear.
                        </p>
                        <h3 class="title">P Rao</h3>
                        
                    </div>
 
                    <div class="testimonial">
                    <p class="description">
                        I don’t mind using hearing aids as long as they are invisible. Thanks to HearFon, my hearing aids can’t be seen, but I can hear better and clear.
                        </p>
                        <h3 class="title">P Rao</h3>
                        
                    </div>
					<div class="testimonial">
          <p class="description">
                        I don’t mind using hearing aids as long as they are invisible. Thanks to HearFon, my hearing aids can’t be seen, but I can hear better and clear.
                        </p>
                        <h3 class="title">P Rao</h3>
                        
                    </div>
					<div class="testimonial">
          <p class="description">
                        I don’t mind using hearing aids as long as they are invisible. Thanks to HearFon, my hearing aids can’t be seen, but I can hear better and clear.
                        </p>
                        <h3 class="title">P Rao</h3>
                        
                    </div>
					<div class="testimonial">
          <p class="description">
                        I don’t mind using hearing aids as long as they are invisible. Thanks to HearFon, my hearing aids can’t be seen, but I can hear better and clear.
                        </p>
                        <h3 class="title">P Rao</h3>
                        
                    </div>
					<div class="testimonial">
          <p class="description">
                        I don’t mind using hearing aids as long as they are invisible. Thanks to HearFon, my hearing aids can’t be seen, but I can hear better and clear.
                        </p>
                        <h3 class="title">P Rao</h3>
                        
                    </div>
					<div class="testimonial">
          <p class="description">
                        I don’t mind using hearing aids as long as they are invisible. Thanks to HearFon, my hearing aids can’t be seen, but I can hear better and clear.
                        </p>
                        <h3 class="title">P Rao</h3>
                        
                    </div>
					
                </div>
            
       
    </div>
</div>
                 
               </div>
            
         </div>
      </section>
    
	 <!-- ======= Blogs Section ======= -->
      <section id="Blogs" class="Blogs">
         <div class="container">
             <h3 class="h4 text-center pb-4 pt-4 head-text">Blogs</h3>
            <div class="row" data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="1500">
               <div class="col-lg-4 col-md-6 mb-3">
                  <div class="card cust-card">
                     <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/Blogs1.png" alt="Card image">
                     <!--<div class="">
                        <a href="#" class="blog-month">Sep 12</a>
                     </div>-->
                     <div class="card-body">
                        <h6 class="blog-title card-text">BERTA ADAMS</h6>
                        <h4 class="card-title">10 Simple Tips to take care of your Hearing Aids</h4>
                        <a href="#" class="read-more">READ MORE  <i class="fa fa-long-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-3">
                  <div class="card cust-card">
                     <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/Blogs2.png" alt="Card image">
                     <!--<div class="">
                        <a href="#" class="blog-month">Sep 12</a>
                     </div>-->
                     <div class="card-body">
                        <h6 class="blog-title card-text">BERTA ADAMS</h6>
                        <h4 class="card-title">Noise-Induced Hearing Loss</h4>
                        <a href="#" class="read-more">READ MORE  <i class="fa fa-long-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-3">
                  <div class="card cust-card">
                     <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/Blogs3.png" alt="Card image">
                     <!--<div class="">
                        <a href="#" class="blog-month">Sep 12</a>
                     </div>-->
                     <div class="card-body">
                        <h6 class="blog-title card-text">BERTA ADAMS</h6>
                        <h4 class="card-title">What to do if your hearing aid starts whistling?</h4>
                        <a href="#" class="read-more">READ MORE  <i class="fa fa-long-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ======= End Section ======= -->
	   <!-- ======= Instagram Section ======= -->
      <section id="Join" class="Join">
         
            <div class="row nomargin">
               <div class="col-md-4 nopadding">
                  <img src="<?php echo base_url(); ?>assets/img/join1.png" alt="" class=" img-fluid">
               </div>
               <div class="col-md-4 text-center align-self-center">
                  <h5 class="header-join mb-0">Join The Fun</h5>
                  <span class="join-span">#Joinhearfon</span>
                  <a href="#">
                     <p class="follow">FOLLOW US ON INSTAGRAM</p>
                  </a>
               </div>
               <div class="col-md-4 nopadding">
                  <img src="<?php echo base_url(); ?>assets/img/join2.png" alt="" class="img-fluid">
               </div>
            </div>
       
      </section>
      <!-- ======= End Section ======= -->
      