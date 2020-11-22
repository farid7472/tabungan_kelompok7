@extends('layouts.admin-master')

@section('judul')
    List tabungan
@endsection

@section('content')
     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Jumlah Tabungan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>XII  RPL 1</td>
                            <td>10.000.000</td>
                            <td>
                                <a  href="{{URL::to('/admin/list-tabungan/detail')}}" class= "btn btn-primary btn-sm">Detail</a>
                            </td>

                        </tr>

                         <tr>
                            <td>2</td>
                            <td>XII  RPL 2</td>
                            <td>30.000.000</td>
                            <td>
                                <a  href="{{URL::to('/admin/list-tabungan/detail')}}" class="btn btn-primary btn-sm">Detail</a>
                            </td>

                        </tr>

                         <tr>
                            <td>1</td>
                            <td>XII  RPL 3</td>
                            <td>20.000.000</td>
                            <td>
                                <a  href="{{URL::to('/admin/list-tabungan/detail')}}" class="btn btn-primary btn-sm">Detail</a>
                            </td>

                        </tr>


                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
   
@endsection
