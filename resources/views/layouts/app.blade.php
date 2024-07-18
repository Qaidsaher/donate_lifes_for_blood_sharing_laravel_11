<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased" dir="rtl">
    <div class="min-h-screen bg-light-100 dark:bg-light-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow dark:bg-red-800">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}


        </main>

        <footer class="bg-red-600">
            <div class="w-full max-w-screen-xl p-4 py-6 mx-auto lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="{{ route('dashboard') }}" class="flex items-center">
                            <img src="{{ asset('images/1 (6).jpg') }}" class="h-12 rounded-full me-3" alt="شعار Donate Life" />
                            <span class="self-center text-2xl font-semibold text-white whitespace-nowrap">Donate Life</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-white uppercase">الموارد</h2>
                            <ul class="font-medium text-white">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Donate Life</a>
                                </li>
                                <li>
                                    <a href="#about" class="hover:underline">من نحن</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-white uppercase">تابعنا</h2>
                            <ul class="font-medium text-white">
                                <li class="mb-4">
                                    <a href="{{ route('pages.news') }}" class="hover:underline">آخر الأخبار</a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.contact') }}" class="hover:underline">اتصل بنا</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-white uppercase">قانوني</h2>
                            <ul class="font-medium text-white">
                                <li class="mb-4">
                                    <a href="{{ route('pages.terms') }}" class="hover:underline">سياسة الخصوصية</a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.terms') }}" class="hover:underline">الشروط والأحكام</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-white sm:text-center">© 2024 <a href="" class="hover:underline">Donate Life</a>. جميع الحقوق محفوظة.</span>
                    <div class="flex mt-4 sm:justify-center sm:mt-0">
                        <a href="#" class="text-white hover:text-gray-900">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">صفحة فيسبوك</span>
                        </a>
                        <a href="#" class="text-white hover:text-gray-900 ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                                <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-gray-900 ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-gray-900 ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169-.451-1.14-1.1-1.44-1.1-1.44-.902-.617.069-.604.069-.604 1.092.077 1.668 1.123 1.668 1.123.887 1.594 2.327 1.133 2.894.867.09-.64.347-1.133.632-1.395-2.2-.25-4.516-1.092-4.516-4.86 0-1.074.387-1.952 1.022-2.64-.1-.253-.443-1.268.1-2.643 0 0 .834-.263 2.733 1.008a9.514 9.514 0 0 1 2.49-.336 9.476 9.476 0 0 1 2.488.336c1.9-1.271 2.732-1.008 2.732-1.008.546 1.375.202 2.39.1 2.643.638.688 1.02 1.566 1.02 2.64 0 3.777-2.32 4.608-4.526 4.853.358.31.678.922.678 1.857 0 1.34-.012 2.418-.012 2.75 0 .267.18.575.686.477A9.913 9.913 0 0 0 10 .333Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>
