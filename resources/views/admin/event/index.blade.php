@extends('layouts.admin')
@section('content')
<!-- BEGIN #content -->
<div id="content" class="app-content">
    <div class="d-flex align-items-center mb-3">
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Events</a></li>

            </ol>
            <h1 class="page-header mb-0">Events</h1>
        </div>
        <div class="ms-auto">
            <a href="{{ url('admin/event/create') }}" class="btn btn-success btn-rounded px-4 rounded-pill"><i
                    class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add Event</a>
        </div>

    </div>
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Events</h4>
            <div class="panel-heading-btn">

            </div>
        </div>

        <div class="panel-body">
            <!-- BEGIN panel-body -->
            <div class="panel-body">
                <table id="data-table-combine" class="table table-striped table-bordered align-middle">
                    <thead>
                        <tr>

                            <th width="1%" data-orderable="false"></th>
                            <th class="text-nowrap" style="text-align: center">Title</th>
                            <th class="text-nowrap" style="text-align: center">Short Description</th>
                            <th class="text-nowrap" style="text-align: center">Venue</th>
                            <th class="text-nowrap" style="text-align: center">Date</th>
                            <th class="text-nowrap" style="text-align: center">Time</th>
                            <th class="text-nowrap" style="text-align: center">Cause</th>
                            <th class="text-nowrap" style="text-align: center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($event) > 0)
                            @foreach ($event as $item)
                                <tr class="odd gradeX">

                                    <td width="1%"><img src="{{ $item->getFirstMediaUrl('events')}}"
                                            class="rounded h-30px my-n1 mx-n1" /></td>
                                    <td>{{ $item->Title }}</td>
                                    <td width="30%">{{ $item->meta }}</td>
                                    <td>{{ $item->venue }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->time }}</td>
                                    <td>{{ $item->causes->Title }}</td>
                                    <td style="text-align: center">
                                        <a href="{{ url('admin/event/'. $item->id . '/edit') }}"><i
                                                class="fa fa-pencil fa-lg me-2 ms-n2 text-success-900"></i><a>
                                                <form action="{{url ('admin/event/'. $item->id ) }}" method="post">
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