@extends('templates.admin.base')

@section('head')

	@include('templates.admin.css.sweetalert')

@endsection()

@section('content')

	@include('elements.html.panel_form',
		[

			'panel_form_model'		=> $configs,

			'panel_form_type'		=> 'model',

			'panel_form_id'			=> 'form',

			'panel_form_name'		=> 'form',

			'panel_form_method'		=> 'POST',

			'panel_form_route'		=> ['update_config',$configs->id],

			'panel_form_class'		=> 'form-horizontal row-border',
			
			'panel_form_title'		=> 'Configuraciones',

			'panel_form_content'	=> 'templates.config.index.content',

			'panel_form_footer'		=> 'templates.config.index.footer'

		]
	)

@endsection()

@section('validate')

	@include('validations.config')

@endsection()

@section('uploadFile')

    if(file.status=='OK')
    {
        simpleAlert('Felicidades','Su imagen se ha subido correctamente','success','Ok');

        $("#fileUpload").addClass('hide')
        
        $('#logo_id').val(file.fileId)

    }else{

        simpleAlert('Error','Imagen excede los 2 MB o es un archivo no permitido','error','Corregir');

        $('#progress .progress-bar').css(

            'width',

            0 + '%'
            
        );

    }

@endsection()


@section('footer')

	@include('templates.admin.js.jquery_validate')

    @include('templates.admin.js.resource')

	@include('templates.admin.js.form_validate')    

	@include('templates.admin.js.sweetalert')

    @include('templates.admin.js.jquery_upload')

    @include('templates.admin.js.upload_script')


@endsection()
