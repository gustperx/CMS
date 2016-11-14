<div class="table-responsive">
    <table class="table table-striped">
		<thead>

			<tr>

				<th align="center">Icono</th>

				<th>Titulo</th>

				<th>Url</th>

				<th>Opciones</th>

			</tr>

		</thead>
			<tbody>

				@foreach($contents as $content)

					<tr data-id="{{$content->id}}">

						<td width="50" align="center">
							

						</td>

						<td>{{$content->title}}</td>

						<td></td>

						<td>
							
							@include('elements.html.href',
							[

								'href_route'	=> route('edit_content',$content->id),

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

								'href_id'		=> 'delete'.$content->id,

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