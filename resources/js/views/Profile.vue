<template>
    <div class="app-profile">
        <h1 class="h3">{{ $__($route.name) }}</h1>
        <v-divider></v-divider>
        <v-form>
            <v-row>
                <v-col md="6">
                    <v-text-field v-model="appData.user.name"
                        :label="$__('Имя')"
                    ></v-text-field>
                </v-col>
                <v-col md="6">
                    <v-text-field
                        v-model="appData.user.email"
                        :label="$__('E-mail')"
                    ></v-text-field>
                </v-col>

                <v-col md="6">
                    <v-text-field type="password"
                        :label="$__('Пароль')"
                    ></v-text-field>
                </v-col>
                <v-col md="6">
                    <v-text-field type="password"
                        :label="$__('Повтор пароля')"
                    ></v-text-field>
                </v-col>
                <v-col md="6">
                    <v-text-field
                        v-model="appData.user.country"
                        :label="$__('Страна')"
                    ></v-text-field>
                </v-col>
                <v-col md="6">
                    <v-text-field
                        v-model="appData.user.city"
                        :label="$__('Город')"
                    ></v-text-field>
                </v-col>
                <v-col md="12">
                    <v-text-field
                        v-model="appData.user.address"
                        :label="$__('Адрес')"
                    ></v-text-field>
                </v-col>

                <v-col md="12">
                   <v-btn block color="success" large>{{ $__('Сохранить') }}</v-btn>
                </v-col>
            </v-row>
        </v-form>
    </div>
</template>

<script>
import {mapGetters} from 'vuex'
export default {
    name: "Profile",
    computed: {
        ...mapGetters(['appData']),
    },
}
</script>

<style lang="scss" scoped>
.app-profile{
    max-width: 680px;
    margin: 50px auto;
}
</style>
