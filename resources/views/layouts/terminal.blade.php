<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link
        rel="icon"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>₿</text></svg>"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <link media="all" rel="stylesheet" href="{{ asset('css/vendor.css') }}"/>
    <link media="all" rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
</head>
<body>
<div class="cs--preloader" data-preloader></div>
<div class="cs--page-wrapper">
    <header class="cs--landing-header" data-landing-header>
        <div class="cs--container">
            <div class="cs--landing-header__wrapper">
                <a href="{{ route('homepage') }}" class="cs--logo cs--logo--lg">
                    <picture>
                        <source
                            srcset="{{ asset('/img/logo-icon.png') }}"
                            media="(max-width: 768px)"
                        />
                        <img src="{{ asset('/img/logo.png') }}" alt="logo"/>
                    </picture>
                </a>
                <nav
                    class="cs--landing-nav"
                    data-landing-menu
                    data-expanded="false"
                >
                    <ul class="cs--landing-nav__list">
                        <li class="cs--landing-nav__item">
                            <a href="{{ route('terminal.index') }}">{{ __("Platform") }}</a>
                        </li>

                        <li class="cs--landing-nav__item">
                            <a href="javascript:void(0)">{{ __("Pricing") }}</a>
                        </li>

                        <li class="cs--landing-nav__item">
                            <a href="javascript:void(0)">API</a>
                        </li>

                        <li class="cs--landing-nav__item">
                            <a href="javascript:void(0)">{{ __("About") }}</a>
                        </li>
                    </ul>
                </nav>
                <div class="cs--landing-login">
                    @if(auth()->check())
                        <a href="/terminal">{{ __("Trading") }}</a>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                           class="cs--btn cs--btn--transparent-grad-blue">{{ __("Logout") }}</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    @else
                        <a href="{{ route('login') }}">{{ __("log in") }}</a>
                        <a
                            href="{{ route('register') }}"
                            class="cs--btn cs--btn--transparent-grad-blue"
                        >{{ __("sing up") }}</a
                        >
                    @endif
                </div>
                <button
                    type="button"
                    class="cs--landing-header__menu"
                    data-landing-expander
                    aria-expanded="false"
                >
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <div id="app">
        @yield('content')
    </div>

    <footer class="cs--landing-footer">
        <div class="cs--landing-footer__block--top">
            <div class="cs--container">
                <div class="cs--landing-footer__content">
                    <div class="cs--landing-footer__company">
                        <a class="cs--logo" href="{{ route('homepage') }}">
                            <img src="{{ asset('/img/logo.png') }}" alt="logo"/>
                        </a>
                        <span>{{ sprintf(__("Copyright ©%d. All rights reserved."),date('Y')) }}</span>
                    </div>
                    <nav>
                        <ul class="cs--landing-footer__menu-group">
                            <li class="cs--landing-footer__menu-group-item">
                    <span class="cs--landing-footer__menu-group-title"
                    >PLATFORM</span
                    >

                                <ul class="cs--landing-footer__menu-list">
                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Dashboard</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Portfolio</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Trade</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Bots</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Research</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >News</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Plans &amp; Pricing</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Institutional Tools</a
                                        >
                                    </li>
                                </ul>
                            </li>

                            <li class="cs--landing-footer__menu-group-item">
                    <span class="cs--landing-footer__menu-group-title"
                    >RESOURCES</span
                    >

                                <ul class="cs--landing-footer__menu-list">
                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Status</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Blog</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Support Center</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >APIs &amp; Market Data</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Developers</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Referral Program</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Security</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Terms of Use</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Privacy Policy</a
                                        >
                                    </li>
                                </ul>
                            </li>

                            <li class="cs--landing-footer__menu-group-item">
                    <span class="cs--landing-footer__menu-group-title"
                    >THE COMPANY</span
                    >

                                <ul class="cs--landing-footer__menu-list">
                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >About</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Careers</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Contact Us</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Partnerships</a
                                        >
                                    </li>

                                    <li class="cs--landing-footer__menu-item">
                                        <a
                                            class="cs--landing-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Advertise</a
                                        >
                                    </li>
                                </ul>
                            </li>

                            <li class="cs--landing-footer__menu-group-item">
                    <span class="cs--landing-footer__menu-group-title"
                    >CONNECT / FOLLOW</span
                    >

                                <ul class="cs--social-list">
                                    <li class="cs--social-item">
                                        <a href="javascript:void(0)">
                                            <svg
                                                class="cs--icon"
                                                aria-hidden="true"
                                                width="40"
                                                height="40"
                                                viewBox="0 0 40 40"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M19.9999 0.799805C9.39593 0.799805 0.799927 9.39581 0.799927 19.9998C0.799927 30.6038 9.39593 39.1998 19.9999 39.1998C30.6039 39.1998 39.1999 30.6038 39.1999 19.9998C39.1999 9.39581 30.6039 0.799805 19.9999 0.799805ZM27.8099 16.5278C27.8179 16.6918 27.8199 16.8558 27.8199 17.0158C27.8199 22.0158 24.0179 27.7778 17.0619 27.7778C15.0065 27.7812 12.9939 27.1909 11.2659 26.0778C11.5599 26.1138 11.8619 26.1278 12.1679 26.1278C13.9399 26.1278 15.5699 25.5258 16.8639 24.5098C16.0754 24.4943 15.3113 24.2332 14.6781 23.7628C14.045 23.2925 13.5744 22.6363 13.3319 21.8858C13.8982 21.9935 14.4816 21.9709 15.0379 21.8198C14.182 21.6467 13.4123 21.183 12.8593 20.5071C12.3064 19.8313 12.0041 18.985 12.0039 18.1118V18.0658C12.5139 18.3478 13.0979 18.5198 13.7179 18.5398C12.9155 18.0057 12.3475 17.1851 12.13 16.2461C11.9125 15.307 12.062 14.3203 12.5479 13.4878C13.4978 14.6558 14.6824 15.6113 16.0251 16.2924C17.3677 16.9736 18.8384 17.3651 20.3419 17.4418C20.1508 16.6304 20.233 15.7786 20.5759 15.0188C20.9188 14.259 21.5032 13.6338 22.2381 13.2403C22.973 12.8469 23.8173 12.7073 24.6397 12.8431C25.4622 12.979 26.2167 13.3829 26.7859 13.9918C27.6323 13.8244 28.4439 13.5139 29.1859 13.0738C28.9039 13.9501 28.3133 14.6942 27.5239 15.1678C28.2736 15.0775 29.0057 14.876 29.6959 14.5698C29.1889 15.3296 28.5502 15.9927 27.8099 16.5278Z"
                                                    fill="var(--icon-color)"
                                                />
                                            </svg>
                                        </a>
                                    </li>

                                    <li class="cs--social-item">
                                        <a href="javascript:void(0)">
                                            <svg
                                                class="cs--icon"
                                                aria-hidden="true"
                                                width="40"
                                                height="40"
                                                viewBox="0 0 40 40"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M20 0.625C9.29625 0.625 0.625 9.2975 0.625 20C0.625 30.7025 9.2975 39.375 20 39.375C30.7038 39.375 39.375 30.7025 39.375 20C39.375 9.2975 30.7025 0.625 20 0.625ZM29.5163 13.8988L26.3363 28.8838C26.1012 29.9463 25.4688 30.2038 24.5863 29.7038L19.7425 26.1337L17.4062 28.3838C17.1488 28.6413 16.93 28.86 16.43 28.86L16.7738 23.93L25.75 15.82C26.1413 15.4762 25.6637 15.2812 25.1475 15.625L14.0538 22.6087L9.2725 21.1162C8.23375 20.7887 8.21 20.0775 9.49125 19.5775L28.1713 12.3738C29.0388 12.0613 29.7962 12.585 29.515 13.8975L29.5163 13.8988Z"
                                                    fill="var(--icon-color)"
                                                />
                                            </svg>
                                        </a>
                                    </li>

                                    <li class="cs--social-item">
                                        <a href="javascript:void(0)">
                                            <svg
                                                class="cs--icon"
                                                aria-hidden="true"
                                                width="40"
                                                height="40"
                                                viewBox="0 0 40 40"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M19.9999 0.799805C9.39593 0.799805 0.799927 9.39581 0.799927 19.9998C0.799927 30.6038 9.39593 39.1998 19.9999 39.1998C30.6039 39.1998 39.1999 30.6038 39.1999 19.9998C39.1999 9.39581 30.6039 0.799805 19.9999 0.799805ZM15.2999 27.9578H11.4119V15.4458H15.2999V27.9578ZM13.3319 13.9098C12.1039 13.9098 11.3099 13.0398 11.3099 11.9638C11.3099 10.8658 12.1279 10.0218 13.3819 10.0218C14.6359 10.0218 15.4039 10.8658 15.4279 11.9638C15.4279 13.0398 14.6359 13.9098 13.3319 13.9098ZM29.4999 27.9578H25.6119V21.0238C25.6119 19.4098 25.0479 18.3138 23.6419 18.3138C22.5679 18.3138 21.9299 19.0558 21.6479 19.7698C21.5439 20.0238 21.5179 20.3838 21.5179 20.7418V27.9558H17.6279V19.4358C17.6279 17.8738 17.5779 16.5678 17.5259 15.4438H20.9039L21.0819 17.1818H21.1599C21.6719 16.3658 22.9259 15.1618 25.0239 15.1618C27.5819 15.1618 29.4999 16.8758 29.4999 20.5598V27.9578Z"
                                                    fill="var(--icon-color)"
                                                />
                                            </svg>
                                        </a>
                                    </li>

                                    <li class="cs--social-item">
                                        <a href="javascript:void(0)">
                                            <svg
                                                class="cs--icon"
                                                aria-hidden="true"
                                                width="40"
                                                height="40"
                                                viewBox="0 0 40 40"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M23.2059 19.6658L18.7139 17.5698C18.3219 17.3878 17.9999 17.5918 17.9999 18.0258V21.9738C17.9999 22.4078 18.3219 22.6118 18.7139 22.4298L23.2039 20.3338C23.5979 20.1498 23.5979 19.8498 23.2059 19.6658ZM19.9999 0.799805C9.39593 0.799805 0.799927 9.39581 0.799927 19.9998C0.799927 30.6038 9.39593 39.1998 19.9999 39.1998C30.6039 39.1998 39.1999 30.6038 39.1999 19.9998C39.1999 9.39581 30.6039 0.799805 19.9999 0.799805ZM19.9999 27.7998C10.1719 27.7998 9.99993 26.9138 9.99993 19.9998C9.99993 13.0858 10.1719 12.1998 19.9999 12.1998C29.8279 12.1998 29.9999 13.0858 29.9999 19.9998C29.9999 26.9138 29.8279 27.7998 19.9999 27.7998Z"
                                                    fill="var(--icon-color)"
                                                />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="cs--landing-footer__block--bottom">
            <div class="cs--container">
                <p>
                    Disclaimer: Information contained herein should not be construed
                    as investment advice, or investment recommendation, or an order
                    of, or solicitation for, any transactions in financial
                    instruments; We make no warranty or representation, whether
                    express or implied, as to the completeness or accuracy of the
                    information contained herein or fitness thereof for a particular
                    purpose. Use of images and symbols is made for illustrative
                    purposes only and does not constitute a recommendation to buy,
                    sell or hold a particular financial instrument; Use of brand logos
                    does not necessarily imply a contractual relationship between us
                    and the entities owning the logos, nor does it represent an
                    endorsement of any such entity by Quadency, or vice versa. Market
                    information is made available to you only as a service, and we do
                    not endorse or approve it. Quadency does not hold custody of
                    client funds and is not liable to you for any (direct or indirect)
                    damage you suffer as a result of the use of the Website or
                    Software or the content provided thereon.
                </p>
            </div>
        </div>
    </footer>
</div>
<script src="{{ asset('js/vendor.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>
</body>
</html>
