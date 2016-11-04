<!DOCTYPE html>

<html lang="en">

<head>

	@include('templates.admin.head')

	@include('templates.admin.css.css')

	@yield('head')

	<body class="infobar-overlay sidebar-hideon-collpase sidebar-scroll">

		@include('templates.admin.navbar')

		<div id="wrapper">

			<div id="layout-static">

				@include('templates.admin.side_bar')

				<div class="static-content-wrapper">

					<div class="static-content">

						<div class="page-content">

							@include('templates.admin.breadcrumb')

							<div class="container-fluid">

								@yield('content')

							</div> 

						</div> 

					</div>

					@include('templates.admin.footer')

				</div>

			</div>

		</div>

		@include('templates.admin.js.js')

		@yield('footer')

	</body>	
	
</html>