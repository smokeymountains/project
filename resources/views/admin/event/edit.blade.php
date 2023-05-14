@extends('layouts.admin')

@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">event</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Edit event post</a></li>
                </ol>
                <h1 class="page-header mb-0">Edit event post</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/blog') }}" class="btn btn-success btn-rounded px-4 rounded-pill"></i><i class="fa-solid fa-chevron-right "
                        style="color: #fafafa;"></i></i><i class="fa-solid fa-chevron-right "
                        style="color: #fafafa;"></i> Back</a>
            </div>
        </div>
        <!-- BEGIN col-10 -->
        <div class="col-xl-12">
            <!-- BEGIN panel -->
            <div class="panel panel-inverse">
                <!-- BEGIN panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Edit event post</h4>
                </div>
                <div class="panel-body">
                    <div class="alert alert-warning alert-dismissible rounded-0 mb-0 fade show">
                        @if ($errors->any())
                        {{ implode('',$errors->all(':message')) }}
                            
                        @endif
                    </div>
                    <form action="{{ url('admin/event/'. $events->id) }}" method="post" class="tab-content panel rounded-0 p-3 m-0" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- BEGIN nav-tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#default-tab-1" data-bs-toggle="tab" class="nav-link active">
                                    <span class="d-sm-none">POST DETAILS</span>
                                    <span class="d-sm-block d-none">EVENT DETAILS</span>
                                </a>
                            </li>
                      
                            <li class="nav-item">
                                <a href="#default-tab-3" data-bs-toggle="tab" class="nav-link">
                                    <span class="d-sm-none">POST IMAGES</span>
                                    <span class="d-sm-block d-none">POST IMAGES</span>
                                </a>
                            </li>
                        </ul>
                        <!-- END nav-tabs -->

                        <div class="tab-content panel rounded-0 p-3 m-0">

                            <!-- BEGIN tab-pane -->
                            <div class="tab-pane fade active show" id="default-tab-1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label col-form-label col-md-3">Select
                                                Cause</label>
                                            <select class="form-select" name="cId">
                                                @foreach ($causes as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->Title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label col-form-label col-md-3">Title</label>
                                            <input type="text" class="form-control" data-parsley-required="true"
                                                name="title" value="{{ $events->Title }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label col-form-label col-md-3">Venue</label>
                                            <input type="text" class="form-control" data-parsley-required="true"
                                                name="venue" value="{{ $events->venue }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label col-form-label col-md-3">Short Description</label>
                                            <input type="text" class="form-control" data-parsley-required="true"
                                                name="meta" value="{{ $events->meta }}"/>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label col-form-label col-md-3">Date</label>
                                            <div class="input-group date" id="datepicker-disabled-past"
                                                data-date-format="dd-mm-yyyy" data-date-start-date="Date.default">
                                                <input type="text" class="form-control" placeholder="Select Date"
                                                    name="date" value="{{ $events->date }}"/>
                                                <span class="input-group-text input-group-addon"><i
                                                        class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3 ">
                                            <label class="form-label col-form-label col-md-3">Time</label>
                                            <div class="input-group bootstrap-timepicker">
                                                <input id="timepicker" type="text" value="{{ $events->time }}" class="form-control" name="time" />
                                                <span class="input-group-text input-group-addon">
                                                    <i class="fa fa-clock"></i>
                                                    <span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="status">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">Status</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label col-form-label col-md-3">Post Description</label>
                                            <textarea class="summernote"  name="descr">{{ $events->descr }}</textarea>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- END tab-pane -->
                            <!-- BEGIN tab-pane -->
                            <div class="tab-pane fade" id="default-tab-2">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label col-form-label col-md-3">Keywords</label>
                                        <input type="text" class="form-control" data-parsley-required="true"
                                            name="key" placeholder="Post keywords" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label col-form-label col-md-3">Post Tags</label>
                                        <input type="text" class="form-control" data-parsley-required="true"
                                            name="pstr" placeholder="Related Post Tags" />
                                    </div>
                                </div>
                            </div>

                            <!-- END tab-pane -->
                            <!-- BEGIN tab-pane -->
                            <div class="tab-pane fade" id="default-tab-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label col-form-label col-md-3">Post Images (Please post only
                                            three Image files)</label>
                                        <input type="file"multiple class="form-control" data-parsley-required="true"
                                            name="image[]" placeholder="Related Post Tags" />
                                    </div>
                                </div>
                                <!--   <div id="dropzone">
                                                    <form action="/upload" class="dropzone needsclick" id="demo-upload">
                                                        <div class="dz-message needsclick">
                                                            Drop files <b>here</b> or <b>click</b> to upload.<br />
                                                        </div>
                                                    </form>
                                                </div>-->
                            </div>
                            <!-- END tab-pane -->
                            <div>
                                <button type="submit" class="btn btn-success start me-1">
                                    <i class="fa fa-fw fa-upload"></i>
                                    <span>Post </span></button>
                            </div>
                        </div>
                        <!-- END tab-content -->

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(".summernote").summernote({
            placeholder: 'Please, write post description here!',
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
