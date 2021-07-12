<template>
    <form class="mb-2">
        <div class="cs--dashboard-form__item">
            <label for="dashboard--exchange" class="cs--dashboard-form__label">{{ $__("Exchange") }}</label>

            <div class="cs--dashboard-form__input-wrapper cs--dashboard-form__input--arrow">
                <select id="dashboard--exchange" class="cs--dashboard-form__input" v-model="exchange">
                    <option :value="exchange.slug" v-for="exchange in appData.exchanges">{{ exchange.name }}</option>
                </select>
            </div>
        </div>

        <div class="cs--dashboard-form__item" v-if="appData">
            <label for="dashboard--account" class="cs--dashboard-form__label">{{ $__("Account") }}</label>

            <div class="cs--dashboard-form__input-wrapper cs--dashboard-form__input--arrow">
                <select v-model="account" id="dashboard--account" class="cs--dashboard-form__input">
                    <option value="" selected>{{ $__("Select Account") }}</option>
                    <option :value="ex" v-for="ex in appData.user.exchanges">{{ ex.title }}</option>
                </select>
            </div>
        </div>
        <div v-if="!account">
            <div class="cs--interface__alert">
                <img src="/img/disconnect.svg" alt="">
                <h3 class="cs--interface__alert-title">{{ $__("No Account") }}</h3>
                <span class="cs--interface__alert-text">{{ $__("Connect your %s account to start trading").replace('%s',exchange.toUpperCase()) }}</span>
            </div>
            <router-link
                tag="button"
                to="/select-exchange"
                class="cs--btn cs--btn--success">{{ $__("Add Account") }}
            </router-link>
        </div>
    </form>
</template>

<script>
import {mapGetters, mapActions} from 'vuex'

export default {
    name: "SelectExchangeWidget",
    data() {
        return {
            exchange: 'binance',
            account: ''
        }
    },
    computed: {
        ...mapGetters(['appData', 'activeExchangeAccount'])
    },
    methods: {
        ...mapActions(['setActiveExchangeAccount','setExchange']),

    },
    watch: {
        account(newValue, oldValue) {
                this.setActiveExchangeAccount(newValue)
        },
        exchange(newValue){
            this.setExchange(newValue)
        }
    },
}
</script>

<style scoped>

</style>
