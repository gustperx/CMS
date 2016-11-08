<div class="table-responsive">
    <table class="table table-striped">
		<thead>

			<tr>

				<th align="center">Logo</th>

				<th>Club</th>

				<th>Ubicación</th>

				<th>Miembros</th>

				<th>Estatus</th>

				<th>Opciones</th>

			</tr>

		</thead>
			<tbody>

				@foreach($clubs as $club)

					<tr data-id="{{$club->id}}">

						<td width="50" align="center">
						<img src="{{$club->logo->file}} " width="100">
							

						</td>

						<td>{{$club->name}}</td>

						<td>{{$club->state->state}} / {{$club->city->city}}</td>

						<td>{{$club->members}}</td>

						<td>{{$club->status}}</td>

						<td>
							
							@include('elements.html.href',
							[

								'href_route'	=> route('edit_club',$club->id),

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

								'href_id'		=> 'delete'.$club->id,

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