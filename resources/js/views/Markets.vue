<template>
    <main class="cs--page cs--dashboard--markets">
        <div class="cs--container">
            <DashboardNav/>
            <div class="cs--page__head">
                <h1 class="cs--page__title">{{ $__("Market Overview") }}</h1>
                <span class="cs--color-secondary">8757 Active pairs</span>
                <label for="search" class="cs--dashboard-form__input--search-wrapper ml-auto">
                    <input id="search" type="text" class="cs--dashboard-form__input cs--dashboard-form__input--search"
                           placeholder="Search">
                    <button type="button" class="cs--dashboard-form__input--search-btn">
                        <svg class="cs--icon" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.1249 17.2413L13.4049 12.5213C14.5391 11.1596 15.1047 9.41303 14.9841 7.64495C14.8634 5.87687 14.0657 4.22338 12.7569 3.02846C11.4482 1.83354 9.7291 1.18918 7.95736 1.22944C6.18562 1.2697 4.49761 1.99147 3.24448 3.2446C1.99134 4.49773 1.26958 6.18574 1.22932 7.95748C1.18906 9.72922 1.83341 11.4483 3.02834 12.757C4.22326 14.0658 5.87675 14.8635 7.64483 14.9842C9.41291 15.1049 11.1595 14.5393 12.5211 13.405L17.2411 18.125L18.1249 17.2413ZM2.49989 8.12501C2.49989 7.01249 2.82979 5.92496 3.44787 4.99993C4.06596 4.0749 4.94446 3.35393 5.97229 2.92819C7.00013 2.50245 8.13113 2.39105 9.22227 2.60809C10.3134 2.82514 11.3157 3.36087 12.1024 4.14754C12.889 4.93421 13.4248 5.93649 13.6418 7.02763C13.8588 8.11877 13.7475 9.24977 13.3217 10.2776C12.896 11.3054 12.175 12.1839 11.25 12.802C10.3249 13.4201 9.23741 13.75 8.12489 13.75C6.63355 13.7484 5.20377 13.1552 4.14924 12.1007C3.09471 11.0461 2.50154 9.61635 2.49989 8.12501Z"
                                fill="var(--icon-color)"></path>
                        </svg>
                    </button>
                </label>
            </div>
            <div class="cs--table-wrapper">
                <table class="cs--table cs--table--bordered">
                    <thead>
                    <tr>
                        <th class="">Rank</th>

                        <th class="">Name</th>

                        <th class="">Market Cap (BTC)</th>

                        <th class="">Circulating Supply</th>

                        <th class="">24h Volume</th>

                        <th class="cs--table__cell--min-w">Avg Price</th>

                        <th class="">24h % Change</th>

                        <th class="cs--table__cell--chart">Chart (24h)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-label="Rank" class=""><b>1</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img src="/img/crypto-icon/btc.svg" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">Bitcoin</span>
                                    <span class="cs--table__card-abbr">BTC</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>18.67m</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>18.67</b>
                      <span class="cs--color-secondary">BTC</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>80.10b</b></td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>0.0000323225</b>
                        </td>

                        <td data-label="24h % Change" class="no-wrap cs--color-success">
                            <b>+2.40%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-plus.svg" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Rank" class=""><b>2</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img src="/img/crypto-icon/eth.svg" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">Ethereum</span>
                                    <span class="cs--table__card-abbr">ETH</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>18.67m</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>18.67</b>
                      <span class="cs--color-secondary">BTC</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>80.10b</b></td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>0.0000323225</b>
                        </td>

                        <td data-label="24h % Change" class="no-wrap cs--color-danger">
                            <b>-2.40%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-minus.svg" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Rank" class=""><b>3</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img src="/img/crypto-icon/usdt.svg" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">Tether</span>
                                    <span class="cs--table__card-abbr">USDT</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>18.67m</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>18.67</b>
                      <span class="cs--color-secondary">BTC</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>80.10b</b></td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>0.0000323225</b>
                        </td>

                        <td data-label="24h % Change" class="no-wrap cs--color-success">
                            <b>+2.40%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-plus.svg" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Rank" class=""><b>4</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img src="/img/crypto-icon/bnb.svg" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">Binance Coin</span>
                                    <span class="cs--table__card-abbr">BNB</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>18.67m</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>18.67</b>
                      <span class="cs--color-secondary">BTC</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>80.10b</b></td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>0.0000323225</b>
                        </td>

                        <td data-label="24h % Change" class="no-wrap cs--color-danger">
                            <b>-2.40%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-minus.svg" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Rank" class=""><b>5</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img src="/img/crypto-icon/ada.svg" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">Cardano</span>
                                    <span class="cs--table__card-abbr">ADA</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>18.67m</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>18.67</b>
                      <span class="cs--color-secondary">BTC</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>80.10b</b></td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>0.0000323225</b>
                        </td>

                        <td data-label="24h % Change" class="no-wrap cs--color-success">
                            <b>+2.40%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-plus.svg" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Rank" class=""><b>6</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img src="/img/crypto-icon/dot.svg" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">Polkadot</span>
                                    <span class="cs--table__card-abbr">DOT</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>18.67m</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>18.67</b>
                      <span class="cs--color-secondary">BTC</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>80.10b</b></td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>0.0000323225</b>
                        </td>

                        <td data-label="24h % Change" class="no-wrap cs--color-danger">
                            <b>-2.40%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-minus.svg" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Rank" class=""><b>7</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img src="/img/crypto-icon/xrp.svg" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">XRP</span>
                                    <span class="cs--table__card-abbr">XRP</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>18.67m</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>18.67</b>
                      <span class="cs--color-secondary">BTC</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>80.10b</b></td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>0.0000323225</b>
                        </td>

                        <td data-label="24h % Change" class="no-wrap cs--color-success">
                            <b>+2.40%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-plus.svg" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Rank" class=""><b>8</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img src="/img/crypto-icon/uni.svg" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">Uniswap</span>
                                    <span class="cs--table__card-abbr">UNI</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>18.67m</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>18.67</b>
                      <span class="cs--color-secondary">BTC</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>80.10b</b></td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>0.0000323225</b>
                        </td>

                        <td data-label="24h % Change" class="no-wrap cs--color-danger">
                            <b>-2.40%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-minus.svg" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Rank" class=""><b>9</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img src="/img/crypto-icon/theta.svg" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">Theta Token</span>
                                    <span class="cs--table__card-abbr">THETA</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>18.67m</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>18.67</b>
                      <span class="cs--color-secondary">BTC</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>80.10b</b></td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>0.0000323225</b>
                        </td>

                        <td data-label="24h % Change" class="no-wrap cs--color-danger">
                            <b>-2.40%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-minus.svg" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Rank" class=""><b>10</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img src="/img/crypto-icon/ltc.svg" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">Litecoin</span>
                                    <span class="cs--table__card-abbr">LTC</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>18.67m</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>18.67</b>
                      <span class="cs--color-secondary">BTC</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>80.10b</b></td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>0.0000323225</b>
                        </td>

                        <td data-label="24h % Change" class="no-wrap cs--color-success">
                            <b>+2.40%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-plus.svg" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Rank" class=""><b>11</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img src="/img/crypto-icon/link.svg" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">Chainlink</span>
                                    <span class="cs--table__card-abbr">LINK</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>18.67m</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>18.67</b>
                      <span class="cs--color-secondary">BTC</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>80.10b</b></td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>0.0000323225</b>
                        </td>

                        <td data-label="24h % Change" class="no-wrap cs--color-danger">
                            <b>-2.40%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-minus.svg" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Rank" class=""><b>12</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img src="/img/crypto-icon/uscf.svg" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">USD Coin</span>
                                    <span class="cs--table__card-abbr">USCF</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>18.67m</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>18.67</b>
                      <span class="cs--color-secondary">BTC</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>80.10b</b></td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>0.0000323225</b>
                        </td>

                        <td data-label="24h % Change" class="no-wrap cs--color-success">
                            <b>+2.40%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-plus.svg" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Rank" class=""><b>13</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img src="/img/crypto-icon/bch.svg" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">Bitcoin Cash</span>
                                    <span class="cs--table__card-abbr">BCH</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>18.67m</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>18.67</b>
                      <span class="cs--color-secondary">BTC</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>80.10b</b></td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>0.0000323225</b>
                        </td>

                        <td data-label="24h % Change" class="no-wrap cs--color-danger">
                            <b>-2.40%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-minus.svg" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Rank" class=""><b>14</b></td>

                        <td data-label="Name" class="no-wrap">
                            <div class="cs--table__card">
                                <img src="/img/crypto-icon/luna.svg" alt="">
                                <div class="cs--table__card-content">
                                    <span class="cs--table__card-title">Terra</span>
                                    <span class="cs--table__card-abbr">LUNA</span>
                                </div>
                            </div>
                        </td>

                        <td data-label="Market Cap (BTC)" class="no-wrap">
                            <b>18.67m</b>
                        </td>

                        <td data-label="Circulating Supply" class="">
                    <span><b>18.67</b>
                      <span class="cs--color-secondary">BTC</span></span>
                        </td>

                        <td data-label="24h Volume" class=""><b>80.10b</b></td>

                        <td data-label="Avg Price" class="no-wrap">
                            <b>0.0000323225</b>
                        </td>

                        <td data-label="24h % Change" class="no-wrap cs--color-success">
                            <b>+2.40%</b>
                        </td>

                        <td data-label="Chart (24h)" class="">
                            <img src="/img/examples/chart-plus.svg" alt="">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</template>

<script>
import DashboardNav from "../components/DashboardNav";

export default {
    name: "Markets",
    components: {
        DashboardNav
    }
}
</script>

<style scoped>

</style>
