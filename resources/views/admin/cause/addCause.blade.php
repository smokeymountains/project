@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Cause</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Add Cause</a></li>
                </ol>
                <h1 class="page-header mb-0">Add Cause</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/cause') }}" class="btn btn-success btn-rounded px-4 rounded-pill"><i
                        class="fa-solid fa-chevron-right " style="color: #fafafa;"></i><i class="fa-solid fa-chevron-right "
                        style="color: #fafafa;"></i> Back</a>
            </div>

        </div>

        <!-- BEGIN col-10 -->
        <div class="col-xl-12">
            <!-- BEGIN panel -->
            <div class="panel panel-inverse">
                <!-- BEGIN panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Add-Cause</h4>
                </div>
                <div class="panel-body">
                    <form action="{{ url('admin/cause') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="alert-warning">
                                @if ($errors->any())
                                    {{ implode('', $errors->all(':message')) }}
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card border-0 mb-4">

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="title"
                                                            placeholder="Cause Title">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Cause Goal</label>
                                                        <input type="number" class="form-control" name="causeGoal"
                                                            placeholder="$0.00">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Short Description</label>
                                                        <input type="text" class="form-control" name="metaDescr"
                                                            placeholder="Meta Description">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Keywords</label>
                                                        <input type="text" class="form-control" name="slug"
                                                            placeholder="Keywords">

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
                                                <div class="col-md-2">

                                                    <div class="form-check form-switch mb-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="flexSwitchCheckDefault" name="pop" value="popular">
                                                        <label class="form-check-label"
                                                            for="flexSwitchCheckDefault">Popular</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-2">

                                                    <div class="form-check form-switch mb-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="flexSwitchCheckDefault" name="status">
                                                        <label class="form-check-label"
                                                            for="flexSwitchCheckDefault">Status</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label">Description</label>
                                                    <div class="form-control p-0 overflow-hidden">
                                                        <textarea class="summernote" name="descr"></textarea>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="mb-3">
                                                        <label class="form-label">Image</label>
                                                        <input type="file" class="form-control" name="image"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-lime"><i class="fa-solid fa-floppy-disk"
                                        style="color: #f7f4f1;"></i> Save </button>
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
@endsection
