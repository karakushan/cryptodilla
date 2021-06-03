<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="{{url('/')}}" class="logo logo-large"><img src="{{ asset('assets/images/logo.svg') }}" class="img-fluid"
                                                                alt="logo"></a>
            <a href="{{url('/')}}" class="logo logo-small"><img src="{{ asset('assets/images/small_logo.svg') }}" class="img-fluid"
                                                                alt="logo"></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li>
                    <a href="{{ route('dashboard.index') }}">
                        <img src="{{ asset('assets/images/svg-icon/dashboard.svg') }}" class="img-fluid"
                             alt="dashboard"><span>{{ __("Dashboard") }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}">
                        <img src="{{ asset('assets/images/svg-icon/user.svg') }}" class="img-fluid"
                             alt="dashboard"><span>{{ __("Users") }}</span>
                        <i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('users.index') }}">{{ __("List") }}</a></li>
                        <li><a href="{{ route('users.create') }}">{{ __("Add") }}</a></li>
                     {{--   <li><a href="{{ route('user-groups.index') }}">{{ __("Группы") }}</a></li>
                        <li><a href="{{ route('user-groups.create') }}">{{ __("Добавить группу") }}</a></li>--}}
                    </ul>
                </li>
                <li>
                    <a href="{{ route('exchanges.index') }}">
                        <img src="{{ asset('assets/images/svg-icon/widgets.svg') }}" class="img-fluid"
                             alt="dashboard"><span>{{ __("Exchanges") }}</span>
                        <i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('exchanges.index') }}">{{ __("List") }}</a></li>
                        <li><a href="{{ route('exchanges.create') }}">{{ __("Add") }}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('currencies.index') }}">
                        <i class="fa fa-btc" aria-hidden="true"></i>
                        <span>{{ __("Currencies") }}</span>
                        <i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('currencies.index') }}">{{ __("List") }}</a></li>
                        <li><a href="{{ route('currencies.create') }}">{{ __("Add") }}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('faqs.index') }}">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        <span>{{ __("FAQs") }}</span>
                        <i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('faqs.index') }}">{{ __("List") }}</a></li>
                        <li><a href="{{ route('faqs.create') }}">{{ __("Add") }}</a></li>
                        <li><a href="{{ route('faq-categories.index') }}">{{ __("FAQ Categories") }}</a></li>
                        <li><a href="{{ route('faq-categories.create') }}">{{ __("Add FAQ Category") }}</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('news.index') }}">
                        <img src="{{ asset('assets/images/svg-icon/pages.svg') }}" class="img-fluid"
                             alt="dashboard">
                        <span>{{ __("News") }}</span>
                        <i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('news.index') }}">{{ __("List") }}</a></li>
                        <li><a href="{{ route('news.create') }}">{{ __("Add") }}</a></li>
                        <li><a href="{{ route('news-category.index') }}">{{ __("Categories") }}</a></li>
                        <li><a href="{{ route('news-category.create') }}">{{ __("Add Category") }}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('settings.index') }}">
                        <img src="{{ asset('assets/images/svg-icon/settings.svg') }}" class="img-fluid"
                             alt="dashboard">
                        <span>{{ __("Settings") }}</span>
                        <i class    ="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                       @foreach (config('settings') as $key=>$setting)
                            <li><a href="{{ route('settings.index',['group'=>$key]) }}">{{ __($setting['name']) }}</a></li>
                       @endforeach
                    </ul>
                </li>

            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>
