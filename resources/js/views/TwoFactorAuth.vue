<template>
    <main class="cs--page cs--dashboard--2fa">
        <div class="cs--container">
            <h1 class="cs--page__title">2 Factor Authentication</h1>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form">
                    <h2 class="cs--dashboard-form__title">
                        Enabling 2FA (2 Factor Authentication) is highly recommended.
                        This adds an extra layer of security to your account in addition
                        to your password.
                    </h2>
                    <div class="cs--dashboard-form__btn-group">
                        <router-link to="/2fa-step-1" tag="button" class="cs--btn cs--btn--grad-blue">
                            Enable
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
name: "TwoFactorAuth"
}
</script>

<style scoped>

</style>
