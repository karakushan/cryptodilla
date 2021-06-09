<template>
    <aside class="cs--page-side">
        <h3 class="cs--page-side__title">FAQs</h3>
        <ul class="cs--page-side__item-list">
            <li class="cs--page-side__item" v-for="faq in faqs.data" v-if="faqs">
                <router-link
                    class="cs--page-side__link"
                    :to="'/faq/'+faq.id">{{ faq.question[appData.lang] }}</router-link>
            </li>

            <li class="cs--page-side__item">

                <router-link
                    to="/support"
                    class="cs--page-side__link cs--page-side__link--accent"
                >{{ $__("Visit Support Center") }}</router-link>
            </li>
        </ul>
    </aside>
</template>

<script>
import {mapGetters} from 'vuex'
export default {
    name: "AsideFaq",
    data() {
        return {
            faqs: null
        }
    },
    props: {
        category: {
            type: String,
            default: ''
        },
    },
    computed: {
        ...mapGetters(['appData'])
    },
    methods: {
        getFaqs() {
            axios
                .get('/terminal/faq/'+this.category, {})
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.faqs = response.data
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
    },
    mounted() {
        this.getFaqs()
    }
}
</script>

<style scoped>

</style>
