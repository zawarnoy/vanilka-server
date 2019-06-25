<!DOCTYPE html>
<html lang="en">
@include('parts.header')
<body>
<div class="vnl__content-wrapper">
    @include('parts.menu')
    @yield('content')
</div>

<script type="text/javascript" src="{{ asset('js/libs.min.js') }}"></script>
<script type="text/javascript" src=" {{ asset('js/bundle.js') }}"></script>
<script type="text/javascript" src=" {{ asset('js/products.js') }}"></script>

@include('parts.modals')

@yield('script')

@include('parts.footer')
</body>
</html>