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
                    {{ $__("Filled") }}/{{ $__("Closed") }}
                </button>
            </div>
        </div>

        <div class="cs--table-wrapper">
            <table class="cs--table">
                <thead>
                <tr>
                    <th class="">{{ $__("Symbol") }}</th>
                    <th class="">{{ $__("Side") }}</th>

                    <th class="">{{ $__("Type") }}</th>

                    <th class="">{{ $__("Quantity") }}</th>

                    <th class="">{{ $__("Price") }}</th>

                    <th class="">{{ $__("Date") }}</th>

                    <th class="">{{ $__("Status") }}</th>

                    <th class="">-</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="order in tabOrders">
                    <td data-label="Symbol"><span>{{ order.symbol }}</span></td>
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
                        <span>{{ order.status }}</span>
                    </td>
                    <td data-label="Action">
                        <button type="button" class="cs--btn-sm btn-warning" @click.prevent="closeOrder(order.id)"
                                v-if="['OPEN','NEW'].indexOf(order.status.toUpperCase())!==-1">{{
                                $__("Close")
                            }}
                        </button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </section>
</template>

<script>
import {mapGetters} from 'vuex'

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
    methods: {
        closeOrder(order_id) {
            axios
                .post('/terminal/exchange/cancel-order', {
                    order_id: order_id,
                    account_id: this.activeExchangeAccount.id,
                    symbol: this.symbol.symbol,
                })
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.$emit('order_closed')
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    // console.log(error.response.data);
                    this.$notify.error({
                        position: 'top right',
                        title: this.$__('Ошибка'),
                        msg: error.response.data.message,
                        timeout: 3000
                    })
                })
                .finally(() => {
                    // Will be executed upon completion catch & then
                });
        }
    },
    computed: {
        ...mapGetters(['activeExchangeAccount', 'symbol']),
        tabOrders() {
            let statuses = ['FILLED', 'filled', 'closed', 'CLOSED'];
            if (this.tab == 'open') {
                return this.orders.filter((item) => {
                    return statuses.indexOf(item.status) === -1
                })
            }
            return this.orders.filter((item) => {
                return statuses.indexOf(item.status) !== -1
            });
        }
    },
}
</script>

<style scoped>

</style>
