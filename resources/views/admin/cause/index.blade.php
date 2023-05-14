@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Cause</a></li>

                </ol>
                <h1 class="page-header mb-0">Cause</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/cause/create') }}" class="btn btn-success btn-rounded px-4 rounded-pill"><i
                        class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add Cause</a>
            </div>

        </div>

        <div class="card border-0">
            <ul class="nav nav-tabs nav-tabs-v2 px-3">
                <li class="nav-item me-2"><a href="#allTab" class="nav-link active px-2" data-bs-toggle="tab">All</a></li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane fade show active" id="allTab">


                    <!-- BEGIN table -->
                    <div class="table-responsive">
                        <table id="data-table-combine" class="table table-striped table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    
                                    <th class="pt-0 pb-2"width="100%">Short Description</th>
                                    <th class="pt-0 pb-2">Category</th>
                                    <th class="pt-0 pb-2">Slug</th>
                                    <th class="pt-0 pb-2">Title</th>
                                    <th class="pt-0 pb-2">Goal</th>
                                    <th class="pt-0 pb-2">Available</th>
                                    <th class="pt-0 pb-2">Status</th>
                                     <th class="pt-0 pb-2">Popular</th>
                                    <th class="pt-0 pb-2">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if (count($causes) > 0)
                                    @foreach ($causes as $item)
                                        <tr>
                                            <td>
                                                <div class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
                                                    <img alt="" class="mw-100 mh-100" src="{{ $item->getFirstMediaUrl('causes','thumb') }} " />
                                                </div>
                                            </td>
                                            
                                            <td class="align-middle">{{ $item->MetaDescr }}</td>
                                            <td class="align-middle">{{ $item->category->Title }}</td>
                                            <td class="align-middle">{{ $item->slug }}</td>
                                            <td class="align-middle">{{  $item->Title  }}</td>
                                            <td class="align-middle">${{ $item->causeGoal }}</td>
                                            <td class="align-middle">${{ $item->availableAmount }}</td>
                                            <td class="align-middle">{{ $item->status }}</td>
                                            <td class="align-middle">
                                                {{ $item->popular }}</td>
                                            <td style="text-align: center">
                                                <a href="{{ url('admin/cause/' . $item->id . '/edit') }}"
                                                    value="{{ $item->id }}"><i
                                                        class="fa fa-pencil fa-lg me-2 ms-n2 text-success-900"></i><a>
                                                        <form action="{{url ('admin/cause/'. $item->id ) }}" method="post">
                                                @csrf
                                                {{ method_field('Delete') }}
                                                <button type="submit" value="Delete" name="submit" class="btn btn-default"><i
                                                        class="fa fa-trash fa-lg  text-danger"></i> </button>
                                               </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- END table -->


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
            buttons: [{
                    extend: 'copy',
                    className: 'btn-sm'
                },
                {
                    extend: 'csv',
                    className: 'btn-sm'
                },
                {
                    extend: 'excel',
                    className: 'btn-sm'
                },
                {
                    extend: 'pdf',
                    className: 'btn-sm'
                },
                {
                    extend: 'print',
                    className: 'btn-sm'
                }
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
