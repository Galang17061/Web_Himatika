@extends('layouts.layouts_admin._main')
@section('content')

<div class="main-content">

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Departement Applied Science</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Departement</a></li>
                            <li class="breadcrumb-item active">Update Profil Asci</li>
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
                                <form class="form_save" action="{{route('backend_Asci_update')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Nama Untuk
                                            Ditampilkan</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" name="mdd_name"
                                                value="{{$data->mdd_name}}" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Foto
                                            Profil</label>
                                        <div class="col-md-10">
                                            <input type="file" class="dropify" name="image" id="image"
                                                data-default-file="{{url(Storage::url('images/departement/Asci.jpg'))}}" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Deskripsi
                                            Singkat</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" name="mdd_description"
                                                value="{{$data->mdd_description}}" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Proker</label>
                                        <div class="col-md-10">
                                            <textarea name="mdd_work" id="editor1">
                                                {{$data->mdd_work}}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Agenda</label>
                                        <div class="col-md-10">
                                            <textarea name="mdd_agenda" class="ckeditor" id="editor2">
                                                {{$data->mdd_agenda}}
                                            </textarea>
                                            <script type="text/javascript">
                                                CKEDITOR.replace('editor2');
                                                CKEDITOR.add
                                            </script>
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
<script src="{{asset('../assets_backend/libs/ckeditor4/ckeditor.js')}}"></script>

@endsection
