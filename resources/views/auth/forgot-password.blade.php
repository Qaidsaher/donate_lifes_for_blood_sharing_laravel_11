{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus  style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;"  />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button style="background-color: red;color:white">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('نسيت كلمة المرور؟ لا مشكلة. فقط أعلمنا بعنوان بريدك الإلكتروني وسنرسل لك رابط إعادة تعيين كلمة المرور الذي سيسمح لك باختيار كلمة مرور جديدة.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('البريد الإلكتروني')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button style="background-color: red;color:white">
                {{ __('إرسال رابط إعادة تعيين كلمة المرور') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
