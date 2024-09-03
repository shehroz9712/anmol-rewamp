<!DOCTYPE html>
<html lang="en">


@include('user.layouts.partials.head')



<body class="ltr main-body leftmenu">
    {{ getBodyScripts() }}

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ imageFile('loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <div class="page">

        <!-- Main Header-->
@include('user.layouts.partials.navbar')


<!-- End Main Header-->

<!-- Sidemenu -->
@include('user.layouts.partials.sidebar')
      
        <!-- End Sidemenu -->

        <!-- Main Content-->

    @yield('content')

       
        <!-- End Main Content-->

        <!-- Main Footer-->
        @include('user.layouts.partials.footer')
      
        <!--End Footer-->

       

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    <!-- Jquery js-->
    @include('user.layouts.partials.script')


    @yield('script')


    {{ getFooterScripts() }}

</body>

</html>
