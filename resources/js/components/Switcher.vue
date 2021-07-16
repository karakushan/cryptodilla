<template>
    <div class="switcher">
        <label class="switch">
            <input type="checkbox" class="switch__checkbox" v-model="val">
            <span class="switch__slider switch__slider--round"></span>
        </label>
        <span class="switcher__label">
           <slot></slot>
        </span>

    </div>
</template>

<script>
export default {
    name: "Switcher",
    data() {
        return {
            val: this.value
        }
    },
    props: {
        value: {
            type: Boolean,
            default: false
        },
    },
    watch: {
        val(newValue, oldValue) {
            this.$emit('input', newValue)
        }
    },
}
</script>

<style lang="scss">
.switcher {
    display: flex;
    align-items: center;
    &__label {
        font-size: 12px;
        color: var(--color-grey-blue-50);
    }
}

.switch {
    position: relative;
    display: inline-block;
    width: 54px;
    height: 28px;
    margin-right: 10px;

}

.switch__checkbox {
    display: none;
}

.switch__slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color:var(--color-grey-20);
    transition: .4s;

    &:before {
        position: absolute;
        content: "";
        height: 20px;
        width: 20px;
        left: 4px;
        bottom: 4px;
        background-color: #fff;
        transition: .4s;
    }
}

.switch__checkbox:checked + .switch__slider {
    background-color: #1299da;
}

.switch__checkbox:checked + .switch__slider:before {
    transform: translateX(26px);
}

.switch__slider--round {
    border-radius: 34px;

    &:before {
        border-radius: 50%;
    }
}
</style>
