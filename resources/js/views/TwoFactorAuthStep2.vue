<template>
    <main class="cs--page cs--dashboard--2fa">
        <div class="cs--container">
            <h1 class="cs--page__title">2 Factor Authentication</h1>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form">
                    <h2
                        class="cs--dashboard-form__title cs--dashboard-form__title--mark"
                    >
                        Step 2
                    </h2>
                    <h3 class="cs--dashboard-form__sub-title">
                        Use the 2FA app on your mobile device to scan the barcode below.
                        Be sure to save the backup code so you can regain access to your
                        account in case you lose your device
                    </h3>
                    <div class="cs--dashboard-form__qr-wrapper">
                        <div class="cs--dashboard-form__qr-code" v-html="qrCodeUrl">
                        </div>
                        <div class="cs--dashboard-form__qr-content">
                            <p class="cs--dashboard-form__qr-text">
                                Write down this backup key in a safe place in case you lose
                                your device:
                            </p>
                            <div>
                                <span class="cs--page__content--accent">Backup Key</span>
                                (required for next step)
                            </div>
                            <span>{{ secret }}</span>
                        </div>
                    </div>
                    <div class="cs--dashboard-form__btn-group">
                        <router-link
                            to="/2fa-step-1"
                            tag="button"
                            class="cs--btn cs--btn--transparent-grad-blue"
                        >
                            Back
                        </router-link>
                        <router-link
                            to="/2fa-step-3"
                            tag="button"
                            class="cs--btn cs--btn--grad-blue ml-auto"
                        >
                            Next
                        </router-link>
                    </div>
                </form>

                <aside class="cs--page-side">
                    <h3 class="cs--page-side__title">FAQs</h3>
                    <ul class="cs--page-side__item-list">
                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >What is 2FA?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >How do I link an exchange?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >Can I create a new exchange account through
                                CryptoSystem?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >What are exchange APIs?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >Do you offer a referral rewards program?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >Can I deposit or withdraw assets from CryptoSystem?</a
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
export default {
    name: "TwoFactorAuthStep2",
    data() {
        return {
            secret: '',
            qrCodeUrl: ''
        }
    },
    mounted() {
        axios
            .post('/terminal/user-2fa', {})
            .then(response => {
                if (response.status == 200 && response.data) {
                    this.secret=response.data.secret
                    this.qrCodeUrl=response.data.qrCodeUrl

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
