 <!-- Page Title-->
    <div class="page-title d-flex" aria-label="Page title" style="background:#913494;">
      <div class="container text-center align-self-center">
        
        <h1 class="page-title-heading">Cart</h1>
      </div>
    </div>
    <!-- Page Content-->
     
    <div class="container pb-5 mb-2">
      <!-- Cart Item-->
      <?php foreach($user->getCartItems() as $cartItem) :?>
      <div class="cart-item d-md-flex justify-content-between"><span class="remove-item"><i class="fe-icon-x"></i></span>
        <div class="px-3 my-3"><a class="cart-item-product" href="shop-single.html">
            <div class="cart-item-product-thumb"><img src="<?php echo base_url(); ?>assets/img/cart-image.png" alt="Product"></div>
            <div class="cart-item-product-info">
              <h4 class="cart-item-product-title">Lorem Ipsum is simply dummy text</h4><span><strong>Type:</strong> Earing aid</span><span><strong>Color:</strong> White</span>
            </div></a></div>
        <div class="px-3 my-3 text-center">
          <div class="cart-item-label">Quantity</div>
          <div class="count-input">
            <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>
          </div>
        </div>
        <div class="px-3 my-3 text-center">
          <div class="cart-item-label">Subtotal</div><span class="text-xl font-weight-medium"><i class="fa fa-inr" aria-hidden="true"></i> 188.50</span>
        </div>
        <div class="px-3 my-3 text-center">
          <div class="cart-item-label">Discount</div><span class="text-xl font-weight-medium">—</span>
        </div>
      </div>
      <?php endforeach ?>
      <!-- Coupon + Subtotal-->
      <div class="d-sm-flex justify-content-between align-items-center text-center text-sm-left">
        <form class="form-inline py-2">
          <label class="sr-only">Coupon code</label>
          <input class="form-control form-control-sm my-2 mr-3" type="text" placeholder="Coupon code" required>
          <button class="btn btn-secondary btn-sm my-2 mx-auto mx-sm-0" type="submit">Apply Coupon</button>
        </form>
        <div class="py-2"><span class="d-inline-block align-middle text-sm text-muted font-weight-medium text-uppercase mr-2">Subtotal:</span><span class="d-inline-block align-middle text-xl font-weight-medium"><i class="fa fa-inr" aria-hidden="true"></i> 2,513.50</span></div>
      </div>
      <!-- Buttons-->
      <hr class="my-2">
      <div class="row pt-3 pb-5 mb-2">
        <div class="col-sm-6 mb-3"><a class="btn btn-secondary btn-block" href="#"><i class="fe-icon-refresh-ccw"></i>&nbsp;Update Cart</a></div>
        <div class="col-sm-6 mb-3"><a class="btn btn-primary btn-block" href="<?php echo base_url(); ?>checkout"><i class="fe-icon-credit-card"></i>&nbsp;Checkout</a></div>
      </div>
      
    </div>
    
	 <hr class="mb-2">
       