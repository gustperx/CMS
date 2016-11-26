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

			'panel_form_route'		=> ['destroy_module', ':ID'],

			'panel_form_content'	=> 'templates.module.index.content',

		]
	)

@endsection()

@section('validate')


@endsection()

@section('footer')

	@include('templates.admin.js.sweetalert')
	@include('templates.admin.js.resource')

@endsection()
