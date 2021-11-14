<template>
    <section
        class="cs--interface__block cs--interface__block--order-book"
    >
        <h2 class="cs--interface__block-title">{{ $__("Order Book") }}</h2>
        <div class="cs--table-wrapper" style="width: 224px;">
            <table class="cs--table">
                <thead>
                <tr>
                    <th class="">{{ $__("Size") }}</th>

                    <th class="">{{ $__("Price") }} ({{ symbol.quoteAsset }})</th>

                    <th class="">{{ $__("Total") }}</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="ask in depths.asks" v-if="depths && parseFloat(ask[1])>0">
                    <td data-label="Size" class=""><span>{{ parseFloat(ask[1]).toFixed(3) }}</span></td>

                    <td :data-label="'Price ('+symbol.quoteAsset+')'" class="cs--color-danger">
                        <span>{{ parseFloat(ask[0]) }}</span>
                    </td>

                    <td data-label="Total" class="cs--color-secondary">
                        <span>{{ parseFloat(ask[1] * ask[0]).toFixed(2) }}</span>
                    </td>
                </tr>
                <tr v-if="symbolTick">
                    <td
                        colspan="3"
                        :class="{'cs--table__break-point':true, 'cs--color-success':up,'cs--color-danger':!up}"
                    >
                        {{ parseFloat(symbolTick.c) }} ≈ {{priceInUSDT}} USD
                    </td>
                </tr>

                <tr v-for="bid in depths.bids" v-if="depths && parseFloat(bid[1])>0">
                    <td data-label="Size" class=""><span>{{ parseFloat(bid[1]).toFixed(3) }}</span></td>

                    <td :data-label="'Price ('+symbol.quoteAsset+')'" class="cs--color-success">
                        <span>{{ parseFloat(bid[0]) }}</span>
                    </td>

                    <td data-label="Total" class="cs--color-secondary">
                        <span>{{ parseFloat(bid[1] * bid[0]).toFixed(2) }}</span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</template>

<script>
import {mapGetters} from 'vuex'
import binance from "../lib/binance";

export default {
    name: "OrderBookWidget",
    data: () => ({
        oldPrice: 0,
        up: true,
        priceInUSDT: 0

    }),
    props: {
        limit: {
            type: Number,
            default: 11
        },
        title: {
            type: String,
            default: 'Ордера'
        },
    },
    watch: {
        symbolTick(e) {
            this.up = this.oldPrice < parseFloat(e.c)
            this.oldPrice = parseFloat(e.c)
        },
        'symbol.symbol': function () {
            this.getAvgPrice(this.symbol.baseAsset + 'USDT')
        }
    },
    computed: {
        ...mapGetters(['symbol', 'exchange', 'depths', 'symbolTick']),
    },
    mounted() {
        this.getAvgPrice()
    },
    methods: {
        getAvgPrice() {
            axios
                .get('/terminal/price/' + this.exchange + '/' + this.symbol.baseAsset + 'USDT', {})
                .then(response => {
                    if (response.status == 200) {
                        this.priceInUSDT = parseFloat(response.data.price)
                    }
                })
        }
    },
}
</script>

<style lang="scss" scoped>
.orders-widget {
    .v-data-table > .v-data-table__wrapper > table > tbody > tr > td, .v-data-table > .v-data-table__wrapper > table > tbody > tr > th, .v-data-table > .v-data-table__wrapper > table > tfoot > tr > td, .v-data-table > .v-data-table__wrapper > table > tfoot > tr > th, .v-data-table > .v-data-table__wrapper > table > thead > tr > td, .v-data-table > .v-data-table__wrapper > table > thead > tr > th {
        padding: 0 3px;
        text-align: center;
    }
}

</style>
