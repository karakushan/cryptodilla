<template>
    <main class="cs--page cs--dashboard--preferences">
        <div class="cs--container">
            <h1 class="cs--page__title">{{ $__("Preferences") }}</h1>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form">
                    <h2 class="cs--dashboard-form__title">{{ $__("Interface") }}</h2>

                    <div class="cs--dashboard-form__item">
                        <span class="cs--dashboard-form__label">{{ $__("Theme") }}</span>

                        <div class="cs--dashboard-form__radio-group">
                            <label
                                for="dark"
                                class="cs--dashboard-form__label cs--dashboard-form__label--radio"
                            >
                                <input
                                    name="dashboard--interface"
                                    id="dark"
                                    type="radio"
                                    value="dark"
                                    checked
                                    class="cs--dashboard-form__input cs--dashboard-form__input--radio"
                                />
                                <span class="cs--dashboard-form__radio-box"></span>
                                <span class="cs--dashboard-form__radio-title">{{ $__("Dark") }}</span>
                            </label>

                            <label
                                for="light"
                                class="cs--dashboard-form__label cs--dashboard-form__label--radio"
                            >
                                <input
                                    name="dashboard--interface"
                                    id="light"
                                    type="radio"
                                    value="light"
                                    class="cs--dashboard-form__input cs--dashboard-form__input--radio"
                                />
                                <span class="cs--dashboard-form__radio-box"></span>
                                <span class="cs--dashboard-form__radio-title">{{ $__("Light") }}</span>
                            </label>
                        </div>
                    </div>

                    <hr />
                    <h2 class="cs--dashboard-form__title">{{ $__("Preferred Currency") }}</h2>

                    <div class="cs--dashboard-form__item">
                        <div
                            class="cs--dashboard-form__input-wrapper cs--dashboard-form__input--arrow"
                        >
                            <select
                                id="dashboard--currency"
                                class="cs--dashboard-form__input"
                            >
                                <option value="" disabled selected hidden></option>

                                <option value="btc">BTC</option>

                                <option value="ethr">ETHR</option>
                            </select>
                        </div>
                    </div>

                    <div class="cs--dashboard-form__btn-group">
                        <button type="submit" class="cs--btn cs--btn--grad-blue">
                            {{ $__("Save changes") }}
                        </button>
                    </div>
                </form>

                <aside class="cs--page-side">
                    <h3 class="cs--page-side__title">FAQs</h3>
                    <ul class="cs--page-side__item-list">
                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >What is 2FA?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >How do I link an exchange?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >Can I create a new exchange account through
                                CryptoSystem?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >What are exchange APIs?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >Do you offer a referral rewards program?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >Can I deposit or withdraw assets from CryptoSystem?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a
                                href="javasript:void(0)"
                                class="cs--page-side__link cs--page-side__link--accent"
                            >Visit Support Center</a
                            >
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </main>
</template>

<script>
export default {
name: "Preferences"
}
</script>

<style scoped>

</style>
