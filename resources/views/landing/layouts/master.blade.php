<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('landing.layouts.head')

<body>
<div>

    @include('landing.layouts.header')


    <div>
        @yield('content')
    </div>
</div>
@include('landing.layouts.footer')
<!-- End Page Wrapper -->
</div>
@include('landing.layouts.scripts')

</body>
</html>


