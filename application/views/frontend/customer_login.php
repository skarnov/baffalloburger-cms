<div id="login" class="light-wrapper" style="min-height: 670px;">
    <section class="ss-style-top"></section>
    <div class="container inner">
        <h2 class="section-title text-center">Login</h2>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="form form-table" action="<?php echo base_url(); ?>restaurant/customer_login_check" method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <input class="form-control hint" type="email" name="customer_email" placeholder="Email@domain.com" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <input class="form-control hint" type="password" name="customer_password" placeholder="Enter Password"  required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center" style="line-height: 0px;">
                            <p>Forgot your password? <a href="#">Click here</a></p>
                            <p>New user? <a href="<?php echo base_url(); ?>restaurant/register">Create new account</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-danger btn-lg">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="ss-style-bottom"></section>
</div>