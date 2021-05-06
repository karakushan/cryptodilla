<template>
    <main class="cs--page cs--dashboard--select-exchange">
        <div class="cs--container">
            <h1 class="cs--page__title">{{ $__("Select Exchange") }}</h1>
            <p class="cs--page__sub-title">
                CryptoSystem Platform offers high-performance connectivity with the
                following leading global cryptocurrency exchanges.<br/>Open a new
                account or connect an existing account to get started.
            </p>
            <ul class="cs--exchange-list">
                <li class="cs--exchange-card" v-for="(exchange,index) in appData.exchanges">
                    <div class="cs--exchange-card__img">
                        <img :src="exchange.logo_url" :alt="exchange.name" width="90"/>
                    </div>
                    <div class="cs--exchange-card__content">
                        <h2 class="cs--exchange-card__title">{{ exchange.name }} {{ $__("Bonus Offer") }}</h2>
                        <ul class="cs--bullet-list">
                            <li class="cs--bullet-list__item">
                                6 months free Quadency Pro + $100 bonus for new accounts
                            </li>

                            <li class="cs--bullet-list__item">
                                3 months free Quadency Pro for existing accounts
                            </li>
                        </ul>
                        <div class="cs--exchange-card__btn-group">
                            <a
                                href="javascript:void(0)"
                                class="cs--btn cs--btn--grad-blue"
                            >{{ $__("Open") }}</a
                            >
                            <router-link :to="'/select-exchange/'+index"
                                class="cs--btn cs--btn--transparent-grad-blue"
                            >{{ $__("Connect") }}</router-link
                            >
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </main>
</template>

<script>
import {mapGetters} from "vuex";

export default {
    name: "SelectExchange",
    computed: {
        ...mapGetters(['appData']),
    },

}
</script>

<style scoped>

</style>
