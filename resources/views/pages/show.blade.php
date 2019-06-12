@extends('layouts.layout')

@section('content')

    <div class="vnl_container container mt-5">
        <div class="vnl__article vnl__container transparent container p-0 mb-0 mt-5">
            <nav aria-label="breadcrumb mb-0 rounded-0 bg-light ">
                <ol class="breadcrumb mb-0 bg-light border-bottom">
                    <li class="breadcrumb-item"><a href="http://vanilka.by/main">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">test</li>
                </ol>
            </nav>
        </div>
        <div class="vnl__article vnl__container container">
            <div class="row">
                <div class="col-12 py-5 px-3">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{asset("js/libs.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/bundle.js")}}"></script>
@endsection