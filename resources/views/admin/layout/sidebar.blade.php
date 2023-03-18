<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset(Auth::user()->avatar) }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <!--active-->
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Thống kê</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#submenu" class="collapsed" aria-expanded="false">
                        <i class="fas fa-th-list"></i>
                        <p>Bài viết & Danh mục</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu" style="">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.categories.index') }}">
                                    <span class="sub-item">Danh mục</span>
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="collapse" href="#subnav1" class="collapsed" aria-expanded="false">
                                    <span class="sub-item">Bài viết</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav1" style="">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{ route('admin.blogs.index') }}">
                                                <span class="sub-item">Danh sách bài viết</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.blogs.create') }}">
                                                <span class="sub-item">Thêm bài viết</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <!--active-->
                    <a href="{{ route('admin.case-study') }}">
                        <i class="fas fa-eject"></i>
                        <p>Dự án</p>
                    </a>
                </li>
                <li class="nav-item">
                    <!--active-->
                    <a href="{{ route('admin.account') }}">
                        <i class="fas fa-users"></i>
                        <p>Tài khoản</p>
                    </a>
                </li>
                <li class="nav-item">
                    <!--active-->
                    <a href="{{ route('admin.contact') }}">
                        <i class="fas fa-envelope"></i>
                        <p>Liên hệ</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
