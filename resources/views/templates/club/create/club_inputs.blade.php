<div class="form-group ">

    <label class="col-sm-3 control-label">Estado</label>

    <div class="col-sm-4">

		@include('elements.html.select',
		[

			'select_name'	=> 'state_id',

			'value'			=> isset($club->state_id) ? $club->state_id : null,

			'select_id'		=> 'state_id',

			'select_class'	=> 'form-control select-ajax',

			'select_data_route'	=> route('ajax_city',[':ID']),

			'select_data_destination'	=> 'city_id',

			'select_data_loader'	=> 'loader_select',

			'select_data'	=> $stateId

		])

		<input type="hidden" name="file_id" id="file_id" value="{{isset($club->file_id) ? $club->file_id : null}}">

    </div>

    <div class="col-sm-1">

		@include('elements.html.loader',
		[
		
			'loader_id'=>'loader_select'

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

			'select_class'	=> 'form-control',

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

    <div class="col-sm-3">

		@include('elements.html.input',
		[

			'input_placeholder'	=> 'Cantidad de miembros',

			'input_class'		=> 'numeric',			

			'input_icon'		=>'fa fa-user',

			'input_name'		=> 'members',


		])		

    </div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label">Sobre Nostros</label>

    <div class="col-sm-6">

		@include('elements.html.textarea',[
		
			'textarea_name'		=>'about',
			
			'textarea_id'		=>'about',

			'textarea_value'	=> isset($club->about) ? $club->about : '',

		])		

    </div>

</div>

<div class="form-group" id="fileUpload">

	<label class="col-sm-3 control-label">Logo</label>

    <div class="col-sm-6">

		@include('elements.html.input_file',['fileupload_route'=>'assets/img/upload/clubs/'])

    </div>

    <div class="col-sm-12">

    	@include('elements.html.progressbar')
    	
    </div>

</div>
