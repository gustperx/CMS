<div class="form-group">

	<label class="col-sm-3 control-label">Titulo de la Pagina</label>

    <div class="col-sm-6">

		@include('elements.html.input',
		[

			'input_placeholder'	=> 'Titulo',

			'input_icon'		=>'fa fa-user',

			'input_name'		=> 'title',


		])		
    	<input type="hidden" name="logo_id" id="logo_id" value="{{isset($configs->logo_id) ? $configs->logo_id : null}}">

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

