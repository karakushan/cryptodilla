<template>
    <main class="cs--page cs--dashboard--support">
        <div class="cs--container">
            <h1 class="cs--page__title">{{ $__("Support") }}</h1>
            <p class="cs--page__sub-title">
                Attention! Cyptosystem never asks you to create cryptoicodes or any
                payments. Never send your info to scammers by email, Telegram or
                Twitter (we don’t have any support on Twitter)! Cyptosystem supports
                never ask your money for solving problems or account activation. We
                don't have any private or special Invest Boxes. Beware of scams! You
                don’t need to verify you account! Don’t send your money to scammers!
            </p>
            <div class="cs--dashboard-form__btn-group">
                <router-link
                    to="/ticket"
                    class="cs--btn cs--btn--grad-blue"
                >{{ $__("Create New Ticket") }}
                </router-link>
            </div>
            <h2 class="cs--table__title">{{ $__("History") }}</h2>

            <div class="cs--table-wrapper">
                <table class="cs--table cs--table--striped">
                    <thead>
                    <tr>
                        <th class="">{{ $__("Date") }}</th>

                        <th class="cs--table__cell--min-w">{{ $__("Topic") }}</th>

                        <th class="">{{ $__("Status") }}</th>

                        <th class="">{{ $__("View") }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="ticket in tickets.data">
                        <td data-label="Date" class="no-wrap">
                            <span>{{ ticket.created_at }}</span>
                        </td>

                        <td data-label="Topic" class="">
                    <span>{{ ticket.subject }}</span>
                        </td>

                        <td data-label="Status" class="cs--color-success">
                            <span>Confirmed</span>
                        </td>

                        <td data-label="View" class="cs--color-success">
                            <router-link :to="'/ticket/'+ticket.id"><span>Перейти</span></router-link>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: "Support",
    data() {
        return {
            tickets: {}
        }
    },
    methods: {
        getTickets() {
            axios
                .get('/terminal/user-tickets', {})
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.tickets = response.data
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                });
        }
    },
    mounted() {
        this.getTickets()
    }
}
</script>

<style scoped>

</style>
