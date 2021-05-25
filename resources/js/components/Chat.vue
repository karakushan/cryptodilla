<template>
    <section class="cs--interface__block cs--interface__block--chat">
        <form class="cs--chat-wrapper">
            <div class="cs--interface__block-head">
                  <span class="cs--interface__block-head-icon">
                    <svg
                        class="cs--icon"
                        aria-hidden="true"
                        width="20"
                        height="19"
                        viewBox="0 0 20 19"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                          d="M3.33317 14.3091H4.99984V17.4196L9.25067 14.3091H13.3332C14.2523 14.3091 14.9998 13.6254 14.9998 12.7847V6.68711C14.9998 5.84641 14.2523 5.16272 13.3332 5.16272H3.33317C2.414 5.16272 1.6665 5.84641 1.6665 6.68711V12.7847C1.6665 13.6254 2.414 14.3091 3.33317 14.3091Z"
                          fill="var(--icon-color)"
                      />
                      <path
                          d="M16.6667 2.11401H6.66667C5.7475 2.11401 5 2.7977 5 3.6384H15C15.9192 3.6384 16.6667 4.32209 16.6667 5.16279V11.2604C17.5858 11.2604 18.3333 10.5767 18.3333 9.73597V3.6384C18.3333 2.7977 17.5858 2.11401 16.6667 2.11401Z"
                          fill="var(--icon-color)"
                      />
                    </svg>
                  </span>
                <h2 class="cs--interface__block-title">{{ $__("Chat") }}</h2>
            </div>
            <output class="cs--chat-output" v-chat-scroll>
                <div class="cs--chat-message" v-for="message in messages">
                    <b class="cs--color-danger" :style="{color:message.user.chat_color }">{{ message.user.name }}: </b
                    ><span>{{ message.message }}</span>
                </div>
            </output>
            <div class="cs--chat-input">
                  <textarea
                      v-model="message"
                      class="cs--dashboard-form__input"
                      :placeholder="$__('Message')"
                  ></textarea>
                <button type="button" class="cs--btn cs--btn--grad-blue" @click.prevent="addMessage()">
                    <svg
                        class="cs--icon"
                        aria-hidden="true"
                        width="18"
                        height="13"
                        viewBox="0 0 18 13"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M16.2208 0.256246L1.44583 5.46737C0.437498 5.8378 0.443331 6.35228 1.26083 6.5817L5.05416 7.66402L13.8308 2.59923C14.2458 2.36829 14.625 2.49253 14.3133 2.74557L7.2025 8.61524H7.20083L7.2025 8.616L6.94083 12.1922C7.32416 12.1922 7.49333 12.0314 7.70833 11.8416L9.55083 10.2029L13.3833 12.7921C14.09 13.148 14.5975 12.9651 14.7733 12.1937L17.2892 1.34923C17.5467 0.404874 16.895 -0.0227171 16.2208 0.256246Z"
                            fill="var(--icon-color)"
                        />
                    </svg>
                </button>

            </div>
            <div class="alert cs--color-danger" v-if="error">{{ error }}</div>
        </form>
    </section>
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
        },
        error: ''
    }),
    methods: {
        getRandomRgb() {
            var num = Math.round(0xffffff * Math.random());
            var r = num >> 16;
            var g = num >> 8 & 255;
            var b = num & 255;
            return 'rgb(' + r + ', ' + g + ', ' + b + ')';
        },
        playSound() {
            let audio = new Audio('/audio/message.mp3')
            audio.play();
        },
        fetchMessages() {
            axios.get('/terminal/chat-messages').then(response => {
                this.messages = response.data;
            });
        },
        addMessage() {
            this.error = ''
            if (!this.message.length){
                this.error = this.$__('Вы пытаетесь отправить пустое сообщение!')
                return;
            }


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
                this.playSound()

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
.cs--interface__block--chat {
    .alert{
        margin-top: 1rem;
        font-size: 12px;
    }
}
</style>
