<template>
    <main class="cs--page cs--dashboard--interface">
        <div class="cs--container">
            <div class="cs--interface">
                <section class="cs--interface__block cs--interface__block--tools">
                    <div class="cs--interface__chart-head">
                        <details
                            data-dropdown
                            class="cs--interface__dropdown cs--dashboard-form__input-wrapper cs--dashboard-form__input--arrow"
                        >
                            <summary
                                class="cs--interface__dropdown-btn cs--dashboard-form__input"
                            >
                                <div class="cs--interface__dropdown-btn-img">
                                    <img src="/img/crypto-icon/btc.svg" alt=""/>
                                </div>
                                <b>{{ symbol.baseAsset }} - {{ symbol.quoteAsset }}</b>
                                <span class="cs--interface__dropdown-btn-text">Market</span>
                            </summary>
                            <div class="cs--interface__dropdown-content" v-show="info.symbols.length">
                                <form class="cs--card-filter__form">
                                    <label
                                        for="search"
                                        class="cs--dashboard-form__input--search-wrapper ml-auto"
                                    >
                                        <input
                                            id="search"
                                            type="text"
                                            class="cs--dashboard-form__input cs--dashboard-form__input--search"
                                            placeholder="Search"
                                        />
                                        <button
                                            type="button"
                                            class="cs--dashboard-form__input--search-btn"
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
                                                    d="M18.1249 17.2413L13.4049 12.5213C14.5391 11.1596 15.1047 9.41303 14.9841 7.64495C14.8634 5.87687 14.0657 4.22338 12.7569 3.02846C11.4482 1.83354 9.7291 1.18918 7.95736 1.22944C6.18562 1.2697 4.49761 1.99147 3.24448 3.2446C1.99134 4.49773 1.26958 6.18574 1.22932 7.95748C1.18906 9.72922 1.83341 11.4483 3.02834 12.757C4.22326 14.0658 5.87675 14.8635 7.64483 14.9842C9.41291 15.1049 11.1595 14.5393 12.5211 13.405L17.2411 18.125L18.1249 17.2413ZM2.49989 8.12501C2.49989 7.01249 2.82979 5.92496 3.44787 4.99993C4.06596 4.0749 4.94446 3.35393 5.97229 2.92819C7.00013 2.50245 8.13113 2.39105 9.22227 2.60809C10.3134 2.82514 11.3157 3.36087 12.1024 4.14754C12.889 4.93421 13.4248 5.93649 13.6418 7.02763C13.8588 8.11877 13.7475 9.24977 13.3217 10.2776C12.896 11.3054 12.175 12.1839 11.25 12.802C10.3249 13.4201 9.23741 13.75 8.12489 13.75C6.63355 13.7484 5.20377 13.1552 4.14924 12.1007C3.09471 11.0461 2.50154 9.61635 2.49989 8.12501Z"
                                                    fill="var(--icon-color)"
                                                />
                                            </svg>
                                        </button>
                                    </label>

                                    <ul class="cs--card-filter__filter-list">
                                        <li class="cs--card-filter__filter-item">
                                            <label
                                                for="favorite"
                                                class="cs--card-filter__filter-label"
                                            >
                                                <input
                                                    id="favorite"
                                                    type="checkbox"
                                                    class="cs--card-filter__filter-input"
                                                />

                                                <span class="cs--card-filter__filter-icon">
                              <svg
                                  class="cs--icon"
                                  aria-hidden="true"
                                  width="18"
                                  height="16"
                                  viewBox="0 0 18 16"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                    d="M13.6348 15.9666C13.4997 15.9663 13.3667 15.9331 13.2473 15.87L8.99982 13.6366L4.75232 15.87C4.61479 15.942 4.45987 15.9742 4.30502 15.9629C4.15017 15.9516 4.00155 15.8973 3.87592 15.8061C3.75029 15.7149 3.65265 15.5903 3.594 15.4466C3.53535 15.3028 3.51803 15.1455 3.54399 14.9925L4.35482 10.2625L0.918157 6.91246C0.806982 6.80392 0.728369 6.66645 0.691194 6.51558C0.65402 6.36471 0.659764 6.20646 0.70778 6.05869C0.755796 5.91091 0.84417 5.77951 0.962923 5.6793C1.08168 5.5791 1.22608 5.5141 1.37982 5.49163L6.12899 4.80163L8.25316 0.498297C8.32968 0.368165 8.43886 0.260276 8.5699 0.185316C8.70093 0.110355 8.84928 0.0709229 9.00024 0.0709229C9.1512 0.0709229 9.29955 0.110355 9.43058 0.185316C9.56162 0.260276 9.6708 0.368165 9.74732 0.498297L11.8707 4.80163L16.6198 5.49163C16.7736 5.5141 16.918 5.5791 17.0367 5.6793C17.1555 5.77951 17.2439 5.91091 17.2919 6.05869C17.3399 6.20646 17.3456 6.36471 17.3085 6.51558C17.2713 6.66645 17.1927 6.80392 17.0815 6.91246L13.6448 10.2625L14.4565 14.9925C14.477 15.112 14.4711 15.2346 14.4393 15.3517C14.4076 15.4688 14.3506 15.5775 14.2724 15.6703C14.1942 15.763 14.0968 15.8376 13.9868 15.8888C13.8768 15.94 13.757 15.9666 13.6357 15.9666H13.6348Z"
                                    fill="var(--icon-color)"
                                />
                              </svg>
                            </span>
                                            </label>
                                        </li>

                                        <li class="cs--card-filter__filter-item">
                                            <label
                                                for="ALL"
                                                class="cs--card-filter__filter-label"
                                            >
                                                <input
                                                    id="ALL"
                                                    type="checkbox"
                                                    class="cs--card-filter__filter-input"
                                                />

                                                <span class="cs--card-filter__filter-title"
                                                >ALL</span
                                                >
                                            </label>
                                        </li>

                                        <li class="cs--card-filter__filter-item">
                                            <label
                                                for="BTC"
                                                class="cs--card-filter__filter-label"
                                            >
                                                <input
                                                    id="BTC"
                                                    type="checkbox"
                                                    class="cs--card-filter__filter-input"
                                                />

                                                <span class="cs--card-filter__filter-title"
                                                >BTC</span
                                                >
                                            </label>
                                        </li>

                                        <li class="cs--card-filter__filter-item">
                                            <label
                                                for="ETH"
                                                class="cs--card-filter__filter-label"
                                            >
                                                <input
                                                    id="ETH"
                                                    type="checkbox"
                                                    class="cs--card-filter__filter-input"
                                                />

                                                <span class="cs--card-filter__filter-title"
                                                >ETH</span
                                                >
                                            </label>
                                        </li>

                                        <li class="cs--card-filter__filter-item">
                                            <label
                                                for="USDT"
                                                class="cs--card-filter__filter-label"
                                            >
                                                <input
                                                    id="USDT"
                                                    type="checkbox"
                                                    class="cs--card-filter__filter-input"
                                                />

                                                <span class="cs--card-filter__filter-title"
                                                >USDT</span
                                                >
                                            </label>
                                        </li>

                                        <li class="cs--card-filter__filter-item">
                                            <label
                                                for="USDC"
                                                class="cs--card-filter__filter-label"
                                            >
                                                <input
                                                    id="USDC"
                                                    type="checkbox"
                                                    class="cs--card-filter__filter-input"
                                                />

                                                <span class="cs--card-filter__filter-title"
                                                >USDC</span
                                                >
                                            </label>
                                        </li>

                                        <li class="cs--card-filter__filter-item">
                                            <label
                                                for="DAI"
                                                class="cs--card-filter__filter-label"
                                            >
                                                <input
                                                    id="DAI"
                                                    type="checkbox"
                                                    class="cs--card-filter__filter-input"
                                                />

                                                <span class="cs--card-filter__filter-title"
                                                >DAI</span
                                                >
                                            </label>
                                        </li>

                                        <li class="cs--card-filter__filter-item">
                                            <label
                                                for="ZXC"
                                                class="cs--card-filter__filter-label"
                                            >
                                                <input
                                                    id="ZXC"
                                                    type="checkbox"
                                                    class="cs--card-filter__filter-input"
                                                />

                                                <span class="cs--card-filter__filter-title"
                                                >ZXC</span
                                                >
                                            </label>
                                        </li>
                                    </ul>
                                </form>
                                <div class="cs--table-wrapper">
                                    <table class="cs--table cs--table--bordered">
                                        <tbody>
                                        <tr v-for="pair in info.symbols">
                                            <td data-label="Name" class="no-wrap">
                                                <div class="cs--table__card">
                                                    <img src="/img/crypto-icon/btc.svg" alt=""/>
                                                    <div class="cs--table__card-content">
                                  <span class="cs--table__card-title"
                                  >{{ pair.baseAsset }} - {{ pair.quoteAsset }}</span
                                  >
                                                        <span class="cs--table__card-abbr"
                                                        >Bitcoin</span
                                                        >
                                                    </div>
                                                </div>
                                            </td>

                                            <td data-label="Circulating Supply" class="no-wrap">
                                                <div class="cs--table__card-content">
                                <span class="cs--table__card-title"
                                >670.05K EUR</span
                                >
                                                    <span class="cs--table__card-abbr"
                                                    >24h volume</span
                                                    >
                                                </div>
                                            </td>

                                            <td data-label="24h Volume" class="no-wrap">
                                                <div class="cs--table__card-content">
                                <span class="cs--table__card-title"
                                >30,045.56 EUR</span
                                >
                                                    <span class="cs--table__card-abbr"
                                                    >30,054.567 EUR</span
                                                    >
                                                </div>
                                            </td>

                                            <td data-label="Avg Price" class="">
                                                <img src="/img/examples/chart-plus.svg" alt=""/>
                                            </td>

                                            <td
                                                data-label="24h % Change"
                                                class="cs--color-success"
                                            >
                                                <b>+2.40%</b>
                                            </td>

                                            <td data-label="Chart (24h)" class="">
                                                <button type="button" class="cs--favorite">
                                                    <svg
                                                        class="cs--icon"
                                                        aria-hidden="true"
                                                        width="18"
                                                        height="16"
                                                        viewBox="0 0 18 16"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M13.6348 15.9666C13.4997 15.9663 13.3667 15.9331 13.2473 15.87L8.99982 13.6366L4.75232 15.87C4.61479 15.942 4.45987 15.9742 4.30502 15.9629C4.15017 15.9516 4.00155 15.8973 3.87592 15.8061C3.75029 15.7149 3.65265 15.5903 3.594 15.4466C3.53535 15.3028 3.51803 15.1455 3.54399 14.9925L4.35482 10.2625L0.918157 6.91246C0.806982 6.80392 0.728369 6.66645 0.691194 6.51558C0.65402 6.36471 0.659764 6.20646 0.70778 6.05869C0.755796 5.91091 0.84417 5.77951 0.962923 5.6793C1.08168 5.5791 1.22608 5.5141 1.37982 5.49163L6.12899 4.80163L8.25316 0.498297C8.32968 0.368165 8.43886 0.260276 8.5699 0.185316C8.70093 0.110355 8.84928 0.0709229 9.00024 0.0709229C9.1512 0.0709229 9.29955 0.110355 9.43058 0.185316C9.56162 0.260276 9.6708 0.368165 9.74732 0.498297L11.8707 4.80163L16.6198 5.49163C16.7736 5.5141 16.918 5.5791 17.0367 5.6793C17.1555 5.77951 17.2439 5.91091 17.2919 6.05869C17.3399 6.20646 17.3456 6.36471 17.3085 6.51558C17.2713 6.66645 17.1927 6.80392 17.0815 6.91246L13.6448 10.2625L14.4565 14.9925C14.477 15.112 14.4711 15.2346 14.4393 15.3517C14.4076 15.4688 14.3506 15.5775 14.2724 15.6703C14.1942 15.763 14.0968 15.8376 13.9868 15.8888C13.8768 15.94 13.757 15.9666 13.6357 15.9666H13.6348Z"
                                                            fill="var(--icon-color)"
                                                        />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </details>
                        <div class="cs--interface__chart-comment">
                            <span class="cs--color-secondary">24h price change</span>
                            <div class="cs--interface__chart-stat">
                                <img src="/img/icon/progress-arrow-up.svg" alt=""/>
                                <span class="cs--color-success">+39.69%</span>
                                <img src="/img/icon/graph-line.svg" alt=""/>
                            </div>
                        </div>
                        <div class="cs--interface__chart-comment">
                            <span class="cs--color-secondary">Last Price</span>
                            <div class="cs--interface__chart-stat">
                                <span>USDC 37,008.25</span>
                            </div>
                        </div>
                        <div class="cs--interface__chart-comment">
                            <span class="cs--color-secondary">24h Volume</span>
                            <div class="cs--interface__chart-stat">
                                <span>BTC 10.82</span>
                            </div>
                        </div>
                    </div>
                    <div class="cs--interface__chart">
                        <TradingView :pair="symbol.symbol" v-if="symbol"/>
                    </div>
                </section>

                <OrderBookWidget :symbol="symbol" v-if="symbol"/>

                <OrdersHistoryWidget :pair="symbol.symbol" :quote-asset="symbol.quoteAsset" v-if="symbol"/>

                <section
                    class="cs--interface__block cs--interface__block--my-orders"
                >
                    <div class="cs--interface__block-head">
                        <h2 class="cs--interface__block-title">My Orders</h2>
                        <div class="cs--btn-group">
                            <button type="button" class="cs--btn cs--btn--tab">
                                Open
                            </button>
                            <button
                                type="button"
                                class="cs--btn cs--btn--tab cs--btn--tab--active"
                            >
                                Filled
                            </button>
                        </div>
                    </div>

                    <div class="cs--table-wrapper">
                        <table class="cs--table">
                            <thead>
                            <tr>
                                <th class="">Side</th>

                                <th class="">Size to fill</th>

                                <th class="">Price</th>

                                <th class="">Date</th>

                                <th class="">Status</th>

                                <th class="">-</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Side" class=""><span>58853.58</span></td>

                                <td data-label="Size to fill" class="">
                                    <span>0.0447</span>
                                </td>

                                <td data-label="Price" class="">
                                    <span>58853.580000000002</span>
                                </td>

                                <td data-label="Date" class="cs--color-secondary">
                                    <span>18 mar 2021</span>
                                </td>

                                <td data-label="Status" class="cs--color-success">
                                    <span>Confirmed</span>
                                </td>

                                <td data-label="-" class="cs--color-secondary">
                                    <span>Turpis</span>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="Side" class=""><span>58853.58</span></td>

                                <td data-label="Size to fill" class="">
                                    <span>0.0447</span>
                                </td>

                                <td data-label="Price" class="">
                                    <span>58853.580000000002</span>
                                </td>

                                <td data-label="Date" class="cs--color-secondary">
                                    <span>18 mar 2021</span>
                                </td>

                                <td data-label="Status" class="cs--color-warning">
                                    <span>In processing</span>
                                </td>

                                <td data-label="-" class="cs--color-secondary">
                                    <span>Turpis</span>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="Side" class=""><span>58853.58</span></td>

                                <td data-label="Size to fill" class="">
                                    <span>0.0447</span>
                                </td>

                                <td data-label="Price" class="">
                                    <span>58853.580000000002</span>
                                </td>

                                <td data-label="Date" class="cs--color-secondary">
                                    <span>18 mar 2021</span>
                                </td>

                                <td data-label="Status" class="cs--color-danger">
                                    <span>Rejected</span>
                                </td>

                                <td data-label="-" class="cs--color-secondary">
                                    <span>Turpis</span>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="Side" class=""><span>58853.58</span></td>

                                <td data-label="Size to fill" class="">
                                    <span>0.0447</span>
                                </td>

                                <td data-label="Price" class="">
                                    <span>58853.580000000002</span>
                                </td>

                                <td data-label="Date" class="cs--color-secondary">
                                    <span>18 mar 2021</span>
                                </td>

                                <td data-label="Status" class="cs--color-success">
                                    <span>Confirmed</span>
                                </td>

                                <td data-label="-" class="cs--color-secondary">
                                    <span>Turpis</span>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="Side" class=""><span>58853.58</span></td>

                                <td data-label="Size to fill" class="">
                                    <span>0.0447</span>
                                </td>

                                <td data-label="Price" class="">
                                    <span>58853.580000000002</span>
                                </td>

                                <td data-label="Date" class="cs--color-secondary">
                                    <span>18 mar 2021</span>
                                </td>

                                <td data-label="Status" class="cs--color-warning">
                                    <span>In processing</span>
                                </td>

                                <td data-label="-" class="cs--color-secondary">
                                    <span>Turpis</span>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="Side" class=""><span>58853.58</span></td>

                                <td data-label="Size to fill" class="">
                                    <span>0.0447</span>
                                </td>

                                <td data-label="Price" class="">
                                    <span>58853.580000000002</span>
                                </td>

                                <td data-label="Date" class="cs--color-secondary">
                                    <span>18 mar 2021</span>
                                </td>

                                <td data-label="Status" class="cs--color-danger">
                                    <span>Rejected</span>
                                </td>

                                <td data-label="-" class="cs--color-secondary">
                                    <span>Turpis</span>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="Side" class=""><span>58853.58</span></td>

                                <td data-label="Size to fill" class="">
                                    <span>0.0447</span>
                                </td>

                                <td data-label="Price" class="">
                                    <span>58853.580000000002</span>
                                </td>

                                <td data-label="Date" class="cs--color-secondary">
                                    <span>18 mar 2021</span>
                                </td>

                                <td data-label="Status" class="cs--color-danger">
                                    <span>Rejected</span>
                                </td>

                                <td data-label="-" class="cs--color-secondary">
                                    <span>Turpis</span>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="Side" class=""><span>58853.58</span></td>

                                <td data-label="Size to fill" class="">
                                    <span>0.0447</span>
                                </td>

                                <td data-label="Price" class="">
                                    <span>58853.580000000002</span>
                                </td>

                                <td data-label="Date" class="cs--color-secondary">
                                    <span>18 mar 2021</span>
                                </td>

                                <td data-label="Status" class="cs--color-danger">
                                    <span>Rejected</span>
                                </td>

                                <td data-label="-" class="cs--color-secondary">
                                    <span>Turpis</span>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="Side" class=""><span>58853.58</span></td>

                                <td data-label="Size to fill" class="">
                                    <span>0.0447</span>
                                </td>

                                <td data-label="Price" class="">
                                    <span>58853.580000000002</span>
                                </td>

                                <td data-label="Date" class="cs--color-secondary">
                                    <span>18 mar 2021</span>
                                </td>

                                <td data-label="Status" class="cs--color-danger">
                                    <span>Rejected</span>
                                </td>

                                <td data-label="-" class="cs--color-secondary">
                                    <span>Turpis</span>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="Side" class=""><span>58853.58</span></td>

                                <td data-label="Size to fill" class="">
                                    <span>0.0447</span>
                                </td>

                                <td data-label="Price" class="">
                                    <span>58853.580000000002</span>
                                </td>

                                <td data-label="Date" class="cs--color-secondary">
                                    <span>18 mar 2021</span>
                                </td>

                                <td data-label="Status" class="cs--color-danger">
                                    <span>Rejected</span>
                                </td>

                                <td data-label="-" class="cs--color-secondary">
                                    <span>Turpis</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <section class="cs--interface__block cs--interface__block--balance">
                    <h2 class="cs--interface__block-title">{{ $__("Balance") }}</h2>
                    <table class="cs--balance-table" v-show="account.balances.length">
                        <tbody>
                        <tr v-for="balance in account.balances">
                            <td>{{ balance.asset }}</td>
                            <td class="cs--balance-table__accent">{{ balance.free }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="cs--btn-group">
                        <button type="button"
                                @click.prevent="order.side='BUY'"
                                :class="{'cs--btn':true, 'cs--btn--tab':true, 'cs--btn--tab--active':order.side=='BUY'}"
                        >{{ $__("Buy") }}
                        </button>
                        <button
                            type="button"
                            @click.prevent="order.side='SELL'"
                            :class="{'cs--btn':true, 'cs--btn--tab':true, 'cs--btn--tab--active':order.side=='SELL'}"
                        >
                            {{ $__("Sell") }}
                        </button>
                    </div>
                    <div class="cs--btn-group">
                        <button v-for="orderType in symbol.orderTypes"
                                type="button"
                                @click.prevent="order.type=orderType"
                                :class="{'cs--btn':true, 'cs--btn--tab':true, 'cs--btn--tab--active':order.type==orderType}"
                        >
                            {{ orderTypeName(orderType) }}
                        </button>
                    </div>
                    <form>
                        <div class="cs--dashboard-form__item">
                            <label
                                for="dashboard--price"
                                class="cs--dashboard-form__label"
                            >{{ $__("Price") }}</label
                            >

                            <div
                                class="cs--dashboard-form__input-wrapper cs--dashboard-form__input--postfix"
                                data-postfix="USD"
                            >
                                <input
                                    v-model="order.price"
                                    id="dashboard--price"
                                    type="text"
                                    class="cs--dashboard-form__input"
                                    placeholder=""
                                />
                            </div>
                        </div>

                        <div class="cs--dashboard-form__item">
                            <label
                                for="dashboard--total"
                                class="cs--dashboard-form__label"
                            >{{ $__("Total") }}</label
                            >

                            <div
                                class="cs--dashboard-form__input-wrapper cs--dashboard-form__input--postfix"
                                data-postfix="USD"
                            >
                                <input
                                    id="dashboard--total"
                                    v-model="order.quantity"
                                    type="text"
                                    class="cs--dashboard-form__input"
                                    placeholder=""
                                />
                            </div>
                        </div>


                        <button
                            type="button"
                            class="cs--btn cs--btn--success"
                            @click.prevent="openOrder()"
                        >
                            {{ order.side == 'BUY' ? $__("Buy") : $__("Sell") }}
                        </button>
                    </form>
                </section>

                <section class="cs--interface__block cs--interface__block--chat">
                    <form class="cs--chat-wrapper">
                        <div class="cs--interface__block-head">
                  <span class="cs--interface__block-head-icon">
                    <svg
                        class="cs--icon"
                        aria-hidden="true"
                        width="20"
                        height="19"
                        viewBox="0 0 20 19"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                          d="M3.33317 14.3091H4.99984V17.4196L9.25067 14.3091H13.3332C14.2523 14.3091 14.9998 13.6254 14.9998 12.7847V6.68711C14.9998 5.84641 14.2523 5.16272 13.3332 5.16272H3.33317C2.414 5.16272 1.6665 5.84641 1.6665 6.68711V12.7847C1.6665 13.6254 2.414 14.3091 3.33317 14.3091Z"
                          fill="var(--icon-color)"
                      />
                      <path
                          d="M16.6667 2.11401H6.66667C5.7475 2.11401 5 2.7977 5 3.6384H15C15.9192 3.6384 16.6667 4.32209 16.6667 5.16279V11.2604C17.5858 11.2604 18.3333 10.5767 18.3333 9.73597V3.6384C18.3333 2.7977 17.5858 2.11401 16.6667 2.11401Z"
                          fill="var(--icon-color)"
                      />
                    </svg>
                  </span>
                            <h2 class="cs--interface__block-title">Chat</h2>
                        </div>
                        <output class="cs--chat-output">
                            <div class="cs--chat-message">
                                <b class="cs--color-danger">gera267: </b
                                ><span>в этом году не будет рипла по 3$</span>
                            </div>
                            <div class="cs--chat-message">
                                <b class="cs--color-success">RoboHoma: </b
                                ><span
                            >Bilaldzhabrailov, на этой бирже любая монетка может х10
                      дать, но когда хз...</span
                            >
                            </div>
                            <div class="cs--chat-message">
                                <b class="cs--color-warning">aswert L0: </b
                                ><span>ceckf2017, ага рибята же в групе писали шоб</span>
                            </div>
                            <div class="cs--chat-message">
                                <b class="cs--color-danger">gera267: </b
                                ><span>в этом году не будет рипла по 3$</span>
                            </div>
                            <div class="cs--chat-message">
                                <b class="cs--color-success">RoboHoma: </b
                                ><span
                            >Bilaldzhabrailov, на этой бирже любая монетка может х10
                      дать, но когда хз...</span
                            >
                            </div>
                            <div class="cs--chat-message">
                                <b class="cs--color-warning">aswert L0: </b
                                ><span>ceckf2017, ага рибята же в групе писали шоб</span>
                            </div>
                            <div class="cs--chat-message">
                                <b class="cs--color-danger">gera267: </b
                                ><span>в этом году не будет рипла по 3$</span>
                            </div>
                            <div class="cs--chat-message">
                                <b class="cs--color-success">RoboHoma: </b
                                ><span
                            >Bilaldzhabrailov, на этой бирже любая монетка может х10
                      дать, но когда хз...</span
                            >
                            </div>
                            <div class="cs--chat-message">
                                <b class="cs--color-warning">aswert L0: </b
                                ><span>ceckf2017, ага рибята же в групе писали шоб</span>
                            </div>
                        </output>
                        <div class="cs--chat-input">
                  <textarea
                      class="cs--dashboard-form__input"
                      placeholder="Message"
                  ></textarea>
                            <button class="cs--btn cs--btn--grad-blue">
                                <svg
                                    class="cs--icon"
                                    aria-hidden="true"
                                    width="18"
                                    height="13"
                                    viewBox="0 0 18 13"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M16.2208 0.256246L1.44583 5.46737C0.437498 5.8378 0.443331 6.35228 1.26083 6.5817L5.05416 7.66402L13.8308 2.59923C14.2458 2.36829 14.625 2.49253 14.3133 2.74557L7.2025 8.61524H7.20083L7.2025 8.616L6.94083 12.1922C7.32416 12.1922 7.49333 12.0314 7.70833 11.8416L9.55083 10.2029L13.3833 12.7921C14.09 13.148 14.5975 12.9651 14.7733 12.1937L17.2892 1.34923C17.5467 0.404874 16.895 -0.0227171 16.2208 0.256246Z"
                                        fill="var(--icon-color)"
                                    />
                                </svg>
                            </button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </main>
</template>

<script>
import TradingView from "../components/TradingView";
import OrderBookWidget from "../components/OrderBookWidget";
import OrdersHistoryWidget from "../components/OrdersHistoryWidget";
import ActiveOrders from "../components/ActiveOrders";
import {mapGetters} from 'vuex'
import vueCustomScrollbar from 'vue-custom-scrollbar'
import "vue-custom-scrollbar/dist/vueScrollbar.css"

export default {
    name: "Trading",
    data: function () {
        return {
            exchange: 'binance',
            pairs: [],
            symbol: null,
            info: [],
            tab: null,
            tabOrder: null,
            order: {
                side: 'BUY',
                type: 'MARKET',
                quantity: 0,
                price: 0,
            },
            orderMessage: '',
            orderMessageStatus: 'success',
            orders: [],
            trades: [],
            openOrders: [],
            account: {}
        }
    },
    components: {
        TradingView,
        OrderBookWidget,
        OrdersHistoryWidget,
        ActiveOrders,
        vueCustomScrollbar
    },
    props: {},
    watch: {
        'symbol': function (newValue) {
            if (newValue) {
                this.getOrders()
                this.getOpenOrders()
                let priceFilter = newValue.filters.filter((item) => {
                    return item.filterType == "PRICE_FILTER"
                })
                let qtyFilter = newValue.filters.filter((item) => {
                    return item.filterType == "LOT_SIZE"
                })
                this.order.price = priceFilter[0]['minPrice']
                this.order.quantity = qtyFilter[0]['minQty']
            }
        },
        'symbol.orderTypes': function (newValue) {
            if (newValue.length) {
                this.order.type = newValue[0]
            }
        },
    },
    methods: {
        cancelOrder(order) {
            if (!confirm('Вы действительно хотите отменить ордер?')) return

            axios
                .post('/terminal/exchange/cancel-order/' + this.exchange, {
                    symbol: this.symbol.symbol,
                    orderId: order.orderId
                })
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.getOpenOrders()
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                });

        },
        playSound() {
            let audio = new Audio('/audio/event.mp3')
            audio.play();
        },
        orderTypeName(name) {
            return name.replace(/_/g, ' ')
        },
        getOrders() {
            if (!this.symbol) return

            axios
                .post('/terminal/exchange/get-orders/' + this.exchange, {
                    symbol: this.symbol.symbol
                })
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.orders = response.data.filter((item) => {
                            return item.status !== 'NEW'
                        })
                            .sort((a, b) => {
                                if (a.time > b.time) return -1
                                if (a.time < b.time) return 1
                                return 0
                            })
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                });
        },
        getOpenOrders() {
            if (!this.symbol) return

            axios
                .post('/terminal/exchange/get-open-orders/' + this.exchange, {
                    symbol: this.symbol.symbol
                })
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.openOrders = response.data.sort((a, b) => {
                            if (a.time > b.time) return -1
                            if (a.time < b.time) return 1
                            return 0
                        })
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                });
        },
        orderQuantityRules() {

        },
        openOrder() {
            this.orderError = ''

            axios
                .post('/terminal/exchange/create-order/' + this.exchange, {
                    ...this.order, symbol: this.symbol.symbol
                })
                .then(response => {
                    if (response.status == 200 && response.data) {
                        if (response.data.message) {
                            this.$notify.success({
                                position: 'top right',
                                title: this.$__('Успех'),
                                msg: response.data.message,
                                timeout: 3000
                            })
                        }
                        this.playSound()
                        this.getOrders()
                        this.getOpenOrders()
                    }
                })
                .catch(error => {
                    // console.log(error.response.data);
                    if (error.response.data.message.length) {
                        this.$notify.error({
                            position: 'top right',
                            title: this.$__('Ошибка'),
                            msg: error.response.data.message,
                            timeout: 3000
                        })
                    }
                });
        },
        getCurrentExchange() {
            if (!this.exchanges.length || !this.exchange) return null;

            let exchange = this.exchanges.filter((item) => {
                return item.slug == this.exchange
            })

            if (exchange.length) return exchange[0]
        },
        getExchangeInfo() {
            axios
                .post('/terminal/exchange/get-info/' + this.exchange)
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.info = response.data
                        this.symbol = this.info.symbols[0]
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                });
        },
        getAccount() {
            axios
                .post('/terminal/exchange/account/' + this.exchange, {})
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.account = response.data
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                });
        },
        getExchanges() {
            return new Promise((resolve, reject) => {
                axios
                    .post('/terminal/exchanges', {})
                    .then(response => {
                        if (response.status == 200 && response.data) {
                            this.exchanges = response.data
                            resolve(response.data)
                        }
                    })
                    .catch(error => {
                        // console.log(error.response);
                        console.log(error.response.data);
                        reject(error)
                    });
            })

        }
    },
    computed: {
        ...mapGetters(['appData']),
        tradingViewPair() {
            if (!this.symbol) return 'ETH:BTC'

            return this.symbol.symbol;
        }
    },
    mounted() {
        this.getExchangeInfo()
        this.getAccount()
        this.getOrders()
        this.getOpenOrders()
    }

}
</script>

<style lang="scss">


</style>
