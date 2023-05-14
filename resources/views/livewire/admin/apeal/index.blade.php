    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">apeal</a></li>

                </ol>
                <h1 class="page-header mb-0">Apeals</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/apeal/create') }}" class="btn btn-success btn-rounded px-4 rounded-pill"><i
                        class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add Apeal</a>
            </div>

        </div>
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Cause Apeals</h4>
                <div class="panel-heading-btn">

                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive mb-3">
                    <table id="data-table-combine" class="table table-striped table-bordered align-middle">
                        <thead>
                            <tr>

                                <th>Date</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Sumary</th>
                                <th>Description</th>
                                <th style="text-align: center">Fullfillment Status</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($apeals) > 0)
                                @foreach ($apeals as $item)
                                    <tr>
                                        <td>{{ $item->date }}</td>
                                        <td><div
                                                class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
                                                <img alt="" class="mw-100 mh-100"
                                                    src="{{ $item->getFirstMediaUrl('images')}}" />
                                            </div></td>
                                        <td>{{ $item->Title }}</td>
                                        <td>{{ $item->category->Title }}</td>
                                        <td>{{ $item->meta }}</td>
                                        <td>{!! $item->descr !!}</td>
                                        <td style="text-align: center">
                                            @if ($item->status == 1)
                                                <span
                                                    class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i
                                                        class="fa fa-circle fs-9px fa-fw me-5px"></i> Fulfilled</span>
                                            @else
                                                <span
                                                    class="badge border border-danger text-danger px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i
                                                        class="fa fa-circle fs-9px fa-fw me-5px"></i> Unfulfilled</span>
                                            @endif

                                        </td>
                                        <td style="text-align: center">
                                            <a href="{{ url('admin/apeal/'. $item->id .'/edit') }}"><i
                                                    class="fa fa-pencil fa-lg me-2 ms-n2 text-success-900"></i></a>
                                            <a data-bs-toggle="modal" id="danger"><i
                                                    class="fa fa-trash fa-lg  text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
