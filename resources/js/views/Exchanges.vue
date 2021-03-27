<template>
    <v-container>
        <v-row>
            <v-col lg="3" v-for="exchange in appData.exchanges">
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
                            Подключить
                        </v-btn>
                        <v-btn
                            outlined
                            rounded
                            text
                            color="warning"
                        >
                            Регистрация
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
                    <p>Перед подключением биржи необходимо создать аккаунт. <a href="#" target="_blank">Создать аккаунт
                        {{ exchange.name }}</a>.</p>
                    <v-form>
                        <v-text-field
                            counter="25"
                            label="API ключ"
                        ></v-text-field>
                        <v-text-field
                            counter="25"
                            label="Секретный ключ"
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
                        color="green darken-1"
                        @click="dialog = false"
                    >
                        Подключить
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-container>
</template>

<script>
import {mapGetters} from "vuex";

export default {
    name: "Exchanges",
    data() {
        return {
            dialog: false,
            exchange: null
        }
    },
    computed: {
        ...mapGetters(['appData']),
    },
    methods: {
        includeExchange(exchange) {
            this.exchange = exchange
            this.dialog = true
        }
    },
}
</script>

<style scoped>

</style>
