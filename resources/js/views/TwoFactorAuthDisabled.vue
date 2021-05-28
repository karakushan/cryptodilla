<template>
    <main class="cs--page cs--dashboard--2fa">
        <div class="cs--container">
            <h1 class="cs--page__title">{{ $__("2 Factor Authentication") }}</h1>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form">
                    <div class="cs--dashboard-form__result">
                        <div class="cs--dashboard-form__result-img">
                            <img src="/img/img-check.svg" alt="">
                        </div>
                        <h2 class="cs--dashboard-form__result-title">
                            {{ $__("Disable complete!") }}
                        </h2>
                        <p class="cs--dashboard-form__result-text">
                            {{
                                $__("2FA has been disabled on your account. You will no longer required to enter Google Authenticator Code upon login.")
                            }}
                        </p>
                    </div>
                    <div class="cs--dashboard-form__btn-group">
                        <button type="button" @click.prevent="redirectToHome()"
                                class="cs--btn cs--btn--grad-blue ml-auto">
                            {{ $__("Done") }}
                        </button>
                    </div>
                </form>

                <AsideFaq/>
            </div>
        </div>
    </main>
</template>

<script>
import AsideFaq from "../components/AsideFaq";
import {mapActions} from 'vuex'
import Button from "../components/Button";

export default {
    name: "TwoFactorAuthDisabled",
    components: {
        Button,
        AsideFaq
    },
    methods: {
        ...mapActions(['updateAppData']),
        redirectToHome() {
            this.updateAppData()
            this.$router.push('/')
        }
    }


}
</script>

<style scoped>

</style>
