<template>
    <v-row>
        <v-col md="2">
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
                            <td >{{ order.p }}</td>
                            <td>{{ order.q }}</td>
                            <td>{{ order.p }}</td>
                        </tr>
                        </tbody>
                    </template>
                </v-simple-table>
            </v-card>
        </v-col>
        <v-col md="8">
            <TradingView/>
        </v-col>
        <v-col md="2">

        </v-col>
    </v-row>
</template>

<script>
import TradingView from "../components/TradingView";

export default {
    name: "Trading",
    data: () => ({
        connection: null,
        orders: []
    }),
    components: {
        TradingView
    },
    mounted() {
        let app = this
        this.socket = new WebSocket("wss://stream.binance.com:9443/ws/bnbusdt@trade");

        this.socket.onopen = function (e) {
            console.log("[open] Соединение установлено");
        };

        this.socket.onmessage = function (event) {
            let trade = JSON.parse(event.data)
            app.orders.unshift(trade)
            if (app.orders.length>10){
                app.orders.splice(10,app.orders.length-10)
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
.v-data-table>.v-data-table__wrapper>table>tbody>tr>td, .v-data-table>.v-data-table__wrapper>table>tbody>tr>th, .v-data-table>.v-data-table__wrapper>table>tfoot>tr>td, .v-data-table>.v-data-table__wrapper>table>tfoot>tr>th, .v-data-table>.v-data-table__wrapper>table>thead>tr>td, .v-data-table>.v-data-table__wrapper>table>thead>tr>th {
    text-align: center;
    padding: 0 4px;
    transition: height .2s cubic-bezier(.4,0,.6,1);
    font-size: 13px!important;
}
</style>
