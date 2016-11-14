<section id="navigation">

  <div class="navbar navbar-inverse" role="navigation">

     <div class="container">

        <div class="navbar-header">

           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

           <a class="navbar-brand" href="/">

              <img src="{{Config::get()->logo->file}}" title="{{Config::get()->logo->title}}" alt="{{Config::get()->logo->alt}}" width="135" height="36" alt="">

           </a> 

        </div>

        <div class="collapse navbar-collapse">

           <ul class="nav navbar-nav pull-right">

           		@foreach($menus as $menu)

           			@if (count($menu->subMenu)==0)

						<li >

							@if(Config::get()->home_id==$menu->id)

							<a href="/" data-toggle="collapse" data-target=".navbar-collapse">

							@else

							<a href="/{{$menu->content->slug}}" data-toggle="collapse" data-target=".navbar-collapse">

							@endif

								@upper($menu->title)

							</a>	

						</li>

           			@else

						<li>

							<a href="#" class="dropdown-toggle" data-toggle="dropdown">

								@upper($menu->title) <i class="fa fa-caret-down"></i> 

							</a>

							<ul class="dropdown-menu" role="menu">

								@foreach($menu->subMenu as $subMenu)

									<li>

										<a role="menuitem" tabindex="-1" href="/{{$subMenu->content->slug}}">

											@upper($subMenu->title)

										</a>

									</li>

								@endforeach()

							</ul>

						</li>

           			@endif

           		@endforeach()

           		@foreach(Config::social() as $socialLinks)

					<li class="current"  >

						<a href="{{$socialLinks->url}}" target="_blank">
							
							<i class="{{$socialLinks->social->icon}}" style="color: {{$socialLinks->social->color}}"></i>

						</a>	

					</li>

				@endforeach()


        	</ul>

        </div>

     </div>

  </div>
  
</section>
