<div class="form-group">

	<label class="col-sm-3 control-label">Nombre</label>

    <div class="col-sm-6">

		@include('elements.html.input',
		[

			'input_placeholder'	=> 'Nombre del Modulo',

			'input_icon'		=>'fa fa-user',

			'input_name'		=> 'name',


		])	

		<input type="hidden" name="file_id" id="file_id" value="{{isset($module->file_id) ? $module->file_id : null}}">

    </div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label">View</label>

    <div class="col-sm-6">

		@include('elements.html.input',
		[

			'input_placeholder'	=> 'Ej: module.html',

			'input_icon'		=>'fa fa-user',

			'input_name'		=> 'view',


		])		

    </div>

</div>

<div class="form-group hide" id="imageDiv">

	<label class="col-sm-3 control-label">Imagen</label>

    <div class="col-sm-6">

		<img src="" id="fileThumbnail" class="img-responsive thumbnail" width="150">
	

    </div>

</div>

<div class="form-group" id="fileUpload">

	<label class="col-sm-3 control-label">Imagen</label>

    <div class="col-sm-6">

		@include('elements.html.input_file',['fileupload_route'=>'assets/img/upload/modules/'])

    </div>

    <div class="col-sm-12">

    	@include('elements.html.progressbar')
    	
    </div>

</div>
