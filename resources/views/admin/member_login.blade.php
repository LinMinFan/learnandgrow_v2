@extends('core.layouts.member_login')

@push('css')

@endpush

@section('content')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header bg-primary">
                                    <h3 class="text-center text-white fw-bold my-4">
                                        {{ __('admin.login') }}
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <!-- Email Address -->
                                        <div class="form-floating mb-3">
                                            <x-input-label for="email" :value="__('admin.email')" />
                                            <x-text-input id="email" class="form-control"
                                                            type="email"
                                                            name="email"
                                                            :value="old('email')"
                                                            required
                                                            autofocus
                                                            autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <!-- Password -->
                                        <div class="form-floating mt-3">
                                            <x-input-label for="password" :value="__('admin.password')" />
                                            <x-text-input id="password" class="form-control"
                                                            type="password"
                                                            name="password"
                                                            required autocomplete="current-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <!-- Remember Me -->
                                        <div class="form-floating mt-3 ml-3">
                                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                            <label for="remember_me" class="form-check-label">
                                                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('admin.remember_me') }}</span>
                                            </label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            @if (Route::has('password.request'))
                                                <a class="small text-decoration-underline small text-muted hover:text-dark rounded focus-shadow" href="{{ route('password.request') }}">
                                                    {{ __('passwords.forgot_your_password') }}
                                                </a>
                                            @endif
                                            <x-primary-button class="ms-3">
                                                {{ __('Log in') }}
                                            </x-primary-button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection

@push('js')
    <script defer src="{{ asset('js/member.js') }}"></script>
@endpush