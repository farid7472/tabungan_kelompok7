@extends('layouts.admin-master')

@section('judul')
    Tambah  Kelas
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nama Siswa</label>
                                    <input type="text" id="simpleinput" name="student_name" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">NIS</label>
                                    <input type="number" id="simpleinput" name="nis" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Kelas</label>
                                    <select type="text" id="simpleinput" name="class_id" class="form-control"
                                            required>
                                        <option value="XII RPL 1">XII RPL 1</option>
                                        <option value="XII RPL 2">XII RPL 2</option>
                                        <option value="XII MM 1">XII MM 1</option>
                                        <option value="XI RPL 1">XI RPL 1</option>
                                        <option  value="XI MM 1">XI MM 1</option>
                                        <option value="XI MM 2">XI MM 2</option>
                                        <option value="X TKI 1">X TKI 1</option>
                                        <option value="X TKI 2">X TKI 2</option>
                                        <option value="X TKI 3">X TKI 3</option>

                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input type="submit" value="Simpan" class="btn btn-primary">
                                </div>
                            </div>
                            
                        </div> <!-- end card-body -->
                    </form>
                </div> <!-- end card -->
            </div><!-- end col -->
        </div>
    </div> 
        <!-- end row -->
@endsection
