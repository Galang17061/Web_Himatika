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
                                    action="{{route('beasiswa_detail_save')}}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Kategory</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="dbd_category" id="dpd_category">
                                                @foreach($m_category_beasiswa as $element)
                                                <option value="{{$element->mcb_id}}">
                                                    {{$element->mcb_title}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Nama
                                            Beasiswa</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" name="dbd_title" value=""
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Isi
                                            Beasiswa</label>
                                        <div class="col-md-10">
                                            <textarea id="elm1" name="dbd_description"></textarea>
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