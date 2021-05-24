<template>
    <main class="cs--page cs--dashboard--news">
        <section class="cs--section">
            <div class="cs--container">
                <div class="cs--page__head">
                    <h1 class="cs--page__title">Latest News</h1>
                    <form class="cs--card-filter__form">
                        <ul class="cs--card-filter__filter-list">
                            <li class="cs--card-filter__filter-item">
                                <label for="Cryptocurrency" class="cs--card-filter__filter-label">
                                    <input id="Cryptocurrency" type="checkbox" class="cs--card-filter__filter-input">

                                    <span class="cs--card-filter__filter-title">Cryptocurrency</span>
                                </label>
                            </li>

                            <li class="cs--card-filter__filter-item">
                                <label for="BTC" class="cs--card-filter__filter-label">
                                    <input id="BTC" type="checkbox" class="cs--card-filter__filter-input">

                                    <span class="cs--card-filter__filter-title">BTC</span>
                                </label>
                            </li>

                            <li class="cs--card-filter__filter-item">
                                <label for="ETH" class="cs--card-filter__filter-label">
                                    <input id="ETH" type="checkbox" class="cs--card-filter__filter-input">

                                    <span class="cs--card-filter__filter-title">ETH</span>
                                </label>
                            </li>

                            <li class="cs--card-filter__filter-item">
                                <label for="USDT" class="cs--card-filter__filter-label">
                                    <input id="USDT" type="checkbox" class="cs--card-filter__filter-input">

                                    <span class="cs--card-filter__filter-title">USDT</span>
                                </label>
                            </li>
                        </ul>

                        <label for="search" class="cs--dashboard-form__input--search-wrapper ml-auto">
                            <input id="search" type="text"
                                   class="cs--dashboard-form__input cs--dashboard-form__input--search"
                                   placeholder="Search">
                            <button type="button" class="cs--dashboard-form__input--search-btn">
                                <svg class="cs--icon" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.1249 17.2413L13.4049 12.5213C14.5391 11.1596 15.1047 9.41303 14.9841 7.64495C14.8634 5.87687 14.0657 4.22338 12.7569 3.02846C11.4482 1.83354 9.7291 1.18918 7.95736 1.22944C6.18562 1.2697 4.49761 1.99147 3.24448 3.2446C1.99134 4.49773 1.26958 6.18574 1.22932 7.95748C1.18906 9.72922 1.83341 11.4483 3.02834 12.757C4.22326 14.0658 5.87675 14.8635 7.64483 14.9842C9.41291 15.1049 11.1595 14.5393 12.5211 13.405L17.2411 18.125L18.1249 17.2413ZM2.49989 8.12501C2.49989 7.01249 2.82979 5.92496 3.44787 4.99993C4.06596 4.0749 4.94446 3.35393 5.97229 2.92819C7.00013 2.50245 8.13113 2.39105 9.22227 2.60809C10.3134 2.82514 11.3157 3.36087 12.1024 4.14754C12.889 4.93421 13.4248 5.93649 13.6418 7.02763C13.8588 8.11877 13.7475 9.24977 13.3217 10.2776C12.896 11.3054 12.175 12.1839 11.25 12.802C10.3249 13.4201 9.23741 13.75 8.12489 13.75C6.63355 13.7484 5.20377 13.1552 4.14924 12.1007C3.09471 11.0461 2.50154 9.61635 2.49989 8.12501Z"
                                        fill="var(--icon-color)"></path>
                                </svg>
                            </button>
                        </label>
                    </form>
                </div>

                <ul class="cs--card-list">
                    <li class="cs--card-item" v-for="news in news.data">
                        <div class="cs--card-item__image">
                            <img src="/img/examples/news-1.png" alt="">
                        </div>
                        <div class="cs--card-item__content">
                            <div class="cs--card-item__meta">
                                <span>{{ news.created_at }}</span> 
                            </div>
                            <span class="cs--card-item__title">{{ news.title }}</span>
                            <a class="cs--card-item__link" href="javascript:void(0)">{{ $__("Read more") }}</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </main>
</template>

<script>
export default {
    name: "News",
    data() {
        return {
            news: []
        }
    },
    mounted() {
        axios
            .get('/terminal/news', {})
            .then(response => {
                if (response.status == 200 && response.data) {
                    this.news = response.data
                }
            })
            .catch(error => {
                // console.log(error.response);
                console.log(error.response.data);
            });
    }
}
</script>

<style scoped>

</style>
