<template>
    <main class="cs--page cs--dashboard--2fa">
        <div class="cs--container">
            <h1 class="cs--page__title">2 Factor Authentication</h1>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form">
                    <h2
                        class="cs--dashboard-form__title cs--dashboard-form__title--mark"
                    >
                        Step 3
                    </h2>
                    <h3 class="cs--dashboard-form__sub-title">
                        Confirm backup and enable Google Authenticator
                    </h3>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--backup-key"
                            class="cs--dashboard-form__label"
                        >Backup Key</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                id="dashboard--backup-key"
                                type="password"
                                class="cs--dashboard-form__input"
                                placeholder="*****"
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--password"
                            class="cs--dashboard-form__label"
                        >Password</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                id="dashboard--password"
                                type="password"
                                class="cs--dashboard-form__input"
                                placeholder="*****"
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--2fa-code"
                            class="cs--dashboard-form__label"
                        >2FA Code</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                id="dashboard--2fa-code"
                                type="password"
                                class="cs--dashboard-form__input"
                                placeholder="*****"
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__btn-group">
                        <router-link
                            to="/2fa-step-2"
                            tag="button"
                            class="cs--btn cs--btn--transparent-grad-blue"
                        >
                            Back
                        </router-link>
                        <router-link
                            to="/2fa-step-4"
                            tag="button"
                            class="cs--btn cs--btn--grad-blue ml-auto"
                        >
                            Enable 2FA
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
name: "TwoFactorAuthStep3"
}
</script>

<style scoped>

</style>
