<!DOCTYPE html>
<html lang="de">
@include('layouts.main.head')
<body>
<div id="index-banner" class="parallax-container"  style="min-height: 600px !important;">
@include('layouts.main.nav')

@yield('content')
@include('layouts.main.footer')
@include('layouts.main.scripts')
</body>
</html>
