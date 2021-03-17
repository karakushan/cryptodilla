<template>
    <v-row>
        <v-col md="2">
            <OrdersWidget/>
        </v-col>
        <v-col md="8">
            <v-card class="mx-auto">
                <v-toolbar dark>
                    <v-row>
                        <v-col md="2">
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
                        <v-col md="2">
                            <v-autocomplete
                                v-model="exchange"
                                :items="exchanges"
                                item-text="name"
                                item-value="slug"
                                label="Выберите биржу"
                                solo

                            >
                                <template v-slot:selection="data,key">
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
                    </v-row>
                </v-toolbar>
            </v-card>
            <TradingView/>
        </v-col>
        <v-col md="2">

        </v-col>
    </v-row>
</template>

<script>
import TradingView from "../components/TradingView";
import OrdersWidget from "../components/OrdersWidget";
export default {
    name: "Trading",
    data: function () {
        return {
            exchange: 'binance',
            exchanges: [],
            pairs: []
        }
    },
    components: {
        TradingView,
        OrdersWidget
    },
    props: {},
    methods: {
        getCurrentExchange() {
            if (!this.exchanges.length || !this.exchange) return null;

            let exchange = this.exchanges.filter((item) => {
                return item.slug == this.exchange
            })

            if (exchange.length) return exchange[0]
        },
        getExchangeInfo(exchange) {


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
    mounted() {
        this.getExchanges().then(()=>{
            let exchange = this.getCurrentExchange()
            console.log(exchange);
            this.getExchangeInfo(exchange)
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
