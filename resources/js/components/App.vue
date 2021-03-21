<template>
    <v-app>
        <v-main>
            <v-toolbar dense>
                <v-toolbar-title>{{ projectName }}</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-toolbar-items class="hidden-sm-and-down d-flex align-items-center">
                    <v-btn :to="item.path" :key="key" v-for="(item,key) in items">
                        {{ item.name }}
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
                                        src="https://cdn.vuetifyjs.com/images/john.jpg"
                                        alt="John"
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
                                            src="https://cdn.vuetifyjs.com/images/john.jpg"
                                            alt="John"
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
                                    >
                                        Edit Account
                                    </v-btn>
                                    <v-divider class="my-3"></v-divider>
                                    <v-btn
                                        depressed
                                        rounded
                                        text
                                    >
                                        Disconnect
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
        </v-main>
    </v-app>


</template>

<script>
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
            user:{}
        }
    },
    components: {
        TradingView
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
