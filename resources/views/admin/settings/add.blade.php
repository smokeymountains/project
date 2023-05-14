@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="{{ url('admin/index') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">Front page settings</a></li>

        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header">Front page settings <small></small></h1>
        <!-- END page-header -->
        <!-- BEGIN nav-pills -->
        <ul class="nav nav-pills mb-2">
            <li class="nav-item">
                <a href="#nav-pills-tab-1" data-bs-toggle="tab" class="nav-link active">
                    <span class="d-sm-none">Home Slider</span>
                    <span class="d-sm-block d-none">Home Slider </span>
                </a>
            </li>
           

        </ul>
        <!-- END nav-pills -->
        <!-- BEGIN tab-content -->
        <div class="tab-content p-3 rounded-top panel rounded-0 m-0">
            <!-- BEGIN tab-pane -->
            <div class="tab-pane fade active show" id="nav-pills-tab-1">
                <h3 class="mt-10px">Home Slider</h3>

                <form action="{{ url('admin/settings') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Short Description</label>
                                <input type="text" class="form-control" name="Descr" placeholder="Short Description">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-lime">Upload</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <!-- END tab-pane -->


        </div>
        <!-- END tab-content -->
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


