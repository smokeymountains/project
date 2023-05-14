@extends('layouts.admin')
@section('content')
		<!-- BEGIN #content -->
		<div id="content" class="app-content p-0">
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
								<li><a href="{{ url('admin/email') }}"><i class="fa fa-hdd fa-lg fa-fw me-2"></i> Inbox <span class="badge bg-gray-600 fs-10px rounded-pill ms-auto fw-bolder pt-4px pb-5px px-8px">52</span></a></li>
														
								
								<li><a href="email_inbox.html"><i class="fa fa-envelope fa-lg fa-fw me-2"></i> Sent</a></li>
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
							<div class="btn-group me-2">
								<button type="submit" class="btn btn-white btn-sm"><i class="fa fa-fw fa-envelope"></i> <span class="hidden-xs">Send</span></button>
								<button type="file" class="btn btn-white btn-sm"><i class="fa fa-fw fa-paperclip"></i> <span class="hidden-xs">Attach</span></button>
							</div>
						
							<div class="ms-auto">
								<a href="{{ url('admin/email') }}" class="btn btn-white btn-sm"><i class="fa fa-fw fa-times"></i> <span class="hidden-xs">Discard</span></a>
							</div>
						</div>
						<!-- END btn-toolbar -->
					</div>
					<div class="mailbox-content-body">
						<!-- BEGIN scrollbar -->
						<div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
							<!-- BEGIN form -->
							<form action="/" method="POST" name="email_to_form" class="mailbox-form" enctype="multipart/form-data">
								@csrf
								<!-- BEGIN mailbox-to -->
								<div class="mailbox-to">
									<label class="control-label">To:</label>
									<ul id="email-to" class="primary line-mode">
										<li>bootstrap@gmail.com</li>
										<li>google@gmail.com</li>
									</ul>
									<div class="mailbox-float-link">
										<a href="#" data-click="add-cc" data-name="Cc" class="me-5px">Cc</a>
										<a href="#" data-click="add-cc" data-name="Bcc">Bcc</a>
									</div>
								</div>
								<!-- END mailbox-to -->

								<div data-id="extra-cc"></div>

								<!-- BEGIN mailbox-subject -->
								<div class="mailbox-subject">
									<input type="text" class="form-control" placeholder="Subject" />
								</div>
								<!-- END mailbox-subject -->
								<!-- BEGIN mailbox-input -->
								<div class="mailbox-input">
									<textarea class="summernote"></textarea>
								</div>
								<!-- END mailbox-input -->
							</form>
							<!-- END form -->
						</div>
						<!-- END scrollbar -->
					</div>
					<div class="mailbox-content-footer d-flex align-items-center justify-content-end">
						
						<button type="submit" class="btn btn-primary ps-40px pe-40px">Send</button>
					</div>
				</div>
				<!-- END mailbox-content -->
			</div>
			<!-- END mailbox -->
		</div>
		<!-- END #content -->
@endsection