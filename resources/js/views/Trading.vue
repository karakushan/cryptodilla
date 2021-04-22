<template>
    <div class="app-trading">
        <v-row>
            <v-col md="2">
                <OrdersWidget :symbol="this.symbol" :limit="7" v-if="symbol" title="Ордера"/>
                <OrdersWidget :symbol="this.symbol" :limit="7" v-if="symbol" title="История торгов"/>
                <!--<OrdersHistoryWidget/>-->
            </v-col>
            <v-col md="8">
                <v-card class="mx-auto mb-2">
                    <v-toolbar dark>
                        <v-row>
                            <v-col md="3">
                                <v-autocomplete
                                    v-model="exchange"
                                    :items="appData.exchanges"
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
                                                <v-img :src="data.item.logo_url"></v-img>
                                            </v-img>

                                            {{ data.item.name }}

                                        </v-chip>
                                    </template>
                                    <template v-slot:item="{ item }">
                                        <v-img left class="mr-2" max-width="20">
                                            <v-img :src="item.logo_url"></v-img>
                                        </v-img>
                                        <v-list-item-content>
                                            <v-list-item-title v-text="item.name"></v-list-item-title>

                                        </v-list-item-content>
                                        <v-btn to="/exchanges" text v-if="!item.credentials" class="ml-2">Подключить</v-btn>
                                    </template>
                                </v-autocomplete>
                            </v-col>
                            <v-col md="3">
                                <v-autocomplete
                                    v-model="symbol"
                                    :items="info.symbols"
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
                    <v-container>
                        <TradingView v-if="symbol" :pair="tradingViewPair"/>
                    </v-container>

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
                                        <ActiveOrders :symbol="symbol.symbol" v-if="symbol"/>
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
                                        <v-container>
                                            <v-simple-table v-if="orders.length">
                                                <template v-slot:default>
                                                    <thead>
                                                    <tr>
                                                        <th class="text-left">
                                                            {{ $__("Пара") }}
                                                        </th>
                                                        <th>
                                                            {{ $__("Тип") }}
                                                        </th>
                                                        <th>
                                                            {{ $__("Side") }}
                                                        </th>
                                                        <th>
                                                            {{ $__("Средняя цена") }}
                                                        </th>
                                                        <th>
                                                            {{ $__("К-во") }}
                                                        </th>
                                                        <th>
                                                            {{ $__("Цена") }}
                                                        </th>
                                                        <th>{{ $__("Дата") }}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr v-for="order in orders">
                                                        <td class="text-left">
                                                            {{ order.symbol }}
                                                        </td>
                                                        <td>
                                                            -
                                                        </td>
                                                        <td>
                                                            <span
                                                                :class="{'red--text':order.side =='SELL','green--text':order.side =='BUY' }"> {{
                                                                    order.side
                                                                }}</span>
                                                        </td>
                                                        <td>
                                                            {{ order.price }}
                                                        </td>
                                                        <td>
                                                            {{ order.executedQty }}
                                                        </td>
                                                        <td>
                                                            {{ order.price }}
                                                        </td>
                                                        <td>{{ $moment(order.time).format('DD.MM.YYYY H:mm:ss') }}</td>
                                                    </tr>
                                                    </tbody>
                                                </template>
                                            </v-simple-table>
                                            <v-card-text v-else>
                                                {{ $__("Нет истории") }}
                                            </v-card-text>
                                        </v-container>


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
                                    <v-radio-group v-model="order.mode" row>
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

                                    <v-slide-group
                                        :center-active="false"
                                        v-model="order.type"
                                        mandatory
                                        :show-arrows="false"
                                        dark

                                    >
                                        <v-slide-item v-for="(type,i) in symbol.orderTypes"
                                                      :key="i"
                                                      v-slot="{ active, toggle }"
                                                      :value="type"

                                        >
                                            <v-btn
                                                active-class="deep-purple accent-4"
                                                :input-value="active"
                                                @click="toggle"
                                            >
                                                {{ orderTypeName(type) }}
                                            </v-btn>
                                        </v-slide-item>
                                    </v-slide-group>
                                </v-list-item>
                                <v-list-item class="mb-2">
                                    <v-text-field
                                        type="number"
                                        label="Цена"
                                        hide-details="auto"
                                        v-model="order.price"
                                        reqiured
                                    >
                                        <template v-slot:append>
                                            {{ symbol.quoteAsset }}
                                        </template>
                                    </v-text-field>
                                </v-list-item>
                                <v-list-item class="mb-2">
                                    <v-text-field
                                        type="number"
                                        label="К-во"
                                        hide-details="auto"
                                        v-model="order.quantity"
                                        reqiured
                                    >
                                        <template v-slot:append>
                                            {{ symbol.baseAsset }}
                                        </template>
                                    </v-text-field>
                                </v-list-item>

                                <v-alert
                                    v-if="orderError"
                                    dense
                                    outlined
                                    type="error"
                                >
                                    {{ orderError }}
                                </v-alert>


                                <v-list-item>
                                    <v-btn
                                        x-large
                                        :color="order.mode=='buy'? 'success' : 'error'"
                                        dark
                                        block
                                        type="submit"
                                    >
                                        {{
                                            order.mode == 'buy' ? 'Купить ' + symbol.baseAsset : 'Продать ' + symbol.baseAsset
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
                        <v-simple-table v-if="typeof account.balances!=='undefined' && account.balances.length">
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
                                <tr v-for="balance in account.balances">
                                    <td>{{ balance.asset }}</td>
                                    <td>{{ balance.locked }}</td>
                                    <td>{{ balance.free }}</td>
                                </tr>
                                </tbody>
                            </template>
                        </v-simple-table>
                    </v-container>

                </v-card>
            </v-col>
        </v-row>
    </div>
</template>

<script>
import TradingView from "../components/TradingView";
import OrdersWidget from "../components/OrdersWidget";
import OrdersHistoryWidget from "../components/OrdersHistoryWidget";
import ActiveOrders from "../components/ActiveOrders";
import {mapGetters} from 'vuex'

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
                mode: 'buy',
                type: 'market',
                quantity: 0,
                price: 0,
            },
            orderError: '',
            orders: [],
            account: {}
        }
    },
    components: {
        TradingView,
        OrdersWidget,
        OrdersHistoryWidget,
        ActiveOrders
    },
    props: {},
    watch: {
        'symbol': function (newValue) {
            if (newValue) {
                this.getOrders()
            }
        },
        'symbol.orderTypes': function (newValue) {
            if (newValue.length) {
                this.order.type = newValue[0]
            }
        },
    },
    methods: {
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
                        this.orders = response.data
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
                        if (response.data._error && response.data._error.msg.length) {
                            this.orderError = response.data._error.msg
                        }
                        console.log(response);
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
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
        },
    },
    mounted() {
        this.getExchangeInfo()
        this.getAccount()
        this.getOrders()
    }
}
</script>

<style lang="scss">
.app-trading {
    .v-toolbar .v-input {
        height: 48px;
    }
    .v-data-table > .v-data-table__wrapper > table > tbody > tr > td, .v-data-table > .v-data-table__wrapper > table > tbody > tr > th, .v-data-table > .v-data-table__wrapper > table > tfoot > tr > td, .v-data-table > .v-data-table__wrapper > table > tfoot > tr > th, .v-data-table > .v-data-table__wrapper > table > thead > tr > td, .v-data-table > .v-data-table__wrapper > table > thead > tr > th {
        text-align: center;
        padding: 0 4px;
        transition: height .2s cubic-bezier(.4, 0, .6, 1);
        font-size: 12px !important;
    }

    .v-slide-group__next, .v-slide-group__prev {
        align-items: center;
        display: flex;
        flex: 0 1 30px;
        justify-content: center;
        min-width: 30px;
    }

    .v-list-item {
        padding: 0;
    }
}

</style>
