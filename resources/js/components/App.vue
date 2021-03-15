<template>
    <v-app>
        <v-main>
            <v-toolbar dense>
                <v-toolbar-title>{{ projectName }}</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-toolbar-items class="hidden-sm-and-down">
                    <v-btn :to="item.path" :key="key" v-for="(item,key) in items">
                        {{ item.name }}
                    </v-btn>
                    <v-avatar
                    ><img
                        src="https://cdn.vuetifyjs.com/images/john.jpg"
                        alt="John"
                    >
                    </v-avatar>
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
