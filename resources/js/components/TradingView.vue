<template>
    <div class="tradingview">
        <div id="tradingview_bd080"></div>
    </div>

</template>

<script>
export default {
    name: "TradingView",
    props: {
        symbol: {
            type: String,
            default: 'NASDAQ:AAPL'
        },
    },
    mounted() {
        new TradingView.widget(
            {
                "autosize": true,
                "symbol": this.symbol,
                "interval": "D",
                "timezone": "Etc/UTC",
                "theme": "dark",
                "style": "1",
                "locale": "ru",
                "toolbar_bg": "#000000",
                "enable_publishing": false,
                "allow_symbol_change": true,
                "container_id": "tradingview_bd080",
            }
        );
    }
}
</script>

<style scoped>
#tradingview_bd080{
    height: 700px;
}
.tradingview{

}
</style>
