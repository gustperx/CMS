<div class="form-group">

	<label class="col-sm-3 control-label">Url</label>

    <div class="col-sm-6">

		@include('elements.html.input',
		[

			'input_placeholder'	=> 'Url',

			'input_icon'		=>'fa fa-user',

			'input_name'		=> 'url',


		])		

    </div>

</div>

<div class="form-group ">

    <label class="col-sm-3 control-label">Red Social</label>

    <div class="col-sm-6">

		@include('elements.html.select',
		[

			'select_name'	=> 'social_id',

			'value'			=> isset($social->social_id) ? $social->social_id : null,

			'select_id'		=> 'social_id',

			'select_class'	=> 'form-control',

			'select_data'	=> $socialId

		])

    </div>
    
</div>
