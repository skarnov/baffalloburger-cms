<!DOCTYPE html>

<html class="no-js">
    <head>
        <title><?php echo $title; ?></title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/frontend/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/frontend/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/frontend/css/main.css">

        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- Google Font -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>

        <!-- JS -->
        <script src="<?php echo base_url(); ?>asset/frontend/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body data-spy="scroll" data-target="#navbar" data-offset="120" >
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header visible-xs">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><h2>Bufalloburgers</h2></a>
                </div><!-- navbar-header -->
                <div id="navbar" class="navbar-collapse collapse">
                    <div class="hidden-xs" id="logo">
                        <a href="index.php">
                            <img src="<?php echo base_url(); ?>asset/frontend/img/logo.png" alt="">
                        </a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>#menuitem">Menu</a></li>
                        <li><a href="<?php echo base_url(); ?>#philosophy">Philosophy</a></li>
                        <?php
                        $customer_id = $this->session->userdata('customer_name');
                        if ($customer_id == NULL) {
                            ?>
                            <li><a data-toggle="modal" data-target="#login">Login</a></li>
                            <li><a data-toggle="modal" data-target="#register">Register</a></li>
                            <?php
                        } else {
                            ?>
                            <li><a href="<?php echo base_url(); ?>restaurant/logout">Logout</a></li>
                            <li><a href="<?php echo base_url(); ?>customer">Dashboard</a></li>
                            <?php
                        }
                        ?>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="<?php echo base_url(); ?>cart/show_cart">Checkout</a></li>
                        <!-- fix for scroll spy active menu element-->
                        <li style="display:none;"><a href="#header"></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <?php echo $home; ?>

        <footer id="footer" class="dark-wrapper">
            <div class="container inner">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; Copyright Bufalloburgers 2017
                    </div>
                    <div class="col-sm-6">
                        <div class="social-bar">
                            <a href="https://www.instagram.com/buffaloburgerlinz/" class="fa fa-instagram tooltipped" title="Instagram" target="_blank"></a>
                            <a href="#" class="fa fa-youtube-square tooltipped" title=""></a>
                            <a href="https://www.facebook.com/Buffalo-Burger-Linz-1325464054156749/?fref=ts" class="fa fa-facebook-square tooltipped" title="Facebook" target="_blank"></a>
                            <a href="#" class="fa fa-pinterest-square tooltipped" title=""></a>
                            <a href="#" class="fa fa-google-plus-square tooltipped" title=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- LOGIN MODAL -->
        <div class="modal fade" id="login" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4><hr/>
                    </div>
                    <form action="<?php echo base_url(); ?>restaurant/customer_login_check" method="POST" role="form" style="display: block;">
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" name="customer_email" placeholder="Email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="customer_password" placeholder="Password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="" class="forgot-password">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit"class="btn btn-danger">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- REGISTER MODAL -->
        <div class="modal fade" id="register" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Register</h4><hr/>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?php echo base_url(); ?>restaurant/login" method="post" role="form" style="display: block;">
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
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo base_url(); ?>restaurant/register" type="button" class="btn btn-danger">Register</a>
                    </div>
                </div>
            </div>
        </div>

        <!--  SHOPPING CART MODAL -->
        <div class="modal fade" id="totalCart" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Shopping Cart</h4><hr/>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td class="text-center">Image</td>
                                        <td class="text-left">Product Name</td>
                                        <td class="text-left">Quantity</td>
                                        <td class="text-right">Unit Price</td>
                                        <td class="text-right">Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $contents = $this->cart->contents();
                                    foreach ($contents as $v_contents) {
                                        ?>
                                        <tr>
                                            <td class="text-center" style="width: 200px; height: 100px;"> 
                                                <a href=""><img src="<?php echo $v_contents['image']; ?>" class="img-thumbnail"></a>
                                            </td>
                                            <td class="text-left">
                                                <a href="">
                                                    <?php echo $v_contents['name']; ?>
                                                </a>
                                            </td>
                                            <td class="text-left">
                                                <div class="input-group btn-block" style="max-width: 200px;">
                                                    <form action="<?php echo base_url(); ?>cart/update_cart" method="POST">
                                                        <input type="hidden"  value="<?php echo $v_contents['rowid']; ?>" name="rowid"/>
                                                        <input type="number" name="product_quantity" value="<?php echo $v_contents['qty']; ?>" class="form-control" style="width: 60px;">&nbsp;
                                                        <button type="submit" class="btn btn-primary" title="Update"><i class="fa fa-refresh"></i></button>
                                                        <a href="<?php echo base_url(); ?>cart/remove/<?php echo $v_contents['rowid']; ?>" title="Remove" class="btn btn-danger"><i class="fa fa-times-circle"></i></a>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="text-right"><?php echo $v_contents['price']; ?></td>
                                            <td class="text-right"><?php echo $v_contents['subtotal']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                        $total = $this->cart->total();
                        $grand_total = $total;
                        $sdata = array();
                        $sdata['grand_total'] = $grand_total;
                        $this->session->set_userdata($sdata);
                        ?>
                        <div class="row">
                            <div class="col-xs-6 pull-right">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="text-right"><strong>Total:</strong></td>
                                                <td class="text-right"><?php echo $grand_total; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="buttons">
                            <div class="pull-left">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Continue Shopping</button>
                            </div>
                            <?php
                            if ($grand_total > 0) {
                                ?>
                                <div class="pull-right"><a href="<?php echo base_url(); ?>checkout" class="btn btn-primary">Checkout</a></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url(); ?>asset/frontend/js/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/frontend/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/frontend/js/main.js"></script>
        <script>
            var xmlhttp = false;
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (E) {
                    xmlhttp = false;
                }
            }
            if (!xmlhttp && typeof XMLHttpRequest !== 'undefined') {
                xmlhttp = new XMLHttpRequest();
            }
            function addToCart(productId)
            {
                if (productId) {
                    serverPage = '<?php echo base_url(); ?>cart/add_to_cart/' + productId + '/';
                    xmlhttp.open("GET", serverPage);
                    xmlhttp.onreadystatechange = function ()
                    {
                        document.getElementById('totalCart').innerHTML = xmlhttp.responseText;
                    };
                    xmlhttp.send(null);
                }
            }
        </script>
    </body>
</html>