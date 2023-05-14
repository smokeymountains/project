@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Settings</a></li>

                </ol>
                <h1 class="page-header mb-0">Settings</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/settings/create') }}" class="btn btn-success btn-rounded px-4 rounded-pill"><i
                        class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Settings</a>
            </div>

        </div>
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Home Slider</h4>
                <div class="panel-heading-btn">

                </div>
            </div>
            <div class="panel-body">

                <table id="data-table-combine" class="table table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th width="1%" data-orderable="false">Image</th>
                            <th class="text-nowrap">Title</th>
                            <th class="text-nowrap">Short Description</th>

                            <th class="text-nowrap" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($home) > 0)
                            @foreach ($home as $item)
                                <tr class="odd gradeX">
                                    <td width="1%" style="text-align: center"><img
                                            src="{{ $item->getFirstMediaUrl('home') }}" alt=""
                                            class="rounded h-30px my-n1 mx-n1" /></td>
                                    <td>{{ $item->title }}</td>
                                    <td>{!! $item->descr !!}</td>
                                    <td style="text-align: center">

                                         <form action="{{ url('admin/settings/' . $item->id) }}" method="post">
                                                    @csrf
                                                    {{ method_field('Delete') }}
                                                    <button type="submit" value="Delete" name="submit"
                                                        class="btn btn-default"><i
                                                            class="fa fa-trash fa-lg  text-danger"></i>
                                                    </button>
                                                </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                    </tbody>
                </table>
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
