@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Category</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Edit Category</a></li>
                </ol>
                <h1 class="page-header mb-0">Edit Category</h1>
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
                    <h4 class="panel-title">Edit-Category</h4>
                </div>
                <div class="panel-body">
                    <form action="{{ url('admin/category/' . $categories->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-lime"><i class="fa-solid fa-arrows-rotate "
                                            style="color: #ffffff;"></i> Update</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input class="form-control" type="text" id="title" name="title"
                                        placeholder="Title" value="{{ $categories->Title }}" data-parsley-required="true" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input class="form-control" type="text" id="slug" name="slug"
                                        value="{{ $categories->Slug }}" placeholder="Keyword" data-parsley-required="true" />
                                </div>
                            </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                            name="popular"  {{ $categories->popular == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Popular: Make the Category visible  to home page the limit is only 3 categories</label>
                                    </div>
                                </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <textarea class="form-control" rows="3" name="metaDescription" placeholder="Short Description">{{ $categories->metaDescription }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Description</label>
                                <div class="form-control p-0 overflow-hidden">
                                    <textarea class="summernote" name="Description">{{ $categories->Description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-8">
                                    <img src="{{ asset('uploads/cat' . $categories->image) }}" alt=""
                                        class="media-object" sizes="696*459" srcset="" id="filePreview" />
                                    <input class="form-control" type="file" id="formFile" name="image"
                                        accept="image/*" onchange="showFile('event')" placeholder="Choose a thumbnail" />
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
            placeholder: 'Type category description here',
            height: "300"
        });
    </script>
@endsection
