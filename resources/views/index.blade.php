<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Kuakata Grand Hotel &amp; Sea Resorts | Presidential Suite</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{asset('img/favicon.png')}}" sizes="16x16">

        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>

        <!-- fontawesome -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}" />

        <!-- bootstrap -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

        <!-- uikit -->
        <link rel="stylesheet" href="{{asset('css/uikit.min.css')}}" />

        <!-- animate -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
        <link rel="stylesheet" href="{{asset('css/datepicker.css')}}" />
        <!-- Owl carousel 2 css -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <!-- rev slider -->
        <link rel="stylesheet" href="{{asset('css/rev-slider/settings.css')}}" />
        <!-- lightslider -->
        <link rel="stylesheet" href="{{asset('css/lightslider.css')}}">
        <!-- Theme -->
        <link rel="stylesheet" href="{{asset('css/reset.css')}}">

        <!-- custom css -->
        <link rel="stylesheet" href="{{asset('style.css')}}" />
        <!-- responsive -->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />



    </head>
    

        <!-- start preloader -->
        <div id="loader-wrapper">
            <div class="logo"><a href="#"><span>Hotel</span>-Booking</a></div>
            <div id="loader">
            </div>
        </div>
        <!-- end preloader -->

        <!-- start header -->
        <header class="header_area">

            @yield('header')
        </header>
        <!-- end header -->

        <!-- start main slider -->
        
        <!-- end main slider -->

        <!-- start welcome section -->
        @yield('content')
        <!-- end welcome section -->

        <!-- start Hotel Facilities section -->
        
        <!-- end Hotel Facilities section -->

        <!-- start About Us section -->
       
        <!-- end About Us section -->

        <!-- start contact us area -->
        @yield('footer')
        
        
        
        <!-- end footer -->

        


		
		
        <!-- jquery library -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <!-- bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- rev slider -->
        <script src="js/rev-slider/rs-plugin/jquery.themepunch.plugins.min.js"></script>
        <script src="js/rev-slider/rs-plugin/jquery.themepunch.revolution.js"></script>
        <script src="js/rev-slider/rs.home.js"></script>
        
        <!-- uikit -->
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-lightbox.js"></script>
        <script src="js/grid.js"></script>
        <!-- easing -->
		<script src="js/jquery.easing.1.3.min.js"></script>
        <script src="js/datepicker.js"></script>
        <!-- scroll up -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- owlcarousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- lightslider -->
        <script src="js/lightslider.js"></script>
        <!-- wow Animation -->
        <script src="js/wow.min.js"></script>
        <!--Activating WOW Animation only for modern browser-->
        <!--[if !IE]><!-->
        <script type="text/javascript">new WOW().init();</script>
        <!--<![endif]-->

        <!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
        <!--[if gte IE 9]>
            <script type="text/javascript">new WOW().init();</script>
        <![endif]-->         

        <!--Opacity & Other IE fix for older browser-->
        <!--[if lte IE 8]>
            <script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
        <![endif]-->



        <!-- my js -->
        <script src="js/main.js"></script>
        
         <!-- Google maps API -->
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>

            var myCenter=new google.maps.LatLng(-37.831208, 144.998499);

            function initialize()
            {
            var mapProp = {
              center:myCenter,
              zoom:15,
                scrollwheel: false,
              mapTypeId:google.maps.MapTypeId.ROADMAP
              };

            var map=new google.maps.Map(document.getElementById("contactgoogleMap"),mapProp);

            var marker=new google.maps.Marker({
              position:myCenter,
              animation:google.maps.Animation.BOUNCE,
              icon:'img/google-pin-one.png'
            });
            
            var infowindow = new google.maps.InfoWindow({
              content:"united-states"
            });

            marker.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);        

        </script>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?4HhJ13NNNe6qIo3CX8us0P2Og7kab77l";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->

    </body>

    <!-- Mirrored from premiumlayers.com/demos/hotelbooking/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Oct 2016 07:36:16 GMT -->
</html>

