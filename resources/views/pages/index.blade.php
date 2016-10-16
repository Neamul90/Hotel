@extends('index')
@section('content')
<body id="home_one">
<!-- start main slider -->
<div class="main_slider_area">
            <div class="main_slider" id="slider_rev">
                <!-- start hotel booking -->
                <div class="hotel_booking_area">
                    <div class="container">
                        <div class="hotel_booking">
                            <form id="form1" role="form" action="#" class="">
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="room_book border-right-dark-1">
                                        <h6>Book Your</h6>
                                        <p>Rooms</p>
                                    </div>
                                </div>
                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                    <div class="input-group border-bottom-dark-2">
                                        <input class="date-picker" id="datepicker" placeholder="Arrival" type="text"/>
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                    <div class="input-group border-bottom-dark-2">
                                        <input class="date-picker" id="datepicker1" placeholder="Departure" type="text"/>
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                            <div class="input-group border-bottom-dark-2">
                                                <select class="form-control" name="room" id="room">
                                                    <option selected="selected" disabled="disabled">1 Room</option>
                                                    <option value="Single">1 Room</option>
                                                    <option value="Double">2 Room</option>
                                                    <option value="Deluxe">3 Room</option>
                                                </select>               
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                            <div class="input-group border-bottom-dark-2">
                                                <select class="form-control" name="room" id="adult">
                                                    <option selected="selected" disabled="disabled">1 Adult</option>
                                                    <option value="Single">1 Adult</option>
                                                    <option value="Double">2 Adult</option>
                                                    <option value="Deluxe">3 Adult</option>
                                                </select>               
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                            <div class="input-group border-bottom-dark-2">
                                                <select class="form-control" name="room" id="child">
                                                    <option selected="selected" disabled="disabled">0 Child</option>
                                                    <option value="Single">0 Child</option>
                                                    <option value="Double">1 Child</option>
                                                    <option value="Deluxe">2 Child</option>
                                                </select>               
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <a class="btn btn-primary floatright">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- special offer start -->
                            <div class="special_offer_main">
                                <img src="img/special-offer-main.png" alt="">
                            </div>
                            <!-- end offer start -->
                        </div>
                    </div>
                </div>
                <!-- end hotel booking -->
                <div class="fullwidthbanner-container" >
                    <div class="fullwidth_home_banner">
                        <ul>

                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/slider-one.jpg" alt="slide" >
                                <div class="tp-caption large_black sfr" data-x="105" data-y="197" data-speed="1200" data-start="1100" data-easing="easeInOutBack"
                                     style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                    A brand New Hotel
                                </div>
                                <div class="tp-caption large_black sfr" data-x="105" data-y="255" data-speed="1500" data-start="1400" data-easing="easeInOutBack"
                                     style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                    Beyond Ordinary
                                </div>
                                <div class="tp-caption lfb carousel-caption-inner" data-x="105" data-y="313" data-speed="1300" data-start="1700" data-easing="easeInOutBack" 
                                     style="background: #f7c411; padding: 10px; cursor: pointer;">
                                    <a href="#" class="" style="background: #f7c411; border-radius: 0; color: #313a45; display: inline-block;  font-size: 18px; padding: 8px 34px; text-transform: uppercase; border: 1px solid #9e811a;">Explore IT</a>
                                </div>
                            </li>

                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/slider-one.jpg" alt="slide" >
                                <div class="tp-caption large_black sfr" data-x="105" data-y="197" data-speed="1200" data-start="1100" data-easing="easeInOutBack"
                                     style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                    Book Your Summer Holidays
                                </div>
                                <div class="tp-caption large_black sfr" data-x="105" data-y="255" data-speed="1500" data-start="1400" data-easing="easeInOutBack"
                                     style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                    With HOTEL BOOKING Template
                                </div>
                                <div class="tp-caption lfb carousel-caption-inner" data-x="105" data-y="313" data-speed="1300" data-start="1700" data-easing="easeInOutBack" 
                                     style="background: #f7c411; padding: 10px; cursor: pointer;">
                                    <a href="#" class="" style="background: #f7c411; border-radius: 0; color: #313a45; display: inline-block;  font-size: 18px; padding: 8px 34px; text-transform: uppercase; border: 1px solid #9e811a;">Explore IT</a>
                                </div>
                            </li>							                           
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- end main slider -->

