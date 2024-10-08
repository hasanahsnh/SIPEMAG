@extends('admin.layouts.header')
@section('home-content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              TAMBAH DATA PEMAGANG
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
                    <div class="row row-cards">

                      <div class="col-md-12 text-center">
                          <img id="image-preview" 
                              src=""
                              alt="Preview Gambar"/>
                          <input type="file"id="image-input" accept="image/*" style="margin-top:10px">
                      </div>

                      <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                          <label class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" placeholder="Masukkan nama">
                        </div>
                      </div>

                      <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                          <label class="form-label">Tanggal Lahir</label>
                          <input type="date" class="form-control" placeholder="Pilih tanggal" >
                        </div>
                      </div>

                      <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                          <label class="form-label">NISN</label>
                          <input type="text" class="form-control" placeholder="Masukkan NIP">
                        </div>
                      </div>

                      <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                          <label class="form-label">Asal Lembaga</label>
                          <input type="text" class="form-control" placeholder="Masukkan lembaga">
                        </div>
                      </div>

                      <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                          <label class="form-label">No Telepon</label>
                          <input type="text" class="form-control" placeholder="Masukkan nomor">
                        </div>
                      </div>

                      <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                          <label class="form-label">Status Pendidikan</label>
                          <input type="text" class="form-control" placeholder="Masukkan status"=>
                        </div>
                      </div>


                      <div class="col-sm-12">
                        <div class="mb-3">
                          <a class="btn1" href="#"> <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" /><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M14 4l0 4l-6 0l0 -4" /></svg>
                          Simpan 
                          </a>
                        </div>
                      </div>



                    </div>
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


<style>

  #image-preview {
      display: block; 
      justify-items:center;
      width: 150px; 
      height: 200px; 
      margin: 10px auto;
  }

  .btn1{
        background-color:#72BF78;
        border: none;
        float:right;
        color: black;
        padding: 10px 20px;
        text-align: center;
        border-radius:12px;
        font-size: 16px;
  }
 

</style>