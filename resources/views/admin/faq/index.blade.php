@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">FAQ</a></li>

                </ol>
                <h1 class="page-header mb-0">Fequently asked Questions</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/faq/create') }}" class="btn btn-success btn-rounded px-4 rounded-pill"><i
                        class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add faq</a>
            </div>

        </div>
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Fequently asked Questions</h4>
                <div class="panel-heading-btn">

                </div>
            </div>

            <div class="panel-body">
                <!-- BEGIN panel-body -->
                <div class="panel-body">
                    <table id="data-table-combine" class="table table-striped table-bordered align-middle">
                        <thead>
                            <tr>


                                <th class="text-nowrap" style="text-align: center">Questions</th>
                                <th class="text-nowrap" style="text-align: center">Asnwers</th>
                                <th class="text-nowrap" style="text-align: center">Status</th>
                                <th class="text-nowrap" style="text-align: center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($faqs) > 0)
                                @foreach ($faqs as $item)
                                    <tr class="odd gradeX">


                                        <td width="30%">{!! $item->question !!}</td>
                                        <td width="50%">{!! $item->answer !!}</td>
                                        <td width="10%" style="text-align: center">
                                            @if ($item->status == 1)
                                                <span
                                                    class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i
                                                        class="fa fa-circle fs-9px fa-fw me-5px"></i>Popular</span>
                                            @else
                                                <span
                                                    class="badge border border-danger text-warning px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i
                                                        class="fa fa-circle fs-9px fa-fw me-5px"></i> Unpopular</span>
                                            @endif
                                        </td>

                                        <td style="text-align: center">
                                            <a href="{{ url('admin/faq/' . $item->id . '/edit') }}"><i
                                                    class="fa fa-eye fa-lg me-2 ms-n2 text-primary-900"></i><a>
                                                    <a href="{{ url('admin/faq/' . $item->id . '/edit') }}"><i
                                                            class="fa fa-pencil fa-lg me-2 ms-n2 text-success-900"></i><a>
                                                            <form action="{{ url('admin/faq/' . $item->id) }}"
                                                                method="post">
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
