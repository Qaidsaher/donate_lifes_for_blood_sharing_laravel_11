{{-- <x-guest-layout >
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" >
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" style="color:#374151" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"  style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;"  />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" style="color:#374151" />

            <x-text-input id="password" class="block w-full mt-1"  style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="text-sm text-gray-600 ms-2 " >{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class=" ms-3" style="background-color: red ; color:white"  >
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

 --}}


 <x-guest-layout>
    <!-- حالة الجلسة -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- عنوان البريد الإلكتروني -->
        <div>
            <x-input-label for="email" :value="__('البريد الإلكتروني')" style="color:#374151" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- كلمة المرور -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('كلمة المرور')" style="color:#374151" />
            <x-text-input id="password" class="block w-full mt-1" style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- تذكرني -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="text-sm text-gray-600 ms-2">{{ __('تذكرني') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('نسيت كلمة المرور؟') }}
                </a>
            @endif

            <x-primary-button class="ms-3" style="background-color: red; color:white">
                {{ __('تسجيل الدخول') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
