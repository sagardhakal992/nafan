<!--Main Slider-->
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
   <![endif]-->
   <!--[if IE 7]>
   <html class="no-js lt-ie9 lt-ie8" lang="">
      <![endif]-->
      <!--[if IE 8]>
      <html class="no-js lt-ie9" lang="">
         <![endif]-->
         <!--[if gt IE 8]><!-->
         <html class="no-js" lang="en">
            <!--<![endif]-->
            <head>
               <meta charset="utf-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <title>NAFAN - National Forum For Advocacy Nepal</title>
               <title>NAFAN - National Forum For Advocacy Nepal</title>
               <meta name="description" content="">
               <meta name="viewport" content="width=device-width, initial-scale=1">
               <!-- favicon -->

               <!-- Normalize css -->
               <link rel="stylesheet" href="{{asset('assets/frontend/css/normalize.min.css')}}">
               <!-- bootstrap -->
               <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
               <!-- Bootstrap Material Design -->
               <link href="{{asset("assets/frontend/css/bootstrap-material-design.min.css")}}" rel="stylesheet">
               <link href="{{asset('assets/frontend/css/ripples.min.css')}}" rel="stylesheet">
               <!-- fonts -->
               <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
               <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
               <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
               <!-- carousel -->
               <link href="{{asset('assets/frontend/css/revolution-slider.css')}}" rel="stylesheet">
               <!-- owl carousel css -->
               <link rel="stylesheet" href="{{asset('assets/frontend/owlcarousel/css/owl.carousel.min.css')}}">
               <link rel="stylesheet" href="{{asset('assets/frontend/owlcarousel/css/owl.theme.default.css')}}">
               <!-- Custom style -->
               <link href="{{asset('assets/frontend/css/styles.css')}}" rel="stylesheet">
               <!-- SmartMenus jQuery Bootstrap Addon CSS -->
               <link href="{{asset('assets/frontend/css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
               <style>
                  /*.page a{
                  color:initial;
                  }*/
                  .page .bg-green a {
                  color:white;
                  }
                  .bg-green .table>thead>tr>th {
                  color: white;
                  }
               </style>
            </head>
            <body>
               <header>
                  <div class="container">
                     <div class="mainNav">
                        <div class="navbar navbar-inverse ">
                           <div class="container">
                              <div class="navbar-header">
                                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                                 </button>
                                 <a class="navbar-brand" href="/"><img style="height: 80px" src="{{asset('assets/frontend/img/logo.jpg')}}" alt="Nafan" class="img-responsive"></a>
                              </div>
                              <div class="navbar-collapse collapse">
                                 <!-- Left nav -->
                                 <ul class="nav navbar-nav">
                                    <li><a href="/"><i class="fa fa-home"></i></a></li>
                                    <li>
                                       <a href="/about-us">About Us <span class="caret"></span></a>
                                    </li>
                                    <li>
                                       <a href="/working-area">Working Area <span class="caret"></span></a>
                                    </li>
                                    <li>
                                       <a href="/projects">Projects <span class="caret"></span></a>
                                    </li>
                                    <li>
                                       <a href="/reports">Reports <span class="caret"></span></a>
                                    </li>
                                    <li>
                                       <a href="/publication">Publication<span class="caret"></span></a>
                                    </li>
                                    <li><a href="/contact">Contact Us</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </header>

               @yield("content")


