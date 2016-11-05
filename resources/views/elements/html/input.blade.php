{!! Field::text($input_name,
	[	
		'class'=> isset($input_class) ? $input_class : null,

		'placeholder'	=> isset($input_placeholder) ? $input_placeholder : null,

		'data-route'	=> isset($input_data_route) ? $input_data_route : null


	]) 
!!}
