{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 ">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 ">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="block w-full mt-1" style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="block w-full mt-1 " style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="block w-full mt-1 bg-white" style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 "
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section> --}}


<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('تحديث كلمة المرور') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('تأكد من أن حسابك يستخدم كلمة مرور طويلة وعشوائية للحفاظ على الأمان.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('كلمة المرور الحالية')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="block w-full mt-1" style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('كلمة المرور الجديدة')" />
            <x-text-input id="update_password_password" name="password" type="password" class="block w-full mt-1" style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('تأكيد كلمة المرور')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="block w-full mt-1 bg-white" style="background-color: white !important; color: #374151 !important; border-color: #E5E7EB !important; padding: 0.75rem 1rem !important;" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('حفظ') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('تم الحفظ.') }}</p>
            @endif
        </div>
    </form>
</section>
