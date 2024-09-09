<!DOCTYPE html>
<html lang="en">
@include('partial-components.layout.head')
<body>

@yield('spinner')

@include('partial-components.layout.nav')

@yield('content')

@include('partial-components.layout.footer')

@include('partial-components.layout.scripts')

</body>
</html>
