<div class="form-group">

	<label class="col-sm-3 control-label">Titulo</label>

    <div class="col-sm-6">

		@include('elements.html.input',
		[

			'input_placeholder'	=> 'Titulo del contenido',

			'input_icon'		=>'fa fa-user',

			'input_name'		=> 'title',


		])		

    </div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label">Slug</label>

    <div class="col-sm-6">

		@include('elements.html.input',
		[

			'input_placeholder'	=> 'Slug del contenido',

			'input_icon'		=>'fa fa-user',

			'input_name'		=> 'slug',


		])		

    </div>

</div>

