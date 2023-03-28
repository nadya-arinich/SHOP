<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <h3 class="breadcrumb-heading">Вход</h3>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="col-lg-6 pt-5 pt-lg-0">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="login-form">
                    <h4 class="login-title">Логин</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <x-input-label for="email" :value="__('Email')" />

                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
            

                            <!-- Password -->
                            <div class="col-lg-12">
                                <x-input-label for="password" :value="__('Пароль')" />

                                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="col-md-8">
                                <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Запомнить меня') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Забыли пароль?') }}
                                    </a>
                                @endif
                                
                                <x-primary-button class="btn btn-custom-size lg-size btn-pronia-primary">
                                    {{ __('Войти') }}
                                </x-primary-button>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div>    
        </form>
    </x-auth-card>
</x-guest-layout>
