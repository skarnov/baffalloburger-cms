<div id="register" class="light-wrapper" style="min-height: 670px;">
    <section class="ss-style-top"></section>
    <div class="container inner">
        <h2 class="section-title text-center">Register</h2>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('save_customer');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('save_customer');
                    }
                    ?>
                </h3>
                <form class="form form-table" action="<?php echo base_url(); ?>restaurant/save_customer" method="POST">
                    <div class="form-group">
                        <input type="text" name="customer_name" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" name="customer_email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="customer_password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="customer_mobile" placeholder="Mobile" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="customer_address" placeholder="Address" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="customer_landmark" placeholder="Address Landmark" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-danger btn-lg">Create New Customer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="ss-style-bottom"></section>
</div>