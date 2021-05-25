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
                <tr v-for="ask in book.asks">
                    <td data-label="Size" class=""><span>{{ parseFloat(ask[1]) }}</span></td>

                    <td :data-label="'Price ('+symbol.quoteAsset+')'" class="cs--color-danger">
                        <span>{{ parseFloat(ask[0]) }}</span>
                    </td>

                    <td data-label="Total" class="cs--color-secondary">
                        <span>{{ parseFloat(ask[1] * ask[0]) }}</span>
                    </td>
                </tr>
                <tr>
                    <td
                        colspan="3"
                        :class="{'cs--table__break-point':true, 'cs--color-success':price.direction,'cs--color-danger':!price.direction}"
                    >
                        {{ price.value }} ≈ {{ price.change }} USD
                    </td>
                </tr>

                <tr v-for="bid in book.bids">
                    <td data-label="Size" class=""><span>{{ parseFloat(bid[1]) }}</span></td>

                    <td :data-label="'Price ('+symbol.quoteAsset+')'" class="cs--color-success">
                        <span>{{ parseFloat(bid[0]) }}</span>
                    </td>

                    <td data-label="Total" class="cs--color-secondary">
                        <span>{{ parseFloat(bid[1] * bid[0]) }}</span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</template>

<script>
export default {
    name: "OrderBookWidget",
    data: () => ({
        orders: [],
        socket: null,
        url: 'wss://stream.binance.com:9443/ws/',
        book: {},
        price: {
            value: 0,
            change:0,
            direction: 'up'//or down
        }
    }),
    props: {
        limit: {
            type: Number,
            default: 11
        },
        symbol: {
            type: Object,
            default() {
                return {}
            }
        },
        title: {
            type: String,
            default: 'Ордера'
        },
    },
    watch: {
        symbol(newValue, oldValue) {

            if (this.socket)
                this.socket.close()

            this.orders = []
            this.connectWS()


        }
    },
    methods: {
        streamPrice() {
            if (!this.symbol) return

            let app = this
            let ws = new WebSocket(this.url + this.symbol.symbol.toLowerCase() + '@ticker');

            ws.onmessage = function (event) {

                let data=JSON.parse(event.data)
                app.price.direction=parseFloat(data['c'])>parseFloat(app.price.value )
                app.price.value=parseFloat(data['c'])
                app.price.change=parseFloat(data['h'])
            };

            ws.onclose = function (event) {
                if (event.wasClean) {
                    console.log(`[close] Соединение закрыто чисто, код=${event.code} причина=${event.reason}`);
                } else {
                    // например, сервер убил процесс или сеть недоступна
                    // обычно в этом случае event.code 1006
                    console.log('[close] Соединение прервано');
                }
            };

            ws.onerror = function (error) {
                console.log(`[error] ${error.message}`);
            };
        },
        connectWS() {
            let app = this
            let apiUrl = this.url + this.symbol.symbol.toLowerCase() + "@depth10@1000ms"

            this.socket = new WebSocket(apiUrl);
            this.socket.onopen = function (e) {
                // console.log("[open] Соединение установлено");
            };

            this.socket.onmessage = function (event) {
                app.book = JSON.parse(event.data)
            };

            this.socket.onclose = function (event) {
                if (event.wasClean) {
                    console.log(`[close] Соединение закрыто чисто, код=${event.code} причина=${event.reason}`);
                } else {
                    // например, сервер убил процесс или сеть недоступна
                    // обычно в этом случае event.code 1006
                    console.log('[close] Соединение прервано');
                }
            };

            this.socket.onerror = function (error) {
                console.log(`[error] ${error.message}`);
            };
        }
    },
    computed: {},
    mounted() {
        this.connectWS()
        this.streamPrice()
    }
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
