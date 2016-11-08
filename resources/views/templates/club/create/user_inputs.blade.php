<div class="form-group">

	<label class="col-sm-3 control-label">Nombre</label>

    <div class="col-sm-6">

		@include('elements.html.input',
		[

			'input_placeholder'	=> 'Nombre del Usuario',

			'input_icon'		=>'fa fa-user',

			'input_name'		=> 'user_name',


		])		

    </div>

</div>
<div class="form-group">

	<label class="col-sm-3 control-label">Apellido</label>

    <div class="col-sm-6">

		@include('elements.html.input',
		[

			'input_placeholder'	=> 'Apellido del Usuario',

			'input_icon'		=>'fa fa-user',

			'input_name'		=> 'user_lastname',


		])		

    </div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label">Correo</label>

    <div class="col-sm-6">

		@include('elements.html.input',
		[

			'input_placeholder'	=> 'Correo del Usuario',

			'input_class'		=> 'unique-ajax',

			'input_icon'		=>'fa fa-user',

			'input_name'		=> 'email',
			
			'input_data_route'	=> route('ajax_unique_email',[':ID']),


		])		

    </div>

</div>
