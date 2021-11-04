@extends('layouts.dashboard-auth')

@section('content')
    <main class="cs--page cs--page--registration">
        <div class="cs--page__bg">
            <img src="{{ asset('/img/registration-bg.svg') }}" alt=""/>
        </div>
        <div class="cs--container">
            <div class="cs--page__wrapper">
                <a href="{{ route('homepage') }}" class="cs--logo cs--logo-lg">
                    <img src="{{ asset('/img/logo.png') }}" alt="logo"/>
                </a>
                <h1 class="cs--page__title">{{ __("Create your free account") }}</h1>
                <form method="POST" action="{{ route('register') }}" id="create-acc" class="cs--reg-form">
                    @csrf
                    <input type="hidden" name="refer" value="{{ request('refer','') }}">
                    <label for="create-acc-user" class="cs--reg-form__input-wrapper">
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
                                    d="M6.25 5.41663C6.25 7.48413 7.9325 9.16663 10 9.16663C12.0675 9.16663 13.75 7.48413 13.75 5.41663C13.75 3.34913 12.0675 1.66663 10 1.66663C7.9325 1.66663 6.25 3.34913 6.25 5.41663ZM16.6667 17.5H17.5V16.6666C17.5 13.4508 14.8825 10.8333 11.6667 10.8333H8.33333C5.11667 10.8333 2.5 13.4508 2.5 16.6666V17.5H16.6667Z"
                                    fill="var(--icon-color)"
                                />
                            </svg>
                        </div>
                        <input
                            id="create-acc-user"
                            type="text"
                            class="cs--reg-form__input @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}"
                            autocomplete="name"
                            autofocus
                            placeholder="{{ __("Enter Your Name") }}"
                        >


                    </label>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <label for="create-acc-email" class="cs--reg-form__input-wrapper">
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
                                    d="M2.14282 7.23141L9.75282 11.1893C9.82916 11.229 9.91393 11.2497 9.99997 11.2497C10.086 11.2497 10.1708 11.229 10.2471 11.1893L17.8571 7.23213V14.1071C17.8571 14.7001 17.6303 15.2706 17.2231 15.7016C16.8158 16.1326 16.2591 16.3914 15.6671 16.425L15.5357 16.4286H4.46425C3.8713 16.4286 3.3008 16.2017 2.8698 15.7945C2.4388 15.3873 2.17996 14.8306 2.14639 14.2386L2.14282 14.1071V7.23141ZM4.46425 3.57141H15.5357C16.1286 3.57137 16.6991 3.79824 17.1301 4.20546C17.5611 4.61269 17.82 5.16941 17.8535 5.76141L17.8571 5.89284V6.02427L9.99997 10.11L2.14282 6.02427V5.89284C2.14278 5.29988 2.36965 4.72939 2.77687 4.29839C3.1841 3.86739 3.74082 3.60855 4.33282 3.57498L4.46425 3.57141H15.5357H4.46425Z"
                                    fill="var(--icon-color)"
                                />
                            </svg>
                        </div>
                        <input
                            id="create-acc-email"
                            type="email"
                            class="cs--reg-form__input @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            autocomplete="email"
                            placeholder="{{ __("Enter Your E-mail") }}"
                        >

                    </label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <label for="create-acc-pass" class="cs--reg-form__input-wrapper">
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
                        <input id="create-acc-pass" type="password"
                               class="cs--reg-form__input @error('password') is-invalid @enderror" name="password"
                               autocomplete="new-password" placeholder="{{ __("Enter Your Password") }}">
                    </label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <label
                        for="create-acc-pass-repeat"
                        class="cs--reg-form__input-wrapper"
                    >
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

                        <input id="create-acc-pass-repeat" type="password" class="cs--reg-form__input"
                               name="password_confirmation" autocomplete="new-password"
                               placeholder="{{ __("Repeat Your Password") }}">
                    </label>

                    <div class="cs--reg-form__term" style="margin-bottom: 15px;">
                        <label
                            for="create-acc-privacy"
                            class="cs--reg-form__checkbox-wrapper"
                        >
                            <input
                                id="create-acc-privacy"
                                type="checkbox"
                                class="cs--reg-form__checkbox"
                                name="terms"
                                value="1"
                            />

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
                                    d="M8.33339 12.9883L5.58922 10.2442L4.41089 11.4225L8.33339 15.345L16.4226 7.25585L15.2442 6.07751L8.33339 12.9883Z"
                                    fill="var(--icon-color)"
                                />
                            </svg>
                        </label>
                        <div>
                            {{ __("I agree to the Terms of Service and have read and acknowledge
                            the") }}
                            <a href="javascript:void(0)">
                                <b>{{ __("Privacy Statement") }}</b> </a
                            >.
                        </div>
                    </div>
                    @error('terms')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="cs--reg-form__recaptcha">
                        {!! htmlFormSnippet([
    "theme" => "light",
    "size" => "normal",
    "tabindex" => "3",
    "callback" => "callbackFunction",
    "expired-callback" => "expiredCallbackFunction",
    "error-callback" => "errorCallbackFunction",
]) !!}


                    </div>
                    @error('g-recaptcha-response')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <button type="submit" class="cs--btn cs--btn--grad-blue">
                        {{ __("Create Account") }}
                    </button>
                </form>
                <div class="cs--form-support">
                    {{ __("Already have an account?") }}
                    <a href="{{ route('login') }}">{{ __("Sign in") }}</a>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('head')
    {!! htmlScriptTagJsApi() !!}
@endpush
