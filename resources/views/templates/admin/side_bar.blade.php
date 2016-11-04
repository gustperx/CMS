<div class="static-sidebar-wrapper sidebar-inverse">
	<div class="static-sidebar">
		<div class="sidebar">
			<div class="widget stay-on-collapse" id="widget-welcomebox">
				<div class="widget-body welcome-box tabular">
					<div class="tabular-row">
						<div class="tabular-cell welcome-avatar">
							<a href="#"><img src="" class="avatar"></a>
						</div>
						<div class="tabular-cell welcome-options">
							<span class="welcome-text">Welcome,</span>
							<a href="#" class="name">Jonathan Smith</a>
						</div>
					</div>
				</div>
			</div>

			<div class="widget stay-on-collapse" id="widget-sidebar">

				<nav role="navigation" class="widget-body">

				      @foreach(MainMenu::get() as $menu)

				      	<ul class="acc-menu">

				      		<li class="nav-separator">{{$menu->title}}</li>

					        @foreach($menu->menulvl1 as $lvl1)
								<li>

									<a href="javascript:;">

										<i class="{{$lvl1->icon}}"></i>

										<span>{{$lvl1->title}}</span>
									</a>

									<ul class="acc-menu">

										@foreach($lvl1->menulvl2 as $lvl2)

											@if(count($lvl2->menulvl3)>0)

												<li>	

													<a href="javascript:;">

														{{$lvl2->title}}

													</a>

													<ul class="acc-menu">

														@foreach($lvl2->menulvl3 as $lvl3)	

															<li> 

																<a href="{{route($lvl3->route)}}">

																	{{$lvl3->title}}

																</a> 

															</li>

														@endforeach()

													</ul>

												</li>

											@else

												<li>	

													<a href="{{route($lvl2->route)}}">

														{{$lvl2->title}}

													</a>

												</li>

											@endif()

										@endforeach()

									</ul>

								</li>

					      	@endforeach()

				      	</ul>
				      @endforeach()
				      
				</nav>

			</div>

		</div>

	</div>
	
</div>
