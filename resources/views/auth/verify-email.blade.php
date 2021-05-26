@extends('layouts.dashboard-auth')


@section('content')
    <main class="cs--page cs--page--registration">
        <div class="cs--page__bg">
            <img src="/img/registration-bg.svg" alt="">
        </div>
        <div class="cs--container">
            <div class="cs--page__wrapper">
                <a href="{{ route('homepage') }}" class="cs--logo cs--logo-lg">
                    <img src="{{ asset('/img/logo.png') }}" alt="logo">
                </a>
                <h1 class="cs--page__title">{{ __('Verify Your Email Address') }}</h1>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                <p style="text-align:center;">{{ __('Before proceeding, please check your email for a verification link.') }}</p>

                <p style="text-align:center;">{{ __('If you did not receive the email') }}:</p>

                <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit"
                            class="cs--btn cs--btn--grad-blue">{{ __('Click here to request another') }}</button>
                </form>
            </div>
        </div>
    </main>
@endsection
