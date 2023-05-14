
@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Category</a></li>

                </ol>
                <h1 class="page-header mb-0">Category</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/category/create') }}" class="btn btn-success btn-rounded px-4 rounded-pill"><i
                        class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add Category</a>
            </div>

        </div>
        <div class="row">
            <!-- BEGIN col-10 -->
            <div class="col-xl-12">
                <!-- BEGIN panel -->
                <div class="panel panel-inverse">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Cause - Categories </h4>
                    </div>

                    <div class="panel-body">
                        <table id="data-table-combine" class="table table-striped table-bordered align-middle">
                            <thead>
                                <tr>
                                   
                                    <th width="1%" data-orderable="false">Image</th>
                                    <th class="text-nowrap">Title</th>
                                    <th class="text-nowrap">Slug</th>
                                    <th class="text-nowrap">Short Description</th>
                                    <th class="text-nowrap">Visible</th>
                                    <th class="text-nowrap" style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($categories) > 0)
                                    @foreach ($categories as $category)
                                        <tr class="odd gradeX">
                                            
                                            <td width="1%"><img src="{{ $category->getFirstMediaUrl('images')}}" class="rounded h-30px my-n1 mx-n1" alt="no image" /></td>
                                            <td>{{ $category->Title }}</td>
                                            <td>{{ $category->Slug }}</td>
                                            <td>{!! $category->metaDescription !!}</td>
                                             <td style="text-align: center"> @if ($category->popular == 1)
                                                <span
                                                    class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i
                                                        class="fa fa-circle fs-9px fa-fw me-5px"></i> Vissible</span>
                                            @else
                                                <span
                                                    class="badge border border-yellow text-lime px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i
                                                        class="fa fa-circle fs-9px fa-fw me-5px"></i> Hidden</span>
                                            @endif
                                        </td>
                                            
                                            <td style="text-align: center">
                                                <a href="{{ url('admin/category/'.$category->id.'/edit') }}"
                                                     id="editbtn"><i
                                                        class="fa-solid fa-pencil success"></i></a>

                                               <form action="{{url ('admin/category/'. $category->id ) }}" method="post">
                                                @csrf
                                                {{ method_field('Delete') }}
                                                <button type="submit" value="Delete" name="submit" class="btn btn-default"><i
                                                        class="fa fa-trash fa-lg  text-danger"></i> </button>
                                               </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                
                                @endif
                            </tbody>
                        </table>

                    </div>
                    <!-- #modal-alert -->
                    <div class="modal fade" id="modal-alert">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Alert </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-hidden="true"></button>
                                </div>
                                <form wire:submit.prevent="delete" method="post">
                                    <div class="modal-body">
                                        <div class="alert alert-danger">
                                            
                                            <h5><i class="fa fa-info-circle"></i></h5>
                                            <p>Are sure! You want to delete the category?</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                                        <button type="submit" class="btn btn-danger"
                                            data-bs-dismiss="modal">Yes! Delete</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
<!-- script -->
<script>
  var options = {
    dom: '<"dataTables_wrapper dt-bootstrap"<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex me-0 me-md-3"l><"d-block d-lg-inline-flex"B>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-md-5"i><"col-md-7"p>>>',
    buttons: [
      { extend: 'copy', className: 'btn-sm' },
      { extend: 'csv', className: 'btn-sm' },
      { extend: 'excel', className: 'btn-sm' },
      { extend: 'pdf', className: 'btn-sm' },
      { extend: 'print', className: 'btn-sm' }
    ],
    responsive: true,
    colReorder: true,
    keys: true,
    rowReorder: true,
    select: true
  };

  if ($(window).width() <= 767) {
    options.rowReorder = false;
    options.colReorder = false;
  }
  $('#data-table-combine').DataTable(options);
</script>
@endsection
