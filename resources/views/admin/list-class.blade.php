@extends('layouts.admin-master')

@section('judul')
    List Kelas
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
                            <th>Kelas</th>
                            <th>Jurusan</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                        	<td>1</td>
                            <td>X</td>
                            <td>Rekayasa Perangkat Lunak</td>
                        </tr>

                         <tr>
                         	<td>2</td>
                            <td>XI</td>
                            <td>Rekayasa Perangkat Lunak</td>
                        </tr>

                         <tr>
                         	<td>3</td>
                            <td>XII</td>
                            <td>Rekayasa Perangkat Lunak</td>
                        </tr>

                        <tr>
                        	<td>4</td>
                            <td>X</td>
                            <td>Multimedia</td>
                        </tr>

                         <tr>
                         	<td>5</td>
                            <td>XI</td>
                            <td>Multimedia</td>
                        </tr>

                         <tr>
                         	<td>6</td>
                            <td>XII</td>
                            <td>Multimedia</td>
                        </tr>
                       
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->


    <!-- Modal -->

    
    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Responsive Modal</button>
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
                                <label for="field-1" class="control-label">Kelas</label>
                                <input type="text" class="form-control" id="field-1" placeholder="John">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Jurusan</label>
                                <input type="text" class="form-control" id="field-2" placeholder="Doe">
                            </div>
                        </div>
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->

@endsection
