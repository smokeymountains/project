@extends('layouts.admin')

@section('content')
    <div id="content" class="app-content">
        <!-- BEGIN mailbox -->
        <div class="mailbox">
            <!-- BEGIN mailbox-sidebar -->
            <div class="mailbox-sidebar">
                <div class="mailbox-sidebar-header d-flex justify-content-center">
                    <a href="#emailNav" data-bs-toggle="collapse" class="btn btn-dark btn-sm me-auto d-block d-lg-none">
                        <i class="fa fa-cog"></i>
                    </a>
                    <a href="{{ url('admin/email/create') }}" class="btn btn-dark ps-40px pe-40px btn-sm">
                        Compose
                    </a>
                </div>
                <div class="mailbox-sidebar-content collapse d-lg-block" id="emailNav">
                    <!-- BEGIN scrollbar -->
                    <div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
                        <div class="nav-title"><b>FOLDERS</b></div>
                        <ul class="nav nav-inbox">
                            <li class="active"><a href="email_inbox.html"><i class="fa fa-hdd fa-lg fa-fw me-2"></i> Inbox
                                    <span
                                        class="badge bg-gray-600 fs-10px rounded-pill ms-auto fw-bolder pt-4px pb-5px px-8px">52</span></a>
                            </li>
                           
                            <li><a href="{{ url('admin/email/process') }}"><i class="fa fa-envelope fa-lg fa-fw me-2"></i> Sent</a></li>
                            <li><a href="email_inbox.html"><i class="fa fa-save fa-lg fa-fw me-2"></i> Drafts</a></li>
                            <li><a href="email_inbox.html"><i class="fa fa-trash-alt fa-lg fa-fw me-2"></i> Trash</a></li>
                        </ul>

                    </div>
                    <!-- END scrollbar -->
                </div>
            </div>
            <!-- END mailbox-sidebar -->
            <!-- BEGIN mailbox-content -->
            <div class="mailbox-content">
                <div class="mailbox-content-header">
                    <!-- BEGIN btn-toolbar -->
                    <div class="btn-toolbar align-items-center">
                        <div class="form-check me-2">
                            <input type="checkbox" class="form-check-input" data-checked="email-checkbox"
                                id="emailSelectAll" data-change="email-select-all" />
                            <label class="form-check-label" for="emailSelectAll"></label>
                        </div>
                        <button class="btn btn-sm btn-white me-2"><i class="fa fa-redo"></i></button>
                        <div class="w-100 d-sm-none d-block mb-2 hide" data-email-action="divider"></div>
                        <!-- BEGIN btn-group -->
                        <div class="btn-group">
                            <button class="btn btn-sm btn-white hide" data-email-action="delete"><i
                                    class="fa fa-times me-1"></i> <span class="hidden-xs">Delete</span></button>
                            <button class="btn btn-sm btn-white hide" data-email-action="archive"><i
                                    class="fa fa-folder me-1"></i> <span class="hidden-xs">Archive</span></button>
                            <button class="btn btn-sm btn-white hide" data-email-action="archive"><i
                                    class="fa fa-trash me-1"></i> <span class="hidden-xs">Junk</span></button>
                        </div>
                        <!-- END btn-group -->
                        <!-- BEGIN btn-group -->
                        <div class="btn-group ms-auto">
                            <button class="btn btn-white btn-sm">
                                <i class="fa fa-chevron-left"></i>
                            </button>
                            <button class="btn btn-white btn-sm">
                                <i class="fa fa-chevron-right"></i>
                            </button>
                        </div>
                        <!-- END btn-group -->
                    </div>
                    <!-- END btn-toolbar -->
                </div>
                <div class="mailbox-content-body">
                    <div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
                        <!-- BEGIN list-email -->
                        <ul class="list-group list-group-lg no-radius list-email">
                            <li class="list-group-item unread">
                                <div class="email-checkbox">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" data-checked="email-checkbox"
                                            id="emailCheckbox3">
                                        <label class="form-check-label" for="emailCheckbox3"></label>
                                    </div>
                                </div>
                                <a href="email_detail.html" class="email-user bg-grey">
                                    <span class="text-white">W</span>
                                </a>
                                <div class="email-info">
                                    <a href="email_detail.html">
                                        <span class="email-sender">support@wrapbootstrap.com</span>
                                        <span class="email-title">Bootstrap v5.0 is coming soon</span>
                                        <span class="email-desc">Praesent id pulvinar orci. Donec ac metus non ligula
                                            faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...</span>
                                        <span class="email-time">Today</span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="email-checkbox">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" data-checked="email-checkbox"
                                            id="emailCheckbox4">
                                        <label class="form-check-label" for="emailCheckbox4"></label>
                                    </div>
                                </div>
                                <a href="email_detail.html" class="email-user bg-grey">
                                    <i class="fab fa-github-alt text-white"></i>
                                </a>
                                <div class="email-info">
                                    <a href="email_detail.html">
                                        <span class="email-sender">Github</span>
                                        <span class="email-title">Sidebar animation bugfix</span>
                                        <span class="email-desc">Nam sit amet lacinia massa, sit amet blandit urna. Duis
                                            pharetra ex id ipsum posuere...</span>
                                        <span class="email-time">2 days ago</span>
                                    </a>
                                </div>

                        </ul>
                        <!-- END list-email -->
                    </div>
                </div>
                <div class="mailbox-content-footer d-flex align-items-center">
                    <div class="text-dark fw-bold">1,232 messages</div>
                    <div class="btn-group ms-auto">
                        <button class="btn btn-white btn-sm">
                            <i class="fa fa-fw fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-white btn-sm">
                            <i class="fa fa-fw fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- END mailbox-content -->
        </div>
        <!-- END mailbox -->
    </div>
@endsection
