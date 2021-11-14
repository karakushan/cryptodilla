<template>
    <section
        class="cs--interface__block cs--interface__block--trade-history"
    >
        <h2 class="cs--interface__block-title">{{ $__("Trade History") }}</h2>

        <div class="cs--table-wrapper">
            <table class="cs--table">
                <thead>
                <tr>
                    <th class="">{{ $__("Price") }} ({{ quoteAsset }})</th>

                    <th class="">{{ $__("Amount") }}</th>

                    <th class="">{{ $__("Time") }}</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="trade in orders">
                    <td :data-label="'Price ('+quoteAsset+')'" :class="{
                        'cs--color-success':trade.m,
                        'cs--color-danger':!trade.m
                    }">
                        <span>{{ parseFloat(trade.p) }}</span>
                    </td>

                    <td data-label="Amount" class=""><span>{{ parseFloat(trade.q) }}</span></td>

                    <td data-label="Time" class="cs--color-secondary">
                        <span>{{ $moment(trade.T).format('HH:mm:ss') }}</span>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </section>
</template>

<script>
import binance from "../lib/binance";
import {mapGetters} from 'vuex'

export default {
    name: "OrdersHistoryWidget",
    data: () => ({
        connection: null,
        orders: [],
        timer: null
    }),
    props: {
        limit: {
            type: Number,
            default: 12
        },
        quoteAsset: {
            type: String,
            default: 'USDT'
        },
        title: {
            type: String,
            default: 'История торгов'
        },
    },
    methods: {},
    watch: {
        trades(newValue, oldValue) {
            this.orders.unshift(newValue)
            if (this.orders.length > this.limit) {
                this.orders.splice(this.limit, this.orders.length - this.limit)
            }
        },
        'symbol.symbol': function () {
            this.orders = []
        }
    },
    mounted() {
    },
    computed: {
        ...mapGetters(['symbol', 'trades'])
    },
}
</script>

<style scoped>

</style>
