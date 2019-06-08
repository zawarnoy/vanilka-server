<!DOCTYPE html>
<html lang="en">
@include('parts.header')
<body>
@include('parts.menu')
<div class="content-wrapper">
    @yield('content')
</div>
@include('parts.footer')
</body>
</html>