@extends('admin.layouts.header')
@section('home-content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Lokasi
            </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex">
                        <input type="text" class="form-control" id="inputText" placeholder="Latitude">                   
                        <input type="text" class="form-control" id="inputText" placeholder="Longtitude">
                        <input type="text" class="form-control" id="inputText" placeholder="Radius">
                    </div>
                    <div id="map"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    @include('admin.layouts.footer')

  </div>
@endsection
