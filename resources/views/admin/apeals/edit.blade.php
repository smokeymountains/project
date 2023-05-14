@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Apeals</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Edit Apeals</a></li>
                </ol>
                <h1 class="page-header mb-0">Edit Apeals</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/apeals') }}" class="btn btn-success btn-rounded px-4 rounded-pill"> <i
                        class="fa-solid fa-chevron-right " style="color: #fafafa;"></i><i class="fa-solid fa-chevron-right "
                        style="color: #fafafa;"></i> Back</a>
            </div>
        </div>

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Edit Apeal</h4>

            </div>
            <div class="panel-body">
                <div class="alert alert-warning alert-dismissible rounded-0 mb-0 fade show">
                    @if ($errors->any())
                        {{ implode('', $errors->all(':message')) }}
                    @endif
                </div>

                <form action="{{ url('admin/apeals/'.$apeals->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Apeal Title"
                                    value="{{ $apeals->Title }}">
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Short Description</label>
                                <input type="text" class="form-control" name="metaDescr" placeholder="Meta Description"
                                    value="{{ $apeals->meta }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label col-form-label col-md-3">Select
                                    Category</label>
                                <select class="form-select" name="catID">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->Title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                        name="status" {{ $apeals->status == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexSwitchCheckDefault" >Status: Fulfilled or Unfulfilled</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label col-form-label col-md-3">Date</label>
                                <div class="input-group date" id="datepicker-disabled-past" data-date-format="dd-mm-yyyy"
                                    data-date-start-date="Date.default">
                                    <input type="text" class="form-control" placeholder="Select Date" name="date"
                                        value="{{ $apeals->date }}" />
                                    <span class="input-group-text input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" placeholder="Meta Description">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Description</label>
                            <div class="form-control p-0 overflow-hidden">
                                <textarea class="summernote" name="descr">{{ $apeals->descr }}</textarea>
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-warning"><i class="fa-solid fa-arrows-rotate"
                                        style="color: #ffffff;"></i> Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END panel -->

    </div>
    <!-- END #content -->
    </div>
@endsection

@section('scripts')
    <script>
        $(".summernote").summernote({
            placeholder: 'Type post description here',
            height: "300"
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

