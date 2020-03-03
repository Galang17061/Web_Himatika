@extends('layouts.layouts_admin._main')

@section('extra_style')
<!-- alertifyjs Css -->
<link href="{{asset('../assets_backend/libs/alertifyjs/build/css/alertify.min.css')}}" rel="stylesheet"
    type="text/css" />

<!-- alertifyjs default themes  Css -->
<link href="{{asset('../assets_backend/libs/alertifyjs/build/css/themes/default.min.css')}}" rel="stylesheet"
    type="text/css" />
@endsection

@section('content')

<div class="main-content">

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">FORM Create Category Package</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master User</a></li>
                            <li class="breadcrumb-item active">Create Master User</li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form_save" action="{{route('post_image_save')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Category</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" name="dpi_category" value=""
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Nama
                                            Post</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" name="dpi_title" value=""
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="tab-pane " id="images" role="tabpanel">
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-md-2 col-form-label">Image</label>
                                            <div class="col-md-10">
                                                <input type="file" class="dropify image" name="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-primary waves-effect waves-light"
                                            type="submit">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end page-content-wrapper -->
    </div>
    <!-- End Page-content -->

</div>

@endsection

@section('extra_script')
<script src="{{asset('../assets_backend/libs/alertifyjs/build/alertify.min.js')}}"></script>

<script src="{{asset('../assets_backend/js/pages/alertifyjs.init.js')}}"></script>
<script>
    $('.dropify').dropify();

    function save(argument) {
        var form = $('.form_save');
        formdata = new FormData(form[0]);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Save!'
        }).then((result) => {
            $.ajax({
                type: "post",
                url: "{{ route('post_image_save') }}",
                data: formdata ? formdata : form.serialize(),
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.status == 'sukses') {
                        if (result.value) {
                            Swal.fire('Saved!', 'Your file has been Saved.', 'success')
                        }
                    } else if (data.status == 'gagal') {
                        if (result.value) {
                            Swal.fire('Fail!', 'your file could not be saved', 'error')
                        }
                    }
                }
            });

        })

    }

</script>
@endsection
