@extends('templates.admin.base')

@section('head')

	@include('templates.admin.css.sweetalert')

@endsection()

@section('content')
	@include('elements.html.form',
		[

			'panel_form_model'		=> null,

			'panel_form_type'		=> 'model',

			'panel_form_id'			=> 'form',

			'panel_form_name'		=> 'form',

			'panel_form_method'		=> 'POST',

			'panel_form_route'		=> ['destroy_club', ':ID'],

			'panel_form_content'	=> 'templates.club.index.content',

		]
	)
	{!! $clubs->render()!!}
@endsection()

@section('validate')


@endsection()

@section('footer')

	@include('templates.admin.js.sweetalert')
	@include('templates.admin.js.resource')

@endsection()
