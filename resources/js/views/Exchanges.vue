<template>
    <v-container>
        <v-row>
            <v-col lg="3" v-for="exchange in appData.exchanges" :key="exchange.id">
                <v-card
                    class="mx-auto"
                    max-width="344"
                    outlined
                >
                    <v-list-item three-line>
                        <v-list-item-content>
                            <div class="overline">
                                БИРЖА
                            </div>
                            <v-list-item-title class="headline mb-1">
                                {{ exchange.name }}
                            </v-list-item-title>
                            <v-list-item-subtitle>{{ exchange.description }}</v-list-item-subtitle>
                        </v-list-item-content>

                        <v-list-item-avatar
                            tile
                            size="60"
                        >
                            <img :src="exchange.logo_url" alt="">
                        </v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions>
                        <v-btn
                            outlined
                            rounded
                            text
                            color="info"
                            @click="includeExchange(exchange)"
                        >
                            {{ exchange.credentials ? 'Изменить' : 'Привязать' }}
                        </v-btn>
                        <v-btn
                            outlined
                            rounded
                            text
                            color="warning"
                            v-if="!exchange.credentials"
                        >
                            Регистрация
                        </v-btn>
                        <v-btn
                            outlined
                            rounded
                            color="error"
                            v-else
                            @click.prevent="disableExchange(exchange.id)"
                        >
                            Отключиться
                        </v-btn>

                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
        <v-dialog v-if="exchange"
                  v-model="dialog"
                  max-width="450"
        >
            <v-card>
                <v-card-title class="headline">
                    Подключение биржи &laquo;{{ exchange.name }}&raquo;
                </v-card-title>

                <v-card-text>

                    <v-form ref="form">
                        <p>Перед подключением биржи необходимо создать аккаунт. <a href="#" target="_blank">Создать
                            аккаунт
                            {{ exchange.name }}</a>.</p>
                        <v-text-field
                            counter
                            label="API ключ"
                            v-model="credentials.apiKey"
                            :rules="requiredRules"
                            required
                        ></v-text-field>
                        <v-text-field
                            counter
                            label="Секретный ключ"
                            v-model="credentials.apiSecret"
                            :rules="requiredRules"
                            required
                        ></v-text-field>
                    </v-form>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>

                    <v-btn
                        color="red darken-1"
                        text
                        @click="dialog = false"
                    >
                        Отмена
                    </v-btn>

                    <v-btn
                        type="submit"
                        color="green darken-1"
                        @click.prevent="attachExchange()"
                    >
                        Отправить
                    </v-btn>
                </v-card-actions>
            </v-card>

        </v-dialog>
        <v-snackbar
            v-model="snackbar"
            color="success"
        >
            {{ statusText }}
        </v-snackbar>
    </v-container>
</template>

<script>
import {mapGetters, mapActions} from "vuex";

export default {
    name: "Exchanges",
    data() {
        return {
            dialog: false,
            exchange: null,
            credentials: {
                apiKey: null,
                apiSecret: null
            },
            requiredRules: [
                v => !!v || 'Поле необходимо заполнить',
            ],
            valid: false,
            attachStatus: false,
            statusText: null,
            snackbar: false
        }
    },
    computed: {
        ...mapGetters(['appData']),
    },
    methods: {
        ...mapActions(['setData']),
        getExchanges() {
            axios
                .get('/terminal/exchanges')
                .then(response => {
                    if (response.status == 200 && response.data) {
                        let data = Object.assign({
                            exchanges: response.data
                        }, this.appData)
                        this.setData({...this.appData, ...response.data})
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                });
        },
        validate() {
            this.$refs.form.validate()
        },
        reset() {
            this.$refs.form.reset()
        },
        resetValidation() {
            this.$refs.form.resetValidation()
        },
        attachExchange() {
            this.statusText = ''
            this.$refs.form.validate()

            if (this.credentials.apiKey && this.credentials.apiSecret)
                axios
                    .post('/terminal/attach-exchange', {
                        credentials: this.credentials,
                        exchange_id: this.exchange.id
                    })
                    .then(response => {
                        if (response.status == 200 && response.data) {
                            this.credentials.apiKey = null
                            this.credentials.apiSecret = null
                            this.statusText = response.data.message
                            this.snackbar = true
                            this.dialog = false
                            this.$refs.form.resetValidation()
                            this.getExchanges()
                        }
                    })
                    .catch(error => {
                        // console.log(error.response);
                        console.log(error.response.data);
                    });
        },
        disableExchange(exchangeId) {
            this.statusText = ''
            axios
                .post('/terminal/deattach-exchange', {
                    exchange_id: exchangeId
                })
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.snackbar = true
                        this.statusText = response.data.message
                        this.getExchanges()
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                });
        },
        includeExchange(exchange) {
            this.exchange = exchange
            this.dialog = true
        }
    },
}
</script>

<style scoped>

</style>
