<template>
    <div class="tradingview">
        <Loader :active="!widget"/>
        <div id="tradingview_bd080"></div>
    </div>

</template>

<script>
import Loader from "../components/Loader";
export default {
    name: "TradingView",
    data() {
        return {
            widget:null,
            panel: {
                "autosize": true,
                "symbol": this.pair,
                "interval": "1",
                "timezone": "Etc/UTC",
                "theme": "dark",
                "style": "1",
                "locale": "ru",
                "toolbar_bg": "#021131",
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

            this.widget=new TradingView.widget(this.panel)
        }
    },
    mounted() {
        if (this.pair) {
            this.widget = new TradingView.widget(this.panel)
        }
    },
    components:{
        Loader
    }
}
</script>

<style scoped>
#tradingview_bd080 {
    height: 500px;
}

.tradingview {

}
</style>
