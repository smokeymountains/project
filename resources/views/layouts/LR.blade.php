<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.lr.head')
</head>
<body class='pace-top'>
    <div id="app" class="app">
        
        @yield('content')
        <!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
    </div>
	<!-- END #app -->

    @include('layouts.partials.lr.footer')
    @yield('scripts')
</body>

</html>