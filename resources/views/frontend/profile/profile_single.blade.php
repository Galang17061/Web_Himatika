@extends('layouts.layouts_frontend._main');

@section('content')
<section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
              <img src="{{url(Storage::url('images/departement/'.$data->mdd_image_profile))}}" style="width: 100px">

          </div>
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection