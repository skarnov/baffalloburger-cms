<div id="header">
    <div class="bg-overlay"></div>
    <div class="center text-center">
        <div class="banner">
            <h1 style="margin-top: 25%;">Bufallo Burgers</h1>
        </div>
        <div class="subtitle"><h4>Name of Best Burger</h4></div>
    </div>
    <div class="bottom text-center">
        <a id="scrollDownArrow" href="#"><i class="fa fa-chevron-down"></i></a>
    </div>
</div>

<div id="menuitem" class="parallax pricing">
    <div class="container inner">
        <h2 class="section-title text-center">Menu</h2>
        <p class="lead main text-center">There is no sincerer love than the love of food!</p>
        <div class="row">
            <?php
            foreach ($special_menu as $v_menu) {
                ?>
                <div class="col-md-6 col-sm-6">
                    <div class="pricing-item">
                        <a href="#"><img class="img-responsive img-thumbnail" src="<?php echo $v_menu->product_image; ?>" alt=""></a>
                        <div class="pricing-item-details">
                            <h3><a href="#"><?php echo $v_menu->product_name; ?></a></h3>
                            <p><?php echo $v_menu->product_description; ?></p>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#totalCart" onclick="addToCart(<?php echo $v_menu->product_id; ?>);">Order Now</button>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red"><?php echo $v_menu->product_price; ?></span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<div id="philosophy" class="light-wrapper">
    <section class="ss-style-top"></section>
    <div class="container inner">
        <h2 class="section-title text-center">Philosophy</h2>
        <p class="lead main text-center">We're cooking delicious foods since 1879</p>
        <div class="row text-center story">
            <div class="col-sm-4">
                <div class="col-wrapper">
                    <div class="icon-wrapper"> <i class="fa fa-anchor"></i> </div>
                    <h3>EST. 1879</h3>
                    <p>Vivamus sagittis lacuson augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum ultricies vehicula.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-wrapper">
                    <div class="icon-wrapper"> <i class="fa  fa-cutlery"></i> </div>
                    <h3>Cooking Traditions</h3>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient monte nascetur ultricies vehicula. </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-wrapper">
                    <div class="icon-wrapper"> <i class="fa fa-coffee"></i> </div>
                    <h3>Food Quality</h3>
                    <p>Curabitur blandit matti tempus porttitor. Donec id elit non mi porta ut gravida at eget metus. Consectetur adipiscing elit ultricies vehicula.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="ss-style-bottom"></section>
</div>

<div id="contact" class="light-wrapper">
    <section class="ss-style-top"></section>
    <div class="container inner">
        <h2 class="section-title text-center">Contact</h2>
        <p class="lead main text-center">Contact With Us</p>
        <div class="row">
            <div class="col-md-6">
                <form class="form form-table" method="post" name="">
                    <div class="form-group">
                        <h4>Fill the form for table reservation (all fields required)</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="first_name1">first name</label>
                            <input class="form-control hint" type="text" id="first_name1" name="first_name" placeholder="First name" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="last_name1">last name</label>
                            <input class="form-control hint" type="text" id="last_name1" name="last_name" placeholder="Last name" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="email1">email</label>
                            <input class="form-control hint" type="email" id="email1" name="email" placeholder="Email@domain.com" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="phone1">phone</label>
                            <input class="form-control hint" type="text" id="phone1" name="phone" placeholder="Phone" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="reserv_date1">reservation date</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="reserv_date1" name="reserv_date" placeholder="Reservation date" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="numb_guests1">number of guests</label>
                            <input class="form-control hint" type="text" id="numb_guests1" name="numb_guests" placeholder="Number of guests" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="alt_reserv_date1">time from</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="alt_reserv_date1" name="alt_reserv_date" placeholder="Time from" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="time1">time</label>
                            <input class="form-control timepicker ui-timepicker-input hint" type="text" id="time1" name="time" placeholder="Time to" required="" autocomplete="off">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-danger btn-lg">Reserve!</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <h3><i class="fa fa-clock-o fa-fw"></i>Hours</h3>
                <h4>Breakfast</h4>
                <p>Mon to Fri: 7:30 AM - 11:30 AM<br>Sat &amp; Sun: 8:00 AM - 9:00 AM</p>
                <h4>Lunch</h4>
                <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                <h4>Dinner</h4>
                <p>Mon to Sat: 6:00 PM -  1:00 AM<br>Sun: 5:30 PM - 12:00 AM</p>

                <h3><i class="fa fa-map-marker fa-fw"></i>Directions</h3>
                <p>Haupt Strasse 66 Linz, Austria</p>

                <h3><i class="fa fa-mobile fa-fw"></i>Contacts</h3>
                <p>Email: <a href="mailto:yourname@meatking.com">yourname@meatking.com</a></p>
                <p>Phone: +43 732 370629</p>
            </div>
        </div>
    </div>
    <section class="ss-style-bottom"></section>
</div>