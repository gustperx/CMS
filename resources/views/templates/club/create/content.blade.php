<div class="form-group ">

    <label class="col-sm-3 control-label">Estado</label>

    <div class="col-sm-4">

		@include('elements.html.select',
		[

			'select_name'	=> 'state_id',

			'value'			=> isset($club->state_id) ? $club->state_id : null,

			'select_id'		=> 'state_id',

			'select_class'	=> 'form-control btn-ajax',

			'select_data_route'	=> route('ajax_city',[':ID']),

			'select_data_destination'	=> 'city_id',

			'select_data'	=> $stateId

		])

		<input type="hidden" name="ajaxUrl" id="ajaxUrl" value="{{route('ajax_city',[':ID'])}}">

    </div>

    <div class="col-sm-1">

		@include('elements.html.loader',
		[
		
			'loader_id'=>'loader'

		])

    </div>

</div>

<div class="form-group ">

    <label class="col-sm-3 control-label">Ciudad</label>

    <div class="col-sm-4">
		@include('elements.html.select',
		[

			'select_name'	=> 'city_id',

			'value'			=> isset($city_id) ? $city_id : null,

			'select_id'		=> 'city_id',

			'select_class'	=> 'form-control btn-ajax',

			'select_data'	=> $cityId

		])


    </div>
    
</div>

<div class="form-group">

	<label class="col-sm-3 control-label">Nombre del Club</label>

    <div class="col-sm-6">

		@include('elements.html.input',
		[

			'input_placeholder'	=> 'Nombre del Club',

			'input_icon'		=>'fa fa-user',

			'input_name'		=> 'name',


		])		

    </div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label">Miembros</label>

    <div class="col-sm-6">

		@include('elements.html.input',
		[

			'input_placeholder'	=> 'Cantidad de miembros',

			'input_icon'		=>'fa fa-user',

			'input_name'		=> 'members',


		])		

    </div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label">Sobre Nostros</label>

    <div class="col-sm-6">

		@include('elements.html.textarea')		

    </div>

</div>


