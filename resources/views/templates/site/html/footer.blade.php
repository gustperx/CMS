<section id="footer">

  <div class="container">

     <div id="social-media" class="row">

        <div class="col-lg-12">

           <ul>

              @foreach(Config::social() as $socialLinks)

                 <a href="{{$socialLinks->url}}" target="_blank">
                    <li class="animated" data-animation="fadeInUp" data-animation-delay="400">

                       <i class="{{$socialLinks->social->icon}}" style="color: {{$socialLinks->social->color}}"></i>
                    
                    </li>

                 </a>

              @endforeach()

           </ul>

        </div>

     </div>

     <div class="row">

        <div class="col-lg-6 col-lg-offset-3">

           <div class="desc">© 2014. THIS ONE.<br>Tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</div>

           <div class="line"></div>

           <a href="site/#" class="scrollup"><i class="fa fa-angle-double-up"></i></a>

        </div>

     </div>

  </div>
  
</section>
