<template>
    <main class="cs--page cs--dashboard--news-article">
        <Loader :active="!load"></Loader>
        <div class="cs--container" v-if="load">
            <h1 class="cs--page__title">{{ item.title[appData.lang] }}</h1>
            <div class="cs--page-side-wrapper">
                <article class="cs--article">
                    <div class="cs--article__content">
                        <div class="cs--article__img-crop" v-if="item.thumbnail_url">
                            <img :src="item.thumbnail_url" alt="">
                        </div>
                        <div class="cs--article__meta">
                            <span>{{ item.created_at }}</span>
                        </div>
                        <div v-html="item.content[appData.lang]">

                        </div>
                    </div>
                    <div class="cs--article__nav">
                        <router-link
                            :to="'/news/'+item.prev"
                            class="cs--btn cs--btn--transparent-grad-blue"
                            v-if="item.prev">{{ $__("Previous") }}</router-link>
                        <router-link
                            :to="'/news/'+item.next"
                            class="cs--btn cs--btn--grad-blue"
                            v-if="item.next"
                        ><span>{{ $__("Next") }}</span></router-link>
                    </div>
                </article>

                <AsideFaq/>
            </div>
        </div>
    </main>
</template>

<script>
import AsideFaq from "../components/AsideFaq";
import {mapGetters} from 'vuex'
import Loader from "../components/Loader";

export default {
    name: "NewsItem",
    data() {
        return {
            item: null,
            load: false
        }
    },
    props: ['id'],
    methods: {
        getNews() {
            axios
                .get('/terminal/news/' + this.id, {})
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
                    this.load=true
                });
        }
    },
    mounted() {
        this.getNews()
    },
    components: {
        AsideFaq,
        Loader
    },
    computed: {
        ...mapGetters(['appData'])
    },
    watch: {
        id(newValue, oldValue) {
            this.getNews()
        }
    },

}
</script>

<style scoped>

</style>
