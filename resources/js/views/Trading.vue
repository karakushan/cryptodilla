<template>
    <main class="cs--page cs--dashboard--interface">
        <Loader :active="!load"/>
        <div v-show="load" class="cs--container">
            <DashboardNav/>
            <div class="cs--interface">
                <SelectPair :symbol="symbol" v-if="symbol"/>

                <OrderBookWidget :symbol="symbol" v-if="symbol"/>

                <OrdersHistoryWidget :pair="symbol.symbol" :quote-asset="symbol.quoteAsset" v-if="symbol"/>

                <ActiveOrders v-on:order_closed="getOrders();getAccount()" :orders="orders"/>


                <section class="cs--interface__block cs--interface__block--balance">
                    <SelectExchangeWidget/>
                    <div v-if="account && account.balances.length>0">
                        <h2 class="cs--interface__block-title">{{ $__("Balance") }}</h2>
                        <div class="cs--table-wrapper" style="max-height: 170px">
                            <table class="cs--balance-table" v-if="account">
                                <tbody>
                                <tr v-for="balance in account.balances">
                                    <td>{{ balance.asset }}</td>
                                    <td class="cs--balance-table__accent">{{ balance.free }}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
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
                        <vue-custom-scrollbar class="scroll-area" :settings="settingsScrollBar">
                            <div class="cs--btn-group" v-if="symbol">
                                <button v-for="orderType in symbol.orderTypes"
                                        type="button"
                                        @click.prevent="order.type=orderType"
                                        :class="{'cs--btn':true, 'cs--btn--tab':true, 'cs--btn--tab--active':order.type==orderType}"
                                >
                                    {{ orderTypeName(orderType) }}
                                </button>
                            </div>
                        </vue-custom-scrollbar>
                        <form>
                            <div class="cs--dashboard-form__item"
                                 v-if="['MARKET','market','stopMarket'].indexOf(order.type)===-1">
                                <label
                                    for="dashboard--price"
                                    class="cs--dashboard-form__label"
                                >{{ $__("Price") }}</label
                                >

                                <div

                                    class="cs--dashboard-form__input-wrapper cs--dashboard-form__input--postfix"
                                    :data-postfix="symbol.quoteAsset"
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

                            <div class="cs--dashboard-form__item"
                                 v-if="['STOP_LOSS_LIMIT','stopLimit','stopMarket'].indexOf(order.type)!==-1">
                                <label
                                    for="dashboard--stop-price"
                                    class="cs--dashboard-form__label"
                                >{{ $__("Stop price") }}</label
                                >

                                <div

                                    class="cs--dashboard-form__input-wrapper cs--dashboard-form__input--postfix"
                                    :data-postfix="symbol.quoteAsset"
                                >
                                    <input
                                        v-model="order.stopPrice"
                                        id="dashboard--stop-price"
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
                                >{{ $__("Quantity") }}</label
                                >

                                <div
                                    class="cs--dashboard-form__input-wrapper cs--dashboard-form__input--postfix"
                                    :data-postfix="symbol.baseAsset"
                                >
                                    <input
                                        id="dashboard--total"
                                        v-model="order.quantity"
                                        type="text"
                                        class="cs--dashboard-form__input"
                                        placeholder=""
                                        required
                                    />
                                </div>
                                <ul class="qty-percent">
                                    <li>
                                        <button type="button" @click.prevent="setQty(25)">25%</button>
                                    </li>
                                    <li>
                                        <button type="button" @click.prevent="setQty(50)">50%</button>
                                    </li>
                                    <li>
                                        <button type="button" @click.prevent="setQty(75)">75%</button>
                                    </li>
                                    <li>
                                        <button type="button" @click.prevent="setQty(100)">100%</button>
                                    </li>
                                </ul>
                            </div>


                            <button
                                type="button"
                                class="cs--btn cs--btn--success"
                                @click.prevent="openOrder()"
                            >
                                {{ order.side == 'BUY' ? $__("Buy") : $__("Sell") }}
                            </button>
                        </form>
                    </div>
                    <p v-if="account && account.balances.length==0">{{
                            $__("There are no funds in your account yet")
                        }}</p>

                </section>
                <Chat/>
            </div>
        </div>
    </main>
</template>

<script>
import Chat from "../components/Chat";
import OrderBookWidget from "../components/OrderBookWidget";
import OrdersHistoryWidget from "../components/OrdersHistoryWidget";
import ActiveOrders from "../components/ActiveOrders";
import SelectPair from "../components/SelectPair";
import {mapGetters, mapActions} from 'vuex'
import vueCustomScrollbar from 'vue-custom-scrollbar'
import "vue-custom-scrollbar/dist/vueScrollbar.css"
import SelectExchangeWidget from "../components/SelectExchangeWidget";
import DashboardNav from "../components/DashboardNav";
import Loader from "../components/Loader";

