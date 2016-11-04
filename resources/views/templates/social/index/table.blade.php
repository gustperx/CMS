<div class="table-responsive">
    <table class="table table-striped">
		<thead>

			<tr>

				<th align="center">Icono</th>

				<th>Red Social</th>

				<th>Url</th>

				<th>Opciones</th>

			</tr>

		</thead>
			<tbody>

				@foreach($socials as $social)

					<tr data-id="{{$social->id}}">

						<td width="50" align="center">
							
							<i class="{{$social->social->icon}} fa-2x" style="color:{{$social->social->color}}">
								
							</i>

						</td>

						<td>{{$social->social->name}}</td>

						<td>{{$social->url}}</td>

						<td>
							
							@include('elements.html.href',
							[

								'href_route'	=> route('edit_social',$social->id),

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

								'href_id'		=> 'delete'.$social->id,

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