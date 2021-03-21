<template>
    <v-row>
        <v-col md="2">
            <OrdersWidget :symbol="this.symbol" :limit="15" v-if="symbol"/>
            <!--<OrdersHistoryWidget/>-->
        </v-col>
        <v-col md="8">
            <v-card class="mx-auto mb-2">
                <v-toolbar dark>
                    <v-row>
                        <v-col md="3">
                            <v-autocomplete
                                v-model="exchange"
                                :items="exchanges"
                                item-text="name"
                                item-value="slug"
                                label="Выберите биржу"
                                solo

                            >
                                <template v-slot:selection="data">
                                    <v-chip
                                        v-bind="data.attrs"
                                        :input-value="data.selected"
                                        close
                                        @click="data.select"
                                        @click:close="remove(data.item)"
                                    >
                                        <v-img left class="mr-2" max-width="20">
                                            <v-img :src="data.item.logo"></v-img>
                                        </v-img>

                                        {{ data.item.name }}
                                    </v-chip>
                                </template>
                                <template v-slot:item="{ item }">
                                    <v-img left class="mr-2" max-width="20">
                                        <v-img :src="item.logo"></v-img>
                                    </v-img>
                                    <v-list-item-content>
                                        <v-list-item-title v-text="item.name"></v-list-item-title>
                                    </v-list-item-content>

                                </template>
                            </v-autocomplete>
                        </v-col>
                        <v-col md="3">
                            <v-autocomplete
                                v-model="symbol"
                                :items="symbols"
                                item-text="symbol"
                                label="Выберите пару"
                                solo
                                return-object

                            >
                                <template v-slot:selection="data,key">
                                    <v-chip
                                        v-bind="data.attrs"
                                        :input-value="data.item"
                                        close
                                        @click="data.select"
                                        @click:close="remove(data.item)"
                                    >
                                        {{ data.item.symbol }}
                                    </v-chip>
                                </template>
                                <template v-slot:item="{ item }">

                                    <v-list-item-content>
                                        <v-list-item-title v-text="item.symbol"></v-list-item-title>
                                    </v-list-item-content>

                                </template>
                            </v-autocomplete>
                        </v-col>
                    </v-row>
                </v-toolbar>
                <TradingView v-if="symbol" :pair="tradingViewPair"/>
            </v-card>
            <v-row>
                <v-col md="12">
                    <v-card>
                        <v-toolbar>
                            <v-tabs v-model="tab">
                                <v-tab>{{ $__("Открытые ордера") }}</v-tab>
                                <v-tab>{{ $__("Позиции") }}</v-tab>
                                <v-tab>{{ $__("История") }}</v-tab>
                            </v-tabs>
                        </v-toolbar>
                        <v-tabs-items v-model="tab">
                            <v-tab-item>
                                <v-card color="basil" flat>
                                    <v-card-text>
                                        {{ $__("Нет открытых ордеров") }}
                                    </v-card-text>
                                </v-card>
                            </v-tab-item>
                            <v-tab-item>
                                <v-card color="basil" flat>
                                    <v-card-text>
                                        {{ $__("Нет открытых позиций") }}
                                    </v-card-text>
                                </v-card>
                            </v-tab-item>
                            <v-tab-item>
                                <v-card color="basil" flat>
                                    <v-card-text>
                                        {{ $__("Нет истории") }}
                                    </v-card-text>
                                </v-card>
                            </v-tab-item>
                        </v-tabs-items>
                    </v-card>
                </v-col>
            </v-row>
        </v-col>
        <v-col md="2">
            <v-card class="mb-2" v-if="symbol">
                <v-toolbar>
                    <v-app-bar-nav-icon></v-app-bar-nav-icon>
                    <v-toolbar-title>{{ $__("Форма ордера") }}</v-toolbar-title>
                </v-toolbar>
                <v-form @submit.prevent="openOrder">
                    <v-container>
                        <v-list
                            subheader
                            two-line
                        >
                            <v-list-item>
                                <v-radio-group v-model="order.type" row>
                                    <v-radio
                                        :label="$__('Покупка')"
                                        value="buy"
                                    ></v-radio>
                                    <v-radio
                                        :label="$__('Продажа')"
                                        value="sell"
                                    ></v-radio>
                                </v-radio-group>
                            </v-list-item>

                            <v-list-item>
                                <v-btn-toggle
                                    v-model="order.type2"
                                    color="success"
                                    group
                                >
                                    <v-btn value="market">
                                        Market
                                    </v-btn>
                                    <v-btn value="limit">
                                        Limit
                                    </v-btn>
                                    <v-btn value="stop">
                                        Stop
                                    </v-btn>
                                </v-btn-toggle>
                            </v-list-item>
                            <v-list-item class="mb-2">
                                <v-text-field
                                    type="number"
                                    label="К-во"
                                    hide-details="auto"
                                    v-model="order.quantity"
                                    :rules="orderQuantityRules"
                                    reqiured
                                >
                                    <template v-slot:append>
                                        {{ symbol.baseAsset }}
                                    </template>
                                </v-text-field>
                            </v-list-item>

                            <v-list-item>
                                <v-btn
                                    x-large
                                    :color="order.type=='buy'? 'success' : 'error'"
                                    dark
                                    block
                                    type="submit"
                                >
                                    {{
                                        order.type == 'buy' ? 'Купить ' + symbol.baseAsset : 'Продать ' + symbol.baseAsset
                                    }}
                                </v-btn>
                            </v-list-item>


                        </v-list>
                    </v-container>
                </v-form>
            </v-card>
            <v-card>
                <v-toolbar>
                    <v-app-bar-nav-icon></v-app-bar-nav-icon>
                    <v-toolbar-title>{{ $__("Баланс") }}</v-toolbar-title>
                </v-toolbar>

                <v-container>
                    <v-simple-table>
                        <template v-slot:default>
                            <thead>
                            <tr>
                                <th class="text-left">
                                    {{ $__("Валюта") }}
                                </th>
                                <th class="text-left">
                                    {{ $__("В торговле") }}
                                </th>
                                <th class="text-left">
                                    {{ $__("Доступно") }}
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </template>
                    </v-simple-table>

                </v-container>

            </v-card>
        </v-col>
    </v-row>
