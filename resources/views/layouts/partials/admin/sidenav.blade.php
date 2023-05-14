<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-profile">
                <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile"
                    data-target="#appSidebarProfileMenu">
                    <div class="menu-profile-cover with-shadow"></div>
                    <div class="menu-profile-image">
                        <img src="{{ Auth::user()->getFirstMediaUrl('users') }}" alt="" />
                    </div>
                    <div class="menu-profile-info">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">

                            </div>
                            <div class="menu-caret ms-auto"></div>
                        </div>
                        <small>TAHO Admin </small>
                    </div>
                </a>
            </div>
            <div id="appSidebarProfileMenu" class="collapse">

                <div class="menu-item pt-5px">
                    <a href="{{ url('admin/settings') }}" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-cog"></i></div>
                        <div class="menu-text">Home slider settings</div>
                    </a>
                </div>
                <div class="menu-item pt-5px">
                    <a href="{{ url('admin/about') }}" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-cog"></i></div>
                        <div class="menu-text">About us settings</div>
                    </a>
                </div>
                <div class="menu-item pt-5px">
                    <a href="{{ url('admin/general') }}" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-cog"></i></div>
                        <div class="menu-text">General settings</div>
                    </a>
                </div>

                <div class="menu-divider m-0"></div>
            </div>
            <div class="menu-header">Navigation</div>
            <div class="menu-item ">
                <a href="{{ url('/') }}" class="menu-link" active>
                    <div class="menu-icon">
                        <i class="fa-solid fa-light fa-home" style="color: #dbdfe6;"></i>
                    </div>
                    <div class="menu-text">Home </div>
                </a>
            </div>
            <div class="menu-item ">
                <a href="{{ url('admin/index') }}" class="menu-link" active>
                    <div class="menu-icon">
                        <i class="fa-solid fa-light fa-chart-line" style="color: #dbdfe6;"></i>
                    </div>
                    <div class="menu-text">Dashboard </div>
                </a>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-hdd"></i>
                    </div>
                    <div class="menu-text">Messages</div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">

                        <a href="{{ url('admin/volunteer') }}" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa-solid  fa-clover" style="color: #fcfdfc;"></i>
                            </div>
                            <div class="menu-text">Request</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ url('admin/email') }}" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa-solid fa-light fa-envelopes-bulk" style="color: #fcfdfc;"></i>
                            </div>
                            <div class="menu-text">Email</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ url('admin/faq') }}" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa-solid fa-light fa-circle-question" style="color: #080808;"></i>
                            </div>
                            <div class="menu-text">FAQ</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ url('admin/comment') }}" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa-solid fa-light fa-comment-dots" style="color: #ffffff;"></i>
                            </div>
                            <div class="menu-text">Comments</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <a href="{{ route('category.index') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-solid fa-list-check" style="color: #ffffff;"></i>
                    </div>
                    <div class="menu-text">Categories</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ url('admin/cause') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-solid fa-diagram-project" style="color: #ffffff;"></i>
                    </div>
                    <div class="menu-text">Causes </div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ url('admin/apeals') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-sharp fa-solid fa-group-arrows-rotate" style="color: #ffffff;"></i>
                    </div>
                    <div class="menu-text">Apeals</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ url('admin/pdf') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-solid fa-file-pdf" style="color: #d81818;"></i>
                    </div>
                    <div class="menu-text">Testimonies(PDF)</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ url('admin/blog') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-brands fa-blogger"></i>
                    </div>
                    <div class="menu-text">Blog</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ url('admin/user') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-solid fa-users" style="color: #fbfffd;"></i>
                    </div>
                    <div class="menu-text">Users</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ url('admin/event') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-solid fa-calendar-week" style="color: #fdfffd;"></i>
                    </div>
                    <div class="menu-text">Events</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ url('admin/gallery') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-image" style="color: #fdfffd;"></i>
                    </div>
                    <div class="menu-text">Gallery</div>
                </a>
            </div>


            <!-- BEGIN minify-button -->
            <div class="menu-item d-flex">
                <a href="javascript:;"
                    class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none"
                    data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
            </div>
            <!-- END minify-button -->

        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
</div>
<div class="app-sidebar-bg"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile"
        class="stretched-link"></a></div>
<!-- END #sidebar -->
<!-- END #sidebar -->
