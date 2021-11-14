export default {
    baseUrl: 'wss://stream.binance.com:9443/ws/',
    ws: [],
    tickerData: {},
    unsubscribeAll: function () {
        for (const k in this.ws) {
            this.ws[k].close()
            console.log('Websocket ' + k + ' is closed');
        }
    },
    connectWS: function (url = '') {
        return this.ws[url] = new WebSocket(this.baseUrl + url)
    },
    ticker: function (symbol, callback) {
        this.connectWS(symbol.toLowerCase() + '@ticker')
            .onmessage = (e) => {
            callback(JSON.parse(e.data))
        }
    },
    depth: function (symbol, level = 10, callback) {
        this.connectWS(symbol.toLowerCase() + '@depth' + level)
            .onmessage = (e) => callback(JSON.parse(e.data))
    },
    miniTicker: function (symbol, callback) {
        this.connectWS(symbol.toLowerCase() + '@miniTicker')
            .onmessage = (e) => callback(JSON.parse(e.data))
    },
    trade: function (symbol, callback) {
        this.connectWS(symbol.toLowerCase() + '@trade')
            .onmessage = (e) => callback(JSON.parse(e.data))
    }
}
