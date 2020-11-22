@extends('layouts.admin-master')

@section('judul')
    Admin
@endsection

@section('content')
     <div class="card-box">
          <div class="dropdown float-right">
                 <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                     <i class="mdi mdi-dots-horizontal"></i>
                 </a>

            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Download</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Action</a>
            </div>

          </div>
        	 <h4 class="header-title">Jumlah Siswa</h4>
         	 <p class="text-muted">Data Siswa Tahun Ajaran 2018 - 2019</p>
         	 <h2 class="mb-4"><i class="mdi mdi-currency-usd text-primary"></i>Total 500 Siswa</h2>

            	 <div class="row mb-4">
                	 <div class="col-4">
                    	 <p class="text-muted mb-1">Tahun Ajaran 2018</p>
                    	 <h3 class="mt-0 font-20">200 Siswa <small class="badge badge-light-success font-13">+100%</small></h3>
                 	 </div>

                 	 <div class="col-4">
                     	<p class="text-muted mb-1">Tahun Ajaran 2019</p>
                     	<h3 class="mt-0 font-20">150 Siswa <small class="badge badge-light-danger font-13">+90%%</small></h3>
                	 </div>

            	 </div>

                       <h5 class="font-16"><i class="mdi mdi-chart-donut text-primary"></i>Laporan Tahunan</h5>

                    <div class="mt-5">
                          <span data-plugin="peity-bar" data-colors="#f7b84b,#ebeff2" data-width="100%" data-height="80">5,3,9,6,5,9,7,3,5,2,9,7,2,1,3,5,2,9,7,2,5,3,9,6,5,9,7</span>
                    </div>

     </div> <!-- end card-box -->

@endsection