<!-- start welcome section -->
<section class="welcome_area">  
            <div class="container">
                <div class="welcome">
                    <div class="section_title nice_title content-center">
                        <h3>Welcome To Hotel</h3>
                    </div>
                    <div class="section_description">
                        <p> Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor. </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_room_wrapper clearfix">
                                <figure class="uk-overlay uk-overlay-hover">
                                    <div class="room_media">
                                        <a href="#"><img src="img/room-image-five.png" alt=""></a>
                                    </div>
                                    <div class="room_title border-bottom-whitesmoke clearfix">
                                        <div class="left_room_title floatleft">
                                            <h6>Deluxe Room</h6>
                                            <p>$200/ <span>night</span></p>
                                        </div>
                                        <div class="left_room_title floatright">
                                            <a href="#" class="btn">Book</a>
                                        </div>
                                    </div>
                                    <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                        <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                            <h5>Deluxe Room</h5>
                                            <p>
                                                Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                            </p>
                                            <p>
                                                Phasellus accumsan urna vitae molestie interdum.
                                            </p>
                                            <div class="single_room_cost clearfix">
                                                <div class="floatleft">
                                                    <p>$200/ <span>night</span></p>
                                                </div>
                                                <div class="floatright">
                                                    <a href="#" class="btn">Book</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_room_wrapper clearfix">
                                <figure class="uk-overlay uk-overlay-hover">
                                    <div class="room_media">
                                        <a href="#"><img src="img/room-image-nine.png" alt=""></a>
                                    </div>
                                    <div class="room_title border-bottom-whitesmoke clearfix">
                                        <div class="left_room_title floatleft">
                                            <h6>Double Room</h6>
                                            <p>$150/ <span>night</span></p>
                                        </div>
                                        <div class="left_room_title floatright">
                                            <a href="#" class="btn">Book</a>
                                        </div>
                                    </div>
                                    <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInUp">
                                        <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                            <h5>Double Room</h5>
                                            <p>
                                                Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                            </p>
                                            <p>
                                                Phasellus accumsan urna vitae molestie interdum.
                                            </p>
                                            <div class="single_room_cost clearfix">
                                                <div class="floatleft">
                                                    <p>$150/ <span>night</span></p>
                                                </div>
                                                <div class="floatright">
                                                    <a href="#" class="btn">Book</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_room_wrapper clearfix">
                                <figure class="uk-overlay uk-overlay-hover">
                                    <div class="room_media">
                                        <a href="#"><img src="img/room-image-thirteen.jpg" alt=""></a>
                                    </div>
                                    <div class="room_title border-bottom-whitesmoke clearfix">
                                        <div class="left_room_title floatleft">
                                            <h6>Single Room</h6>
                                            <p>$180/ <span>night</span></p>
                                        </div>
                                        <div class="left_room_title floatright">
                                            <a href="#" class="btn">Book</a>
                                        </div>
                                    </div>
                                    <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                        <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                            <h5>Single Room</h5>
                                            <p>
                                                Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                            </p>
                                            <p>
                                                Phasellus accumsan urna vitae molestie interdum.
                                            </p>
                                            <div class="single_room_cost clearfix">
                                                <div class="floatleft">
                                                    <p>$180/ <span>night</span></p>
                                                </div>
                                                <div class="floatright">
                                                    <a href="#" class="btn">Book</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_room_wrapper clearfix">
                                <figure class="uk-overlay uk-overlay-hover">
                                    <div class="room_media">
                                        <a href="#"><img src="img/room-image-eight.png" alt=""></a>
                                    </div>
                                    <div class="room_title border-bottom-whitesmoke clearfix">
                                        <div class="left_room_title floatleft">
                                            <h6>Kids Room</h6>
                                            <p>$140/ <span>night</span></p>
                                        </div>
                                        <div class="left_room_title floatright">
                                            <a href="#" class="btn">Book</a>
                                        </div>
                                    </div>
                                    <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInUp">
                                        <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                            <h5>Kids Room</h5>
                                            <p>
                                                Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                            </p>
                                            <p>
                                                Phasellus accumsan urna vitae molestie interdum.
                                            </p>
                                            <div class="single_room_cost clearfix">
                                                <div class="floatleft">
                                                    <p>$140/ <span>night</span></p>
                                                </div>
                                                <div class="floatright">
                                                    <a href="#" class="btn">Book</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- end welcome section -->

