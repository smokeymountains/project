@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Settings</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">General</a></li>
                </ol>
                <h1 class="page-header mb-0">General Settings </h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/general') }}" class="btn btn-success btn-rounded px-4 rounded-pill"> <i
                        class="fa-solid fa-chevron-right " style="color: #fafafa;"></i><i class="fa-solid fa-chevron-right "
                        style="color: #fafafa;"></i> Back</a>
            </div>
        </div>

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Settings</h4>

            </div>
            <div class="panel-body">
                <div class="alert-warning">
                    @if ($errors->any())
                        {{ implode('', $errors->all(':message')) }}
                    @endif
                </div>
                <form action="{{ url('admin/general/' . $gen->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card border-0 mb-4">
                                    <div class="card-body">
                                        <div class="row">


                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="phone"
                                                        value="{{ $gen->phone }}" placeholder="(+255)">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="text" class="form-control" name="email"
                                                        value="{{ $gen->email }}" placeholder="email@email.com">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Instagram Link</label>
                                                    <input type="text" class="form-control" name="insta"
                                                        value="{{ $gen->email }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Facebook link</label>
                                                    <input type="text" class="form-control" name="face"
                                                        value="{{ $gen->face }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Twitter</label>
                                                    <input type="text" class="form-control" name="twitter"
                                                        value="{{ $gen->twitter }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">General Image</label>
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>



                                            <br><br>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-lime"><i class="fa-solid fa-arrows-rotate"
                                    style="color: #f7f4f1;"></i> Upadate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END panel -->

        <!-- END #content -->
    </div>
@endsection

@section('scripts')
    <script>
        $(".summernote").summernote({
            placeholder: 'Type answer here',
            height: "100"
        });
    </script>
    <script>
        $("#timepicker").timepicker();
    </script>
    <script>
        $("#datepicker-disabled-past").datepicker({
            todayHighlight: true,
            autoclose: true
        });
    </script>
    <script>
        var elm = document.getElementById('id-here');
        var switchery = new Switchery(elm);

        switchery.enable(); // enable
        switchery.disable(); // disable
        switchery.destroy(); // destroy
    </script>
@endsection
