{!! 

	Form::$panel_form_type(

		$panel_form_model,

		[
			'route' => $panel_form_route,

		 	'method' => $panel_form_method,

		 	'name'=>$panel_form_name,

		 	'id'=>$panel_form_id


		]) 

!!}

	@include($panel_form_content)

{!! Form::Close() !!}
