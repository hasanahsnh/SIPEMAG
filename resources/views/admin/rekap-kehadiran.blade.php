@extends('admin.layouts.header')
@section('home-content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              REKAP KEHADIRAN
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
                        <div class="col-sm-6 col-md-4">
                          <div class="mb-3">
                            <label class="form-label">NISN</label>
                            <input type="text" class="form-control" placeholder="Masukkan NISN">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="mb-3">
                            <label class="form-label">Bulan</label>
                            <select class="form-control form-select">
                              <option value="" selected disabled>Pilih Bulan</option>
                              <option value="1">Januari</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                          <div class="mb-3">
                            <label class="form-label">Tahun</label>
                            <input type="test" class="form-control" placeholder="Masukkan Tahun">
                          </div>
                        </div>
                      </div>

                    <div class="btn-list">
                      <a href="" class="btn1" >
                      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-download"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                        Cetak
                      </a>

                      <a href="" class="btn2">
                      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-spreadsheet"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M8 11h8v7h-8z" /><path d="M8 15h8" /><path d="M11 11v7" /></svg>
                        Import Excel
                      </a>
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
  .btn1{
        background-color:#72BF78;
        border: none;
        color: black;
        margin:10px 0 0 0px;
        padding: 10px 20px;
        text-align: center;
        border-radius:12px;
        font-size: 16px;
  }

  .btn2{
        background-color:#347928;
        border: none;
        color: black;
        margin:10px 0 0 0px;
        padding: 10px 20px;
        text-align: center;
        border-radius:12px;
        font-size: 16px;
  }

  .btn-list{
      float:right;
  }
  
</style>