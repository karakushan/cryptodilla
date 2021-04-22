<template>
    <v-app>
        <v-main>
            <v-toolbar dense>
                <v-toolbar-title>{{ projectName }}</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-toolbar-items class="hidden-sm-and-down d-flex align-items-center">
                    <v-btn :to="item.path" :key="key" v-for="(item,key) in items" v-if="item.path!='/profile'">
                        {{ $__(item.name) }}
                    </v-btn>
                    <v-menu
                        class="ml-3"
                        bottom
                        min-width="200px"
                        rounded
                        offset-y
                    >
                        <template v-slot:activator="{ on }">
                            <v-btn
                                icon
                                x-large
                                v-on="on"
                            >
                                <v-avatar
                                    color="brown"
                                    size="42"
                                >
                                    <img
                                        :src="data.user.avatar_url"
                                        :alt="data.user.name"
                                    >
                                </v-avatar>
                            </v-btn>
                        </template>
                        <v-card>
                            <v-list-item-content class="justify-center">
                                <div class="mx-auto text-center">
                                    <v-avatar
                                        color="brown"
                                        size="42"
                                    >
                                        <img
                                            :src="data.user.avatar_url"
                                            :alt="data.user.name"
                                        >
                                    </v-avatar>
                                    <h3>{{ user.fullName }}</h3>
                                    <p class="caption mt-1">
                                        {{ user.email }}
                                    </p>
                                    <v-divider class="my-3"></v-divider>
                                    <v-btn
                                        depressed
                                        rounded
                                        text
                                        to="/profile"
                                    >
                                        Профиль
                                    </v-btn>
                                    <v-divider class="my-3"></v-divider>
                                    <v-btn
                                        depressed
                                        rounded
                                        text
                                        @click="logout"
                                    >
                                        Выйти
                                    </v-btn>
                                </div>
                            </v-list-item-content>
                        </v-card>
                    </v-menu>
                </v-toolbar-items>
            </v-toolbar>

            <v-container fluid>
                <router-view></router-view>
            </v-container>

            <v-footer
                dark
                padless
            >
                <v-row
                    justify="center"
                    no-gutters
                    class=""
                >

                    <v-col
                        class="py-4 text-center white--text"
                        cols="12"
                    >
                        {{ new Date().getFullYear() }} — <strong>{{ projectName }}</strong>
                    </v-col>
                </v-row>
            </v-footer>
            <Chat></Chat>
        </v-main>
    </v-app>


</template>

<script>
import {mapActions} from 'vuex'
import Chat from "./Chat";

export default {
    name: "App",
    data() {
        return {
            projectName: 'HyperTrade',
            links: [
                'Home',
                'About Us',
                'Team',
                'Services',
                'Blog',
                'Contact Us',
            ],
            items: [],
            right: null,
            user: {}
        }
    },
    props: {
        data: {
            type: Object,
            default() {
                return {}
            }
        },
    },
    mounted() {
        this.setData(this.data)
    },
    methods: {
        ...mapActions(['setData']),
        logout(){
             axios
              .post('/logout', {

              })
              .then(response => {
                  location.reload()
              })
              .catch(error => {
                 // console.log(error.response);
              	console.log(error.response.data);
              });
        }
    },
    components: {
        TradingView,
        Chat
    },
    created() {
        this.$router.options.routes.forEach(route => {
            this.items.push({
                name: route.name
                , path: route.path
            })
        })
    }
}
</script>

<style scoped>

</style>
