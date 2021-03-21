<template>
    <div class="tradingview">
        <div id="tradingview_bd080"></div>
    </div>

</template>

<script>
export default {
    name: "TradingView",
    data() {
        return {
            panel: {
                "autosize": true,
                "symbol": this.pair,
                "interval": "D",
                "timezone": "Etc/UTC",
                "theme": "dark",
                "style": "1",
                "locale": "ru",
                "toolbar_bg": "#272727",
                "color": "black",
                "enable_publishing": false,
                "hide_side_toolbar": false,
                "allow_symbol_change": true,
                "container_id": "tradingview_bd080",
            }
        }
    },
    props: {
        pair: {
            type: String,
            default: 'NASDAQ:AAPL'
        },
    },
    watch: {
        pair(newValue, oldValue) {
            this.panel.symbol = newValue
            new TradingView.widget(this.panel)
        }
    },
    mounted() {
        if (this.pair) {
            new TradingView.widget(this.panel)
        }
    }
}
</script>

<style scoped>
#tradingview_bd080 {
    height: 650px;
}

.tradingview {

}
</style>
