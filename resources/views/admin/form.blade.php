@extends('layouts.admin-master')

@section('judul')
    Form
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Input Types</h4>
                    <p class="sub-header">
                        Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                    </p>

                    <div class="row">
                        <div class="col-lg-6">
                            <form>

                                <div class="form-group mb-3">
                                    <label for="simpleinput">Text</label>
                                    <input type="text" id="simpleinput" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-email">Email</label>
                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-password">Password</label>
                                    <input type="password" id="example-password" class="form-control" value="password">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-palaceholder">Placeholder</label>
                                    <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-textarea">Text area</label>
                                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-readonly">Readonly</label>
                                    <input type="text" id="example-readonly" class="form-control" readonly="" value="Readonly value">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-disable">Disabled</label>
                                    <input type="text" class="form-control" id="example-disable" disabled="" value="Disabled value">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-static">Static control</label>
                                    <input type="text" readonly class="form-control-plaintext" id="example-static" value="email@example.com">
                                </div>

                                <div class="form-group mb-0">
                                    <label for="example-helping">Helping text</label>
                                    <input type="text" id="example-helping" class="form-control" placeholder="Helping text">
                                    <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                </div>

                            </form>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <form>

                                <div class="form-group mb-3">
                                    <label for="example-select">Input Select</label>
                                    <select class="form-control" id="example-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-multiselect">Multiple Select</label>
                                    <select id="example-multiselect" multiple class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-fileinput">Default file input</label>
                                    <input type="file" id="example-fileinput" class="form-control-file">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-date">Date</label>
                                    <input class="form-control" id="example-date" type="date" name="date">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-month">Month</label>
                                    <input class="form-control" id="example-month" type="month" name="month">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-time">Time</label>
                                    <input class="form-control" id="example-time" type="time" name="time">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-week">Week</label>
                                    <input class="form-control" id="example-week" type="week" name="week">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-number">Number</label>
                                    <input class="form-control" id="example-number" type="number" name="number">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-color">Color</label>
                                    <input class="form-control" id="example-color" type="color" name="color" value="#56c2d6">
                                </div>

                                <div class="form-group mb-0">
                                    <label for="example-range">Range</label>
                                    <input class="custom-range" id="example-range" type="range" name="range" min="0" max="100">
                                </div>

                            </form>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection
