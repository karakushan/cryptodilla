<template>
    <section class="cs--interface__block cs--interface__block--tools">
        <div class="cs--interface__chart-head">
            <details
                data-dropdown
                class="cs--interface__dropdown cs--dashboard-form__input-wrapper cs--dashboard-form__input--arrow"
                ref="detail"
            >
                <summary
                    class="cs--interface__dropdown-btn cs--dashboard-form__input"
                >
                    <div class="cs--interface__dropdown-btn-img">
                        <img :src="symbol.logo_url" :alt="symbol.symbol" v-if="symbol.logo_url"/>
                    </div>
                    <b>{{ symbol.baseAsset }} - {{ symbol.quoteAsset }}</b>
                    <span class="cs--interface__dropdown-btn-text">Market</span>
                </summary>
                <div class="cs--interface__dropdown-content" v-show="exchangeInfo">
                    <form class="cs--card-filter__form" @submit.prevent="">
                        <label
                            for="search"
                            class="cs--dashboard-form__input--search-wrapper ml-auto"
                        >
                            <input
                                v-model="search"
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
                                        v-model="onlyFavorites"
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
                                        @change="resetFilterCurrencies()"
                                    />

                                    <span class="cs--card-filter__filter-title"
                                    >{{ $__("ALL") }}</span
                                    >
                                </label>
                            </li>

                            <li class="cs--card-filter__filter-item" v-for="cur in appData.currencies" v-if="appData">
                                <label
                                    :for="'curid-'+cur.slug"
                                    class="cs--card-filter__filter-label"
                                >
                                    <input
                                        :id="'curid-'+cur.slug"
                                        type="checkbox"
                                        class="cs--card-filter__filter-input"
                                        v-model="filterCurrencies"
                                        :value="cur.slug"
                                    />

                                    <span class="cs--card-filter__filter-title"
                                    >{{ cur.slug.toUpperCase() }}</span
                                    >
                                </label>
                            </li>
                        </ul>
                    </form>
                    <div class="cs--table-wrapper">
                        <table class="cs--table cs--table--bordered">
                            <tbody>
                            <tr v-for="pair in filteredCurrencies" @click.prevent="setActiveSymbol(pair)">
                                <td data-label="Name" class="no-wrap">
                                    <div class="cs--table__card">
                                        <img :src="pair.logo_url" :alt="pair.symbol" v-if="pair.logo_url"/>
                                        <div class="cs--table__card-content">
                                            <span class="cs--table__card-title">{{
                                                    pair.baseAsset
                                                }} - {{ pair.quoteAsset }}</span>
                                            <span class="cs--table__card-abbr">{{ pair.baseName }}</span>
                                        </div>
                                    </div>
                                </td>

                                <td data-label="Circulating Supply" class="no-wrap">
                                    <div class="cs--table__card-content">
                                <span class="cs--table__card-title"
                                >{{ pair.volume }}</span
                                >
                                        <span class="cs--table__card-abbr"
                                        >24h volume</span
                                        >
                                    </div>
                                </td>

                                <td data-label="24h Volume" class="no-wrap">
                                    <div class="cs--table__card-content">
                                <span class="cs--table__card-title"
                                >{{ pair.price }} {{ pair.quoteAsset }}</span
                                >
                                        <span class="cs--table__card-abbr"
                                        >Price</span
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
                                    <b>{{ pair.change }}%</b>
                                </td>

                                <td data-label="Chart (24h)" class="">
                                    <button type="button"
                                            :class="{'cs--favorite':true,'active':favoritePairs.indexOf(pair.symbol) !== -1}"
                                            @click.prevent="addToFavorite(pair.symbol)"
                                    >
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
            <div class="cs--interface__chart-comment" v-if="symbolTick">
                <span class="cs--color-secondary">{{ $__("24h price change") }}</span>
                <div class="cs--interface__chart-stat">
                    <img src="/img/icon/progress-arrow-up.svg" alt=""/>
                    <span class="cs--color-success">+{{ symbolTick.P }}%</span>
                    <img src="/img/icon/graph-line.svg" alt=""/>
                </div>
            </div>
            <div class="cs--interface__chart-comment" v-if="symbolTick">
                <span class="cs--color-secondary">{{ $__("Last Price") }}</span>
                <div class="cs--interface__chart-stat">
                    <span>{{ symbol.quoteAsset }} {{ parseFloat(symbolTick.c) }}</span>
                </div>
            </div>
            <div class="cs--interface__chart-comment" v-if="symbolTick">
                <span class="cs--color-secondary">{{ $__("24h Volume") }}</span>
                <div class="cs--interface__chart-stat">
                    <span>{{ symbol.quoteAsset }} {{ parseFloat(symbolTick.c) }}</span>
                </div>
            </div>
        </div>
        <div class="cs--interface__chart">
            <TradingView :pair="symbol.symbol" v-if="symbol"/>
        </div>
    </section>
