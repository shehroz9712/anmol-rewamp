<!--bootstrap js-->
<script src="{{ jsFile('bootstrap.bundle.min.js') }}"></script>

<!--plugins-->
<script src="{{ jsFile('jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!--plugins-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.all.min.js"></script>

<script src="{{ pluginFile('perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ pluginFile('metismenu/metisMenu.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ pluginFile('select2/js/select2-custom.js') }}"></script>
<script src="{{ pluginFile('simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ jsFile('main.js') }}"></script>
<script src="{{ jsFile('upload.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs5.min.js"></script>

<script src="{{ pluginFile('fancy-file-uploader/jquery.ui.widget.js') }}"></script>
<script src="{{ pluginFile('fancy-file-uploader/jquery.fileupload.js') }}"></script>
<script src="{{ pluginFile('fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
<script src="{{ pluginFile('fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>
<script src="{{ pluginFile('Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<script src="{{ pluginFile('datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ pluginFile('datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print']
        });

        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });

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
