<template>
    <v-card
        class="mx-auto mb-2 orders-widget">
        <v-toolbar dark>
            <v-app-bar-nav-icon></v-app-bar-nav-icon>
            <v-toolbar-title>{{ title }}</v-toolbar-title>
        </v-toolbar>
        <v-simple-table v-if="orders.length" dark>
            <template v-slot:default>
                <thead>
                <tr>
                    <th>
                        Цена {{ symbol.quoteAsset }}
                    </th>
                    <th>
                        Кол-во {{ symbol.baseAsset }}
                    </th>
                    <th>
                        Всего {{ symbol.quoteAsset }}
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr
                    v-for="(order,key) in orders"
                    :key="key"

                >
                    <td><span
                        :class="{'red--text':!order.m,'green--text':order.m }">{{ order.p }}</span></td>
                    <td>{{ order.q }}</td>
                    <td>{{ order.p }}</td>
                </tr>
                </tbody>
            </template>
        </v-simple-table>
        <v-card-text v-else>{{ $__("Нет отрытых сделок по данному инструменту") }}</v-card-text>
    </v-card>
</template>

<script>
export default {
    name: "OrdersWidget",
    data: () => ({
        orders: [],
        socket: null,
        url:'wss://stream.binance.com:9443/ws/'
    }),
    props: {
        limit: {
            type: Number,
            default: 6
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
        connectWS() {
            let app = this
            let apiUrl=this.url +this.symbol.symbol.toLowerCase() + "@aggTrade"

            this.socket = new WebSocket(apiUrl);
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
    },
    computed: {

    },
    mounted() {
        this.connectWS()
    }
}
</script>

<style lang="scss" scoped>
.orders-widget{
    .v-data-table>.v-data-table__wrapper>table>tbody>tr>td, .v-data-table>.v-data-table__wrapper>table>tbody>tr>th, .v-data-table>.v-data-table__wrapper>table>tfoot>tr>td, .v-data-table>.v-data-table__wrapper>table>tfoot>tr>th, .v-data-table>.v-data-table__wrapper>table>thead>tr>td, .v-data-table>.v-data-table__wrapper>table>thead>tr>th {
        padding: 0 3px;
        text-align: center;
    }
}

</style>
