<script src="{{ pluginFile('jquery/jquery.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ pluginFile('bootstrap/js/popper.min.js') }}"></script>
<script src="{{ pluginFile('bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Perfect-scrollbar js -->
<script src="{{ pluginFile('perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<!-- Sidemenu js -->
<script src="{{ pluginFile('sidemenu/sidemenu.js') }}" id="leftmenu"></script>

<!-- Sidebar js -->
<script src="{{ pluginFile('sidebar/sidebar.js') }}"></script>

<!-- Select2 js-->
<script src="{{ pluginFile('select2/js/select2.min.js') }}"></script>
<script src="{{ jsFile('select2.js') }}"></script>

<!-- Color Theme js -->
<script src="{{ jsFile('themeColors.js') }}"></script>

<!-- Sticky js -->
<script src="{{ jsFile('sticky.js') }}"></script>

<!-- Custom js -->
<script src="{{ jsFile('custom.js') }}"></script>


<script>
    function confirmDelete(formId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(formId).submit();
            }
        });
    }
</script>

<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "showDuration": "3000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "closeButton": true,
        "progressBar": true
    }
    @if (Session::has('success'))

        toastr.success("{{ session('success') }}");
    @endif

    @if (!empty($errors->all()))
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}")
        @endforeach
    @endif

    @if (Session::has('error'))

        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))

        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))

        toastr.warning("{{ session('warning') }}");
    @endif
</script>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const titleInput = document.querySelector('#title');
        const slugInput = document.querySelector('#slug');

        if (titleInput && slugInput) {
            titleInput.addEventListener('input', function() {
                let slug = titleInput.value
                    .toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .trim()
                    .replace(/\s+/g, '-');
                slugInput.value = slug;
            });
        }
    });
</script>
