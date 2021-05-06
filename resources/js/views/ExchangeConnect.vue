<template>
    <main class="cs--page cs--dashboard--connect">
        <div class="cs--container">
            <h1 class="cs--page__title">Connect your {{ exchangeName }} Account</h1>
            <p class="cs--page__sub-title">
                A secure connection with your exchange account is established using
                API keys. To learn more about how API keys work, click here.
            </p>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form">
                    <h2
                        class="cs--dashboard-form__title cs--dashboard-form__title--mark"
                    >
                        Enter your API Key for {{ exchangeName }}
                    </h2>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--api-key"
                            class="cs--dashboard-form__label"
                        >Api Key</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                id="dashboard--api-key"
                                type="password"
                                class="cs--dashboard-form__input"
                                placeholder="*****"
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--secret-key"
                            class="cs--dashboard-form__label"
                        >Secret Key</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                id="dashboard--secret-key"
                                type="password"
                                class="cs--dashboard-form__input"
                                placeholder="*****"
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--account-lable"
                            class="cs--dashboard-form__label"
                        >Account Lable</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                id="dashboard--account-lable"
                                type="text"
                                class="cs--dashboard-form__input"
                                placeholder="Label"
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__btn-group">
                        <button type="submit" class="cs--btn cs--btn--grad-blue">
                            Connect
                        </button>
                    </div>
                </form>

                <aside class="cs--page-side">
                    <h3 class="cs--page-side__title">FAQs</h3>
                    <ul class="cs--page-side__item-list">
                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >I don’t have an exchange account, do I need one?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >Are there any additional fees for trading with
                                CryprtoSystem platform?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >My exchange is not supported, how can I request it?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >Are derivatives such as futures and perpetual swaps
                                supported?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >How can I connect my wallets such as MetaMask, Trezor, or
                                Ledger etc?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a
                                href="javasript:void(0)"
                                class="cs--page-side__link cs--page-side__link--accent"
                            >Visit Support Center</a
                            >
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </main>
</template>

<script>
import {mapGetters} from "vuex";

export default {
    name: "ExchangeConnect",
    props: ['id'],
    computed: {
        ...mapGetters(['appData']),
        exchange() {
            if (!this.appData.exchanges || typeof this.appData.exchanges[this.id] === 'undefined') return

            return this.appData.exchanges[this.id]
        },
        exchangeName() {
            if (!this.exchange) return

            return this.exchange.name
        },

    },
}
</script>

<style scoped>

</style>
