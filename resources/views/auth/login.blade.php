@extends('layouts.dashboard-auth')

@section('content')
    <main class="cs--page cs--page--registration">
        <div class="cs--page__bg">
            <img src="{{ asset('/img/registration-bg.svg') }}" alt=""/>
        </div>
        <div class="cs--container">
            <div class="cs--page__wrapper">
                <a href="javascript:void(0)" class="cs--logo cs--logo-lg">
                    <img src="./img/logo.png" alt="logo"/>
                </a>
                <h1 class="cs--page__title">{{ __("Sign in to your account") }}</h1>
                <form method="POST" action="{{ route('login') }}" id="sing-in" class="cs--reg-form">
                    @csrf
                    <label for="sing-in-email" class="cs--reg-form__input-wrapper">
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
                            id="sing-in-email"
                            placeholder="{{ __("Enter Your E-mail") }}"
                            type="email" class="cs--reg-form__input @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            autofocus>


                    </label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <label for="sing-in-pass" class="cs--reg-form__input-wrapper">
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
                            id="sing-in-pass"
                            type="password"
                            class="cs--reg-form__input @error('password') is-invalid @enderror"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="{{ __("Enter Your Password") }}"
                        >
                    </label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <button type="submit" class="cs--btn cs--btn--grad-blue">
                        Sing In
                    </button>
                </form>
                <div class="cs--form-support">
                    @if (Route::has('password.request'))
                        <p>
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot password?') }}
                            </a>
                        </p>
                    @endif
                    <p>
                        Already have an account?
                        <a href="{{ route('register') }}">{{ __("Sign Up") }}</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
