<template>
    <main class="cs--page cs--dashboard--faq">
        <Loader :active="!load"/>
        <section class="cs--section" v-if="item">
            <div class="cs--container">

                <h1 class="cs--page__title">{{ item.question[appData.lang] }}</h1>
                <div class="cs--page-side-wrapper">
                    <article class="cs--article">
                        <div class="cs--article__content" v-html="item.answer[appData.lang]">
                        </div>
                    </article>
                    <AsideFaq/>
                </div>

            </div>
        </section>
    </main>
</template>

<script>
import {mapGetters} from "vuex";
import Loader from "../components/Loader";
import AsideFaq from "../components/AsideFaq";

export default {
    name: "FaqItem",
    props: ['id'],
    data() {
        return {
            item: null,
            load: false
        }
    },
    methods: {
        getItem() {
            axios
                .get('/terminal/faq-item/' + this.id, {})
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.item = response.data
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                })
                .finally(() => {
                    this.load = true
                });
        }
    },
    computed: {
        ...mapGetters(['appData'])
    },
    mounted() {
        this.getItem()
    },
    components: {
        Loader,
        AsideFaq
    }

}
</script>

<style scoped>

</style>
