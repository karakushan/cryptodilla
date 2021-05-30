<template>
    <ul class="cs--dashboard-tab-list">
        <li class="cs--dashboard-tab-item cs--dashboard-tab-item--active">
            <router-link to="/">{{ $__("Trade") }}</router-link>
        </li>

        <li class="cs--dashboard-tab-item">
            <router-link to="/portfolio">{{ $__("Portfolio") }}</router-link>
        </li>

        <li class="cs--dashboard-tab-item">
            <router-link to="/bots">{{ $__("Bots") }}</router-link>
        </li>

        <li class="cs--dashboard-tab-item">
            <router-link to="/markets">{{ $__("Markets") }}</router-link>
        </li>

        <li class="cs--dashboard-tab-item">
            <router-link to="/support">{{ $__("Support") }}</router-link>
        </li>
    </ul>
</template>

<script>
export default {
name: "DashboardNav"
}
</script>

<style scoped>

</style>