<!-- start Hotel Facilities section -->
<section class="hotel_facilities_area margin-top-115 margin-bottom-100">
            <div class="container">
                <div class="hotel_facilities">
                    <div class="section_title nice_title content-center">
                        <h3>Hotel facilties</h3>
                    </div>
                    <div class="hotel_facilities_content">
                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#restaurant" aria-controls="restaurant" role="tab" data-toggle="tab"><img src="img/home-facilities-icon-eleven.png" alt="restaurant"><span>restaurant</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#sports-club" aria-controls="sports-club" role="tab" data-toggle="tab"><img src="img/home-facilities-icon-seven.png" alt="sports-club"><span>sports-club</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#pick-up" aria-controls="pick-up" role="tab" data-toggle="tab"><img src="img/home-facilities-icon-eight.png" alt="pick-up"><span>pick-up</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#bar" aria-controls="bar" role="tab" data-toggle="tab"><img src="img/home-facilities-icon-nine.png" alt="bar"><span>bar</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#gym" aria-controls="gym" role="tab" data-toggle="tab"><img src="img/home-facilities-icon-ten.png" alt="gym"><span>gym</span></a>
                                </li>
                            </ul>                           


                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="restaurant">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5 col-sm-6">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="img/hotel-facility-one.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7 col-sm-6">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Restaurant & Banquets</h3>
                                                    <p>
                                                        Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                                    </p>
                                                    <p>
                                                        Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                                    </p>
                                                    <div class="our_services">
                                                        <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="sports-club">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="img/hotel-facility-three.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Sports Club</h3>
                                                    <p>
                                                        Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                                    </p>
                                                    <p>
                                                        Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                                    </p>
                                                    <div class="our_services">
                                                        <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="pick-up">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="img/hotel-facility-one.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Pick Up</h3>
                                                    <p>
                                                        Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                                    </p>
                                                    <p>
                                                        Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                                    </p>
                                                    <div class="our_services">
                                                        <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="bar">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="img/hotel-facility-three.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Bar</h3>
                                                    <p>
                                                        Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                                    </p>
                                                    <p>
                                                        Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                                    </p>
                                                    <div class="our_services">
                                                        <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="gym">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="img/hotel-facility-one.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Gym</h3>
                                                    <p>
                                                        Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                                    </p>
                                                    <p>
                                                        Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                                    </p>
                                                    <div class="our_services">
                                                        <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- end Hotel Facilities section -->

