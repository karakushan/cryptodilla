<template>
    <main class="cs--page cs--dashboard--new-ticket">
        <div class="cs--container">
            <h1 class="cs--page__title">{{ $__("New Support Ticket") }}</h1>
            <p class="cs--page__sub-title">
                Attention! Cyptosystem never asks you to create cryptoicodes or any
                payments. Never send your info to scammers by email, Telegram or
                Twitter (we don’t have any support on Twitter)! Cyptosystem supports
                never ask your money for solving problems or account activation. We
                don't have any private or special Invest Boxes. Beware of scams! You
                don’t need to verify you account! Don’t send your money to scammers!
            </p>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form" @submit.prevent="createTicket">
                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--msg-type"
                            class="cs--dashboard-form__label"
                        >{{ $__("Message type") }}</label
                        >

                        <div
                            class="cs--dashboard-form__input-wrapper cs--dashboard-form__input--arrow"
                        >
                            <select
                                v-model="formData.category_id"
                                id="dashboard--msg-type"
                                class="cs--dashboard-form__input"
                            >
                                <option value="" disabled selected hidden></option>

                                <option value="1">Money deposit</option>

                                <option value="2">Bitcoin deposit</option>
                            </select>
                        </div>
                        <div class="alert alert-danger" v-if="errors.category_id">{{ errors.category_id[0] }}</div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--subject"
                            class="cs--dashboard-form__label"
                        >{{ $__("Subject") }}</label>

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                v-model="formData.subject"
                                id="dashboard--subject"
                                type="text"
                                class="cs--dashboard-form__input"
                                placeholder="Hello!"
                            />
                        </div>
                        <div class="alert alert-danger" v-if="errors.subject">{{ errors.subject[0] }}</div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--msg-text"
                            class="cs--dashboard-form__label"
                        >{{ $__("Message text") }}</label
                        >

                        <textarea
                            v-model="formData.message"
                            id="dashboard--msg-text"
                            class="cs--dashboard-form__input"
                            placeholder="Text"
                        ></textarea>
                        <div class="alert alert-danger" v-if="errors.message">{{ errors.message[0] }}</div>
                    </div>

                    <div class="cs--dashboard-form__btn-group">
                        <Button
                            :preloader="inProcess"
                            type="submit"
                            class="cs--btn cs--btn--grad-blue">{{ $__("Create New Ticket") }}
                        </Button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</template>

<script>
import Button from "../components/Button"

export default {
    name: "Ticket",
    data() {
        return {
            formData: {
                subject: '',
                message: '',
                category_id: '',
                email: ''
            },
            inProcess: false,
            errors: {}
        }
    },
    methods: {
        createTicket() {
            this.inProcess = true
            this.errors = {}
            axios
                .post('/terminal/ticket', this.formData)
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.$notify.success({
                            position: 'top right',
                            title: this.$__('Успех'),
                            msg: response.data.message,
                            timeout: 3000
                        })

                        this.formData={
                            subject: '',
                            message: '',
                            category_id: '',
                            email: ''
                        }
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                    if (error.response.data.errors) {
                        this.errors = error.response.data.errors
                    }

                })
                .finally(() => this.inProcess = false);

        }
    },
    components: {
        Button
    }
}
</script>

<style scoped>

</style>
