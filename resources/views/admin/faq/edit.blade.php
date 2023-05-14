@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">FAQ</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Edit FAQ</a></li>
                </ol>
                <h1 class="page-header mb-0">Edit FAQ</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/faq') }}" class="btn btn-success btn-rounded px-4 rounded-pill"> <i
                        class="fa-solid fa-chevron-right " style="color: #fafafa;"></i><i class="fa-solid fa-chevron-right "
                        style="color: #fafafa;"></i> Back</a>
            </div>
        </div>

        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Edit Frequently asked question</h4>

            </div>
            <div class="panel-body">
                <div class="alert-warning">
                    @if ($errors->any())
                        {{ implode('', $errors->all(':message')) }}
                    @endif
                </div>
                <form action="{{ url('admin/faq/' . $faqs->id) }}" method="POST" enctype="multipart/form-data">
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
                                                    <label class="form-label col-form-label col-md-3">Select
                                                        Category</label>
                                                    <select class="form-select" name="catId">
                                                        @foreach ($categories as $item)
                                                            <option  value="{{ $item->id }}"
                                                                {{ $faqs->catId == $item->id ? 'selected' : '' }}>
                                                                {{ $item->Title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Question</label>
                                                    <input type="text" class="form-control" name="message"
                                                        placeholder="Meta Description" value="{{ $faqs->question }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="form-check form-switch mb-2">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="flexSwitchCheckDefault" name="status" {{ $faqs->status == 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                            for="flexSwitchCheckDefault">Status:Popular or Unpopular</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Answer</label>
                                                <div class="form-control p-0 overflow-hidden">
                                                    <textarea class="summernote" name="ans">{{ $faqs->answer }}</textarea>
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
                                    style="color: #f7f4f1;"></i> Update</button>
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
