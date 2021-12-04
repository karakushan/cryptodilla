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
                <li class="cs--exchange-card" v-for="(exchange,index) in exchanges">
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
                                :href="exchange.register_link"
                                class="cs--btn cs--btn--grad-blue"
                                target="_blank"
                            >{{ $__("Open") }}</a
                            >
                            <router-link
                                :to="{
                                    name:'ConnectExchange',
                                    params: {exchange: exchange,id:exchange.id}
                                }"

                                class="cs--btn cs--btn--transparent-grad-blue"
                            >{{ $__("Connect") }}
                            </router-link>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </main>
</template>

<script>
export default {
    name: "SelectExchange",
    data() {
        return {
            exchanges: []
        }
    },
    mounted() {
        this.getExchanges()
    },
    methods: {
        getExchanges(){
             axios
              .get('/terminal/exchanges', {

              })
              .then(response => {
              	if (response.status == 200 && response.data) {
              		this.exchanges=response.data
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
        disconnectExchange(exchange_id) {
            if (confirm('Подтверждаете удаление всех данных?')) {
                axios
                    .post('/terminal/deattach-exchange', {
                        exchange_id: exchange_id
                    })
                    .then(response => {
                        this.getExchanges()

                        if (response.status == 200 && response.data) {
                            this.$notify.success({
                                position: 'top right',
                                title: this.$__('Успех'),
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
                        // Will be executed upon completion catch & then
                    });
            }
        }
    }

}
</script>

<style scoped>

</style>
