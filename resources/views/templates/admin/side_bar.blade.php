<div class="static-sidebar-wrapper sidebar-midnightblue">

	<div class="static-sidebar">

		<div class="sidebar">

			<div class="widget stay-on-collapse" id="widget-welcomebox">

				<div class="widget-body welcome-box tabular">

					<div class="tabular-row">

						<div class="tabular-cell welcome-avatar">

							@if (Auth::user()->profile->avatar)

								<a href="#">

									<img src="" class="avatar">

								</a>

							@else

								<a href="#">

									<img src="/assets/img/male.png" class="avatar">

								</a>

							@endif

						</div>

						<div class="tabular-cell welcome-options">

							<span class="welcome-text">Bienvenido,</span>

							<a href="#" class="name">{{Auth::user()->profile->name}}</a>

						</div>

					</div>

				</div>

			</div>
			
			<div class="widget stay-on-collapse" id="widget-sidebar">

				<nav role="navigation" class="widget-body">


				      	<ul class="acc-menu">

				      		<li class="nav-separator">Menu de Opciones</li>

							@foreach(MainMenu::get() as $menuLv1)

								<li>

									<a href="javascript:;">

										<i class="{{$menuLv1->icon}}"></i>

										<span>{{$menuLv1->title}}</span>
									</a>

									<ul class="acc-menu">

										@foreach($menuLv1->subMenu as $menuLvl2)

											@if(count($menuLvl2->subMenu)>0)

												<li>	

													<a href="javascript:;">

														{{$menuLvl2->title}}

													</a>
													<ul class="acc-menu">

														@foreach($menuLvl2->subMenu as $menuLvl3)	

															<li> 

																<a href="{{route($menuLvl3->route)}}">

																	{{$menuLvl3->title}}

																</a> 

															</li>

														@endforeach()

													</ul>


												</li>

											@else

												<li>	

													<a href="{{route($menuLvl2->route)}}">

														{{$menuLvl2->title}}

													</a>

												</li>

											@endif()

										@endforeach()

									</ul>

								</li>


							@endforeach()

				      	</ul>
				      
				</nav>

			</div>

		</div>

	</div>
	
</div>
