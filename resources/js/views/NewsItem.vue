<template>
    <main class="cs--page cs--dashboard--news-article">
        <div class="cs--container">
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
                        <a href="javascript:void(0)" class="cs--btn cs--btn--transparent-grad-blue">Previous</a>
                        <a href="javascript:void(0)" class="cs--btn cs--btn--grad-blue"><span>Next</span></a>
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
export default {
    name: "NewsItem",
    data() {
        return {
            item: null
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
                    // Will be executed upon completion catch & then
                });
        }
    },
    mounted() {
        this.getNews()
    },
    components:{
        AsideFaq
    },
    computed:{
        ...mapGetters(['appData'])
    }

}
</script>

<style scoped>

</style>
