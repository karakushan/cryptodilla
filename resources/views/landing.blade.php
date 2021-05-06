@extends('layouts.terminal')

@section('content')
    <main class="cs--page cs--page--landing">
        <section class="cs--section cs--landing-hero">
            <div class="cs--section__bg">
                <img src="./img/registration-bg.svg" alt="" />
            </div>
            <div class="cs--container">
                <div class="cs--landing-hero__decor">
                    <img src="./img/hero-img.png" alt="" />
                </div>
                <div class="cs--landing-hero__content">
                    <h1 class="cs--landing-hero__title">
                        A smarter way to trade and manage
                        <span class="cs--landing-hero__title--accent">your crypto</span>
                    </h1>
                    <p class="cs--landing-hero__comment">
                        Professional platform to trade, automate strategies, and monitor
                        your holdings - even offline wallets.
                    </p>
                    <a href="javascript:void(0)" class="cs--btn cs--btn--grad-blue"
                    >Learn more</a
                    >
                </div>
                <ul class="cs--landing-hero__counter">
                    <li class="cs--landing-hero__counter-item">
                        <span class="cs--landing-hero__counter-item-count">13</span>
                        <span class="cs--landing-hero__counter-item-text"
                        >Supported exchanges</span
                        >
                    </li>

                    <li class="cs--landing-hero__counter-item">
                        <span class="cs--landing-hero__counter-item-count">12</span>
                        <span class="cs--landing-hero__counter-item-text"
                        >Automated bots</span
                        >
                    </li>

                    <li class="cs--landing-hero__counter-item">
                        <span class="cs--landing-hero__counter-item-count">1575</span>
                        <span class="cs--landing-hero__counter-item-text"
                        >Crypto assets</span
                        >
                    </li>

                    <li class="cs--landing-hero__counter-item">
                        <span class="cs--landing-hero__counter-item-count">3873</span>
                        <span class="cs--landing-hero__counter-item-text"
                        >Trading pairs</span
                        >
                    </li>

                    <li class="cs--landing-hero__counter-item">
                        <span class="cs--landing-hero__counter-item-count">250M+</span>
                        <span class="cs--landing-hero__counter-item-text"
                        >USD managed</span
                        >
                    </li>
                </ul>
            </div>
        </section>

        <section class="cs--section cs--landing-acquaintance">
            <div class="cs--container">
                <div class="cs--landing-acquaintance__wrapper">
                    <div class="cs--circle-blocks-wrapper">
                        <ul class="cs--circle-blocks">
                            <li class="cs--circle-blocks-item">
                                <div class="cs--circle-blocks-item__icon">
                                    <img src="./img/circle-blocks_circuit.svg" alt="" />
                                </div>
                                <span class="cs--circle-blocks-item__title"
                                >SMART PAYMENT</span
                                >
                            </li>

                            <li class="cs--circle-blocks-item">
                                <div class="cs--circle-blocks-item__icon">
                                    <img src="./img/circle-blocks_blockchain.svg" alt="" />
                                </div>
                                <span class="cs--circle-blocks-item__title"
                                >BLOCKCHAIN</span
                                >
                            </li>

                            <li class="cs--circle-blocks-item">
                                <div class="cs--circle-blocks-item__icon">
                                    <img src="./img/circle-blocks_boss.svg" alt="" />
                                </div>
                                <span class="cs--circle-blocks-item__title"
                                >TOKEN INTEGRATION</span
                                >
                            </li>

                            <li class="cs--circle-blocks-item">
                                <div class="cs--circle-blocks-item__icon">
                                    <img src="./img/circle-blocks_programming.svg" alt="" />
                                </div>
                                <span class="cs--circle-blocks-item__title"
                                >GLOBAL SECURITY</span
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="cs--landing-acquaintance__content">
                        <h2 class="cs--landing-acquaintance__title">
                            Why Cryptosystem?
                        </h2>
                        <p class="cs--landing-acquaintance__sub-title">
                            Facilisis nibh etiam augue sed commodo. Porttitor et,
                            malesuada sed libero viverra dolor eget.
                        </p>
                        <div class="cs--landing-acquaintance__comment">
                            <p>
                                Enim feugiat libero mattis morbi. Pulvinar et, nunc, sed
                                sit. Cum facilisi augue aliquet eu et tincidunt est lacus,
                                felis. Commodo, ut aliquam amet pellentesque tortor.
                                Convallis ac eget phasellus mauris eu sociis. Pharetra proin
                                aliquam vulputate tellus augue. At cras dictum duis morbi
                                odio lacus faucibus nisi. Hendrerit aliquet magna sit amet
                                elementum aliquet.
                            </p>
                            <p>
                                Donec aliquam hendrerit nam dolor, nulla eget. Et a pretium
                                sit id metus amet, semper auctor duis. Dui leo molestie sed
                                tortor nisl, ut urna. Enim est lorem velit dolor amet eu
                                donec sed faucibus. Vestibulum sollicitudin tellus mauris
                                orci augue. Tortor commodo dolor aliquet donec ut dictumst
                                dignissim. Habitant faucibus nunc maecenas varius vel
                                pulvinar nec.
                            </p>
                        </div>
                        <a href="{{ route('register') }}" class="cs--btn cs--btn--grad-blue"
                        >{{ __("Create Your Free Account") }}</a
                        >
                    </div>
                </div>
            </div>
        </section>

        <section class="cs--section cs--landing-benefits">
            <div class="cs--container">
                <h2 class="cs--landing-benefits__title">Our benefits</h2>
                <p class="cs--landing-benefits__comment">
                    Neque enim fermentum pellentesque est. Gravida elementum,
                    condimentum vitae amet, in nam.
                </p>
                <ul class="cs--benefits">
                    <li class="cs--benefits-item">
                        <div class="cs--benefits-item__icon">
                            <img src="./img/benefits_network.svg" alt="" />
                        </div>
                        <span class="cs--benefits-item__title">Unified Platform</span>
                        <span class="cs--benefits-item__text"
                        >Trade on all top tier exchanges from one, fast and intuitive
                  interface featuring both simple and advanced order
                  types.</span
                        >
                    </li>

                    <li class="cs--benefits-item">
                        <div class="cs--benefits-item__icon">
                            <img src="./img/benefits_bitcoin.svg" alt="" />
                        </div>
                        <span class="cs--benefits-item__title">Trading Bots</span>
                        <span class="cs--benefits-item__text"
                        >Sophisticated algos made simple. Select from pre-built
                  popular strategies, customize and go live in minutes.</span
                        >
                    </li>

                    <li class="cs--benefits-item">
                        <div class="cs--benefits-item__icon">
                            <img src="./img/benefits_analytics.svg" alt="" />
                        </div>
                        <span class="cs--benefits-item__title"
                        >Portfolio Analytics</span
                        >
                        <span class="cs--benefits-item__text"
                        >Monitor all of your crypto assets (offline and exchanges) and
                  track their performance over time as you trade.</span
                        >
                    </li>

                    <li class="cs--benefits-item">
                        <div class="cs--benefits-item__icon">
                            <img src="./img/benefits_chart.svg" alt="" />
                        </div>
                        <span class="cs--benefits-item__title">Advanced Charting</span>
                        <span class="cs--benefits-item__text"
                        >Go beyond market cap rankings with integrated market screener
                  and charts coupled with high quality streaming data.</span
                        >
                    </li>

                    <li class="cs--benefits-item">
                        <div class="cs--benefits-item__icon">
                            <img src="./img/benefits_file.svg" alt="" />
                        </div>
                        <span class="cs--benefits-item__title"
                        >News &amp; Research</span
                        >
                        <span class="cs--benefits-item__text"
                        >Skip the noise of social media and ad-blanketed news sites
                  with news feed curated by respected industry insiders.</span
                        >
                    </li>

                    <li class="cs--benefits-item">
                        <div class="cs--benefits-item__icon">
                            <img src="./img/benefits_native-currency.svg" alt="" />
                        </div>
                        <span class="cs--benefits-item__title">Fiat or BTC Values</span>
                        <span class="cs--benefits-item__text"
                        >Avoid guesswork - view prices and portfolio values converted
                  to your preferred local currency or BTC.</span
                        >
                    </li>

                    <li class="cs--benefits-item">
                        <div class="cs--benefits-item__icon">
                            <img src="./img/benefits_password.svg" alt="" />
                        </div>
                        <span class="cs--benefits-item__title">Benefit 7</span>
                        <span class="cs--benefits-item__text"
                        >Neque lorem a amet in vestibulum urna. Sit odio vitae turpis
                  pretium lobortis eget.</span
                        >
                    </li>

                    <li class="cs--benefits-item">
                        <div class="cs--benefits-item__icon">
                            <img src="./img/benefits_tablet.svg" alt="" />
                        </div>
                        <span class="cs--benefits-item__title">Benefit 8</span>
                        <span class="cs--benefits-item__text"
                        >Est in purus eget in. Sollicitudin felis enim, nascetur non
                  tempor nunc.</span
                        >
                    </li>
                </ul>
            </div>
        </section>

        <section class="cs--section cs--landing-showreal">
            <div class="cs--container">
                <div class="cs--landing-showreal__wrapper">
                    <h2 class="cs--landing-showreal__title">Our showreal</h2>
                    <p class="cs--landing-showreal__comment">
                        Neque enim fermentum pellentesque est. Gravida elementum,
                        condimentum vitae amet, in nam.
                    </p>
                    <div class="cs--landing-showreal__video-wrapper">
                        <iframe
                            class="cs--landing-showreal__video"
                            width="100%"
                            height="100%"
                            src="https://www.youtube-nocookie.com/embed/jQvwAS-bamI?enablejsapi=1&fs=1&rel=0&showinf0=0&start=0"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <a href="{{ route('register') }}" class="cs--btn cs--btn--grad-blue"
                    >{{ __("Create Your Free Account") }}</a
                    >
                </div>
            </div>
        </section>

        <section class="cs--section cs--landing-questions">
            <div class="cs--container">
                <h2 class="cs--landing-questions__title">
                    Frequenty Asked Questions
                </h2>
                <p class="cs--landing-questions__comment">
                    Leo imperdiet at massa, malesuada sed in at. Facilisi non ac
                    ultrices est interdum id.
                </p>

                <ul class="cs--details-list">
                    <li class="cs--details-wrapper">
                        <details data-details class="cs--details-item">
                            <summary data-details-summary class="cs--details-summary">
                                How does it work?
                            </summary>
                            <div data-details-content class="cs--details-content">
                                <p>
                                    Quadency is a professional cryptocurrency trading
                                    terminal. By securely connecting with all major exchanges,
                                    you can trade from one place. Exchange accounts can be
                                    connected to Quadency using API keys. To learn more about
                                    how API keys work, click here.
                                </p>

                                <p>
                                    Assets in your offline wallets (hardware, software, paper
                                    etc) such as Trezor, Ledger and MyEtherWallet can also be
                                    monitored by entering transaction manually. Automatic
                                    tracking of all major wallets and DeFi investments is
                                    coming soon!
                                </p>
                            </div>
                        </details>
                    </li>

                    <li class="cs--details-wrapper">
                        <details data-details class="cs--details-item">
                            <summary data-details-summary class="cs--details-summary">
                                What are bots?
                            </summary>
                            <div data-details-content class="cs--details-content">
                                <p>
                                    Quadency is a professional cryptocurrency trading
                                    terminal. By securely connecting with all major exchanges,
                                    you can trade from one place. Exchange accounts can be
                                    connected to Quadency using API keys. To learn more about
                                    how API keys work, click here.
                                </p>

                                <p>
                                    Assets in your offline wallets (hardware, software, paper
                                    etc) such as Trezor, Ledger and MyEtherWallet can also be
                                    monitored by entering transaction manually. Automatic
                                    tracking of all major wallets and DeFi investments is
                                    coming soon!
                                </p>
                            </div>
                        </details>
                    </li>

                    <li class="cs--details-wrapper">
                        <details data-details class="cs--details-item">
                            <summary data-details-summary class="cs--details-summary">
                                Which exchanges are supported?
                            </summary>
                            <div data-details-content class="cs--details-content">
                                <p>
                                    Quadency is a professional cryptocurrency trading
                                    terminal. By securely connecting with all major exchanges,
                                    you can trade from one place. Exchange accounts can be
                                    connected to Quadency using API keys. To learn more about
                                    how API keys work, click here.
                                </p>

                                <p>
                                    Assets in your offline wallets (hardware, software, paper
                                    etc) such as Trezor, Ledger and MyEtherWallet can also be
                                    monitored by entering transaction manually. Automatic
                                    tracking of all major wallets and DeFi investments is
                                    coming soon!
                                </p>
                            </div>
                        </details>
                    </li>

                    <li class="cs--details-wrapper">
                        <details data-details class="cs--details-item">
                            <summary data-details-summary class="cs--details-summary">
                                Is it secure?
                            </summary>
                            <div data-details-content class="cs--details-content">
                                <p>
                                    Quadency is a professional cryptocurrency trading
                                    terminal. By securely connecting with all major exchanges,
                                    you can trade from one place. Exchange accounts can be
                                    connected to Quadency using API keys. To learn more about
                                    how API keys work, click here.
                                </p>

                                <p>
                                    Assets in your offline wallets (hardware, software, paper
                                    etc) such as Trezor, Ledger and MyEtherWallet can also be
                                    monitored by entering transaction manually. Automatic
                                    tracking of all major wallets and DeFi investments is
                                    coming soon!
                                </p>
                            </div>
                        </details>
                    </li>

                    <li class="cs--details-wrapper">
                        <details data-details class="cs--details-item">
                            <summary data-details-summary class="cs--details-summary">
                                How much does it cost, are there any transactions fees?
                            </summary>
                            <div data-details-content class="cs--details-content">
                                <p>
                                    Quadency is a professional cryptocurrency trading
                                    terminal. By securely connecting with all major exchanges,
                                    you can trade from one place. Exchange accounts can be
                                    connected to Quadency using API keys. To learn more about
                                    how API keys work, click here.
                                </p>

                                <p>
                                    Assets in your offline wallets (hardware, software, paper
                                    etc) such as Trezor, Ledger and MyEtherWallet can also be
                                    monitored by entering transaction manually. Automatic
                                    tracking of all major wallets and DeFi investments is
                                    coming soon!
                                </p>
                            </div>
                        </details>
                    </li>

                    <li class="cs--details-wrapper">
                        <details data-details class="cs--details-item">
                            <summary data-details-summary class="cs--details-summary">
                                Is there a referral or affiliate program?
                            </summary>
                            <div data-details-content class="cs--details-content">
                                <p>
                                    Quadency is a professional cryptocurrency trading
                                    terminal. By securely connecting with all major exchanges,
                                    you can trade from one place. Exchange accounts can be
                                    connected to Quadency using API keys. To learn more about
                                    how API keys work, click here.
                                </p>

                                <p>
                                    Assets in your offline wallets (hardware, software, paper
                                    etc) such as Trezor, Ledger and MyEtherWallet can also be
                                    monitored by entering transaction manually. Automatic
                                    tracking of all major wallets and DeFi investments is
                                    coming soon!
                                </p>
                            </div>
                        </details>
                    </li>
                </ul>
            </div>
        </section>

        <section class="cs--section cs--landing-news">
            <div class="cs--container">
                <h2 class="cs--landing-news__title">Latest News</h2>
                <p class="cs--landing-news__comment">
                    Laoreet tincidunt justo sem sagittis sapien. Tincidunt congue
                    tincidunt at nam egestas in urna. Mollis libero habitant vitae
                    risus eget.
                </p>

                <ul class="cs--card-list">
                    <li class="cs--card-item">
                        <div class="cs--card-item__image">
                            <img src="./img/examples/news-1.png" alt="" />
                        </div>
                        <div class="cs--card-item__content">
                            <div class="cs--card-item__meta">
                                <span>MARCH 17, 2021</span>

                                <span>10 comments</span>
                            </div>
                            <span class="cs--card-item__title"
                            >Morbi morbi et rhoncus commodo semper egestas</span
                            >
                            <a class="cs--card-item__link" href="javascript:void(0)"
                            >Read more</a
                            >
                        </div>
                    </li>

                    <li class="cs--card-item">
                        <div class="cs--card-item__image">
                            <img src="./img/examples/news-2.png" alt="" />
                        </div>
                        <div class="cs--card-item__content">
                            <div class="cs--card-item__meta">
                                <span>MARCH 17, 2021</span>

                                <span>10 comments</span>
                            </div>
                            <span class="cs--card-item__title"
                            >Odio at iaculis in arcu leo consequat</span
                            >
                            <a class="cs--card-item__link" href="javascript:void(0)"
                            >Read more</a
                            >
                        </div>
                    </li>

                    <li class="cs--card-item">
                        <div class="cs--card-item__image">
                            <img src="./img/examples/news-3.png" alt="" />
                        </div>
                        <div class="cs--card-item__content">
                            <div class="cs--card-item__meta">
                                <span>MARCH 17, 2021</span>

                                <span>10 comments</span>
                            </div>
                            <span class="cs--card-item__title"
                            >Nisl pulvinar urna id libero sit tellus</span
                            >
                            <a class="cs--card-item__link" href="javascript:void(0)"
                            >Read more</a
                            >
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="cs--section cs--landing-bring-trading">
            <div class="cs--section__bg">
                <img src="./img/bring-trading-bg.png" alt="" />
            </div>
            <div class="cs--container">
                <div class="cs--landing-bring-trading__wrapper">
                    <div class="cs--landing-bring-trading__decor">
                        <img src="./img/bring-trading-img.png" alt="" />
                    </div>
                    <div class="cs--landing-bring-trading__content">
                        <h2 class="cs--landing-bring-trading__title">
                            Bring clarity to your trading
                        </h2>

                        <ul class="cs--grad-list">
                            <li class="cs--grad-list-item">
                                Get the edge you need to invest more profitably
                            </li>

                            <li class="cs--grad-list-item">
                                Join tens of thousands of traders using Quadency
                            </li>

                            <li class="cs--grad-list-item">
                                Receive updates on new features and announcements
                            </li>
                        </ul>

                        <form class="cs--landing-bring-trading__form">
                            <label
                                for="bring-trading-email"
                                class="cs--reg-form__input-wrapper"
                            >
                                <div class="cs--reg-form__input-icon">
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
                                            d="M2.14282 7.23141L9.75282 11.1893C9.82916 11.229 9.91393 11.2497 9.99997 11.2497C10.086 11.2497 10.1708 11.229 10.2471 11.1893L17.8571 7.23213V14.1071C17.8571 14.7001 17.6303 15.2706 17.2231 15.7016C16.8158 16.1326 16.2591 16.3914 15.6671 16.425L15.5357 16.4286H4.46425C3.8713 16.4286 3.3008 16.2017 2.8698 15.7945C2.4388 15.3873 2.17996 14.8306 2.14639 14.2386L2.14282 14.1071V7.23141ZM4.46425 3.57141H15.5357C16.1286 3.57137 16.6991 3.79824 17.1301 4.20546C17.5611 4.61269 17.82 5.16941 17.8535 5.76141L17.8571 5.89284V6.02427L9.99997 10.11L2.14282 6.02427V5.89284C2.14278 5.29988 2.36965 4.72939 2.77687 4.29839C3.1841 3.86739 3.74082 3.60855 4.33282 3.57498L4.46425 3.57141H15.5357H4.46425Z"
                                            fill="var(--icon-color)"
                                        />
                                    </svg>
                                </div>
                                <input
                                    id="bring-trading-email"
                                    type="email"
                                    class="cs--reg-form__input"
                                    placeholder="Enter Your E-mail"
                                />
                            </label>
                            <button type="submit" class="cs--btn cs--btn--grad-blue">
                                Sign Up
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
