<template>
    <main class="cs--page cs--dashboard--2fa">
        <div class="cs--container">
            <h1 class="cs--page__title">{{ $__("2 Factor Authentication") }}</h1>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form" @submit.prevent="disable2FA()">
                    <h2 class="cs--dashboard-form__title cs--dashboard-form__title--mark">
                        {{ $__("To Disable 2FA, please enter the following:") }}
                    </h2>

                    <div class="cs--dashboard-form__item">
                        <label for="dashboard--password" class="cs--dashboard-form__label">{{ $__("Password") }}</label>

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input v-model="formData.password" id="dashboard--password" type="password" class="cs--dashboard-form__input"
                                   placeholder="*****" required>
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label for="dashboard--2fa-code" class="cs--dashboard-form__label">{{ $__("2FA Code") }}</label>

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input v-model="formData.code" id="dashboard--2fa-code" type="text" class="cs--dashboard-form__input" required>
                        </div>
                    </div>

                    <div class="cs--dashboard-form__btn-group">
                        <router-link tag="button" to="/2fa" class="cs--btn cs--btn--transparent-grad-blue">
                            {{ $__("Back") }}
                        </router-link>
                        <button type="submit" class="cs--btn cs--btn--grad-blue ml-auto">
                            {{ $__("Disable") }}
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

export default {
    name: "TwoFactorAuthDisable",
    data() {
        return {
            formData: {
                password: '',
                code: ''
            }
        }
    },
    methods: {
        disable2FA() {
            axios
                .post('/terminal/user-2fa-disable', this.formData)
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.$router.push('/2fa-disabled')
                    }
                })
                .catch(error => {
                    this.$notify.error({
                        position: 'top right',
                        title: this.$__('Error'),
                        msg: error.response.data.message,
                        timeout: 3000
                    })
                })
                .finally(() => {
                    // Will be executed upon completion catch & then
                });
        }
    },
    components: {
        AsideFaq
    }

}
</script>

<style scoped>

</style>
