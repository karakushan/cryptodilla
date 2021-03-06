<div class="rightbar">
    <!-- Start Topbar Mobile -->
    <div class="topbar-mobile">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="mobile-logobar">
                    <a href="{{url('/')}}" class="mobile-logo"><img src="{{ asset('assets/images/logo.svg') }}"
                                                                    class="img-fluid" alt="logo"></a>
                </div>
                <div class="mobile-togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="topbar-toggle-icon">
                                <a class="topbar-toggle-hamburger" href="javascript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/horizontal.svg') }}"
                                         class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                    <img src="{{ asset('assets/images/svg-icon/verticle.svg') }}"
                                         class="img-fluid menu-hamburger-vertical" alt="verticle">
                                </a>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="menubar">
                                <a class="menu-hamburger" href="javascript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/collapse.svg') }}"
                                         class="img-fluid menu-hamburger-collapse" alt="collapse">
                                    <img src="{{ asset('assets/images/svg-icon/close.svg') }}"
                                         class="img-fluid menu-hamburger-close" alt="close">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Topbar -->
    <div class="topbar">
        <!-- Start row -->
        <div class="row align-items-center">
            <!-- Start col -->
            <div class="col-md-12 align-self-center">
                <div class="togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="menubar">
                                <a class="menu-hamburger" href="javascript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/collapse.svg') }}"
                                         class="img-fluid menu-hamburger-collapse" alt="collapse">
                                    <img src="{{ asset('assets/images/svg-icon/close.svg') }}"
                                         class="img-fluid menu-hamburger-close" alt="close">
                                </a>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="searchbar">
                                <form>
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search"
                                               aria-label="Search" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit" id="button-addon2"><img
                                                    src="{{ asset('assets/images/svg-icon/search.svg') }}"
                                                    class="img-fluid" alt="search"></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="infobar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="settingbar">
                                <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                                    <img src="{{ asset('assets/images/svg-icon/settings.svg') }}" class="img-fluid"
                                         alt="settings">
                                </a>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="notifybar">
                                <div class="dropdown">
                                    <a class="dropdown-toggle infobar-icon" href="#" role="button" id="notoficationlink"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                            src="{{ asset('assets/images/svg-icon/notifications.svg') }}"
                                            class="img-fluid"
                                            alt="notifications">
                                        <span class="live-icon"></span></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notoficationlink">
                                        <div class="notification-dropdown-title">
                                            <h4>{{ __("??????????????????") }}</h4>
                                        </div>
                                        <ul class="list-unstyled">
                                            <li class="media dropdown-item">
                                                <span class="mr-3 action-icon badge badge-primary-inverse"><i
                                                        class="feather icon-dollar-sign"></i></span>
                                                <div class="media-body">
                                                    <h5 class="action-title">$135 received</h5>
                                                    <p><span class="timing">Today, 10:45 AM</span></p>
                                                </div>
                                            </li>
                                            <li class="media dropdown-item">
                                                <span class="mr-3 action-icon badge badge-success-inverse"><i
                                                        class="feather icon-file"></i></span>
                                                <div class="media-body">
                                                    <h5 class="action-title">Project X prototype approved</h5>
                                                    <p><span class="timing">Yesterday, 01:40 PM</span></p>
                                                </div>
                                            </li>
                                            <li class="media dropdown-item">
                                                <span class="mr-3 action-icon badge badge-danger-inverse"><i
                                                        class="feather icon-eye"></i></span>
                                                <div class="media-body">
                                                    <h5 class="action-title">John requested to view wireframe</h5>
                                                    <p><span class="timing">3 Sep 2019, 05:22 PM</span></p>
                                                </div>
                                            </li>
                                            <li class="media dropdown-item">
                                                <span class="mr-3 action-icon badge badge-warning-inverse"><i
                                                        class="feather icon-package"></i></span>
                                                <div class="media-body">
                                                    <h5 class="action-title">Sports shoes are out of stock</h5>
                                                    <p><span class="timing">15 Sep 2019, 02:55 PM</span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="languagebar">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="languagelink"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="flag flag-icon-{{ str_replace('en','us',app()->getLocale()) }} flag-icon-squared"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languagelink">
                                        @foreach (config('app.languages') as $lang)
                                            <a class="dropdown-item" href="{{ route('locale',['locale'=>$lang]) }}"><i
                                                    class="flag flag-icon-{{ str_replace('en','us',$lang) }} flag-icon-squared"></i>{{ $lang }}
                                            </a>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="profilebar">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="profilelink"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @if (auth()->user()->avatar_url)
                                            <img
                                                src="{{ auth()->user()->avatar_url }}" class="img-fluid rounded-circle"
                                                alt="profile"><span
                                                class="feather icon-chevron-down live-icon"></span>
                                        @else
                                            <img
                                                src="{{ asset('assets/images/users/profile.svg') }}" class="img-fluid"
                                                alt="profile"><span
                                                class="feather icon-chevron-down live-icon"></span>
                                        @endif

                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                        <div class="dropdown-item">
                                            <div class="profilename">
                                                <h5>{{ auth()->user()->name }}</h5>
                                            </div>
                                        </div>
                                        <div class="userbox">
                                            <ul class="list-unstyled mb-0">
                                                <li class="media dropdown-item">
                                                    <a href="{{ route('users.edit',auth()->id()) }}"
                                                       class="profile-icon"><img
                                                            src="{{ auth()->user()->avatar_url ?? asset('assets/images/users/profile.svg') }}"
                                                            class="img-fluid rounded-circle"
                                                            alt="user">{{ __("Profile") }}</a>
                                                </li>
                                                {{--<li class="media dropdown-item">
                                                    <a href="#" class="profile-icon"><img
                                                            src="{{ asset('assets/images/svg-icon/email.svg') }}"
                                                            class="img-fluid"
                                                            alt="email">??????????????????</a>
                                                </li>--}}
                                                <li class="media dropdown-item">
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf

                                                        <x-dropdown-link class="profile-icon" :href="route('logout')"
                                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                            <img
                                                                src="{{ asset('assets/images/svg-icon/logout.svg') }}"
                                                                class="img-fluid"
                                                                alt="logout">{{ __("Logout") }}
                                                        </x-dropdown-link>
                                                    </form>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
    <!-- End Topbar -->
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">@yield('title')</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">{{ __("??????????????") }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>{{ __("????????????????") }}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
@yield('rightbar-content')
<!-- Start Footerbar -->
    <div class="footerbar">
        <footer class="footer">
            <p class="mb-0">?? {{ date('Y',time()) }} - All Rights Reserved.</p>
        </footer>
    </div>
    <!-- End Footerbar -->
</div>
