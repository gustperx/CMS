{!! 

	Form::$panel_form_type(

		$panel_form_model,

		[
			'route' => isset($panel_form_route) ? $panel_form_route : null,

		 	'method' => isset($panel_form_method) ? $panel_form_method : null,

		 	'name'=>isset($panel_form_name) ? $panel_form_name : null,

		 	'id'=>isset($panel_form_id) ? $panel_form_id : null


		]) 

!!}

	@include($panel_form_content)

{!! Form::Close() !!}
