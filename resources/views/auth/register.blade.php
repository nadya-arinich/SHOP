<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <h3 class="breadcrumb-heading">Регистрация</h3>
            </a>
        </x-slot>
        <div class="col-lg-6 pt-5 pt-lg-0">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="login-form">
                    <h4 class="login-title">Регистрация</h4>
                        <div class="row">
                        <!-- Name -->
                            <div class="col-md-6 col-12">
                                <x-input-label for="name" :value="__('Имя')" />

                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-6 col-12">
                                <x-input-label for="email" :value="__('Email')" />

                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="col-md-6">
                                <x-input-label for="password" :value="__('Пароль')" />

                                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="col-md-6">
                                <x-input-label for="password_confirmation" :value="__('Повторить пароль')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Готово?') }}
                                </a>

                                <x-primary-button class="btn btn-custom-size lg-size btn-pronia-primary">
                                {{ __('Регистрация') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
