@extends('layouts.admin')
@section('content')
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN breadcrumb -->
			<ol class="breadcrumb float-xl-end">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Gallery</a></li>
				
			</ol>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">Gallery</h1>
			<!-- END page-header -->
			<!-- BEGIN #options -->
			<div id="options" class="mb-3">
				<div class="d-flex flex-wrap text-nowrap mb-n1" id="filter" data-option-key="filter">
					<a href="#show-all" class="btn btn-white btn-sm active border-0 me-1 mb-1" data-option-value="*">Show All</a>
					<a href="#gallery-group-1" class="btn btn-white btn-sm border-0 me-1 mb-1" data-option-value=".gallery-group-1">Causes</a>
					<a href="#gallery-group-2" class="btn btn-white btn-sm border-0 me-1 mb-1" data-option-value=".gallery-group-2">Apeals</a>
					<a href="#gallery-group-3" class="btn btn-white btn-sm border-0 me-1 mb-1" data-option-value=".gallery-group-3">Blog</a>
					<a href="#gallery-group-4" class="btn btn-white btn-sm border-0 me-1 mb-1" data-option-value=".gallery-group-4">Events</a>
				</div>
			</div>
			<!-- END #options -->
			<!-- BEGIN #gallery -->
			<div id="gallery" class="gallery">
				
				<!-- BEGIN image -->
				@foreach ($causes as $item)
						<div class="image gallery-group-1">
					
					<div class="image-inner">
						<a href="{{ $item->getFirstMediaUrl('causes','thumb') }}" data-lightbox="gallery-group-1">
							<div class="img" style="background-image: url({{ $item->getFirstMediaUrl('causes','thumb') }})"></div>
						</a>
						<p class="image-caption">
							#{{ $item->id }} - TAHOTZ-Causes
						</p>
					</div>
					<div class="image-info">
						<h5 class="title">{{ $item->Title }}</h5>
						<div class="d-flex align-items-center mb-2">
						
							
						</div>
					
					</div>
				</div>
					@endforeach
				
				<!-- END image -->
		
				
				<!-- BEGIN image -->
				@foreach ($apeal as $item )
					<div class="image gallery-group-2">
					<div class="image-inner">
						<a href="{{$item->getFirstMediaUrl('apeal')}}" data-lightbox="gallery-group-2">
							<div class="img" style="background-image: url({{$item->getFirstMediaUrl('apeal','thumb')}})"></div>
						</a>
						<p class="image-caption">
							#{{ $item->id }} - TAHOTZ Apeals
						</p>
					</div>
					<div class="image-info">
						<h5 class="title">{{ $item->Title }}</h5>
						<div class="d-flex align-items-center mb-2">
							
						</div>
						
					</div>
				</div>
				@endforeach
				
				<!-- END image -->
				
				<!-- END image -->
				@foreach ($blog as $item )
						<!-- BEGIN image -->
				<div class="image gallery-group-3">
					<div class="image-inner">
						<a href="{{ $item->getFirstMediaUrl('blog') }}" data-lightbox="gallery-group-3">
							<div class="img" style="background-image: url({{ $item->getFirstMediaUrl('blog','thumb') }})"></div>
						</a>
						<p class="image-caption">
							#{{ $item->id }} TAHOTZ Blog
						</p>
					</div>
					<div class="image-info">
						<h5 class="title">{{ $item->Title }}</h5>
						
					</div>
				</div>
				@endforeach
			
				<!-- END image -->
				<!-- BEGIN image -->
				
				<!-- BEGIN image -->
				@foreach ($event as $item)
					<div class="image gallery-group-4">
					<div class="image-inner">
						<a href="{{ $item->getFirstMediaUrl('events') }}" data-lightbox="gallery-group-4">
							<div class="img" style="background-image: url({{ $item->getFirstMediaUrl('events','thumb') }})"></div>
						</a>
						<p class="image-caption">
							#{{ $item->id }} TAHOTZ Events
						</p>
					</div>
					<div class="image-info">
						<h5 class="title">{{ $item->Title }}</h5>
						
						
					</div>
				</div>
				@endforeach
				
				<!-- END image -->
			
			</div>
			<!-- END #gallery -->
		</div>
		<!-- END #content -->
@endsection
@section('scripts')
@endsection
