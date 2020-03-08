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
                        <h4 class="page-title mb-1">Main Post Detail</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Main</a></li>
                            <li class="breadcrumb-item active">Main Post Detail</li>
                        </ol>
                    </div>
                    <div class="col-md-4">
                        <div class="float-right d-none d-md-block">
                            <div class="dropdown">
                                <button class="btn btn-light btn-rounded dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-settings-outline mr-1"></i> Settings
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                    <a class="dropdown-item" href="{{route('post_detail_create')}}"><i
                                            class="fas fa-plus"></i> Create</a>
                                </div>
                            </div>
                        </div>
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

                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Post</th>
                                            <th>Kategori</th>
                                            <th>Isi Post</th>
                                            <th>Dibuat Tanggal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach($data as $index=>$element)
                                        <tr>
                                            <td>{{$index+1}}</td>
                                            <td>
                                                {{$element->dpd_title}}
                                            </td>
                                            <td>
                                                {{$element->dpd_category}}
                                            </td>
                                            <td>
                                                {!! $element->dpd_description!!}
                                            </td>
                                            <td>
                                                {{$element->dpd_created_at}}
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-warning"
                                                    onclick="edit({{$element->dpd_id}})"> Edit</button>
                                                <button class="btn btn-sm btn-danger" onclick="deleted({{$element->dpd_id}})">Delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

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
    $('#datatable').dataTable();

</script>



<script>
    function edit(argument) {
        window.location.href = 'http://localhost/Laravel/Project/himatika_its/public/main/post_detail/edit?&id='+argument;
    }

    function deleted(argument){
        window.location.href = 'http://localhost/Laravel/Project/himatika_its/public/main/post_detail/delete?&id='+argument;
    }
</script>

<script>
    $(function () {
        $("#alert-confirm").click(function () {
            var a = $(this).val()
            alertify.confirm("Apakah yakin ingin menghapus?", function () {
                console.log(a)
                // window.location.href = baseUrl+'/main/post_detail/delete?&id='.argument
                alertify.success("Berhasil Menghapus")
            }, function () {
                alertify.error("Dibatalkan")
            })
        })
    });
</script>

{{-- <script src="{{asset('../assets_backend/js/pages/alertifyjs.init.js')}}"></script> --}}
@endsection
