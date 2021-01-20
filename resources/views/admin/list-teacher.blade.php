@extends('layouts.admin-master')

@section('judul')
    List Walikelas
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
                            <th>Nama Guru</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Bu Siti Robiah</td>
                            <td>XII RPL 2</td>
                            
                            <td>
                                <a  href="{{URL::to('/admin/teacher/detail')}}" class= "btn btn-primary btn-sm">Detail</a>
                            </td>

                        </tr>


                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
   
@endsection
