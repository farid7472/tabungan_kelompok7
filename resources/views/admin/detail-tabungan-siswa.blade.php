@extends('layouts.admin-master')

@section('judul')
    Detail Tabungan 
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"
                            data-target="#con-close-modal"> Tambah / Ambil Tabungan
                    </button>

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Total Tabungan</th>

                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>12345</td>
                            <td>Yuliawati</td>
                            <td>XII RPL 1</td>
                            <td>500.000</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>23456</td>
                            <td>abc</td>
                            <td>XII MM 1</td>
                            <td>500.000</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>345678</td>
                            <td>def</td>
                            <td>XII MM 1</td>
                            <td>500.000</td> 
                        </tr>


                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->


    <!-- Modal -->


    <form>
    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Content is Responsive</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Type Transaksi</label>
                                <select type="text" class="form-control" id="field-1">
                                    <option>Tabungan</option>
                                    <option>Pengambilan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Nominal</label>
                                <input type="number" class="form-control" id="field-2" placeholder="Masukan Nominal">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->
    </div>
    </form>
@endsection
