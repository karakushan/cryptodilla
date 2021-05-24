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
        pair: {
            type: String,
            default: 'bnbusdt'
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
    mounted() {
        let app = this
        this.socket = new WebSocket(process.env.MIX_BINANCE_WS_URL + "/bnbusdt@trade");
        this.socket.onopen = function (e) {
            console.log("[open] Соединение установлено");
        };

        this.socket.onmessage = function (event) {
            let trade = JSON.parse(event.data)
            app.orders.unshift(trade)
            if (app.orders.length > app.limit) {
                app.orders.splice(app.limit, app.orders.length - app.limit)
            }
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
}
</script>

<style scoped>

</style>
