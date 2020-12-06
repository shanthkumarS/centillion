<!-- Page Title-->
<div class="page-title d-flex" aria-label="Page title" style="background:#913494;">
    <div class="container text-center align-self-center">

        <h1 class="page-title-heading">Login</h1>
    </div>
</div>
<!-- Page Content-->
<section style="background:url('<?php echo base_url(); ?>assets/img/hero-bg.png'); background-size:cover">
    <div class="container mb-3">
        <div class="row">

            <div class="col-md-6 pb-5">
                <img src="<?php echo base_url(); ?>assets/img/login.jpg">
            </div>
            <div class="col-md-6 pb-5">
                <form class="needs-validation wizard SigninDiv hidden" novalidate="" id="login-form" method="post" action="<?php echo base_url()?>login/userlogin">
                    <div class="wizard-body pt-2">
                        <div class="d-sm-flex justify-content-between pb-2">
                            <a class="btn btn-secondary btn-sm btn-block my-2 mr-3" href="#">
                                <i class="socicon-facebook"></i>&nbsp;Login
                            </a>
                            <a class="btn btn-secondary btn-sm btn-block my-2 mr-3" href="#"><i class="socicon-google"></i>&nbsp;Login</a>
                        </div>
                        <hr>
                        <h3 class="h5 pt-4 pb-2 text-center">Or</h3>

                        <?php if(isset($error) && isset($error['lemail'])) :?>
                            <div class="text-danger">
                                <?php echo $error['lemail'];?>
                            </div>
                        <?php endif; ?>
                        <div class="input-group form-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fe-icon-mail"></i></span></div>
                            <input class="form-control" type="email" placeholder="Email" required="" name="lemail" value="<?php if (isset($user) && $user != null) {echo $user->getEmail();}?>">
                            <div class="invalid-feedback">Please enter your email!</div>
                        </div>
                        <?php if(isset($error) && isset($error['lpassword'])) :?>
                            <div class="text-danger">
                                <?php echo $error['lpassword'];?>
                            </div>
                        <?php endif; ?>
                        <div class="input-group form-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fe-icon-lock"></i></span></div>
                            <input class="form-control" type="password" placeholder="Password" required="" name="lpassword">
                            <div class="invalid-feedback">Please enter valid password!</div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" checked="" id="remember-me">
                                <label class="custom-control-label" for="remember-me">Remember me</label>
                            </div><a class="navi-link forgot" href="javascript:;">Forgot password?</a>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-wrap justify-content-between wizard-footer text-right">
                        <p>If you don't have an account, <a href="javascript:;" class="register-button">register now!</a></p>
                        <button class="btn btn-primary login-submit" type="submit">Login</button>
                    </div>
                </form>
                <form id="register_form" name="register-form" class="needs-validation wizard RegisterDiv" action="<?php echo base_url()?>login/adduser" method="post" novalidate="novalidate">
                    <div class="wizard-body pt-2">
                        <div class="d-sm-flex justify-content-between pb-2">
                            <a class="btn btn-secondary btn-sm btn-block my-2 mr-3" href="#">
                                <i class="socicon-facebook"></i>&nbsp;Login
                            </a>
                            <a class="btn btn-secondary btn-sm btn-block my-2 mr-3" href="#"><i class="socicon-google"></i>&nbsp;Login</a>
                        </div>
                        <hr>
                        <h3 class="h5 pt-4 pb-2 text-center">Or</h3>
                        
                        <?php if(isset($error) && isset($error['name'])) :?>
                            <div class="text-danger">
                                <?php echo $error['name'];?>
                            </div>
                        <?php endif; ?>
                        <div class="input-group form-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fe-icon-mail"></i></span></div>
                            <input type="text" id="register-form-name" name="name" class="form-control" placeholder="Name" value="<?php if (isset($user) && $user != null) {echo $user->getName();}?>">
                        </div>
                        
                        <?php if(isset($error) && isset($error['email'])) :?>
                            <div class="text-danger">
                                <?php echo $error['email'];?>
                            </div>
                        <?php endif; ?>
                        <div class="input-group form-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fe-icon-mail"></i></span></div>
                            <input type="text" id="register-form-email" name="email" class="form-control" placeholder="Email" value="<?php if (isset($user) && $user != null) {echo $user->getEmail();}?>">
                        </div>

                        <?php if(isset($error) && isset($error['password'])) :?>
                            <div class="text-danger">
                                <?php echo $error['password'];?>
                            </div>
                        <?php endif; ?>
                        <div class="input-group form-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fe-icon-lock"></i></span></div>
                            <input type="password" id="register-form-password" name="password" value="" class="form-control password" placeholder="Password" >
                            <label id="password-check" style="display:none;color:red;">Password between 8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character</label>
                        </div>

                        <?php if(isset($error) && isset($error['cpassword'])) :?>
                            <div class="text-danger">
                                <?php echo $error['cpassword'];?>
                            </div>
                        <?php endif; ?>
                        <div class="input-group form-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fe-icon-lock"></i></span></div>
                            <input type="password" id="register-form-repassword" name="cpassword" value="" class="form-control" placeholder="Confirm Password">
                        </div>

                    
                        <div class="d-flex flex-wrap justify-content-between wizard-footer text-right">
                            <p class="">Already have an account? <a class="signin" href="javascript:;"> Sign in </a></p>
                            <button class="btn btn-primary" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                        </div>
                    </div>
                </form>	
                <form class="needs-validation wizard ForgotDiv hidden" id="forgot-form" action="#" role="form" method="post">
                    <div class="wizard-body pt-2">
                        <div class="d-sm-flex justify-content-between pb-2">
                            <a class="btn btn-secondary btn-sm btn-block my-2 mr-3" href="#">
                                <i class="socicon-facebook"></i>&nbsp;Login
                            </a>
                            <a class="btn btn-secondary btn-sm btn-block my-2 mr-3" href="#"><i class="socicon-google"></i>&nbsp;Login</a>
                        </div>
                        <hr>
                        <h3 class="h5 pt-4 pb-2 text-center">Or</h3>
                        <div class="input-group form-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fe-icon-mail"></i></span></div>
                            <input class="form-control" type="email" placeholder="Email" required="" name="femail">
                        </div> 
                        <button class="btn btn-primary forgot-submit" type="submit">
                            <span>Submit</span>
                        </button>     
                        <a href="javascript:;" class="button button-small button-rounded  button-light signin "><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </form>			
            </div>
        </div>
    </div>
</section>

<hr class="mb-2">
