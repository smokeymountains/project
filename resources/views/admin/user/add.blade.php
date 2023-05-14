@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">User</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Add user</a></li>
                </ol>
                <h1 class="page-header mb-0">Add User</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/user') }}" class="btn btn-success btn-rounded px-4 rounded-pill"> <i
                        class="fa-solid fa-chevron-right " style="color: #fafafa;"></i><i class="fa-solid fa-chevron-right "
                        style="color: #fafafa;"></i> Back</a>
            </div>
        </div>

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Users List</h4>

            </div>
            <div class="panel-body">
                <div class="alert-warning">
                    @if ($errors->any())
                        {{ implode('', $errors->all(':message')) }}
                    @endif
                </div>
                <form action="{{ url( 'admin/user') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card border-0 mb-4">
                                    <div class="card-body">
                                        <div class="row">


                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Full name">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="text" class="form-control" name="email"
                                                        placeholder="email@email.com">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder="password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Image</label>
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="form-check form-switch mb-2">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="flexSwitchCheckDefault" name="role_as">
                                                        <label class="form-check-label" for="flexSwitchCheckDefault"> User
                                                            Role:Admin</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <br><br>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-lime"><i class="fa-solid fa-floppy-disk"
                                    style="color: #f7f4f1;"></i> Save</button>
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
