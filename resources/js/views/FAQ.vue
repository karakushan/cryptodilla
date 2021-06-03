<template>
    <main class="cs--page cs--dashboard--faq">
        <section class="cs--section">
            <div class="cs--container">
                <h1 class="cs--page__title">{{ $__("Frequenty Asked Questions") }}</h1>

                <ul class="cs--details-list">
                    <li class="cs--details-wrapper" v-for="faq in faqs.data" >
                        <details data-details="" class="cs--details-item" style="">
                            <summary data-details-summary="" class="cs--details-summary">
                                {{ faq.question[appData.lang] }}
                            </summary>
                            <div data-details-content="" class="cs--details-content" v-html="faq.answer[appData.lang]"></div>
                        </details>
                    </li>
                </ul>
            </div>
        </section>
    </main>
</template>

<script>
import {mapGetters} from 'vuex'

export default {
    name: "FAQ",
    data() {
        return {
            faqs: []
        }
    },
    mounted() {
        axios
            .get('/terminal/faq')
            .then(response => {
                if (response.status == 200 && response.data) {
                    this.faqs = response.data
                }
            })
            .catch(error => {
                // console.log(error.response);
                console.log(error.response.data);
            });
    },
    computed: {
        ...mapGetters(['appData'])
    }
}
</script>

<style scoped>

</style>
