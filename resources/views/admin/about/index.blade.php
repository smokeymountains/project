@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Settings</a></li>

                </ol>
                <h1 class="page-header mb-0">About Us</h1>
            </div>
           
        </div>
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">About</h4>
                <div class="panel-heading-btn">

                </div>
            </div>
            <div class="panel-body">

                <table id="data-table-combine" class="table table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            
                            <th class="text-nowrap">About Us</th>
                            <th class="text-nowrap">Vision</th>

                            <th class="text-nowrap" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($about) > 0)
                            @foreach ($about as $item)
                                <tr class="odd gradeX">
                                    
                                    <td>{!! $item->descr1 !!}</td>
                                    <td>{!! $item->descr2 !!}</td>
                                    <td width="1%" style="text-align: center">

                                         <a href="{{ url('admin/about/'.$item->id .'/edit') }}"><i
                                            class="fa fa-pencil fa-lg me-2 ms-n2 text-success-900"></i><a>
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