<!-- start About Us section -->
<section class="about_us_area margin-bottom-128">
    <div class="container">
        <div class="about_us clearfix">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-left-0">
                <div class="news">
                    <div class="section_title margin-bottom-50">
                        <h5>News</h5>
                    </div>
                    <div class="section_description">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single_content clearfix border-bottom-whitesmoke">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                        <div class="post_media">
                                            <a href="#"><img src="{{asset('img/news-one.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                        <div class="post_title clearfix">
                                            <h6>Quisque at felis port titordga</h6>
                                        </div>
                                        <div class="post_content  margin-bottom-35">
                                            <p>14 May 2014</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_content clearfix margin-top-35 border-bottom-whitesmoke">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                        <div class="post_media">
                                            <a href="#"><img src="{{asset('img/news-two.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                        <div class="post_title clearfix">
                                            <h6>Donec scelerisque vulputate</h6>
                                        </div>
                                        <div class="post_content margin-bottom-35">
                                            <p>15 May 2014</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_content clearfix margin-bottom-35 margin-top-35">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                        <div class="post_media">
                                            <a href="#"><img src="{{asset('img/news-three.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                        <div class="post_title clearfix">
                                            <h6>Curabitur varius quam lorem</h6>
                                        </div>
                                        <div class="post_content">
                                            <p>17 May 2014</p>
                                        </div>
                                    </div>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="showcase">
                    <div class="section_title margin-bottom-50">
                        <h5>Hotel Showcase</h5>
                    </div>
                    <div class="section_description">
                        <div class="clearfix demo" style="">
                            <ul id="vertical" class="gallery list-unstyled">
                                <li data-thumb="{{asset('img/lightslider-img/cS-18.jpg')}}">
                                    <img alt="slider" src="{{asset('img/lightslider-img/cS-18.jpg')}}" />
                                </li>
                                <li data-thumb="{{asset('img/lightslider-img/cS-21.jpg')}}"> 
                                    <img alt="slider" src="{{asset('img/lightslider-img/cS-21.jpg')}}" />
                                </li>
                                <li data-thumb="{{asset('img/lightslider-img/cS-22.jpg')}}"> 
                                    <img alt="slider" src="{{asset('img/lightslider-img/cS-22.jpg')}}" />
                                </li>
                                <li data-thumb="{{asset('img/lightslider-img/cS-23.jpg')}}"> 
                                    <img alt="slider" src="{{asset('img/lightslider-img/cS-23.jpg')}}" />
                                </li>
                                <li data-thumb="{{asset('img/lightslider-img/cS-24.jpg')}}"> 
                                    <img alt="slider" src="{{asset('img/lightslider-img/cS-24.jpg')}}" />
                                </li>
                                <li data-thumb="{{asset('img/lightslider-img/cS-25.jpg')}}"> 
                                    <img alt="slider" src="{{asset('img/lightslider-img/cS-25.jpg')}}" />
                                </li>
                                <li data-thumb="{{asset('img/lightslider-img/cS-26.jpg')}}"> 
                                    <img alt="slider" src="{{asset('img/lightslider-img/cS-26.jpg')}}" />
                                </li>
                                <li data-thumb="{{asset('img/lightslider-img/cS-27.jpg')}}"> 
                                    <img alt="slider" src="{{asset('img/lightslider-img/cS-27.jpg')}}" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="customer_says">
                    <div class="section_title margin-bottom-50">
                        <h5>Customer Says</h5>
                    </div>
                    <div class="section_description">
                        <div id="customer_says_slider" class="carousel slide" data-ride="carousel" data-pause="none">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="single_says">
                                        <div class="customer_comment">
                                            <p>
                                                Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan urna vitae molestie interdum.
                                            </p>
                                            <p>
                                                Nam sed placerat libero, non eleifend dolor.
                                            </p>
                                        </div>
                                        <div class="customer_detail clearfix">
                                            <div class="customer_pic alignleft-20">
                                                <a href="#"><img src="{{asset('img/customer-says-one.png')}}" alt=""></a>
                                            </div>
                                            <div class="customer_identity floatleft">
                                                <h6>John Doe</h6>
                                                <p>www.john.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single_says">
                                        <div class="customer_comment">
                                            <p>
                                                Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan urna vitae molestie interdum.
                                            </p>
                                            <p>
                                                Nam sed placerat libero, non eleifend dolor.
                                            </p>
                                        </div>
                                        <div class="customer_detail clearfix">
                                            <div class="customer_pic alignleft-20">
                                                <a href="#"><img src="{{asset('img/customer-says-one.png')}}" alt=""></a>
                                            </div>
                                            <div class="customer_identity floatleft">
                                                <h6>John Doe</h6>
                                                <p>www.john.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="slider_says left" href="#customer_says_slider" role="button" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="slider_says right" href="#customer_says_slider" role="button" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end About Us section -->
@endsection