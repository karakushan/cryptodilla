<template>
    <main class="cs--page cs--dashboard--markets">
        <Loader :active="!load"/>
        <div class="cs--container" v-if="load">
            <DashboardNav/>
            <div class="cs--page__head">
                <h1 class="cs--page__title">{{ $__("Market Overview") }}</h1>
                <span class="cs--color-secondary">{{ (currencies.length * currencies.length).toLocaleString() }} {{ $__("Active pairs") }}</span>
                <label for="search" class="cs--dashboard-form__input--search-wrapper ml-auto">
                    <input id="search" v-model="search" type="text"
                           class="cs--dashboard-form__input cs--dashboard-form__input--search"
                           placeholder="Search">
                    <button type="button" class="cs--dashboard-form__input--search-btn">
                        <svg class="cs--icon" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.1249 17.2413L13.4049 12.5213C14.5391 11.1596 15.1047 9.41303 14.9841 7.64495C14.8634 5.87687 14.0657 4.22338 12.7569 3.02846C11.4482 1.83354 9.7291 1.18918 7.95736 1.22944C6.18562 1.2697 4.49761 1.99147 3.24448 3.2446C1.99134 4.49773 1.26958 6.18574 1.22932 7.95748C1.18906 9.72922 1.83341 11.4483 3.02834 12.757C4.22326 14.0658 5.87675 14.8635 7.64483 14.9842C9.41291 15.1049 11.1595 14.5393 12.5211 13.405L17.2411 18.125L18.1249 17.2413ZM2.49989 8.12501C2.49989 7.01249 2.82979 5.92496 3.44787 4.99993C4.06596 4.0749 4.94446 3.35393 5.97229 2.92819C7.00013 2.50245 8.13113 2.39105 9.22227 2.60809C10.3134 2.82514 11.3157 3.36087 12.1024 4.14754C12.889 4.93421 13.4248 5.93649 13.6418 7.02763C13.8588 8.11877 13.7475 9.24977 13.3217 10.2776C12.896 11.3054 12.175 12.1839 11.25 12.802C10.3249 13.4201 9.23741 13.75 8.12489 13.75C6.63355 13.7484 5.20377 13.1552 4.14924 12.1007C3.09471 11.0461 2.50154 9.61635 2.49989 8.12501Z"
                                fill="var(--icon-color)"></path>
                        </svg>
                    </button>
                </label>
            </div>
            <div class="cs--table-wrapper">
                <table class="cs--table cs--table--bordered">
                    <thead>
                    <tr>
                        <th class="">Rank</th>

                        <th class="">Name</th>

                        <th class="">Market Cap (BTC)</th>

                        <th class="">Circulating Supply</th>

                        <th class="">24h Volume</th>

                        <th class="cs--table__cell--min-w">Avg Price</th>

                        <th class="">24h % Change</th>

                        <th class="cs--table__cell--chart">Chart (24h)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(cur,key) in currencies" v-if="currencies.length">
                        <td data-label="Rank" class=""><b>{{ key + 1 }}</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img :src="'https://s2.coinmarketcap.com/static/img/coins/64x64/'+cur.id+'.png'" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">{{ cur.name }}</span>
                                    <span class="cs--table__card-abbr">{{ cur.symbol }}</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>${{ abbreviateNumber(cur.quote.USD.market_cap) }}</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>{{ abbreviateNumber(cur.circulating_supply) }}</b>
                      <span class="cs--color-secondary">{{ cur.symbol }}</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>{{ abbreviateNumber(cur.quote.USD.volume_24h) }}</b>
                        </td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>${{ cur.quote.USD.price }}</b>
                        </td>

                        <td data-label="24h % Change"
                            :class="{'no-wrap':true,
                            'cs--color-success' :cur.quote.USD.percent_change_24h>0,
                            'cs--color-danger' :cur.quote.USD.percent_change_24h<0}"
                        >
                            <b>{{ cur.quote.USD.percent_change_24h }}%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-plus.svg" alt="">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</template>

<script>
import DashboardNav from "../components/DashboardNav";
import Loader from "../components/Loader";

export default {
    name: "Markets",
    data() {
        return {
            market: null,
            load: false,
            search: ''
        }
    },
    components: {
        DashboardNav,
        Loader
    },
    computed: {
        currencies() {
            if (this.market) {
                if (this.search.length > 1) {
                    return this.market.currencies.data.filter((item) => {
                        return item.name.toLowerCase().indexOf(this.search.toLowerCase()) !== -1 ||  item.symbol.toLowerCase().indexOf(this.search.toLowerCase()) !== -1
                    });
                } else {
                    return this.market.currencies.data;
                }
            }

            return []
        }
    },
    methods: {
        abbreviateNumber(num, fixed = 0) {
            if (num === null) {
                return null;
            } // terminate early
            if (num === 0) {
                return '0';
            } // terminate early
            fixed = (!fixed || fixed < 0) ? 0 : fixed; // number of decimal places to show
            var b = (num).toPrecision(2).split("e"), // get power
                k = b.length === 1 ? 0 : Math.floor(Math.min(b[1].slice(1), 14) / 3), // floor at decimals, ceiling at trillions
                c = k < 1 ? num.toFixed(0 + fixed) : (num / Math.pow(10, k * 3)).toFixed(1 + fixed), // divide by power
                d = c < 0 ? c : Math.abs(c), // enforce -0 is 0
                e = d + ['', 'K', 'M', 'B', 'T'][k]; // append power
            return e.toLowerCase();
        },
        getMarketData() {
            axios
                .get('/terminal/market-overview', {})
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.market = response.data

                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                })
                .finally(() => {
                    this.load = true
                });
        }
    },
    mounted() {
        this.getMarketData()
    }
}
</script>

<style scoped>
.cs--table-wrapper {
    overflow: auto;
    max-height: calc(100vh - 468px);
}
</style>
