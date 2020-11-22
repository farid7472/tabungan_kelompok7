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
                                    <label for="simpleinput">Nama Kelas</label>
                                    <input type="text" id="simpleinput" name="class_name" class="form-control" required>
                                </div>
                            </div>

							{{--<div class="col-lg-12">--}}
								{{--<div class="form-group mb-3">--}}
									{{--<label for="simpleinput">Kelas</label>--}}
										{{--<select type="text" id="simpleinput" name="student_name" class="form-control"--}}
											{{--required>--}}

												{{--<option>XII RPL 1</option>--}}
												{{--<option>XII RPL 2</option>--}}
												{{--<option>XII MM 1</option>--}}
												{{--<option>XII MM 2</option>--}}
												{{--<option>XI RPL 1</option>--}}
												{{--<option>XI RPL 2</option>--}}
												{{--<option>X MM 1</option>--}}
												{{--<option>X MM 2</option>--}}

										{{--</select>--}}
								{{--</div>--}}
							{{--</div>--}}

                       		<div class="col-lg-12">
                           		<div class="form-group mb-3">
                               		<label for="simpleinput">Jurusan</label>
                                   		<select type="text" id="simpleinput" name="jurusan" class="form-control"
                                           		required>

                                       		<option>Rekayasa Perangkat Lunak</option>
                                       		<option>Multimedia</option>

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
    </div> <!-- end row -->
@endsection
