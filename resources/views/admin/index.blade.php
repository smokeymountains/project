@extends('layouts.admin')

@section('content')
<div id="content" class="app-content">
    			<!-- BEGIN breadcrumb -->
			<ol class="breadcrumb float-xl-end">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">Dashboard <small>Administrator analytics</small></h1>
			<!-- END page-header -->


			<div class="row">
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon"><i class="fa fa-desktop"></i></div>
						<div class="stats-info">
							<h4>TOTAL VISITORS</h4>
							<p>0</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-info">
						<div class="stats-icon"><i class="fa fa-link"></i></div>
						<div class="stats-info">
							<h4>BOUNCE RATE</h4>
							<p>0%</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-orange">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>UNIQUE VISITORS</h4>
							<p>0</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-red">
						<div class="stats-icon"><i class="fa fa-clock"></i></div>
						<div class="stats-info">
							<h4>AVG TIME ON SITE</h4>
							<p>0</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- END col-3 -->
			</div>
			<!-- END row -->

            <div class="row">
                	<!-- BEGIN col-8 -->
				<div class="col-xl-12">

                    <!-- BEGIN tabs -->
					<ul class="nav nav-tabs nav-tabs-inverse nav-justified" data-sortable-id="index-2">
						<li class="nav-item"><a href="#latest-post" data-bs-toggle="tab" class="nav-link active"><i class="fa fa-camera fa-lg me-5px"></i> <span class="d-none d-md-inline">Latest Post</span></a></li>
						<li class="nav-item"><a href="#purchase" data-bs-toggle="tab" class="nav-link"><i class="fa fa-archive fa-lg me-5px"></i> <span class="d-none d-md-inline">Latest Cause</span></a></li>
						<li class="nav-item"><a href="#email" data-bs-toggle="tab" class="nav-link"><i class="fa fa-envelope fa-lg me-5px"></i> <span class="d-none d-md-inline">Email</span></a></li>
					</ul>

                    <div class="tab-content panel rounded-0 rounded-bottom mb-20px" data-sortable-id="index-3">
						
							
						
						<div class="tab-pane fade active show" id="latest-post">
							<div class="h-300px p-3" data-scrollbar="true">
								
								<div class="d-sm-flex">
									<a href="javascript:;" class="w-sm-200px">
										<img class="mw-100 rounded" src="" alt="" />
									</a>
									<div class="flex-1 ps-sm-3 pt-3 pt-sm-0">
										<h5></h5>
										
									</div>
								</div>
							
							
							</div>
						</div>
						
						<div class="tab-pane fade" id="purchase">
							<div class="h-300px" data-scrollbar="true">
								<table class="table table-panel mb-0">
									<thead>
										<tr>
											<th>Date</th>
											<th class="hidden-sm text-center"></th>
											<th></th>
											<th></th>
											<th>User</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="fw-bold text-muted"></td>
											<td class="hidden-sm text-center">
												<a href="javascript:;">
													<img src="../assets/img/product/product-1.png" alt="" width="32px"  />
												</a>
											</td>
											<td class="text-nowrap">
												<h6><a href="javascript:;" class="text-dark text-decoration-none"><br /></a></h6>
											</td>
											<td class="text-blue fw-bold"></td>
											<td class="text-nowrap"><a href="javascript:;" class="text-dark text-decoration-none"></a></td>
										</tr>
									
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane fade" id="email">
							<div class="h-300px p-3" data-scrollbar="true">
								<div class="d-flex">
									<a class="w-60px" href="javascript:;">
										<img src="../assets/img/user/user-1.jpg" alt="" class="mw-100 rounded-pill" />
									</a>
									<div class="flex-1 ps-3">
										<a href="javascript:;" class="text-dark text-decoration-none"></h5></a>
										<p class="mb-5px">
											
										</p>
										<span class="text-muted fs-11px fw-bold"></span>
									</div>
								</div>
								<hr class="bg-gray-500" />
								<div class="d-flex">
									<a class="w-60px" href="javascript:;">
										<img src="../assets/img/user/user-2.jpg" alt="" class="mw-100 rounded-pill" />
									</a>
									<div class="flex-1 ps-3">
										
									</div>
								</div>
								
							
							</div>
						</div>
					</div>
					<!-- END tabs -->

            </div>
            
</div>   
@endsection