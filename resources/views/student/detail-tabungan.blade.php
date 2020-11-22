@extends('layouts.student-master')

@section('judul')
    List tabungan Kelas XII RPL 1
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
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Total Tabungaan</th>
                            <th>Total Pengambilan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>12345</td>
                            <td>Yuliawati</td>
                            <td>500.000</td>
                            <td>100.000</td>
                            <td>
                                <a href="{{URL::to('/student/list-tabungan/detail/siswa')}}" class="btn btn-primary btn-sm">Detail</a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>23456</td>
                            <td>abc</td>
                            <td>500.000</td>
                            <td>100.000</td>
                            <td>
                                <a href="{{URL::to('/student/list-tabungan/detail/siswa')}}" class="btn btn-primary btn-sm">Detail</a>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>


@endsection
