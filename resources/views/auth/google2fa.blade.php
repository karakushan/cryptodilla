@extends('layouts.dashboard-auth')

@section('content')
    <main class="cs--page cs--page--registration">
        <div class="cs--page__bg">
            <img src="./img/registration-bg.svg" alt="" />
        </div>
        <div class="cs--container">
            <div class="cs--page__wrapper">
                <a href="javascript:void(0)" class="cs--logo cs--logo-lg">
                    <img src="./img/logo.png" alt="logo" />
                </a>
                <h1 class="cs--page__title">{{ __("2 Factor Authentication") }}</h1>
                <form id="factor-auth" class="cs--reg-form" method="post" action="{{ route('google2fa_validate') }}">
                    @csrf
                    <label for="factor-auth-auth" class="cs--reg-form__input-wrapper">
                        <div class="cs--reg-form__input-icon">
                            <svg
                                class="cs--icon"
                                aria-hidden="true"
                                width="20"
                                height="20"
                                viewBox="0 0 20 20"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M14.1666 6.66663V5.83329C14.1666 3.53579 12.2974 1.66663 9.99992 1.66663C7.70242 1.66663 5.83325 3.53579 5.83325 5.83329V8.33329H4.99992C4.08075 8.33329 3.33325 9.08079 3.33325 9.99996V16.6666C3.33325 17.5858 4.08075 18.3333 4.99992 18.3333H14.9999C15.9191 18.3333 16.6666 17.5858 16.6666 16.6666V9.99996C16.6666 9.08079 15.9191 8.33329 14.9999 8.33329H7.49992V5.83329C7.49992 4.45496 8.62158 3.33329 9.99992 3.33329C11.3783 3.33329 12.4999 4.45496 12.4999 5.83329V6.66663H14.1666Z"
                                    fill="var(--icon-color)"
                                />
                            </svg>
                        </div>
                        <input
                            id="factor-auth-auth"
                            type="password"
                            class="cs--reg-form__input"
                            placeholder="{{ __("Google Authenicator Code") }}"
                            name="secret"
                        />

                    </label>
                    @error('secret')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <button type="submit" class="cs--btn cs--btn--grad-blue">
                        {{ __("Confirm") }}
                    </button>
                </form>
                <div class="cs--form-support">
                    {{ __("Lost your") }}
                    <a href="javascript:void(0)">{{ ("Google Authenticator Access?") }}</a>
                </div>
            </div>
        </div>
    </main>
@endsection
