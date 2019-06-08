@extends('layouts.layout')

@section('content')

    <div class="vnl_container container mt-5">
        {!! $page->content !!}
    </div>

    <script type="text/javascript" src="{{asset("js/libs.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/bundle.js")}}"></script>
@endsection