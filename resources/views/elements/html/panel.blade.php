<div class="panel panel-default">

	<div class="panel-heading"><h2><i class="{{$panel_icon}}"></i>{{$panel_title}}</h2></div>

	<div class="panel-body">

		@include($panel_content)

		@if(isset($panel_footer))

			<div class="panel-footer">

				<div class="clearfix">

					@include($panel_footer)

				</div>

			</div>

		@endif

	</div>

</div>
