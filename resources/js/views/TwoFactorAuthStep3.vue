<template>
    <main class="cs--page cs--dashboard--2fa">
        <div class="cs--container">
            <h1 class="cs--page__title">{{ $__("2 Factor Authentication") }}</h1>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form" @submit.prevent="enable2fa">
                    <h2
                        class="cs--dashboard-form__title cs--dashboard-form__title--mark"
                    >
                        {{ $__("Step 3") }}
                    </h2>
                    <h3 class="cs--dashboard-form__sub-title">
                        {{ $__("Confirm backup and enable Google Authenticator") }}
                    </h3>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--backup-key"
                            class="cs--dashboard-form__label"
                        >{{ $__("Backup Key") }}</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                id="dashboard--backup-key"
                                type="text"
                                class="cs--dashboard-form__input"
                                placeholder="*****"
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--password"
                            class="cs--dashboard-form__label"
                        >{{ $__("Password") }}</label
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
                        >{{ $__("2FA Code") }}</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                id="dashboard--2fa-code"
                                v-model="formData.secret"
                                type="text"
                                class="cs--dashboard-form__input"
                                placeholder="*****"
                                required
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__btn-group">
                        <router-link
                            to="/2fa-step-2"
                            tag="button"
                            class="cs--btn cs--btn--transparent-grad-blue"
                        >
                            {{ $__("Back") }}
                        </router-link>
                        <Button class="cs--btn cs--btn--grad-blue ml-auto" type="submit">{{
                                $__("Enable 2FA")
                            }}
                        </Button>
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
import Button from "../components/Button"

export default {
    name: "TwoFactorAuthStep3",
    data() {
        return {
            formData: {
                secret: '',
                google2fa_status: true
            }
        }
    },
    methods: {
        enable2fa() {
            axios
                .post('/terminal/user-2fa-validate', this.formData)
                .then(response => {
                    if (response.status == 200 && response.data) {
                        if (response.data.status === true) {
                            this.$router.push('2fa-step-4')
                        } else {
                            this.$notify.error({
                                position: 'top right',
                                title: this.$__('Error'),
                                msg: response.data.message,
                                timeout: 3000
                            })
                        }
                    }
                })
                .catch(error => {
                    console.log(error.response.data);
                });
        }
    },
    components: {
        Button
    }
}
</script>

<style scoped>

</style>
