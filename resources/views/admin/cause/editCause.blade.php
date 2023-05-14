@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Cause</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Edit Cause</a></li>
                </ol>
                <h1 class="page-header mb-0">Edit Cause</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/cause') }}" class="btn btn-success btn-rounded px-4 rounded-pill">
                    <i class="fa-solid fa-chevron-right " style="color: #fafafa;"></i><i class="fa-solid fa-chevron-right "
                        style="color: #fafafa;"></i> Back</a>
            </div>
        </div>
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Edit-Cause</h4>

            </div>
            <div class="panel-body">
                <div class="alert alert-warning alert-dismissible rounded-0 mb-0 fade show">
                    @if ($errors->any())
                        {{ implode('', $errors->all(':message')) }}
                    @endif
                </div>
                <form action="{{ url('admin/cause/' . $cause->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Cause Title"
                                    value="{{ $cause->Title }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Cause Goal</label>
                                <input type="number" class="form-control" name="causeGoal" placeholder="$0.00"
                                    value="{{ $cause->causeGoal }}">
                            </div>
                        </div>
                                                <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Donation</label>
                                <input type="number" class="form-control" name="availableAmount" placeholder="$0.00"
                                    value="{{ $cause->availableAmount }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Meta Description</label>
                                <input type="text" class="form-control" name="metaDescr" placeholder="Meta Description"
                                    value="{{ $cause->MetaDescr }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Keywords</label>
                                <input type="text" class="form-control" name="slug" placeholder="Keywords"
                                    value="{{ $cause->slug }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label col-form-label col-md-3">Select Category</label>
                                <select class="form-select" name="catID">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}" {{ $cause->catId == $item->id  ?'selected':''}}>
                                            {{ $item->Title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="pop"
                                    {{ $cause->popular == 1 ? 'checked' : '' }} />
                                <label class="form-check-label" for="flexSwitchCheckDefault">Popular</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="status"
                                    {{ $cause->status == 1 ? 'checked' : '' }} />
                                <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Description</label>
                            <div class="form-control p-0 overflow-hidden">
                                <textarea class="summernote" name="descr">{{ $cause->Description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" 
                                    value="{{ $cause->img }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                  <button type="submit" class="btn btn-lime"><i class="fa-solid fa-arrows-rotate "
                                        style="color: #ffffff;"></i> Update</button>
                            </div>
                        </div>

                </form>
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
