@if(isset($title))
	<div class="page-heading">            
		<h1>{{$title}}</h1>
	</div>
	<ol class="breadcrumb">
		<li class="active"><a href="{{route('index_dashboard')}}">Inicio</a></li>
		@foreach($breadcrumb as $b)
			<li class="active">
				@if($b['url'])
					<a href="{{$b['url']}}">{{$b['name']}}</a>
				@else
					{{$b['name']}}
				@endif
			</li>
		@endforeach()
	</ol>
@endif
