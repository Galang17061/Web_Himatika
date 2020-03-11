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
                                <form class="form_save" action="{{route('post_image_update')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                            <input type="hidden" name="dpi_id" value="{{$data->dpi_id}}">
                                    <div class="tab-pane " id="images" role="tabpanel">
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                class="col-md-2 col-form-label">Image</label>
                                            <div class="col-md-10">
                                                <input type="file" class="dropify" name="image" id="image" data-default-file="{{url(Storage::url('images/post/post_'.$data->dpi_id.'_image.jpg'))}}"/>
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
<script>
    $('.dropify').dropify();

</script>
@endsection