</template>

<script>
import TradingView from "../components/TradingView";
import OrdersWidget from "../components/OrdersWidget";
import OrdersHistoryWidget from "../components/OrdersHistoryWidget";

export default {
    name: "Trading",
    data: function () {
        return {
            exchange: 'binance',
            exchanges: [],
            pairs: [],
            symbol: null,
            symbols: [],
            tab: null,
            tabOrder: null,
            order: {
                type: 'buy',
                type2: 'market',
                quantity: 0
            }
        }
    },
    components: {
        TradingView,
        OrdersWidget,
        OrdersHistoryWidget
    },
    props: {},
    watch: {},
    methods: {
        orderQuantityRules() {

        },
        openOrder() {

        },
        getCurrentExchange() {
            if (!this.exchanges.length || !this.exchange) return null;

            let exchange = this.exchanges.filter((item) => {
                return item.slug == this.exchange
            })

            if (exchange.length) return exchange[0]
        },
        getExchangeInfo(exchange) {
            axios
                .post('/terminal/' + exchange + '/get-info', {})
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.symbols = response.data
                        this.symbol = this.symbols[0]
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
        tradingViewPair() {
            if (!this.symbol) return 'ETH:BTC'

            return this.symbol.symbol;
        }
    },
    mounted() {
        this.getExchanges().then(() => {
            let exchange = this.getCurrentExchange()
            console.log(exchange.slug);
            this.getExchangeInfo(exchange.slug)
        })

    }
}
</script>

<style scoped>
.v-data-table > .v-data-table__wrapper > table > tbody > tr > td, .v-data-table > .v-data-table__wrapper > table > tbody > tr > th, .v-data-table > .v-data-table__wrapper > table > tfoot > tr > td, .v-data-table > .v-data-table__wrapper > table > tfoot > tr > th, .v-data-table > .v-data-table__wrapper > table > thead > tr > td, .v-data-table > .v-data-table__wrapper > table > thead > tr > th {
    text-align: center;
    padding: 0 4px;
    transition: height .2s cubic-bezier(.4, 0, .6, 1);
    font-size: 13px !important;
}
</style>
