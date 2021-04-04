<template>
    <v-card :class="{'app-chat':true, 'overflow-hidden':true, 'active':chatOpen}">
        <v-app-bar
            color="deep-purple accent-4"
            dark
        >
            <v-app-bar-nav-icon>
                <v-icon>mdi-chat</v-icon>
            </v-app-bar-nav-icon>

            <v-toolbar-title>Чат</v-toolbar-title>

            <v-spacer></v-spacer>
            <v-btn
                icon
                @click="chatOpen=!chatOpen">
                <v-icon v-if="!chatOpen">mdi-menu-down</v-icon>
                <v-icon v-else>mdi-menu-up</v-icon>
            </v-btn>


        </v-app-bar>


        <v-container>
            <vue-custom-scrollbar class="scroll-area" :settings="settings" v-show="messages.length" v-chat-scroll>
                <v-sheet

                >

                    <v-list three-line>
                        <template v-for="(item, index) in messages">
                            <v-subheader
                                v-if="item.header"
                                :key="item.header"
                                v-text="item.header"
                            ></v-subheader>

                            <v-divider
                                :key="index"
                            ></v-divider>

                            <v-list-item
                                :key="item.title"
                            >
                                <v-list-item-avatar>
                                    <v-img :src="item.user.avatar_url"></v-img>
                                </v-list-item-avatar>

                                <v-list-item-content>
                                    <v-list-item-title v-html="item.user.name"></v-list-item-title>
                                    <v-list-item-subtitle v-html="item.message"></v-list-item-subtitle>
                                </v-list-item-content>
                            </v-list-item>
                        </template>
                    </v-list>
                </v-sheet>
            </vue-custom-scrollbar>

            <v-form @submit.prevent="addMessage()">
                <v-text-field
                    name="input-7-1"
                    label="Сообщение"
                    v-model="message"
                    @keyup.enter.prevent="addMessage()"
                    hint="Нажмите Enter для отправки"
                ></v-text-field>
            </v-form>
        </v-container>


    </v-card>
</template>

<script>
import vueCustomScrollbar from 'vue-custom-scrollbar'
import "vue-custom-scrollbar/dist/vueScrollbar.css"

export default {
    name: "Chat",
    data: () => ({
        message: '',
        messages: [],
        users: [],
        chatOpen: localStorage.getItem('chatOpen') == '1' ? true : false,
        settings: {
            suppressScrollY: false,
            suppressScrollX: false,
            wheelPropagation: false
        }
    }),
    methods: {
        fetchMessages() {
            axios.get('/terminal/chat-messages').then(response => {
                this.messages = response.data;
            });
        },

        addMessage() {

            if (!this.message.length) return;


            let message = this.message
            this.message = ''

            axios.post('/terminal/chat-messages', {message: message}).then(response => {
                this.fetchMessages()
            });


        }
    },
    watch: {
        chatOpen(newValue, oldValue) {
            localStorage.setItem('chatOpen', newValue ? 1 : 0)
        }
    },
    mounted() {
        this.fetchMessages();

        Echo.join('chat')
            .here(users => {
                this.users = users;
            })
            .joining(user => {
                this.users.push(user);
            })
            .leaving(user => {
                this.users = this.users.filter(u => u.id !== user.id);
            })
            .listenForWhisper('typing', ({id, name}) => {
                this.users.forEach((user, index) => {
                    if (user.id === id) {
                        user.typing = true;
                        this.$set(this.users, index, user);
                    }
                });
            })
            .listen('MessageSent', (event) => {
                this.messages.push({
                    message: event.message.message,
                    user: event.user
                });

                this.users.forEach((user, index) => {
                    if (user.id === event.user.id) {
                        user.typing = false;
                        this.$set(this.users, index, user);
                    }
                });
            });
    },
    components: {
        vueCustomScrollbar
    }
}
</script>

<style lang="scss" scoped>
.app-chat {
    position: fixed;
    bottom: 0;
    right: 0;
    z-index: 99999999999;
    width: 312px;
    height: 64px;
    -webkit-transition: all .4s;
    -moz-transition: all .4s;
    -ms-transition: all .4s;
    -o-transition: all .4s;
    transition: all .4s;

    .v-list--three-line .v-list-item, .v-list-item--three-line {
        min-height: 0;
    }

    .v-list--three-line .v-list-item .v-list-item__avatar:not(.v-list-item__avatar--horizontal), .v-list--three-line .v-list-item .v-list-item__icon, .v-list--two-line .v-list-item .v-list-item__avatar:not(.v-list-item__avatar--horizontal), .v-list--two-line .v-list-item .v-list-item__icon, .v-list-item--three-line .v-list-item__avatar:not(.v-list-item__avatar--horizontal), .v-list-item--three-line .v-list-item__icon, .v-list-item--two-line .v-list-item__avatar:not(.v-list-item__avatar--horizontal), .v-list-item--two-line .v-list-item__icon {
        margin-bottom: 5px;
        margin-top: 5px;
    }


    hr {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    &.active {
        height: 434px;
    }

    .scroll-area {
        position: relative;
        margin: auto;
        width: auto;
        height: 283px;
    }

}
</style>
