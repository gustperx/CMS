<!DOCTYPE html>
<html lang="en">
   <head>
      @include('templates.site.html.head')
   </head>
   <body>

      <div id="preloader">

         <div class="preloader"><img src="site/img/progress.gif" alt=""></div>

      </div>

      @yield('slider')

      @include('templates.site.html.navigation')

      @yield('heading')
      
      @yield('content')

      @yield('footer')

      <script src="site/js/jquery-1.11.0.min.js"></script> 

      <script src="site/js/bootstrap.min.js"></script> 

      <script type="text/javascript" src="site/js/animation/jquery.appear.js"></script>        

      <script type="text/javascript" src="site/js/contact/contact-form.js"></script>

      <script src="site/lightbox/ekko-lightbox.js"></script>       

      <script src="site/js/isotope/jquery.isotope.min.js"></script>

      <script src="site/js/isotope/custom-isotope.js"></script>

      <script type="text/javascript" src="site/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>

      <script type="text/javascript" src="site/rs-plugin/js/jquery.themepunch.revolution.js"></script> 
      
      <script>
         var revapi;
         
         		jQuery(document).ready(function() {
         
         			   revapi = jQuery('.tp-banner').revolution(
         				{
         					delay:15000,
         					startwidth:1170,
         					startheight:500,
         					hideThumbs:10,
         					fullWidth:"off",
         					fullScreen:"on",
         					fullScreenOffsetContainer: "",
         					hideCaptionAtLimit:400
         					//hideAllCaptionAtLimit:400
         				});
         
         		});	//ready	
      </script>       
      <script src="site/owl-carousel/owl-carousel/owl.carousel.js"></script> 
      <script src="site/js/custom.js"></script> 
      <script src="site/js/parallex/script.js"></script> 
      <script src="site/js/nav/jquery.scrollTo.js"></script> 
      <script src="site/js/nav/jquery.nav.js"></script> 
      <script type="text/javascript" src="site/js/sticky/jquery.sticky.js"></script>
        <script type="text/javascript" src="site/js/SmoothScroll/SmoothScroll.js"></script>
        <script type="text/javascript" src="site/js/retina/retina.js"></script>
        <script type="text/javascript" src="site/js/jquery.fitvids.js"></script>
   </body>
</html>