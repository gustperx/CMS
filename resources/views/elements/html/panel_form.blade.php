<div class="panel panel-default">

    <div class="panel-heading"><h2>{{$panel_form_title}}</h2></div>

    <div class="panel-body">

		{!! 

			Form::$panel_form_type(

				$panel_form_model,

				[
					'route' => isset($panel_form_route) ? $panel_form_route : null,

				 	'method' => isset($panel_form_method) ? $panel_form_method : null,

				 	'name'=>isset($panel_form_name) ? $panel_form_name : null,

				 	'id'=>isset($panel_form_id) ? $panel_form_id : null, 

				 	'class' => isset($panel_form_class) ? $panel_form_class : null,

				]) 

		!!}

		@include($panel_form_content)

		@if(isset($panel_form_footer))

            <div class="panel-footer">

				<div class="clearfix">

					@include($panel_form_footer)

				</div>

            </div>

        @endif()

		{!! Form::Close() !!}      

    </div>

</div>