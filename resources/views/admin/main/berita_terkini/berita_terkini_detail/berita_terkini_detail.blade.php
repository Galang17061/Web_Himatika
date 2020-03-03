@extends('layouts.layouts_admin._main')

@section('content')

<div class="main-content">

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Master User</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                            <li class="breadcrumb-item active">Master User</li>
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
                                    <a class="dropdown-item" href="{{route('berita_terkini_detail_create')}}"><i class="fas fa-plus"></i>   Create</a>
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
                                            <th>Kategory</th>
                                            <th>Judul Berita</th>
                                            <th>Deskripsi</th>
                                            <th>Dibuat Tanggal</th>
                                        </tr>
                                    </thead>


                                    <tbody>

                                        @foreach($data as $index => $element)
                                        <tr>
                                            <td>{{$index+1}}</td>
                                            <td>
                                                {{$element->dbtd_category}}
                                            </td>
                                            <td>
                                                {{$element->dbtd_title}}
                                            </td>
                                            <td>
                                                {{$element->dbtd_description}}
                                            </td>
                                            <td>
                                                {{$element->dbtd_created_at}}
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-warning"> Edit</button>
                                                <button class="btn btn-sm btn-danger"> Delete</button>
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
@endsection
