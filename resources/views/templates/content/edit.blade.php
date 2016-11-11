@extends('templates.admin.base')

@section('head')
	
	@include('templates.admin.css.sweetalert')

@endsection()

@section('content')

	@include('elements.html.panel_form',
		[

			'panel_form_model'		=> $content,

			'panel_form_type'		=> 'model',

			'panel_form_id'			=> 'form',

			'panel_form_name'		=> 'form',

			'panel_form_method'		=> 'POST',

			'panel_form_route'		=> ['update_social',$content->id],

			'panel_form_class'		=> 'form-horizontal row-border',
			
			'panel_form_title'		=> 'Editar Redes Sociales',

			'panel_form_content'	=> 'templates.content.create.content',

			'panel_form_footer'		=> 'templates.content.create.footer'

		]
	)

@endsection()

@section('validate')

	@include('validations.social')

@endsection()

@section('footer')

	@include('templates.admin.js.jquery_validate')

    @include('templates.admin.js.resource')

	@include('templates.admin.js.form_validate')    

	@include('templates.admin.js.sweetalert')

@endsection()

