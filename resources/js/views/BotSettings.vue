<template>
    <main class="cs--page cs--dashboard--user-profile">
        <div class="cs--container">
            <h1 class="cs--page__title">{{ $__("Bot settings") }}</h1>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form" @submit.prevent="saveSettings()">
                    <h2 class="cs--dashboard-form__title">{{ $__("Configuration data") }}</h2>

                    <div class="cs--dashboard-form__item">
                        <label class="cs--dashboard-form__label">{{ $__("Configuration Name") }}</label>

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                v-model="formData.name"
                                type="text"
                                class="cs--dashboard-form__input"
                                required
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label class="cs--dashboard-form__label">{{ $__("Description") }}</label>

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                v-model="formData.description"
                                type="text"
                                class="cs--dashboard-form__input"
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item" v-if="appData">
                        <label class="cs--dashboard-form__label">{{ $__("Exchange") }}</label>
                        <div
                            class="cs--dashboard-form__input-wrapper cs--dashboard-form__input--arrow"
                        >
                            <select
                                class="cs--dashboard-form__input"
                                v-model="formData.exchange"
                            >
                                <option value="">{{ $__("Select") }}</option>
                                <option :value="exchange.slug" v-for="exchange in appData.exchanges">{{
                                        exchange.name
                                    }}
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item" v-if="appData">
                        <label class="cs--dashboard-form__label">{{ $__("Account") }}</label>
                        <div
                            class="cs--dashboard-form__input-wrapper cs--dashboard-form__input--arrow"
                        >
                            <select
                                class="cs--dashboard-form__input"
                                v-model="formData.account_id"
                                required
                            >
                                <option value="">{{ $__("Select") }}</option>
                                <option :value="exchange.id" v-for="exchange in appData.user.exchanges">{{
                                        exchange.title
                                    }}
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item" v-if="exchangeInfo">
                        <label class="cs--dashboard-form__label">{{ $__("Market") }}</label>
                        <div
                            class="cs--dashboard-form__input-wrapper cs--dashboard-form__input--arrow"
                        >
                            <select
                                class="cs--dashboard-form__input"
                                v-model="formData.symbol"
                                required
                            >
                                <option value="">{{ $__("Select") }}</option>
                                <option :value="key" v-for="(symbol,key) in exchangeInfo.symbols">{{
                                        key
                                    }}
                                </option>
                            </select>
                        </div>
                    </div>


                    <hr>
                    <h2 class="cs--dashboard-form__title">{{ $__("Strategy Settings") }}</h2>

                    <div class="cs--dashboard-form__item">
                        <label class="cs--dashboard-form__label">{{ $__("Candle Timeframe") }}</label>

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <select
                                v-model="formData.timeframe"
                                class="cs--dashboard-form__input"
                                required
                            >
                                <option value="1T">1 Minute</option>
                                <option value="5T">5 Minute</option>
                                <option value="15T">15 Minute</option>
                                <option value="30T">30 Minute</option>
                                <option value="1H">1 Hour</option>
                                <option value="4H">4 Hour</option>
                                <option value="1D">Daily</option>
                            </select>
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label class="cs--dashboard-form__label">{{ $__("MACD Slow Period") }}</label>

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                v-model.number="formData.slow_period"
                                type="number"
                                class="cs--dashboard-form__input"
                                min="1"
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label class="cs--dashboard-form__label">{{ $__("MACD Fast Period") }}</label>

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                v-model.number="formData.fast_period"
                                type="number"
                                class="cs--dashboard-form__input"
                                min="1"
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label class="cs--dashboard-form__label">{{ $__("MACD Signal Period") }}</label>

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                v-model.number="formData.signal_period"
                                type="number"
                                class="cs--dashboard-form__input"
                                min="1"
                            />
                        </div>
                    </div>


                    <div class="cs--dashboard-form__btn-group">
                        <Button :preloader="process" type="submit" class="cs--btn cs--btn--grad-blue">
                            {{ $__("Save changes") }}
                        </Button>
                    </div>
                </form>

                <AsideFaq/>
            </div>
        </div>
    </main>
</template>

<script>
import {mapGetters} from 'vuex'
import AsideFaq from "../components/AsideFaq";
import Button from "../components/Button";

export default {
    name: "BotSettings",
    props: ['id'],
    data() {
        return {
            formData: {
                bot: this.id,
                name: '',
                account_id: '',
                symbol: '',
                description: '',
                exchange: 'binance',
                timeframe: '4H',
                slow_period: 26,
                fast_period: 16,
                signal_period: 9,
            },

            process: false,
            exchangeInfo: null,
        }
    },
    methods: {
        getSettings() {
            axios
                .get('/terminal/bot-settings/' + this.id)
                .then(response => {
                    if (response.status == 200 && response.data) {
                        if (response.data.settings) {
                            this.formData = response.data.settings
                        }
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                })
                .finally(() => {
                    // Will be executed upon completion catch & then
                });
        },
        getExchangeInfo() {
            axios
                .post('/terminal/exchange/get-info/' + this.formData.exchange)
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.exchangeInfo = response.data
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                });
        },
        saveSettings() {
            this.process = true
            axios
                .post('/terminal/save-bot-settings', this.formData)
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.$notify.success({
                            position: 'top right',
                            title: this.$__('Success'),
                            msg: response.data.message,
                            timeout: 3000
                        })
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                })
                .finally(() => {
                    this.process = false
                });
        }
    },
    computed: {
        ...mapGetters(['appData']),
    },
    components: {
        Button,
        AsideFaq
    },
    watch: {
        exchange(newValue, oldValue) {
            if (newValue)
                this.getExchangeInfo()
        }
    },
    mounted() {
        this.getExchangeInfo()
        this.getSettings()
    }
}
</script>

<style lang="scss" scoped>
.app-profile {
    max-width: 680px;
    margin: 50px auto;
}
</style>
