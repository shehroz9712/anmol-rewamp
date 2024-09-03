<!doctype html>
<html lang="en" data-bs-theme="light">

@include('admin.layouts.partials.head')
<style>

</style>

<body>
    @include('admin.layouts.partials.navbar')
    @include('admin.layouts.partials.sidebar')




    @yield('content')


    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->
    {{-- @include('user.layouts.partials.footer') --}}
    @include('admin.layouts.partials.script')


    @yield('script')




</body>

</html>
