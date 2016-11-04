<div class="panel panel-default">

    <div class="panel-heading"><h2>{{$panel_form_title}}</h2></div>

    <div class="panel-body">

		{!! 

			Form::$panel_form_type(

				$panel_form_model,

				[
					'route' => $panel_form_route,

				 	'method' => $panel_form_method,

				 	'name'=>$panel_form_name,

				 	'id'=>$panel_form_id, 

				 	'class' => $panel_form_class,

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