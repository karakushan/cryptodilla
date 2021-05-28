<template>
    <main class="cs--page cs--dashboard--2fa" v-if="appData">
        <div class="cs--container">
            <h1 class="cs--page__title">{{ $__("2 Factor Authentication") }}</h1>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form" v-if="!appData.user.google2fa_status">
                    <h2 class="cs--dashboard-form__title">
                        {{ $__("Enabling 2FA (2 Factor Authentication) is highly recommended. This adds an extra layer of security to your account in addition to your password.") }}
                    </h2>
                    <div class="cs--dashboard-form__btn-group">
                        <router-link to="/2fa-step-1" tag="button" class="cs--btn cs--btn--grad-blue">
                            {{ $__("Enable") }}
                        </router-link>
                    </div>
                </form>
                <form class="cs--dashboard-form" v-else>
                    <h2 class="cs--dashboard-form__title">
                        {{ $__("2FA (2 Factor Authentication) is Enabled. We do not recommended disabling 2FA, howere if you need to do so for some reason, click “Disable”") }}
                    </h2>
                    <div class="cs--dashboard-form__btn-group">
                        <router-link tag="button" to="/2fa-disable" class="cs--btn cs--btn--grad-blue">
                            {{ $__("Disable") }}
                        </router-link>
                    </div>
                </form>

                <AsideFaq/>
            </div>
        </div>
    </main>
</template>

<script>
import { mapGetters} from 'vuex'
import AsideFaq from "../components/AsideFaq";
export default {
    name: "TwoFactorAuth",
    computed: {
        ...mapGetters(['appData'])
    },
    components:{
        AsideFaq
    }

}
</script>

<style scoped>

</style>
