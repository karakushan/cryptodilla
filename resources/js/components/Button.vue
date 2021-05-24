<template>
    <button
        :type="type"
        :class="{'cs--btn':true, 'cs--btn--grad-blue':true, 'vue-btn':true,'preloading':preloader}"
    >
        <slot>
            {{ $__("Save changes") }}
        </slot>
        <slot name="preloader">
            <span class="preloader"><img src="/img/preloader.svg" alt="Preloader" v-show="preloader"></span>
        </slot>
    </button>
</template>

<script>
export default {
    name: "Button",
    data() {
        return {
            cssClass: this.class
        }
    },
    props: {
        type: {
            type: String,
            default: 'button'
        },
        preloader: {
            type: Boolean,
            default: false
        },
    }
}
</script>

<style lang="scss">
.vue-btn {
    &.cs--btn {
        &.preloading{
            padding-right: 47px;
        }
        .preloader {
            width: 27px;
            position: absolute;
            right: 13px;
            top: 0;
            height: 100%;
            display: flex;
            align-items: center;
        }
    }
}
</style>
