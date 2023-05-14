<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.admin.head')
    @livewireStyles
</head>
<body>
    <div id="app" class="app app-header-fixed app-sidebar-fixed ">
        @include('layouts.partials.admin.header')
        @include('layouts.partials.admin.sidenav')
        @yield('content')
        <!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
    </div>
	<!-- END #app -->

    @include('layouts.partials.admin.footerscripts')
    @yield('scripts')
    @livewireScripts
</body>

</html>