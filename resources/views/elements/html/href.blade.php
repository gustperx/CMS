<a id="{{$href_id}}" href="{{$href_route}}" class="{{$href_class}}" title="{{$href_title}}">

	@if(isset($href_icon))

		<i class="{{$href_icon}}"></i>&nbsp; 

	@endif

	{{$href_text}}

</a>