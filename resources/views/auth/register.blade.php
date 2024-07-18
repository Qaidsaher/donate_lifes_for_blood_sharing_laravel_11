{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" style="color:#374151" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name"
                style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" style="color:#374151" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                required autocomplete="username"
                style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- age -->
        <div class="mt-4">
            <x-input-label for="age" :value="__('Age')" style="color:#374151" />

            <x-text-input id="age" class="block w-full mt-1"
                style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;"
                type="number" name="age" required  />

            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" style="color:#374151" />

            <x-text-input id="password" class="block w-full mt-1"
                style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;"
                type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>





        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" style="color:#374151" />

            <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4" style="background-color: red;color:white">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- الاسم -->
        <div>
            <x-input-label for="name" :value="__('الاسم')" style="color:#374151" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- عنوان البريد الإلكتروني -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('البريد الإلكتروني')" style="color:#374151" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- العمر -->
        <div class="mt-4">
            <x-input-label for="age" :value="__('العمر')" style="color:#374151" />
            <x-text-input id="age" class="block w-full mt-1" style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" type="number" name="age" required />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>

        <!-- كلمة المرور -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('كلمة المرور')" style="color:#374151" />
            <x-text-input id="password" class="block w-full mt-1" style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- تأكيد كلمة المرور -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('تأكيد كلمة المرور')" style="color:#374151" />
            <x-text-input id="password_confirmation" class="block w-full mt-1" type="password" style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('مسجل بالفعل؟') }}
            </a>
            <x-primary-button class="ms-4" style="background-color: red; color:white">
                {{ __('تسجيل') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
