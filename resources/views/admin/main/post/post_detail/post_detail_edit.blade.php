@extends('layouts.layouts_admin._main')


@section('content')

<div class="main-content">

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">FORM Create Beasiswa Detail</h4>
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
                                <form method="post" enctype="multipart/form-data"
                                    action="{{route('post_detail_update')}}">
                                    @csrf
                                    <input type="hidden" name="dpd_id" value="{{$data->dpd_id}}">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Nama
                                            Post</label>
                                        <div class="col-md-10">
                                        <input class="form-control" type="text" name="dpd_title" value="{{$data->dpd_title}}"
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Isi
                                            Post</label>
                                        <div class="col-md-10">
                                            <textarea name="dpd_description" id="editor1">
                                                {{$data->dpd_description}}
                                            </textarea>
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

<script src="{{asset('../assets_backend/libs/ckeditor4/ckeditor.js')}}"></script>

@endsection