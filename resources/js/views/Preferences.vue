<template>
    <main class="cs--page cs--dashboard--preferences">
        <div class="cs--container">
            <h1 class="cs--page__title">{{ $__("Preferences") }}</h1>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form" @submit.prevent="updateUser()">
                    <h2 class="cs--dashboard-form__title">{{ $__("Interface") }}</h2>

                    <div class="cs--dashboard-form__item">
                        <span class="cs--dashboard-form__label">{{ $__("Theme") }}</span>

                        <div class="cs--dashboard-form__radio-group">
                            <label
                                for="dark"
                                class="cs--dashboard-form__label cs--dashboard-form__label--radio"
                            >
                                <input
                                    name="dashboard--interface"
                                    v-model="formData.terminal_theme"
                                    id="dark"
                                    type="radio"
                                    value="dark"
                                    checked
                                    class="cs--dashboard-form__input cs--dashboard-form__input--radio"
                                />
                                <span class="cs--dashboard-form__radio-box"></span>
                                <span class="cs--dashboard-form__radio-title">{{ $__("Dark") }}</span>
                            </label>

                            <label
                                for="light"
                                class="cs--dashboard-form__label cs--dashboard-form__label--radio"
                            >
                                <input
                                    name="dashboard--interface"
                                    v-model="formData.terminal_theme"
                                    id="light"
                                    type="radio"
                                    value="light"
                                    class="cs--dashboard-form__input cs--dashboard-form__input--radio"
                                />
                                <span class="cs--dashboard-form__radio-box"></span>
                                <span class="cs--dashboard-form__radio-title">{{ $__("Light") }}</span>
                            </label>
                        </div>
                    </div>

                    <hr/>
                    <h2 class="cs--dashboard-form__title">{{ $__("Preferred Currency") }}</h2>

                    <div class="cs--dashboard-form__item">
                        <div
                            class="cs--dashboard-form__input-wrapper cs--dashboard-form__input--arrow"
                        >
                            <select
                                id="dashboard--currency"
                                class="cs--dashboard-form__input"
                                v-model="formData.terminal_currency"
                            >
                                <option value="">{{ $__("Please select") }}</option>
                                <option :value="currency.slug" v-for="currency in appData.currencies">{{
                                        currency.name
                                    }}
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="cs--dashboard-form__btn-group">
                        <Button :preloader="inProcess" type="submit"></Button>
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
import {mapActions, mapGetters} from "vuex";
import Button from "../components/Button"

export default {
    name: "Preferences",
    data() {
        return {
            formData: {
                terminal_theme: 'dark',
                terminal_currency: '',
            },
            inProcess: false
        }
    },
    mounted() {
        if (this.appData.user){
            this.formData.terminal_currency = this.appData.user.terminal_currency
            this.formData.terminal_theme=this.appData.user.terminal_theme
        }
    },
    computed: {
        ...mapGetters(['appData']),
    },
    watch: {
        'appData.user.terminal_currency': function (newValue, oldValue) {
            this.formData.terminal_currency = newValue
        },
        'appData.user.terminal_theme': function (newValue, oldValue) {
            this.formData.terminal_theme = newValue
        }
    },
    methods: {
        ...mapActions(['setData']),
        updateUser() {
            this.inProcess = true;
            axios
                .put('/terminal/user-update/' + this.appData.user.id, this.formData)
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.setData({
                            ...this.appData,
                            user:{...this.appData.user,...this.formData}
                        })

                        this.$notify.success({
                            position: 'top right',
                            title: this.$__('Success'),
                            msg: response.data.message,
                            timeout: 3000
                        })
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                })
                .finally(() => {
                    this.inProcess = false
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
