<template>
    <main class="cs--page cs--dashboard--user-profile">
        <div class="cs--container">
            <h1 class="cs--page__title">User Profile</h1>
            <div class="cs--page-side-wrapper">
                <form class="cs--dashboard-form">
                    <h2 class="cs--dashboard-form__title">Change Password</h2>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--current-password"
                            class="cs--dashboard-form__label"
                        >Current Password</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
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
                        >New Password</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                id="dashboard--new-password"
                                type="password"
                                class="cs--dashboard-form__input"
                                placeholder="*****"
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__item">
                        <label
                            for="dashboard--confirm-password"
                            class="cs--dashboard-form__label"
                        >Confirm Password</label
                        >

                        <div class="cs--dashboard-form__input-wrapper" data-postfix="">
                            <input
                                id="dashboard--confirm-password"
                                type="password"
                                class="cs--dashboard-form__input"
                                placeholder="*****"
                            />
                        </div>
                    </div>

                    <div class="cs--dashboard-form__btn-group">
                        <button type="submit" class="cs--btn cs--btn--grad-blue">
                            Save changes
                        </button>
                    </div>
                    <hr />
                    <h2 class="cs--dashboard-form__title">Activity Log</h2>

                    <div class="cs--table-wrapper">
                        <table class="cs--table cs--table--striped">
                            <thead>
                            <tr>
                                <th class="">Activity</th>

                                <th class="">Date/Time</th>

                                <th class="">IP Address</th>

                                <th class="">Location</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Activity" class=""><span>Login</span></td>

                                <td data-label="Date/Time" class="">
                                    <span>23 Mar 2021, 11:12 AM</span>
                                </td>

                                <td data-label="IP Address" class="">
                                    <span>188.163.43.68</span>
                                </td>

                                <td data-label="Location" class="">
                                    <span>Unknown</span>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="Activity" class=""><span>Login</span></td>

                                <td data-label="Date/Time" class="">
                                    <span>23 Mar 2021, 11:12 AM</span>
                                </td>

                                <td data-label="IP Address" class="">
                                    <span>188.163.43.68</span>
                                </td>

                                <td data-label="Location" class="">
                                    <span>Unknown</span>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="Activity" class=""><span>Login</span></td>

                                <td data-label="Date/Time" class="">
                                    <span>23 Mar 2021, 11:12 AM</span>
                                </td>

                                <td data-label="IP Address" class="">
                                    <span>188.163.43.68</span>
                                </td>

                                <td data-label="Location" class="">
                                    <span>Unknown</span>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="Activity" class=""><span>Login</span></td>

                                <td data-label="Date/Time" class="">
                                    <span>23 Mar 2021, 11:12 AM</span>
                                </td>

                                <td data-label="IP Address" class="">
                                    <span>188.163.43.68</span>
                                </td>

                                <td data-label="Location" class="">
                                    <span>Unknown</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </form>

                <aside class="cs--page-side">
                    <h3 class="cs--page-side__title">FAQs</h3>
                    <ul class="cs--page-side__item-list">
                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >What is 2FA?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >How do I link an exchange?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >Can I create a new exchange account through
                                CryptoSystem?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >What are exchange APIs?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >Do you offer a referral rewards program?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a href="javasript:void(0)" class="cs--page-side__link"
                            >Can I deposit or withdraw assets from CryptoSystem?</a
                            >
                        </li>

                        <li class="cs--page-side__item">
                            <a
                                href="javasript:void(0)"
                                class="cs--page-side__link cs--page-side__link--accent"
                            >Visit Support Center</a
                            >
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </main>
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
