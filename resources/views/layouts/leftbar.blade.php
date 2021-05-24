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
                             alt="dashboard"><span>{{ __("Панель") }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}">
                        <img src="{{ asset('assets/images/svg-icon/user.svg') }}" class="img-fluid"
                             alt="dashboard"><span>{{ __("Пользователи") }}</span>
                        <i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('users.index') }}">{{ __("Список") }}</a></li>
                        <li><a href="{{ route('users.create') }}">{{ __("Добавить") }}</a></li>
                     {{--   <li><a href="{{ route('user-groups.index') }}">{{ __("Группы") }}</a></li>
                        <li><a href="{{ route('user-groups.create') }}">{{ __("Добавить группу") }}</a></li>--}}
                    </ul>
                </li>
                <li>
                    <a href="{{ route('exchanges.index') }}">
                        <img src="{{ asset('assets/images/svg-icon/widgets.svg') }}" class="img-fluid"
                             alt="dashboard"><span>{{ __("Биржи") }}</span>
                        <i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('exchanges.index') }}">{{ __("Список") }}</a></li>
                        <li><a href="{{ route('exchanges.create') }}">{{ __("Добавить") }}</a></li>
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
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        <span>{{ __("News") }}</span>
                        <i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('news.index') }}">{{ __("List") }}</a></li>
                        <li><a href="{{ route('news.create') }}">{{ __("Add") }}</a></li>
                       {{-- <li><a href="{{ route('news-categories.index') }}">{{ __("FAQ Categories") }}</a></li>
                        <li><a href="{{ route('news-categories.create') }}">{{ __("Add FAQ Category") }}</a></li>--}}
                    </ul>
                </li>

            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>