<footer>
    <div class="container">
       <div class="row">
          <div class="col-xs-12 col-sm-3">
             <h5>Contact Us</h5>
             <div><span style="font-size:16px"><strong>Nafan</strong></span></div>
             <div><span style="font-size:16px"><strong>Mr Bhola Bhattarai (Executive Director)</strong></span></div>
             <div><span style="font-size:14px">NAFAN Secretariat</span></div>
             <div><span style="font-size:14px">Babarmall, Kathmandu, Nepal</span></div>
             <div><span style="font-size:14px">Tel: 9851074770</span></div>
             <div><span style="font-size:14px">Email: nafannepal8@gmail.com</span></div>
             <div>&nbsp;</div>
             <ul class="list-inline">
                <li>
                   <a href="https://www.facebook.com/nafanngo
                      "><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                   <a href="#
                      "><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                   <a href="https://www.youtube.com/@nafan4421
                      "><i class="fa fa-youtube"></i></a>
                </li>
                <li>
                   <a href="#
                      "><i class="fa fa-linkedin"></i></a>
                </li>
             </ul>
          </div>
          <div class="col-xs-12 col-sm-3">
             <h5>Quick Links</h5>
             <ul>
                <li><a href="https://www.facebook.com/nafanngo">Facebook Page</a></li>
                <li><a href="https://www.youtube.com/@nafan4421">Toutube</a></li>

             </ul>
          </div>
          <div class="col-xs-12 col-sm-3">
             <h5>Career</h5>
             <p><a href="">Post Your CV</a></p>
             <p><a href="">See Vacancies</a></p>
             <!--<ul>
                <li>Current&nbsp;Vacancy</li>
                <li>Post&nbsp;your&nbsp;CV</li>
                </ul>
                -->
          </div>
          <div class="col-xs-12 col-sm-3">
             <h5>Key Documents</h5>
             <ul>
             </ul>
          </div>
       </div>
       <div class="col-xs-12 footerbtm">
          <hr>
          <div class="row">
             <div class="col-xs-12 col-sm-8">
                <p>Copyright © {{ now()->year }} <a href="index.php">NAFAN - National Forum For Advocacy Nepal</a>. All Right Reserved.</p>
             </div>
             <div class="col-xs-12 col-sm-4 text-right">
                <a href="#">Sagar Dhakal</a>
             </div>
          </div>
       </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('assets/frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/ripples.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/material.min.js')}}"></script>
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="{{asset('assets/frontend/js/jquery.smartmenus.js')}}"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="{{asset('assets/frontend/js/jquery.smartmenus.bootstrap.js')}}"></script>
<script>
$.material.init();
jQuery.SmartMenus.Bootstrap.init();
</script>
<script>
$(window).scroll(function() {
var height = $(this).scrollTop();
var brand = $("#sticky");
if (height > 100) {
brand.addClass('affixChange');
} else {
brand.removeClass('affixChange');
}
});
</script>
<script>
$(document).ready(function() {
//Preloader
$(window).load(function() {
preloaderFadeOutTime = 500;

function hidePreloader() {
  var preloader = $('.spinner-wrapper');
  preloader.fadeOut(preloaderFadeOutTime);
};
hidePreloader();
});
});
</script>
<script>
// ===== Scroll to Top ====
$(window).scroll(function() {
if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
$('#return-to-top').fadeIn(200); // Fade in the arrow
} else {
$('#return-to-top').fadeOut(200); // Else fade out the arrow
}
});
$('#return-to-top').click(function() { // When arrow is clicked
$('body,html').animate({
scrollTop: 0 // Scroll to top of body
}, 500);
});
</script>
<!-- owl carousel js -->
<script src="{{asset('assets/frontend/owlcarousel/vendors/jquery.min.js')}}"></script>
<script src="{{asset('assets/frontend/owlcarousel/vendors/jquery.mousewheel.min.js')}}"></script>
<script src="{{asset('assets/frontend/owlcarousel/js/owl.carousel.js')}}"></script>
<script src="{{asset('assets/frontend//js/custom.js')}}"></script>
<script>
$(document).ready(function() {
var owl = $('#owl-carousel');
owl.owlCarousel({
loop: true,
nav: true,
margin: 30,
autoplay: true,
autoplayTimeout: 3500,
autoplayHoverPause: true,
responsive: {
  0: {
      items: 1
  },
  600: {
      items: 1
  },
  960: {
      items: 3
  },
  1200: {
      items: 3
  }
}
});
owl.on('mousewheel', '.owl-stage', function(e) {
if (e.deltaY > 0) {
  owl.trigger('next.owl');
} else {
  owl.trigger('prev.owl');
}
e.preventDefault();
});
})
</script>
<script>
$(document).ready(function() {
var owl = $('#banner');
owl.owlCarousel({
loop: true,
nav: true,
dots:false,
margin: 30,
autoplay: true,
autoplayTimeout: 3500,
autoplayHoverPause: true,
responsive: {
  0: {
      items: 1
  },
  600: {
      items: 1
  },
  960: {
      items: 1
  },
  1200: {
      items: 1
  }
}
});
})
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>
</html>
