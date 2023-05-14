@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="{{ url('admin/index') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:;"> settings</a></li>

        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header"> settings <small></small></h1>
        <!-- END page-header -->
        <div class="col-xl-12">
            <!-- BEGIN panel -->
            <div class="panel panel-inverse">
                <!-- BEGIN panel-heading -->

                <div class="panel-heading">
                    <h4 class="panel-title">About Settings</h4>
                </div>
                <div class="panel-body">
                    <form action="{{ url('admin/about/' . $about->id) }}" method="post" enctype="multipart/form-data">
                       @csrf
                        @method('put')
                        <div class="row">
                            <h4>Our Mission</h4>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Image 1</label>
                                    <input type="file" name="image1" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Image 2</label>
                                    <input type="file" name="image2" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Description</label>
                                <div class="form-control p-0 overflow-hidden">
                                    <textarea class="summernote" name="descr">{{ $about->descr1 }}</textarea>
                                </div>
                            </div>
                            <h4>Our vision</h4>
                            <div class="col-md-12">
                                <label class="form-label">Description</label>
                                <div class="form-control p-0 overflow-hidden">
                                    <textarea class="summernote" name="descr2">{{ $about->descr1 }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-lime">Update</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(".summernote").summernote({
            placeholder: 'Please, write  description here!',
            height: "200"
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
