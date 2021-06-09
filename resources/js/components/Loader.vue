<template>
    <div class="loader-container" v-if="active">
        <img :src="url" alt="Loader" :width="width">
    </div>
</template>

<script>
export default {
    name: "Loader",
    props: {
        url: {
            type: String,
            default: '/img/loader.svg'
        },
        width: {
            type: Number,
            default: 90
        },
        active: {
            type: Boolean,
            default: false
        }

    },
}
</script>

<style scoped>
.loader-container {
    min-height: calc(100vh - 361px);
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
