<template>
    <v-card class="app-chat overflow-hidden">
        <v-app-bar
            color="deep-purple accent-4"
            dark
        >
            <v-app-bar-nav-icon>
                <v-icon>mdi-chat</v-icon>
            </v-app-bar-nav-icon>

            <v-toolbar-title>Чат</v-toolbar-title>

            <v-spacer></v-spacer>
            <v-icon>mdi-keyboard-arrow-down</v-icon>

        </v-app-bar>


        <v-container>
            <v-sheet max-height="244" class="overflow-y-auto" v-chat-scroll>
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
            <v-form>
                <v-text-field
                    name="input-7-1"
                    label="Сообщение"
                    v-model="message"
                ></v-text-field>
                <v-btn @click="addMessage()">Отправить</v-btn>
            </v-form>
        </v-container>


    </v-card>
</template>

<script>
export default {
    name: "Chat",
    data: () => ({
        message: '',
        messages: [],
        users: [],
    }),
    methods: {
        fetchMessages() {
            axios.get('/terminal/chat-messages').then(response => {
                this.messages = response.data;
            });
        },

        addMessage() {

            axios.post('/terminal/chat-messages', {message: this.message}).then(response => {
                console.log(response.data);
                this.message = ''
                this.fetchMessages()
            });


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
}
</script>

<style lang="scss" scoped>
.app-chat {
    position: fixed;
    bottom: 0;
    right: 0;
    z-index: 99999999999;
    width: 312px;
    height: 434px;
}
</style>
