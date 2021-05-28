<template>
    <main class="cs--page cs--dashboard--user-profile">
        <div class="cs--container">
            <h1 class="cs--page__title">{{ $__("User Profile") }}</h1>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form" @submit="updateUser()">
                    <h2 class="cs--dashboard-form__title">{{ $__("Change Password") }}</h2>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--current-password"
                            class="cs--dashboard-form__label"
                        >{{ $__("Current Password") }}</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                v-model="formData.current_password"
                                id="dashboard--current-password"
                                type="password"
                                class="cs--dashboard-form__input"
                                placeholder="*****"
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--new-password"
                            class="cs--dashboard-form__label"
                        >{{ $__("New Password") }}</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                v-model="formData.password"
                                id="dashboard--new-password"
                                type="password"
                                class="cs--dashboard-form__input"
                                placeholder="*****"
                                required
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--confirm-password"
                            class="cs--dashboard-form__label"
                        >{{ $__("Confirm Password") }}</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                v-model="formData.password_confirmation"
                                id="dashboard--confirm-password"
                                type="password"
                                class="cs--dashboard-form__input"
                                placeholder="*****"
                                required
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__btn-group">
                        <Button :preloader="process" type="submit" class="cs--btn cs--btn--grad-blue">
                            {{ $__("Save changes") }}
                        </Button>
                    </div>
                    <hr/>
                    <h2 class="cs--dashboard-form__title">{{ $__("Activity Log") }}</h2>

                    <div class="cs--table-wrapper">
                        <table class="cs--table cs--table--striped">
                            <thead>
                            <tr>
                                <th class="">{{ $__("Activity") }}</th>

                                <th class="">{{ $__("Date/Time") }}</th>

                                <th class="">{{ $__("IP Address") }}</th>

                                <th class="">{{ $__("Location") }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="act in activity">
                                <td data-label="Activity" class=""><span>{{ act.name }}</span></td>

                                <td data-label="Date/Time" class="">
                                    <span>{{ act.created_at }}</span>
                                </td>

                                <td data-label="IP Address" class="">
                                    <span>{{ act.ip }}</span>
                                </td>

                                <td data-label="Location" class="">
                                    <span v-if="act.location">{{ act.location.city+', '+act.location.country_code  }}</span>
                                    <span v-else>{{ $__('Unknown')  }}</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </form>

                <AsideFaq/>
            </div>
        </div>
    </main>
</template>

<script>
import {mapGetters} from 'vuex'
import AsideFaq from "../components/AsideFaq";
import Button from "../components/Button";

export default {
    name: "Profile",
    data() {
        return {
            formData: {
                current_password: '',
                password: '',
                password_confirmation: ''
            },
            process: false,
            activity: []
        }
    },
    methods: {
        getActivityLog() {
            axios
                .post('/terminal/user-activity', {})
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.activity = response.data
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                })
                .finally(() => {
                    // Will be executed upon completion catch & then
                });
        },
        updateUser() {
            this.process = true
            axios
                .put('/terminal/user-update/' + this.appData.user.id, this.formData)
                .then(response => {
                    if (response.status == 200 && response.data) {
                        this.formData = {
                            current_password: '',
                            password: '',
                            password_confirmation: ''
                        }

                        this.$notify.success({
                            position: 'top right',
                            title: this.$__('Успех'),
                            msg: response.data.message,
                            timeout: 3000
                        })


                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                })
                .finally(() => {
                    this.process = false
                });
        }
    },
    computed: {
        ...mapGetters(['appData']),
    },
    components: {
        Button,
        AsideFaq
    },
    mounted() {
        this.getActivityLog()
    }
}
</script>

<style lang="scss" scoped>
.app-profile {
    max-width: 680px;
    margin: 50px auto;
}
</style>
