<template>

    <main class="cs--page cs--dashboard--new-ticket">
        <div class="cs--container">
            <h1 class="cs--page__title" v-if="item">{{ item.subject }}</h1>
            <h3>Переписка с администрацией</h3>
            <ul class="ticket-messages">
                <li v-for="message in item.message">
                    <div class="ticket-author">
                        <img :src="message.from_user.avatar_url" :alt="message.from_user.name">
                        <span>{{ message.from_user.name }}</span> ({{ message.created_at }})
                    </div>
                    <p class="message-text">{{ message.message }}</p>

                </li>
            </ul>
            <div class="cs--page-side-wrapper">

                <form class="cs--dashboard-form" @submit.prevent="addMessage()">

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--msg-text"
                            class="cs--dashboard-form__label"
                        >{{ $__("New message") }}</label
                        >

                        <textarea
                            v-model="formData.message"
                            id="dashboard--msg-text"
                            class="cs--dashboard-form__input"
                            required
                        ></textarea>
                        <div class="alert alert-danger" v-if="errors.message">{{ errors.message[0] }}</div>
                    </div>

                    <div class="cs--dashboard-form__btn-group">
                        <Button
                            :preloader="inProcess"
                            type="submit"
                            class="cs--btn cs--btn--grad-blue">{{ $__("Send") }}
                        </Button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</template>

<script>
export default {
    name: "TicketMessaging",
    data() {
        return {
            item: null,
            formData: {
                message: '',
                ticket_id: this.id
            },
            errors: {
                message: null
            },
            inProcess: false
        }
    },
    props: ['id'],
    methods: {
        addMessage() {
            axios
                .post('/terminal/ticket/sendMessage', this.formData)
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.$notify.success({
                            position: 'top right',
                            title: this.$__('Успех'),
                            msg: response.data.message,
                            timeout: 3000
                        })

                        this.getItem()
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                })
                .finally(() => {
                    // Will be executed upon completion catch & then
                });
        },
        getItem() {
            axios
                .get('/terminal/ticket/' + this.id, {})
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.item = response.data
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                })
                .finally(() => {
                    // Will be executed upon completion catch & then
                });
        }
    },
    watch: {
        id() {
            this.getItem()
        }
    },
    mounted() {
        this.getItem()
    }
}
</script>

<style lang="scss">
.ticket-messages {
    margin: 20px 0 0 0;
    padding: 0;
    list-style: none;

    > li {
        background-color: var(--color-blue-85);
        padding: 20px;
        margin-bottom: 20px;

        p {
            font-size: 14px;
        }
    }

    .ticket-author {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        font-size: 12px;

        img {
            display: block;
            width: 36px;
            height: 36px;
            border-radius: 30px;
            margin-right: 15px;
        }

        span {
            font-weight: 700;
            margin-right: 8px;

        }
    }
}
</style>
