<!-- Page Title-->
<div class="page-title d-flex" aria-label="Page title" style="background:#913494;">
      <div class="container text-center align-self-center">
        
        <h1 class="page-title-heading">Checkout</h1>
      </div>
    </div>
    <!-- Page Content-->
     <div class="container pb-4 mb-2">
      <div class="row">
        <!-- Checkout: Address-->
        <div class="col-xl-9 col-lg-8 pb-5">
          <div class="wizard">
            <div class="wizard-steps d-flex flex-wrap flex-sm-nowrap justify-content-between">
              <div class="wizard-step active">1. Address</div><a class="wizard-step" href="checkout-shipping.html">2. Shipping</a><a class="wizard-step" href="checkout-payment.html">3. Payment</a><a class="wizard-step" href="checkout-review.html">4. Review</a>
            </div>
            <div class="wizard-body">
              <h3 class="h5 pb-2">Billing Address</h3>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="text-muted" for="checkout-fn">First Name</label>
                    <input class="form-control" type="text" id="checkout-fn">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="text-muted" for="checkout-ln">Last Name</label>
                    <input class="form-control" type="text" id="checkout-ln">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="text-muted" for="checkout-email">E-mail Address</label>
                    <input class="form-control" type="email" id="checkout-email">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="text-muted" for="checkout-phone">Phone Number</label>
                    <input class="form-control" type="text" id="checkout-phone">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="text-muted" for="checkout-company">Company</label>
                    <input class="form-control" type="text" id="checkout-company">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="text-muted" for="checkout-country">Country</label>
                    <select class="form-control" id="checkout-country">
                      <option>Choose country</option>
                      <option>Australia</option>
                      <option>Canada</option>
                      <option>France</option>
                      <option>Germany</option>
                      <option>Switzerland</option>
                      <option>USA</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="text-muted" for="checkout-city">Country</label>
                    <select class="form-control" id="checkout-city">
                      <option>Choose city</option>
                      <option>Amsterdam</option>
                      <option>Berlin</option>
                      <option>Geneve</option>
                      <option>New York</option>
                      <option>Paris</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="text-muted" for="checkout-zip">ZIP Code</label>
                    <input class="form-control" type="text" id="checkout-zip">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="text-muted" for="checkout-address-1">Address 1</label>
                    <input class="form-control" type="text" id="checkout-address-1">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="text-muted" for="checkout-address-2">Address 2</label>
                    <input class="form-control" type="text" id="checkout-address-2">
                  </div>
                </div>
              </div>
              <h3 class="h5 pt-3 pb-2">Shipping Address</h3>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" checked id="same-address">
                <label class="custom-control-label" for="same-address">Same as billing address</label>
              </div>
            </div>
            <div class="wizard-footer d-flex justify-content-between"><a class="btn btn-secondary my-2" href="cart.html"><i class="fe-icon-arrow-left"></i><span class="d-none d-sm-inline-block">Back to cart</span></a><a class="btn btn-primary my-2" href="checkout-shipping.html"><span class="d-none d-sm-inline-block">Continue</span><i class="fe-icon-arrow-right"></i></a></div>
          </div>
        </div>
        <!-- Sidebar-->
        <aside class="col-xl-3 col-lg-4 pb-4 mb-2">
          <!-- Order Summary-->
          <div class="widget">
            <h4 class="widget-title">Order Summary</h4>
            <div class="d-flex justify-content-between pb-2">
              <div>Cart subtotal:</div>
              <div class="font-weight-medium"><i class="fa fa-inr" aria-hidden="true"></i> 2,548.50</div>
            </div>
            <div class="d-flex justify-content-between pb-2">
              <div>Shipping:</div>
              <div class="font-weight-medium"><i class="fa fa-inr" aria-hidden="true"></i> 26.50</div>
            </div>
            <div class="d-flex justify-content-between pb-2">
              <div>Estimated tax:</div>
              <div class="font-weight-medium"><i class="fa fa-inr" aria-hidden="true"></i> 9.72</div>
            </div>
            <hr>
            <div class="pt-3 text-right text-lg font-weight-medium"><i class="fa fa-inr" aria-hidden="true"></i> 2,584.72</div>
          </div>
          <!-- Recent Products-->
          <!--<div class="widget widget-featured-products">
            <h4 class="widget-title">Recrently Viewed</h4><a class="featured-product" href="#">
              <div class="featured-product-thumb"><img src="img/widgets/shop/01.jpg" alt="Product Image"/>
              </div>
              <div class="featured-product-info">
                <h5 class="featured-product-title">Amazon Echo Dot 2</h5>
                <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                </div><span class="featured-product-price">
                  <del>$62.00</del>&nbsp;$49.99</span>
              </div></a><a class="featured-product" href="#">
              <div class="featured-product-thumb"><img src="img/widgets/shop/02.jpg" alt="Product Image"/>
              </div>
              <div class="featured-product-info">
                <h5 class="featured-product-title">Zeus Bluetooth Earbuds</h5>
                <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star"></i><i class="fe-icon-star"></i>
                </div><span class="featured-product-price">$28.99</span>
              </div></a><a class="featured-product" href="#">
              <div class="featured-product-thumb"><img src="img/widgets/shop/03.jpg" alt="Product Image"/>
              </div>
              <div class="featured-product-info">
                <h5 class="featured-product-title">Xbox One S White</h5>
                <div class="rating-stars"><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star active"></i><i class="fe-icon-star"></i>
                </div><span class="featured-product-price">$298.99</span>
              </div></a>
          </div>-->
          <!-- Promo Banner--><!--<a class="d-block" href="shop-single.html"><img class="d-block" src="img/shop/shop-banner-sidebar.jpg" alt="Promo Banner"></a>-->
        </aside>
      </div>
    </div>
   
	 <hr class="mb-2">