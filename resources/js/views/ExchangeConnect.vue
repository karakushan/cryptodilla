<template>
    <main class="cs--page cs--dashboard--connect">
        <div class="cs--container">
            <h1 class="cs--page__title">Connect your {{ exchange.name }} Account</h1>
            <p class="cs--page__sub-title">
                A secure connection with your exchange account is established using
                API keys. To learn more about how API keys work, click here.
            </p>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form" @submit.prevent="connect()">
                    <h2
                        class="cs--dashboard-form__title cs--dashboard-form__title--mark"
                    >
                        {{ $__("Enter your API Key for") }} {{ exchange.name }}
                    </h2>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--account-lable"
                            class="cs--dashboard-form__label"
                        >{{ $__("Account Label") }}</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                v-model="formData.title"
                                id="dashboard--account-lable"
                                type="text"
                                class="cs--dashboard-form__input"
                                placeholder="Label"
                                required
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--api-key"
                            class="cs--dashboard-form__label"
                        >{{ $__("Api Key") }}</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                v-model="formData.credentials.apiKey"
                                id="dashboard--api-key"
                                type="text"
                                class="cs--dashboard-form__input"
                                required
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
                                v-model="formData.credentials.apiSecret"
                                id="dashboard--secret-key"
                                type="text"
                                class="cs--dashboard-form__input"
                                required
                            />
                        </div>
                    </div>
                    <div class="cs--dashboard-form__item">
                        <Switcher v-model="formData.is_demo" id="dashboard--account-is-demo">
                            {{ $__("Demo mode") }}
                        </Switcher>
                    </div>

                    <div class="cs--dashboard-form__btn-group">
                        <Button type="submit" :preloader="process">
                            {{ $__("Connect") }}
                        </Button>
                    </div>
                </form>

                <AsideFaq/>
            </div>
        </div>
    </main>
</template>

<script>
import {mapGetters} from "vuex";
import Button from "../components/Button";
import AsideFaq from "../components/AsideFaq";
import Switcher from "../components/Switcher";

export default {
    data() {
        return {
            formData: {
                title: '',
                exchange_id: this.id,
                credentials: {
                    apiKey: '',
                    apiSecret: '',
                    is_demo: false
                }

            },
            process: false
        }
    },
    name: "ExchangeConnect",
    props: ['id', 'exchange'],
    computed: {
        ...mapGetters(['appData']),

    },
    methods: {
        connect() {
            this.process = true;
            axios
                .post('/terminal/attach-exchange', this.formData)
                .then(response => {
                    if (response.status == 200 && response.data) {

                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                })
                .finally(() => {
                    this.process = false;
                    window.location.href = '/terminal';
                });
        }
    },
    components: {
        Button,
        AsideFaq,
        Switcher
    }
}
</script>

<style scoped>

</style>
