{!! Form::select($select_name,$select_data,
	isset($value) ? $value : null,
	[
		'id'=> $select_id, 

		'class'=> $select_class,
		
		'data-route'=>isset($select_data_route) ? $select_data_route : null,

		'data-destination'=>isset($select_data_destination) ? $select_data_destination : null

		
	])
!!}
