<div class="form-group">

	<label class="col-sm-3 control-label">Titulo del Sistema Administrativo</label>

    <div class="col-sm-6">

		@include('elements.html.input',
		[

			'input_placeholder'	=> 'Titulo',

			'input_icon'		=>'fa fa-user',

			'input_name'		=> 'admin_title',


		])		

    </div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label">Titulo del Sitio</label>

    <div class="col-sm-6">

		@include('elements.html.input',
		[

			'input_placeholder'	=> 'Titulo',

			'input_icon'		=>'fa fa-user',

			'input_name'		=> 'site_title',


		])		
    	<input type="hidden" name="logo_id" id="logo_id" value="{{isset($configs->logo_id) ? $configs->logo_id : null}}">

    </div>

</div>
<div class="form-group ">
    <label class="col-sm-3 control-label">Home</label>

    <div class="col-sm-4">
		@include('elements.html.select',
		[

			'select_name'	=> 'home_id',

			'value'			=> isset($configs->home_id) ? $configs->home_id : null,

			'select_id'		=> 'home_id',

			'select_class'	=> 'form-control',

			'select_data'	=> $contentId

		])


    </div>
    
</div>


<div class="form-group" id="fileUpload">

	<label class="col-sm-3 control-label">Logo</label>

    <div class="col-sm-6">

		@include('elements.html.input_file',['fileupload_route'=>'assets/img/upload/logos/'])

    </div>

    <div class="col-sm-12">

    	@include('elements.html.progressbar')
    	
    </div>

</div>

