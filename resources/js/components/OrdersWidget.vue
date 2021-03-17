<template>
    <v-card
        class="mx-auto">
        <v-toolbar dark>
            <v-app-bar-nav-icon></v-app-bar-nav-icon>
            <v-toolbar-title>Ордера</v-toolbar-title>
        </v-toolbar>
        <v-simple-table dark>
            <template v-slot:default>
                <thead>
                <tr>
                    <th class="text-left">
                        Цена USDT
                    </th>
                    <th class="text-left">
                        Кол-во 1INCH
                    </th>
                    <th class="text-left">
                        Всего USDT
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr
                    v-for="(order,key) in orders"
                    :key="key"
                    :class="{'green':order.m, 'darken-1':true, 'red':!order.m,}"
                >
                    <td>{{ order.p }}</td>
                    <td>{{ order.q }}</td>
                    <td>{{ order.p }}</td>
                </tr>
                </tbody>
            </template>
        </v-simple-table>
    </v-card>
</template>

<script>
export default {
    name: "OrdersWidget",
    data: () => ({
        connection: null,
        orders: [],
    }),
    props: {
        limit: {
            type: Number,
            default: 5
        },
        pair: {
            type: String,
            default: 'bnbusdt'
        },
    },
    mounted() {
        let app = this
        this.socket = new WebSocket(process.env.MIX_BINANCE_WS_URL+"bnbusdt@trade");
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
