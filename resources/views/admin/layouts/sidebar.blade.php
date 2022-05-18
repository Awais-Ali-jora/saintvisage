
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item ">
                <a href="{{url('dashboard')}}" class="nav-link ">
                    <i class="icon-bar-chart"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('banner.index')}}" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Banner</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-puzzle"></i>
                    <span class="title">Location</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('location.create')}}" class="nav-link ">
                            <span class="title">Add</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('location.index')}}" class="nav-link ">
                            <span class="title">Show</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="{{route('treatment.cat.index')}}" class="nav-link nav-toggle">
                    <i class="icon-puzzle"></i>
                    <span class="title">Treatment Category</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('treatment.cat.create')}}" class="nav-link ">
                            <span class="title">Add</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('treatment.cat.index')}}" class="nav-link ">
                            <span class="title">Show</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="{{route('treatment.cat.index')}}" class="nav-link nav-toggle">
                    <i class="icon-puzzle"></i>
                    <span class="title">Treatment Posts</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('post.create')}}" class="nav-link ">
                            <span class="title">Add</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('post.index')}}" class="nav-link ">
                            <span class="title">Show</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="{{route('treatment.cat.index')}}" class="nav-link nav-toggle">
                    <i class="icon-puzzle"></i>
                    <span class="title">SV Treatment</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('svtreatment.create')}}" class="nav-link ">
                            <span class="title">Add</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('svtreatment.index')}}" class="nav-link ">
                            <span class="title">Show</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="{{route('treatment.cat.index')}}" class="nav-link nav-toggle">
                    <i class="icon-puzzle"></i>
                    <span class="title">Clinics</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('clinic.create')}}" class="nav-link ">
                            <span class="title">Add</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('clinic.index')}}" class="nav-link ">
                            <span class="title">Show</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="{{route('partner.index')}}" class="nav-link nav-toggle">
                    <i class="icon-puzzle"></i>
                    <span class="title">Partners</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('partner.create')}}" class="nav-link ">
                            <span class="title">Add</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('partner.index')}}" class="nav-link ">
                            <span class="title">Show</span>
                        </a>
                    </li>
                </ul>
            </li>
             <li class="nav-item ">
                <a href="{{ route('show.messages') }}" class="nav-link ">
                    <i class="icon-settings"></i>
                    <span class="title">Message</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('show.newsnetter') }}" class="nav-link ">
                    <i class="icon-settings"></i>
                    <span class="title">Newsletters</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('About.index')}}" class="nav-link ">
                    <i class="icon-settings"></i>
                    <span class="title">About</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">Team</span>
                <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('Team.index')}}" class="nav-link ">
                        <span class="title">Index</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('Team.create')}}" class="nav-link ">
                        <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">Why Work with us</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('why.index')}}" class="nav-link ">
                            <span class="title">Index</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('why.create')}}" class="nav-link ">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">Real Practice result</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('practice.index')}}" class="nav-link ">
                            <span class="title">Index</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('practice.create')}}" class="nav-link ">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
                <li class="nav-item  ">
                    <a href="{{route('general.index')}}" class="nav-link nav-toggle">
                        <i class="icon-settings"></i>
                        <span class="title">General</span>
                    </a>
                </li>
            </li>
        </ul>
    </div>
</div>
