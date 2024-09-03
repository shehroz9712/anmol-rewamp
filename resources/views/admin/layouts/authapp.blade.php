<!doctype html>
<html lang="en" data-bs-theme="light">

@include('user.layouts.partials.head')


<body>




    @yield('content')


    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->
    @include('user.layouts.partials.script')


    @section('script')
        <script>
            $(document).ready(function() {
                $("#show_hide_password a").on('click', function(event) {
                    event.preventDefault();
                    if ($('#show_hide_password input').attr("type") == "text") {
                        $('#show_hide_password input').attr('type', 'password');
                        $('#show_hide_password i').addClass("bi-eye-slash-fill");
                        $('#show_hide_password i').removeClass("bi-eye-fill");
                    } else if ($('#show_hide_password input').attr("type") == "password") {
                        $('#show_hide_password input').attr('type', 'text');
                        $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                        $('#show_hide_password i').addClass("bi-eye-fill");
                    }
                });
            });
        </script>
    @endsection

</body>

</html>
