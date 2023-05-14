@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Category</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Add Category</a></li>
                </ol>
                <h1 class="page-header mb-0">Add Category</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/category') }}" class="btn btn-success btn-rounded px-4 rounded-pill"><i
                        class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Back</a>
            </div>
        </div>
        <!-- BEGIN col-10 -->
        <div class="col-xl-12">
            <!-- BEGIN panel -->
            <div class="panel panel-inverse">
                <!-- BEGIN panel-heading -->
                <div class="alert alert-warning alert-dismissible rounded-0 mb-0 fade show">
                    @if ($errors->any())
                        {{ implode('', $errors->all(':message')) }}
                    @endif
                </div>
                <div class="panel-heading">
                    <h4 class="panel-title">Add-Category</h4>
                </div>
                <div class="panel-body">
                    <div class="modal-body">
                        <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                            <div class="row">

                                @csrf
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input class="form-control" type="text" id="title" name="title"
                                            placeholder="Title" data-parsley-required="true" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input class="form-control" type="text" id="slug" name="slug"
                                            placeholder="Keyword" data-parsley-required="true" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Short Description</label>
                                    <div class="mb-3">

                                        <textarea class="form-control" rows="3" name="metaDescription" placeholder="Short Description"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                            name="popular">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Popular: Make the Category visible  to home page the limit is only 3 categories</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Description</label>
                                    <div class="form-control p-0 overflow-hidden">
                                        <textarea class="summernote" name="Description"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-8">
                                        <img src="" alt="" class="media-object" sizes="696*459"
                                            srcset="" id="filePreview" />
                                        <input class="form-control" type="file" id="image" name="image"
                                            id="image" accept="image/*" onchange="showFile('event')"
                                            placeholder="Choose a thumbnail" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-default"><i
                                                class="fa-light fa-floppy-disk-circle-arrow-right"
                                                style="color: #26cf3a;"></i>Save</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
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
