<template>
    <section
        class="cs--interface__block cs--interface__block--my-orders"
    >
        <div class="cs--interface__block-head">
            <h2 class="cs--interface__block-title">{{ $__("My Orders") }}</h2>
            <div class="cs--btn-group">
                <button type="button"
                        @click.prevent="tab='open'"
                        :class="{'cs--btn':true, 'cs--btn--tab':true,'cs--btn--tab--active':tab=='open'}">
                    {{ $__("Open") }}
                </button>
                <button
                    @click.prevent="tab='filled'"
                    type="button"
                    :class="{'cs--btn':true, 'cs--btn--tab':true,'cs--btn--tab--active':tab=='filled'}"
                >
                    {{ $__("Filled") }}
                </button>
            </div>
        </div>

        <div class="cs--table-wrapper">
            <table class="cs--table">
                <thead>
                <tr>
                    <th class="">{{ $__("Side") }}</th>

                    <th class="">{{ $__("Type") }}</th>

                    <th class="">{{ $__("Size") }}</th>

                    <th class="">{{ $__("Price") }}</th>

                    <th class="">{{ $__("Date") }}</th>

                    <th class="">{{ $__("Status") }}</th>

                    <th class="">-</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="order in tabOrders">
                    <td data-label="Side"
                        :class="{'cs--color-danger':order.side=='SELL','cs--color-success':order.side=='BUY'}"
                    ><span>{{ order.side }}</span></td>

                    <td data-label="Type" class="">
                        <span>{{ order.type }}</span>
                    </td>

                    <td data-label="Size" class="">
                        <span>{{ order.executedQty }}</span>
                    </td>

                    <td data-label="Price" class="">
                        <span>{{ order.price }}</span>
                    </td>

                    <td data-label="Date" class="cs--color-secondary">
                        <span>{{ $moment(order.time).format('D MMMM YYYY, HH:SS') }}</span>
                    </td>

                    <td data-label="Status" class="cs--color-success">
                        <span>Confirmed</span>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </section>
</template>

<script>
export default {
    name: "ActiveOrders",
    data: () => ({
        tab: 'open'
    }),
    props: {
        orders: {
            type: Array,
            default() {
                return []
            }
        },
    },
    methods: {},
    computed: {
        tabOrders() {
            if (this.tab == 'open') {
                return this.orders.filter((item) => {
                    return item.status !== 'FILLED'
                })
            }
            return this.orders.filter((item) => {
                return item.status === 'FILLED'
            });
        }
    },
}
</script>

<style scoped>

</style>
