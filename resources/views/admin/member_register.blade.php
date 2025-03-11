@extends('core.layouts.member_register')

@push('css')

@endpush

@section('content')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header bg-primary">
                                    <h3 class="text-center text-white fw-bold my-4">
                                        {{ __('admin.register')}}
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <!-- Name -->
                                        <div class="form-floating mb-3">
                                            <x-input-label for="name" :value="__('admin.name')" />
                                            <x-text-input id="name" class="form-control"
                                                            type="text"
                                                            name="name"
                                                            :value="old('name')"
                                                            required
                                                            autofocus
                                                            autocomplete="name" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div class="form-floating mb-3">
                                            <!-- Email Address -->
                                            <x-input-label for="email" :value="__('admin.email')" />
                                            <x-text-input id="email" class="form-control"
                                                            type="email"
                                                            name="email"
                                                            :value="old('email')"
                                                            required
                                                            autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <!-- Password -->
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <x-input-label for="password" :value="__('admin.password')" />
                                                    <x-text-input id="password" class="form-control"
                                                                    type="password"
                                                                    name="password"
                                                                    required autocomplete="new-password" />
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Confirm Password -->
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <x-input-label for="password_confirmation" :value="__('admin.password_confirmation')" />
                                                    <x-text-input id="password_confirmation" class="form-control"
                                                                    type="password"
                                                                    name="password_confirmation" required autocomplete="new-password" />
                                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="text-decoration-underline text-muted small rounded border-0 focus-outline-none focus-ring focus-ring-indigo" href="{{ route('login') }}">
                                                {{ __('admin.back') }}
                                            </a>
                                            <x-primary-button class="ms-4">
                                                {{ __('admin.register') }}
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
    <script defer src="{{ asset('js/register.js') }}"></script>
@endpush