</template>

<script>
import TradingView from "./TradingView";
import {mapGetters, mapActions} from "vuex";

export default {
    name: "SelectPair",
    data() {
        return {
            dropdownOpen: false,
            filterCurrencies: [],
            search: '',
            url: 'wss://stream.binance.com:9443/ws/',
            tick: null,
            onlyFavorites: false

        }
    },
    props: {
        symbol: {
            type: Object,
            default() {
                return null
            }
        }
    },
    watch: {},
    computed: {
        ...mapGetters(['appData', 'exchangeInfo', 'account', 'symbolTick']),
        favoritePairs() {
            if (this.appData) {
                return this.appData.user.favorite_currencies ? this.appData.user.favorite_currencies : [];
            }
            return []
        },
        filteredCurrencies() {
            if (!this.exchangeInfo) return []

            let symbols = this.exchangeInfo.symbols

            if (this.search.length > 0) {
                symbols = symbols.filter((item) => {
                    return item.baseAsset.toLowerCase().indexOf(this.search.toLowerCase()) !== -1
                })
            }

            if (this.filterCurrencies.length) {
                symbols = symbols.filter((item) => {
                    return this.filterCurrencies.indexOf(item.quoteAsset.toLowerCase()) !== -1
                })
            }

            if (this.onlyFavorites) {
                symbols = symbols.filter((item) => {
                    return this.favoritePairs.indexOf(item.symbol.toUpperCase()) !== -1
                })
            }

            return symbols
        }
    },
    components: {
        TradingView
    },
    methods: {
        ...mapActions(['setSymbol']),
        setActiveSymbol(symbol) {
            this.setSymbol(symbol)
            this.$refs.detail.removeAttribute('open')
        },
        getSymbolMeta(symbol, meta) {
            if (!this.appData) return null

            let currency = this.appData.currencies.filter((item) => {
                return item.slug == symbol.baseAsset.toLowerCase()
            })
            if (currency.length) {
                return currency[0][meta]
            }

            return null
        },
        resetFilterCurrencies() {
            this.filterCurrencies = [];
        },
        addToFavorite(pair) {
            if (this.favoritePairs.indexOf(pair) === -1) {
                this.favoritePairs.push(pair)


            } else {
                this.favoritePairs.splice(this.favoritePairs.indexOf(pair), 1)
            }

            axios
                .put('/terminal/user-update/' + this.appData.user.id, {
                    favorite_currencies: this.favoritePairs
                })
                .then(response => {
                    if (response.status == 200 && response.data) {

                        this.$notify.success({
                            position: 'top right',
                            title: this.$__('Success'),
                            msg: this.$__('The list of favorite currency pairs has been updated!').replace('%s', pair),
                            timeout: 3000
                        })
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                })
                .finally(() => {
                    this.inProcess = false
                });
        }

    },
    mounted() {

    }
}
</script>

<style scoped lang="scss">
.cs--favorite.active {
    --icon-color: var(--color-green-30);
    opacity: .7;
}
</style>