export default {
    name: "Trading",
    data: function () {
        return {
            pairs: [],
            tab: null,
            tabOrder: null,
            order: {
                side: 'BUY',
                type: 'MARKET',
                quantity: 0,
                price: 0,
                stopPrice: ''
            },
            orderMessage: '',
            orderMessageStatus: 'success',
            orders: [],
            trades: [],
            openOrders: [],
            settingsScrollBar: {
                suppressScrollY: true,
                suppressScrollX: false,
                wheelPropagation: false
            },
            symbolTick: null,
            wsSymbolTick: null,
            load: false
        }
    },
    components: {
        OrderBookWidget,
        OrdersHistoryWidget,
        ActiveOrders,
        vueCustomScrollbar,
        Chat,
        SelectPair,
        SelectExchangeWidget,
        DashboardNav,
        Loader
    },
    props: {},
    watch: {
        exchange() {
            this.getExchangeInfo()
        },
        activeExchangeAccount(newValue) {
            if (newValue) {
                this.getAccount()
                this.getOrders()
            }
        },
        'symbol': function (newValue) {
            if (newValue) {
                this.wsSymbolTick.close()
                this.symbolTickerStream()
            }
        },
        'symbol.orderTypes': function (newValue) {
            if (newValue.length) {
                this.order.type = newValue[0]
            }
        },
    },
    methods: {
        ...mapActions(['setExchangeInfo', 'setAccount', 'setSymbol', 'setSymbolTick', '']),
        setQty(qtyPercent) {
            let balance = Array.from(this.account.balances).filter((item) => {
                return item.asset == this.symbol.baseAsset
            });
            if (balance.length) {
                this.order.quantity = parseFloat(balance[0]['free']) * (qtyPercent / 100)
            }

        },
        symbolTickerStream() {
            let symbol = this.symbol ? this.symbol.symbol : 'BNBBUSD'

            let app = this
            app.wsSymbolTick = new WebSocket('wss://stream.binance.com:9443/ws/' + symbol.toLowerCase() + '@ticker');

            app.wsSymbolTick.onmessage = function (event) {
                let tick = JSON.parse(event.data)
                document.title = parseFloat(tick.c) + ' - ' + tick.s + ' @ ' + app.exchange.toUpperCase()
                app.setSymbolTick(tick)

            };
            app.wsSymbolTick.onerror = function (error) {
                console.log(`[error] ${error.message}`);
            };
        },
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
                .post('/terminal/exchange/get-orders/', {
                    symbol: this.symbol.symbol,
                    account_id: this.activeExchangeAccount.id
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
                    ...this.order,
                    symbol: this.symbol.symbol,
                    baseAsset: this.symbol.baseAsset,
                    quoteAsset: this.symbol.quoteAsset,
                    account_id: this.activeExchangeAccount.id

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
                        this.getAccount()
                        this.order.price = 0
                        this.order.quantity = 0
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
                        this.setExchangeInfo(response.data)
                        if (Object.keys(response.data.symbols).length) {
                            let filtered = response.data.symbols.filter((item) => {
                                return item.symbol == 'BTCUSDT'
                            })

                            if(filtered.length){
                                this.setSymbol(filtered[0])
                            }else{
                                this.setSymbol(response.data.symbols[Object.keys(response.data.symbols)[0]])
                            }
                        }

                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                });
        },
        getAccount() {
            axios
                .get('/terminal/exchange/account/' + this.activeExchangeAccount.id)
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.setAccount(response.data)
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
        ...mapGetters(['appData', 'account', 'exchangeInfo', 'symbol', 'activeExchangeAccount', 'exchange']),
        tradingViewPair() {
            if (!this.symbol) return 'ETH:BTC'

            return this.symbol.symbol;
        }
    },
    created() {

    },
    mounted() {
        this.symbolTickerStream()
        this.getExchangeInfo()
        setTimeout(() => {
            this.load = true
        }, 3000)
    }

}
</script>

<style lang="scss">
.qty-percent {
    display: flex;
    list-style: none;
    margin: 5px 0 0;
    padding: 0;
    justify-content: space-between;

    > li {
        button {
            --btn-border-radius: 3px;
            --btn-tab-bg: var(--color-blue-60);
            --btn-tab-hover-bg: var(--color-blue-50);
            background-color: var(--btn-tab-bg);

            position: relative;
            display: block;
            padding: 3px 9px;
            border: none;
            border-radius: 3px;

            color: var(--color-white);
            font-weight: 400;
            font-size: 12px;
            text-align: center;
            line-height: 1.2;
        }
    }

}

.cs--interface .cs--btn-group .cs--btn {
    padding: 6px 16px;
    font-size: 11px;
    white-space: nowrap;
}

.scroll-area {
    width: 224px;
}

</style>
