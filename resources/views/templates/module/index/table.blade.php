<div class="table-responsive">
    <table class="table table-striped">
		<thead>

			<tr>

				<th align="center">Imagen</th>

				<th>Modulo</th>

				<th>Tipo</th>

				<th>Opciones</th>

			</tr>

		</thead>
			<tbody>

				@foreach($modules as $module)

					<tr data-id="{{$module->id}}">

						<td width="50" align="center">
							<img src="{{$module->image->file}}" width="150">

						</td>

						<td>{{$module->name}}</td>

						<td>{{$module->type}}</td>

						<td>
							
							@include('elements.html.href',
							[

								'href_route'	=> route('edit_module',$module->id),

								'href_id'		=> '',

								'href_class'	=> '',

								'href_icon'		=> 'fa fa-pencil fa-2x',

								'href_title'	=> 'Editar',
						
								'href_text'		=> '',
								
								'href_click'	=> null

							])

							@include('elements.html.href',
							[

								'href_route'	=> 'javascript:void(0)',

								'href_id'		=> 'delete'.$module->id,

								'href_class'	=> 'text-danger btn-delete',

								'href_icon'		=> 'fa fa-times fa-2x',

								'href_title'	=> 'Eliminar',
						
								'href_text'		=> ''

							])

						</td>

					</tr>

				@endforeach

			</tbody>
    </table>
</div>