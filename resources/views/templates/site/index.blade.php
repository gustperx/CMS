@extends('templates.site.base')

@section('slider')

   @if ($content->id == Config::get()->home_id)

      @include('templates.site.html.slider')

   @endif

@endsection()

@section('heading')

   @if ($content->id != Config::get()->home_id)

      @include('templates.site.html.heading')

   @endif()

@endsection()

@section('content')

{!!$body!!}

@endsection()

@section('footer')
   @include('templates.site.html.footer')
@endsection()
