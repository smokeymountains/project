@extends('layouts.admin')

@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Testimonies</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Edit Testimonies</a></li>
                </ol>
                <h1 class="page-header mb-0">Edit Testimonies</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/pdf') }}" class="btn btn-success btn-rounded px-4 rounded-pill"><i
                        class="fa-solid fa-chevron-right " style="color: #fafafa;"></i><i class="fa-solid fa-chevron-right "
                        style="color: #fafafa;"></i> Back</a>
            </div>
        </div>
        <!-- BEGIN col-10 -->
        <div class="col-xl-12">
            <!-- BEGIN panel -->
            <div class="panel panel-inverse">
                <div class="alert alert-warning alert-dismissible rounded-0 mb-0 fade show">
                        @if ($errors->any())
                        {{ implode('',$errors->all(':message')) }}
                            
                        @endif
                    </div>
                <div class="panel-heading">
                    <h4 class="panel-title">Post Testimonies</h4>
                </div>
                <div class="panel-body">
                    
                        <form action="{{ url('admin/pdf/'.$pdfs->id ) }}" method="post" enctype="multipart/form-data">
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
                                                            <label class="form-label">Title</label>
                                                            <input type="text" class="form-control" name="title"
                                                                placeholder="Cause Title" value="{{ $pdfs->Title }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label col-form-label col-md-3">Date</label>
                                                            <div class="input-group date" id="datepicker-disabled-past"
                                                                data-date-format="dd-mm-yyyy"
                                                                data-date-start-date="Date.default">
                                                                <input type="text" class="form-control" value="{{ $pdfs->Date }}"
                                                                    placeholder="Select Date" name="date"  />
                                                                <span class="input-group-text input-group-addon"><i
                                                                        class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label col-form-label col-md-3">Select Apeal</label>
                                                            <select class="form-select" name="ApId">
                                                                @foreach ($apeals as $item)
                                                                    <option value="{{ $item->id }}"  {{ $pdfs->ApId == $item->id  ?'selected':''}}>
                                                                        {{ $item->Title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label class="form-label">Description</label>
                                                        <div class="form-control p-0 overflow-hidden">
                                                            <textarea class="summernote" name="descr">{{ $pdfs->Descr }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="mb-3">
                                                            <label class="form-label">Document (PDF)</label>
                                                            <input type="file" class="form-control" name="file" value="{{ $pdfs->file }}"
                                                                placeholder="Meta Description">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-default">Save</button>
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
