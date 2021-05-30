<template>
    <main class="cs--page cs--dashboard--select-exchange">
        <div class="cs--container">
            <h1 class="cs--page__title">{{ $__("Bots") }}</h1>
            <p class="cs--page__sub-title">
                Bots are algorithms that automate trading based on pre-defined rules or strategies. There are both
                simple and advanced strategies available. Click Read More to learn about a particular strategy,
                configure its parameters, and back-test (where available) before running it live.
            </p>
            <ul class="cs--exchange-list">
                <li class="cs--exchange-card" v-for="(bot,index) in bots">
                    <div class="cs--exchange-card__img">
                        <img :src="bot.img" :alt="bot.name" width="90"/>
                    </div>
                    <div class="cs--exchange-card__content">
                        <h2 class="cs--exchange-card__title">{{ bot.name }}</h2>
                        <p class="cs--exchange-card__text">{{ bot.description }}</p>
                        <div class="cs--exchange-card__btn-group">
                            <router-link :to="'/bot/'+index" class="cs--btn cs--btn--transparent-grad-blue">{{ $__("Select") }}
                            </router-link>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </main>
</template>

<script>
import {mapGetters} from 'vuex';

export default {
    name: "Bots",
    data() {
        return {}
    },
    mounted() {
        this.getExchanges()
    },
    methods: {},
    computed: {
        ...mapGetters(['bots'])
    }

}
</script>

<style scoped>
.cs--exchange-card__text {
    font-size: 12px;
    line-height: 1.4;
}
</style>
