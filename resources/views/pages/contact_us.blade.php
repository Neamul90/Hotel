@extends('index')
@section('content')
<body id="contact_us_page">


    <!-- start breadcrumb -->
    <section class="breadcrumb_main_area margin-bottom-80">
        <div class="container-fluid">
            <div class="row">
                <div class="breadcrumb_main nice_title">
                    <h2>Contact Us</h2>
                    <!-- special offer start -->
                    <div class="special_offer_main">
                        <div class="container">
                            <div class="special_offer_sub">
                                <img src="img/special-offer-yellow-main.png" alt="imf">
                            </div>
                        </div>
                    </div>         
                    <!-- end offer start -->
                </div>
            </div>
        </div>            
    </section>
    <!-- end breadcrunb -->

    <!-- start other detect room section -->
    <div class="contact_google_map_area margin-bottom-75">
        <div class="container">
            <div class="contact_google_map">
                <div id="contactgoogleMap" style="width:100%;height:374px;"></div>
            </div>
        </div>
    </div>
    <!-- end other detect room section -->

    <!-- start contact mail area -->
    <section class="contact_mail_area margin-bottom-90">
        <div class="container">
            <div class="row">
                <div class="contact_mail">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="send_mail">
                            <div class="section_title margin-bottom-40">
                                <h4>send us an email</h4>
                            </div>
                            <form action="http://premiumlayers.com/demos/hotelbooking/contact_process.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="First Name *" name="fname" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="Last Name *" required name="lname">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input  type="text" placeholder="Your Email Id *" required name="email"/>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input  type="text" placeholder="Phone Number *" required name="phone"/>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <textarea name="message" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <!-- <a href="#" class="btn btn-warning btn-md"></a> -->
                                        <input class="btn btn-warning btn-md" type="submit" name="submit" value="Submit Now" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact_info margin-top-65">
                            <div class="section_title margin-bottom-45">
                                <h4>Contact Info</h4>
                            </div>
                            <ul class="clearul">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    St Amsterdam finland, <br>
                                    United Stats of AKY16 8PN
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    1234567890
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    info@hotelbooking.com
                                </li>
                            </ul>
                            <div class="social_icons clearfix">
                                <ul class="clearul">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact mail area -->
@endsection