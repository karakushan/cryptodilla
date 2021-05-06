<template>
    <div class="cs--page-wrapper">
        <header class="cs--dashboard-header" data-landing-header>
            <div class="cs--container">
                <div class="cs--dashboard-header__wrapper">
                    <a href="javascript:void(0)" class="cs--logo cs--logo--xs">
                        <img src="/img/logo-icon.png" alt="logo" />
                    </a>
                    <nav
                        class="cs--dashboard-nav"
                        data-landing-menu
                        data-expanded="false"
                    >
                        <ul class="cs--dashboard-nav__list">
                            <li class="cs--dashboard-nav__item">
                                <a href="javascript:void(0)">Platform</a>
                            </li>

                            <li class="cs--dashboard-nav__item">
                                <a href="javascript:void(0)">News</a>
                            </li>

                            <li class="cs--dashboard-nav__item">
                                <a href="javascript:void(0)">FAQ</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="cs--dashboard-options">
                        <div class="cs--dashboard-options__status">
                <span class="cs--dashboard-options__status-text"
                >Connected</span
                >
                        </div>
                        <details
                            data-dropdown
                            class="cs--dashboard-options__lang cs--dropdown"
                        >
                            <summary class="cs--dropdown__btn">en</summary>
                            <ul class="cs--dropdown__list">
                                <li class="cs--dropdown__item">
                                    <button type="button">en</button>
                                </li>

                                <li class="cs--dropdown__item">
                                    <a href="javascript:void(0)">ru</a>
                                </li>
                            </ul>
                        </details>
                        <button
                            type="button"
                            data-color-theme-toggler
                            class="cs--color-theme__btn"
                        >
                            <svg
                                class="cs--icon"
                                aria-hidden="true"
                                width="20"
                                height="20"
                                viewBox="0 0 20 20"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M9.99989 3.56654C10.1472 3.56654 10.2885 3.50801 10.3927 3.40383C10.4969 3.29964 10.5554 3.15833 10.5554 3.01099V1.06099C10.5554 0.913645 10.4969 0.772337 10.3927 0.668151C10.2885 0.563964 10.1472 0.505432 9.99989 0.505432C9.85255 0.505432 9.71124 0.563964 9.60705 0.668151C9.50287 0.772337 9.44434 0.913645 9.44434 1.06099V3.01099C9.44434 3.15833 9.50287 3.29964 9.60705 3.40383C9.71124 3.50801 9.85255 3.56654 9.99989 3.56654Z"
                                    fill="var(--icon-color)"
                                />
                                <path
                                    d="M9.99989 16.4332C9.85255 16.4332 9.71124 16.4918 9.60705 16.5959C9.50287 16.7001 9.44434 16.8414 9.44434 16.9888V18.9388C9.44434 19.0861 9.50287 19.2274 9.60705 19.3316C9.71124 19.4358 9.85255 19.4943 9.99989 19.4943C10.1472 19.4943 10.2885 19.4358 10.3927 19.3316C10.4969 19.2274 10.5554 19.0861 10.5554 18.9388V16.9888C10.5554 16.8414 10.4969 16.7001 10.3927 16.5959C10.2885 16.4918 10.1472 16.4332 9.99989 16.4332Z"
                                    fill="var(--icon-color)"
                                />
                                <path
                                    d="M4.66664 5.44997C4.77292 5.54099 4.90963 5.58855 5.04945 5.58314C5.18927 5.57774 5.3219 5.51978 5.42084 5.42084C5.51978 5.3219 5.57774 5.18927 5.58314 5.04945C5.58855 4.90963 5.54099 4.77292 5.44997 4.66664L4.07219 3.28886C3.96592 3.19785 3.82921 3.15029 3.68939 3.15569C3.54957 3.16109 3.41693 3.21905 3.31799 3.31799C3.21905 3.41693 3.16109 3.54957 3.15569 3.68939C3.15029 3.82921 3.19785 3.96592 3.28886 4.07219L4.66664 5.44997Z"
                                    fill="var(--icon-color)"
                                />
                                <path
                                    d="M15.3329 14.5501C15.2267 14.4591 15.0899 14.4115 14.9501 14.4169C14.8103 14.4223 14.6777 14.4803 14.5787 14.5792C14.4798 14.6782 14.4218 14.8108 14.4164 14.9506C14.411 15.0904 14.4586 15.2271 14.5496 15.3334L15.9274 16.7112C16.0337 16.8022 16.1704 16.8498 16.3102 16.8444C16.45 16.839 16.5826 16.781 16.6816 16.6821C16.7805 16.5831 16.8385 16.4505 16.8439 16.3107C16.8493 16.1709 16.8017 16.0341 16.7107 15.9279L15.3329 14.5501Z"
                                    fill="var(--icon-color)"
                                />
                                <path
                                    d="M3.56697 9.99995C3.56697 9.85261 3.50844 9.7113 3.40425 9.60711C3.30007 9.50293 3.15876 9.4444 3.01142 9.4444H1.06141C0.914072 9.4444 0.772765 9.50293 0.668578 9.60711C0.564391 9.7113 0.505859 9.85261 0.505859 9.99995C0.505859 10.1473 0.564391 10.2886 0.668578 10.3928C0.772765 10.497 0.914072 10.5555 1.06141 10.5555H3.01142C3.15876 10.5555 3.30007 10.497 3.40425 10.3928C3.50844 10.2886 3.56697 10.1473 3.56697 9.99995Z"
                                    fill="var(--icon-color)"
                                />
                                <path
                                    d="M18.9391 9.4444H16.9891C16.8418 9.4444 16.7005 9.50293 16.5963 9.60711C16.4921 9.7113 16.4336 9.85261 16.4336 9.99995C16.4336 10.1473 16.4921 10.2886 16.5963 10.3928C16.7005 10.497 16.8418 10.5555 16.9891 10.5555H18.9391C19.0865 10.5555 19.2278 10.497 19.332 10.3928C19.4362 10.2886 19.4947 10.1473 19.4947 9.99995C19.4947 9.85261 19.4362 9.7113 19.332 9.60711C19.2278 9.50293 19.0865 9.4444 18.9391 9.4444Z"
                                    fill="var(--icon-color)"
                                />
                                <path
                                    d="M4.66664 14.5501L3.28886 15.9279C3.19785 16.0341 3.15029 16.1709 3.15569 16.3107C3.16109 16.4505 3.21905 16.5831 3.31799 16.6821C3.41693 16.781 3.54957 16.839 3.68939 16.8444C3.82921 16.8498 3.96592 16.8022 4.07219 16.7112L5.44997 15.3334C5.54099 15.2271 5.58855 15.0904 5.58314 14.9506C5.57774 14.8108 5.51978 14.6782 5.42084 14.5792C5.3219 14.4803 5.18927 14.4223 5.04945 14.4169C4.90963 14.4115 4.77292 14.4591 4.66664 14.5501Z"
                                    fill="var(--icon-color)"
                                />
                                <path
                                    d="M15.3329 5.44997L16.7107 4.07219C16.8017 3.96592 16.8493 3.82921 16.8439 3.68939C16.8385 3.54957 16.7805 3.41693 16.6816 3.31799C16.5826 3.21905 16.45 3.16109 16.3102 3.15569C16.1704 3.15029 16.0337 3.19785 15.9274 3.28886L14.5496 4.66664C14.4586 4.77292 14.411 4.90963 14.4164 5.04945C14.4218 5.18927 14.4798 5.3219 14.5787 5.42084C14.6777 5.51978 14.8103 5.57774 14.9501 5.58314C15.0899 5.58855 15.2267 5.54099 15.3329 5.44997Z"
                                    fill="var(--icon-color)"
                                />
                                <path
                                    d="M9.99989 15.5555C13.0681 15.5555 15.5554 13.0682 15.5554 9.99995C15.5554 6.9317 13.0681 4.4444 9.99989 4.4444C6.93164 4.4444 4.44434 6.9317 4.44434 9.99995C4.44434 13.0682 6.93164 15.5555 9.99989 15.5555Z"
                                    fill="var(--icon-color)"
                                />
                            </svg>
                        </button>
                        <div class="cs--user-menu">
                            <div class="cs--user-menu__img">
                                <img :src="data.user.avatar_url" :alt="data.user.name" v-if="data.user.avatar" width="28" />
                            </div>
                            <details data-dropdown class="cs--dropdown">
                                <summary class="cs--dropdown__btn">{{ data.user.name}}</summary>
                                <ul class="cs--dropdown__list">
                                    <li class="cs--dropdown__item">
                                        <router-link to="/profile" tag="button">
                                            {{ $__("User Profile") }}
                                        </router-link>
                                    </li>

                                    <li class="cs--dropdown__item">
                                        <router-link to="/preferences">{{ $__("Preference") }}</router-link>
                                    </li>

                                    <li class="cs--dropdown__item">
                                        <router-link to="/2fa" tag="button">{{ $__("Security (2FA)") }}</router-link>
                                    </li>

                                    <li class="cs--dropdown__item">
                                        <a href="javascript:void(0)" @click.prevent="logout()">{{ $__("Logout") }}</a>
                                    </li>
                                </ul>
                            </details>
                        </div>
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
        <router-view></router-view>

        <footer class="cs--dashboard-footer">
            <div class="cs--container">
                <div class="cs--dashboard-footer__content">
                    <div class="cs--dashboard-footer__company">
                        <a class="cs--logo" href="javascript:void(0)">
                            <img src="/img/logo.png" alt="logo" />
                        </a>
                        <p>
                            Dust notice: Assets with value below the dust threshold are
                            hidden and omitted from portfolio calculations.
                        </p>
                        <p>
                            Backtested or simulated performance results have inherent
                            limitations and should not be interpreted as a recommendation to
                            buy or sell any assets nor a guarantee of future returns. Actual
                            results will vary from the analysis and Quadency makes no
                            representation or warranty regarding future performance.
                        </p>
                        <p>Copyright © CryptoSystem 2021</p>
                    </div>
                    <nav>
                        <ul class="cs--dashboard-footer__menu-group">
                            <li class="cs--dashboard-footer__menu-group-item">
                  <span class="cs--dashboard-footer__menu-group-title"
                  >Platform</span
                  >

                                <ul class="cs--dashboard-footer__menu-list">
                                    <li class="cs--dashboard-footer__menu-item">
                                        <a
                                            class="cs--dashboard-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Dashboard</a
                                        >
                                    </li>

                                    <li class="cs--dashboard-footer__menu-item">
                                        <a
                                            class="cs--dashboard-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Portfolio</a
                                        >
                                    </li>

                                    <li class="cs--dashboard-footer__menu-item">
                                        <a
                                            class="cs--dashboard-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Trade</a
                                        >
                                    </li>

                                    <li class="cs--dashboard-footer__menu-item">
                                        <a
                                            class="cs--dashboard-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Bots</a
                                        >
                                    </li>

                                    <li class="cs--dashboard-footer__menu-item">
                                        <a
                                            class="cs--dashboard-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Research</a
                                        >
                                    </li>

                                    <li class="cs--dashboard-footer__menu-item">
                                        <a
                                            class="cs--dashboard-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >News</a
                                        >
                                    </li>

                                    <li class="cs--dashboard-footer__menu-item">
                                        <a
                                            class="cs--dashboard-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Plans &amp; Pricing</a
                                        >
                                    </li>

                                    <li class="cs--dashboard-footer__menu-item">
                                        <a
                                            class="cs--dashboard-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Support Center</a
                                        >
                                    </li>
                                </ul>
                            </li>

                            <li class="cs--dashboard-footer__menu-group-item">
                  <span class="cs--dashboard-footer__menu-group-title"
                  >Company</span
                  >

                                <ul class="cs--dashboard-footer__menu-list">
                                    <li class="cs--dashboard-footer__menu-item">
                                        <a
                                            class="cs--dashboard-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >About</a
                                        >
                                    </li>

                                    <li class="cs--dashboard-footer__menu-item">
                                        <a
                                            class="cs--dashboard-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Contact Us</a
                                        >
                                    </li>

                                    <li class="cs--dashboard-footer__menu-item">
                                        <a
                                            class="cs--dashboard-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Terms ofUse</a
                                        >
                                    </li>

                                    <li class="cs--dashboard-footer__menu-item">
                                        <a
                                            class="cs--dashboard-footer__menu-item-link"
                                            href="javascript:void(0)"
                                        >Privacy Policy</a
                                        >
                                    </li>
                                </ul>
                            </li>

                            <li class="cs--dashboard-footer__menu-group-item">
                  <span class="cs--dashboard-footer__menu-group-title"
                  >Share &amp; Earn</span
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
                                                width="32"
                                                height="33"
                                                viewBox="0 0 32 33"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M15.9996 0.660016C7.51645 0.660016 0.639648 7.75172 0.639648 16.5C0.639648 25.2483 7.51645 32.34 15.9996 32.34C24.4828 32.34 31.3596 25.2483 31.3596 16.5C31.3596 7.75172 24.4828 0.660016 15.9996 0.660016ZM19.638 11.6061H17.3292C17.0556 11.6061 16.7516 11.9774 16.7516 12.4707V14.19H19.6396L19.2028 16.6419H16.7516V24.0026H14.0268V16.6419H11.5548V14.19H14.0268V12.7479C14.0268 10.6788 15.4188 8.99747 17.3292 8.99747H19.638V11.6061Z"
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
                                                width="32"
                                                height="33"
                                                viewBox="0 0 32 33"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <ellipse
                                                    cx="16"
                                                    cy="16.5"
                                                    rx="16"
                                                    ry="16.5"
                                                    fill="var(--icon-color)"
                                                />
                                                <g clip-path="url(#clip0)">
                                                    <path
                                                        d="M23.0012 8.76213C22.0843 7.883 20.9924 7.18602 19.7891 6.7118C18.5858 6.23759 17.2952 5.99562 15.9925 6.00001C10.5337 6.00001 6.085 10.2251 6.08 15.4121C6.08 17.0734 6.5375 18.6896 7.40125 20.1206L6 25L11.255 23.6914C12.7088 24.443 14.3374 24.8369 15.9925 24.8373H15.9975C21.4575 24.8373 25.905 20.6122 25.91 15.4204C25.9112 14.1831 25.6548 12.9578 25.1553 11.8151C24.6559 10.6723 23.9234 9.63475 23 8.76213H23.0012ZM15.9925 23.2437C14.5162 23.2442 13.0671 22.8668 11.7975 22.1512L11.4975 21.9802L8.38 22.7568L9.2125 19.8676L9.0175 19.5696C8.19226 18.3231 7.75581 16.8799 7.75875 15.4074C7.75875 11.1015 11.455 7.58888 15.9975 7.58888C17.0797 7.58704 18.1515 7.78871 19.1513 8.18227C20.151 8.57583 21.0589 9.15349 21.8225 9.88195C22.5888 10.6076 23.1963 11.4701 23.6099 12.4199C24.0235 13.3697 24.2351 14.3879 24.2325 15.4157C24.2275 19.737 20.5312 23.2437 15.9925 23.2437ZM20.5113 17.3846C20.265 17.267 19.0487 16.6982 18.82 16.6174C18.5925 16.5403 18.4262 16.4999 18.2638 16.735C18.0975 16.9689 17.6225 17.5021 17.48 17.6553C17.3375 17.8133 17.19 17.8311 16.9425 17.7147C16.6962 17.5959 15.8975 17.3489 14.9525 16.545C14.215 15.9216 13.7213 15.1497 13.5738 14.9158C13.4313 14.6806 13.56 14.5548 13.6837 14.4372C13.7925 14.3327 13.93 14.1617 14.0538 14.0263C14.1788 13.8909 14.22 13.7912 14.3012 13.6344C14.3825 13.4753 14.3438 13.3399 14.2825 13.2224C14.22 13.1048 13.7262 11.9446 13.5175 11.4768C13.3175 11.0148 13.1137 11.0789 12.9612 11.073C12.8187 11.0647 12.6525 11.0647 12.4862 11.0647C12.3607 11.0677 12.2372 11.0952 12.1234 11.1457C12.0096 11.1962 11.908 11.2685 11.825 11.358C11.5975 11.5931 10.9613 12.1619 10.9613 13.3221C10.9613 14.4823 11.8487 15.5974 11.9737 15.7553C12.0962 15.9133 13.7162 18.2871 16.2025 19.3083C16.79 19.5518 17.2525 19.6954 17.6138 19.8047C18.2075 19.9852 18.7437 19.9579 19.1712 19.8997C19.6462 19.8308 20.635 19.3297 20.8438 18.7799C21.0487 18.2289 21.0488 17.7586 20.9862 17.6601C20.925 17.5603 20.7587 17.5021 20.5113 17.3846Z"
                                                        fill="var(--icon-bg-color)"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0">
                                                        <rect
                                                            width="20"
                                                            height="19"
                                                            fill="white"
                                                            transform="translate(6 6)"
                                                        />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>

                                    <li class="cs--social-item">
                                        <a href="javascript:void(0)">
                                            <svg
                                                class="cs--icon"
                                                aria-hidden="true"
                                                width="33"
                                                height="33"
                                                viewBox="0 0 33 33"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <circle
                                                    cx="16.5"
                                                    cy="16.5"
                                                    r="16.5"
                                                    fill="var(--icon-color)"
                                                />
                                                <path
                                                    d="M24.1004 14.0044V20.775C24.1004 21.4049 23.8502 22.009 23.4048 22.4544C22.9594 22.8998 22.3553 23.15 21.7254 23.15H11.2754C10.6455 23.15 10.0414 22.8998 9.59601 22.4544C9.15061 22.009 8.90039 21.4049 8.90039 20.775V14.0044L16.2591 18.3345C16.3322 18.3776 16.4155 18.4003 16.5004 18.4003C16.5853 18.4003 16.6686 18.3776 16.7417 18.3345L24.1004 14.0044ZM21.7254 10.8C22.3098 10.7999 22.8737 11.0153 23.3092 11.4049C23.7448 11.7945 24.0214 12.3311 24.0861 12.9119L16.5004 17.374L8.91464 12.9119C8.97939 12.3311 9.256 11.7945 9.69155 11.4049C10.1271 11.0153 10.691 10.7999 11.2754 10.8H21.7254Z"
                                                    fill="var(--icon-bg-color)"
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
        </footer>
    </div>
</template>

<script>
import {mapActions} from 'vuex'
import Chat from "./Chat";

export default {
    name: "App",
    data() {
        return {
            projectName: 'HyperTrade',
            links: [
                'Home',
                'About Us',
                'Team',
                'Services',
                'Blog',
                'Contact Us',
            ],
            items: [],
            right: null,
            user: {}
        }
    },
    props: {
        data: {
            type: Object,
            default() {
                return {}
            }
        },
    },
    mounted() {
        this.setData(this.data)
    },
    methods: {
        ...mapActions(['setData']),
        logout(){
             axios
              .post('/logout', {

              })
              .then(response => {
                  window.location.href='/'
              })
              .catch(error => {
                 // console.log(error.response);
              	console.log(error.response.data);
              });
        }
    },
    components: {
        Chat
    },
    created() {
        this.$router.options.routes.forEach(route => {
            this.items.push({
                name: route.name
                , path: route.path
            })
        })
    }
}
</script>

<style scoped>

</style>
