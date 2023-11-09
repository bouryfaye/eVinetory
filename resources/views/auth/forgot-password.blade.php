@extends('layouts/auth')
@section('title', 'Envoi du lien de récupération de mot de passe')
@section('content')
<x-guest-layout>
    <div class="forgot_password_text">
        {{ __("Vous avez oublié votre mot de passe? Pas de problème. Indiquez-nous juste votre adresse courriel et nous vous enverrons un lien pour réinitialiser votre mot de passe et vous permettre d'en choisir un nouveau.") }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" class="auth_session_status" />

    <form method="POST" action="{{ route('password.email') }}" class="container_auth_form">
        @csrf

        <!-- Email Address -->
        <div class="input-label">
            <x-input-label for="email" :value="__('Courriel')" />
            <x-text-input id="email" class="text_input" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="auth_error_msg" />
        </div>

        <div class="button_reset_form">
            <x-primary-button class="button info button_reset">
                {{ __("M'envoyer un lien par courriel") }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
@endsection
