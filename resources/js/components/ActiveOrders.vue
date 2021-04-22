<template>
    <div>
        Active
    </div>
</template>

<script>
export default {
    name: "ActiveOrders",
    data: () => ({
        socket: null,
        url: 'wss://testnet.binance.vision/ws'
    }),
    methods: {
        connectWS() {
            let app = this

            this.socket = new WebSocket(this.url, null, { headers: { 'X-MBX-APIKEY': 'Ik7gOQWFfdYxwGr7QqK4Iw8JsfV3QVCfUeSINpOz9SmQMb1TJLMPVCX2nhJn5J4T' }});
            this.socket.onopen = function (e) {
                console.log("[open] Соединение установлено");
            };

            this.socket.onmessage = function (event) {
                console.log(event.data);

            };

            this.socket.onclose = function (event) {
                if (event.wasClean) {
                    console.log(`[close] Соединение закрыто чисто, код=${event.code} причина=${event.reason}`);
                } else {
                    // например, сервер убил процесс или сеть недоступна
                    // обычно в этом случае event.code 1006
                    console.log('[close] Соединение прервано');
                }
            };

            this.socket.onerror = function (error) {
                console.log(`[error] ${error.message}`);
            };
        }
    },
    mounted() {
        // this.connectWS()
    }
}
</script>

<style scoped>

</style>
