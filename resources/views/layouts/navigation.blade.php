<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 dark:bg-red-600 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <img
                        src="{{ asset('images/1 (6).jpg') }}" class="block w-auto text-gray-800 rounded-full fill-current h-9 dark:text-blac-200"   />
                    </a>
                </div>

                <!-- Navigation Links -->
                {{-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="color: rgb(255, 254, 254) !important">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('userappoinment.index')" :active="request()->routeIs('userappoinment.index')"  style="color: rgb(255, 254, 254) !important">
                        Back of Blood
                     </x-nav-link>
                    <x-nav-link :href="route('pages.news')" :active="request()->routeIs('pages.news')"  style="color: rgb(255, 254, 254) !important">
                        News
                    </x-nav-link>

                    <x-nav-link :href="route('pages.terms')" :active="request()->routeIs('pages.terms')"  style="color: rgb(255, 254, 254) !important">
                       Terms
                    </x-nav-link>

                    <x-nav-link :href="route('pages.contact')" :active="request()->routeIs('pages.contact')"  style="color: rgb(255, 254, 254) !important">
                       Contact Us
                    </x-nav-link>
                </div> --}}

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('home')" style="color: rgb(255, 254, 254) !important">
                        {{ __('الصفحة الرئيسية') }}
                    </x-nav-link>
                    <x-nav-link :href="route('userappoinment.index')" :active="request()->routeIs('userappoinment.index')" class="pr-8" style="color: rgb(255, 254, 254) !important">
                        {{ __('تسجيل الدم') }}
                    </x-nav-link>
                    <x-nav-link :href="route('pages.news')" :active="request()->routeIs('pages.news')" style="color: rgb(255, 254, 254) !important">
                        {{ __('الأخبار') }}
                    </x-nav-link>

                    <x-nav-link :href="route('pages.terms')" :active="request()->routeIs('pages.terms')" style="color: rgb(255, 254, 254) !important">
                        {{ __('الشروط') }}
                    </x-nav-link>

                    <x-nav-link :href="route('pages.contact')" :active="request()->routeIs('pages.contact')" style="color: rgb(255, 254, 254) !important">
                        {{ __('اتصل بنا') }}
                    </x-nav-link>
                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6" >
                <x-dropdown align="right" width="48" style="background-color: white !important">
                    <x-slot name="trigger" style="background-color: white !important">
                        <button class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-red-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md dark:text-red-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content"  style="background-color: white !important">
                        <x-dropdown-link :href="route('profile.edit')"  style="background-color: white !important;color:black !important">
                            {{ __('الملف الشخصي') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" >
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" style="background-color: white !important;color:black !important">
                                {{ __('تسجيل الخروج') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 dark:hover:text-gray-400 hover:bg-red-100 dark:hover:bg-red-900 focus:outline-none focus:bg-red-100 dark:focus:bg-red-900 focus:text-gray-500 dark:focus:text-gray-400">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('الصفحة الرئيسية') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('userappoinment.index')" :active="request()->routeIs('dashboard')">
                {{ __('تسجيل الدم') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('pages.news')" :active="request()->routeIs('dashboard')">
                {{ __('الأخبار') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('pages.terms')" :active="request()->routeIs('dashboard')">
                {{ __('الشروط') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('pages.contact')" :active="request()->routeIs('dashboard')">
                {{ __('اتصل بنا') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="text-base font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="text-sm font-medium text-white">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')"  style="color: rgb(255, 254, 254) !important">
                    {{ __('الملف الشخصي') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}"  style="color: rgb(255, 254, 254) !important">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"  style="color: rgb(255, 254, 254) !important">
                        {{ __('تسجيل الخروج') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
