@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Requests</a></li>

                </ol>
                <h1 class="page-header mb-0">Volunteer Request List</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/user/create') }}" class="btn btn-success btn-rounded px-4 rounded-pill"><i
                        class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add Volunteer</a>
            </div>

        </div>
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Volunteer Request List</h4>

            </div>

            <div class="panel-body">
                <!-- BEGIN panel-body -->
                <div class="panel-body">
                    <table id="data-table-combine" class="table table-striped table-bordered align-middle">
                        <thead>
                            <tr>


                                
                                <th class="text-nowrap" style="text-align: center">Fullname</th>
                                <th class="text-nowrap" style="text-align: center">Email</th>
                                <th class="text-nowrap" style="text-align: center">Contact</th>
                                <th class="text-nowrap" style="text-align: center">Message</th>
                                <th class="text-nowrap" style="text-align: center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($volunteer) > 0)
                                @foreach ($volunteer as $item)
                                    <tr class="odd gradeX">

                                      
                                        <td >{{  $item->name }}</td>
                                        <td >{{ $item->email}}</td>
                                        <td >{{ $item->contact}}</td>
                                        <td >{{ $item->message}}</td>
                                        

                                        <td style="text-align: center">
                                            <a href="{{ url('admin/volunteer/' . $item->id . '/show') }}"><i
                                                    class="fa fa-eye fa-lg me-2 ms-n2 text-primary-900"></i><a>
                                                    
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
                <!-- END panel-body -->
            </div>
        </div>
        <!-- END panel -->
    </div>
    <!-- END #content -->

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
