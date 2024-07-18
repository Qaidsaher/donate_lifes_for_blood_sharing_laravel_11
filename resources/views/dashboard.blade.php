<x-app-layout>

    <section>
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8 lg:py-16">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                    <img alt="تبرع بالحياة" src="{{ asset('images/1 (1).jpg') }}"
                        class="absolute inset-0 object-cover w-full h-full" />
                </div>

                <div class="lg:py-24">
                    <h2 class="text-3xl font-bold text-red-600 sm:text-4xl">تبرع بالحياة</h2>

                    <p class="mt-4 text-gray-600">
                        مرحباً بكم في "تبرع بالحياة"، حيث يساهم كل تبرع في إنقاذ الأرواح. مهمتنا هي إلهام الأفراد للتبرع
                        بالدم والمساهمة في رفاهية الآخرين. من خلال التبرع بالدم، تلعب دوراً أساسياً في تقديم الأمل
                        والشفاء لأولئك الذين يحتاجون إليه.
                    </p>

                    <a href="{{ route('userappoinment.index') }}"
                        class="inline-block px-12 py-3 mt-8 text-sm font-medium text-white transition bg-red-600 rounded hover:bg-red-800 focus:outline-none focus:ring focus:ring-yellow-400">
                        ابدأ التبرع الآن
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-6 mx-auto sm:px-6 md:py-8 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-red-600 sm:text-4xl">انضم إلى "تبرع بالحياة" اليوم</h2>

                <p class="mt-4 text-gray-500 sm:text-xl">
                    مرحباً بك في "تبرع بالحياة"، حيث يحدث كل تبرع فرقاً في إنقاذ الأرواح. انضم إلى مهمتنا لإلهام وتمكين
                    الأفراد للتبرع بالدم والمساهمة في صحة ورفاهية الآخرين.
                </p>
            </div>

            <div class="mt-8 sm:mt-12">
                <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div class="flex flex-col px-4 py-8 text-center rounded-lg bg-blue-50">
                        <dt class="order-last text-lg font-medium text-gray-500">تبرعات الدم</dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">
                            @php
                                $donate = \App\Models\Appointment::all()->count();
                            @endphp

                            {{ $donate }}
                            +
                        </dd>
                    </div>

                    <div class="flex flex-col px-4 py-8 text-center rounded-lg bg-blue-50">
                        <dt class="order-last text-lg font-medium text-gray-500">تبرعات قيد الانتظار</dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">
                            {{ \App\Models\Appointment::where('status', 'pending')->count() }}
                            +
                        </dd>
                    </div>

                    <div class="flex flex-col px-4 py-8 text-center rounded-lg bg-blue-50">
                        <dt class="order-last text-lg font-medium text-gray-500">عدد المتبرعين</dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">
                            {{ \App\Models\User::all()->count() }}
                            +
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 sm:py-24 lg:px-8">
            <div class="max-w-3xl">
                <h2 class="text-3xl font-bold text-red-600 sm:text-4xl">
                    لماذا التبرع بالدم؟
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden sm:h-80 lg:h-full">
                    <img alt="تبرع بالدم" src="{{ asset('images/1 (13).jpg') }}"
                        class="absolute inset-0 object-cover w-full h-full" />
                </div>

                <div class="lg:py-16">
                    <article class="space-y-4 text-gray-600">
                        <p>
                            التبرع بالدم هو عمل ينقذ الأرواح ويؤثر بشكل مباشر على رفاهية الآخرين المحتاجين. من خلال
                            التبرع بالدم، تساهم في الرعاية الطارئة، والعمليات الجراحية، والعلاجات للمرضى في المجتمع.
                        </p>

                        <p>
                            تبرعك يضمن أن تكون المستشفيات لديها إمدادات كافية من الدم لتلبية الاحتياجات الحرجة. إنها
                            وسيلة بسيطة وفعالة لإحداث فرق إيجابي في حياة شخص ما، وتقديم الأمل والشفاء حيثما يكون الأمر
                            في أمس الحاجة إليه.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-white">
        <!-- Container -->
        <div class="flex flex-col items-center justify-center w-full px-5 py-16 mx-auto max-w-7xl md:px-10 md:py-20">
            <!-- HEADING TEXT -->
            <p class="mb-2 text-sm font-medium text-center text-gray-600 font-inter"> 3 خطوات بسيطة </p>
            <h1 class="text-3xl font-bold text-center text-red-600 lg:text-4xl"> كيفية التبرع بالدم </h1>
            <p class="max-w-lg px-5 mx-auto mt-4 mb-12 text-base font-light text-center text-gray-600 font-inter">
                تعرف على كيفية إحداث فرق من خلال التبرع بالدم اليوم. اتبع هذه الخطوات البسيطة لإنقاذ الأرواح
                والمساهمة في صحة مجتمعك.
            </p>
            <!-- HOW IT WORKS STEPS -->
            <div class="flex flex-col items-start justify-center lg:flex-row">
                <!-- BLOCK -->
                <div class="relative flex w-full my-8 bg-gray-100 rounded-md lg:mx-8 lg:flex-col">
                    <div class="flex items-center justify-center w-16 h-16 bg-gray-200 rounded-md">
                        <h2 class="text-3xl font-medium text-red-600">1</h2>
                    </div>
                    <div class="p-2 ml-6 lg:ml-0">
                        <h2 class="mb-5 text-xl font-medium text-red-800 lg:mt-8"> ابحث عن حملة تبرع بالدم </h2>
                        <p class="max-w-md pr-5 text-base text-gray-600 font-inter">
                            حدد مركز تبرع بالدم قريب أو حدث تبرع بالدم في منطقتك.
                        </p>
                    </div>
                </div>
                <!-- BLOCK -->
                <div class="relative flex w-full my-8 bg-gray-100 rounded-md lg:mx-8 lg:flex-col">
                    <div class="flex items-center justify-center w-16 h-16 bg-gray-200 rounded-md">
                        <h2 class="text-3xl font-medium text-red-600">2</h2>
                    </div>
                    <div class="p-2 ml-6 lg:ml-0">
                        <h2 class="mb-5 text-xl font-medium text-red-800 lg:mt-8"> تبرع بالدم </h2>
                        <p class="max-w-md pr-5 text-base text-gray-600 font-inter">
                            قدم تبرعك في بيئة آمنة لإنقاذ الأرواح وكسب الاجر.
                        </p>
                    </div>
                </div>
                <!-- BLOCK -->
                <div class="relative flex w-full my-8 bg-gray-100 rounded-md lg:mx-8 lg:flex-col">
                    <div class="flex items-center justify-center w-16 h-16 bg-gray-200 rounded-md">
                        <h2 class="text-3xl font-medium text-red-600">3</h2>
                    </div>
                    <div class="p-2 ml-6 lg:ml-0">
                        <h2 class="mb-5 text-xl font-medium text-red-800 lg:mt-8"> احرص على إحداث تأثير </h2>
                        <p class="max-w-md pr-5 text-base text-gray-600 font-inter">
                            تبرعك يساعد في إنقاذ الأرواح. شكراً لمساهمتك.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <!-- Container -->
        <div class="w-full px-5 py-12 mx-auto max-w-7xl md:px-10 md:py-16 lg:py-20">
            <!-- Component -->
            <div class="flex flex-col gap-8 lg:flex-row lg:gap-10">
                <!-- Content -->
                <div class="flex flex-col gap-8 lg:w-3/5">
                    <h2 class="mb-8 text-3xl font-bold text-red-600 md:text-5xl">من نحن</h2>
                    <p class="text-sm sm:text-base">
                        نحن في Donate Life شغوفون بتحسين حياة الناس من خلال حلولنا المبتكرة. نعمل بجد لضمان توفير أفضل
                        الحلول التقنية التي تساعد في تنظيم حملات التبرع بالدم وتعزيز فعالية جهود إنقاذ الأرواح. نحن هنا
                        لنكون شركاء نجاحكم في كل خطوة على الطريق، من خلال تقديم استشارات وحلول مخصصة تدعم نموكم وتميزكم
                        في مجال تقديم المساعدات الإنسانية.
                    </p>
                    <p class="text-lg text-gray-700">
                        فريقنا ملتزم بالابتكار والتفوق لتحقيق رؤيتكم وتطلعاتكم في مجال إنقاذ الأرواح، ونساعدكم في تحقيق
                        أقصى تأثير من خلال تحسين الأداء وتوفير الدعم اللازم لتنظيم فعاليات التبرع بالدم بنجاح.
                    </p>
                    <a href="{{ route('pages.terms') }}"
                        class="px-6 py-3 font-semibold text-center text-white bg-red-600 rounded-md w-36">
                        اقرأ المزيد
                    </a>
                    <!-- Divider -->
                    <div class="w-full h-px my-8 bg-black"></div>
                    <!-- Testimonials -->

                </div>
                <!-- Placeholder image -->
                <div class="w-full rounded-md bg-gray-100 max-[991px]:h-[475px] lg:w-2/5">
                    <img alt="تبرع بالدم" src="{{ asset('images/1 (8).jpg') }}" class="object-cover w-full h-full" />
                </div>
            </div>
        </div>
    </section>


   


    {{--
    <section>
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8 lg:py-16">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                    <img alt="" src="{{ asset('images/1 (1).jpg') }}"
                        class="absolute inset-0 object-cover w-full h-full" />
                </div>

                <div class="lg:py-24">
                    <h2 class="text-3xl font-bold text-red-600 sm:text-4xl">Donate Life</h2>

                    <p class="mt-4 text-gray-600">
                        Welcome to Donate Life, where every donation counts towards saving lives. Our mission is to
                        inspire individuals to donate blood and contribute to the well-being of others. By donating
                        blood, you play a crucial role in providing hope and healing to those in need.
                    </p>

                    <a href="{{ route('userappoinment.index') }}"
                        class="inline-block px-12 py-3 mt-8 text-sm font-medium text-white transition bg-red-600 rounded hover:bg-red-800 focus:outline-none focus:ring focus:ring-yellow-400">
                        Get Started Donating
                    </a>
                </div>
            </div>
        </div>
    </section> --}}



    {{-- <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-6 mx-auto sm:px-6 md:py-8 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-red-600 sm:text-4xl">Join Donate Life Today</h2>

                <p class="mt-4 text-gray-500 sm:text-xl">
                    Welcome to Donate Life, where every donation makes a difference in saving lives. Join our mission to
                    inspire and empower individuals to donate blood and contribute to the health and well-being of
                    others.
                </p>
            </div>

            <div class="mt-8 sm:mt-12">
                <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div class="flex flex-col px-4 py-8 text-center rounded-lg bg-blue-50">
                        <dt class="order-last text-lg font-medium text-gray-500">Blood Donations</dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">
                            @php
                                $donate = \App\Models\Appointment::all()->count();
                            @endphp

                            {{ $donate }}
                            +</dd>
                    </div>

                    <div class="flex flex-col px-4 py-8 text-center rounded-lg bg-blue-50">
                        <dt class="order-last text-lg font-medium text-gray-500">Pending Donations</dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">
                            {{ \App\Models\Appointment::where('status', 'pending')->count() }}
                            +</dd>
                    </div>

                    <div class="flex flex-col px-4 py-8 text-center rounded-lg bg-blue-50">
                        <dt class="order-last text-lg font-medium text-gray-500">Donor Number</dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">
                            {{ \App\Models\User::all()->count() }}
                            +</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section> --}}


    {{-- <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 sm:py-24 lg:px-8">
            <div class="max-w-3xl">
                <h2 class="text-3xl font-bold text-red-600 sm:text-4xl">
                    Why Donate Blood?
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden sm:h-80 lg:h-full">
                    <img alt="Blood Donation" src="{{ asset('images/1 (13).jpg') }}"
                        class="absolute inset-0 w-full h-full object-conver" />
                </div>

                <div class="lg:py-16">
                    <article class="space-y-4 text-gray-600">
                        <p>
                            Donating blood is a life-saving act that directly impacts the well-being of others in need.
                            By donating blood, you contribute to emergency care, surgeries, and treatments for patients
                            across the community.
                        </p>

                        <p>
                            Your donation ensures that hospitals have an adequate supply of blood to meet critical
                            needs. It's a simple and powerful way to make a positive difference in someone's life,
                            offering hope and healing where it's needed most.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section> --}}


    {{--
    <section class="py-12 bg-white">
        <!-- Container -->
        <div class="flex flex-col items-center justify-center w-full px-5 py-16 mx-auto max-w-7xl md:px-10 md:py-20">
            <!-- HEADING TEXT -->
            <p class="mb-2 text-sm font-medium text-center text-gray-600 font-inter"> 3 SIMPLE STEPS </p>
            <h1 class="text-3xl font-bold text-center text-red-600 lg:text-4xl"> How to Donate Blood </h1>
            <p class="max-w-lg px-5 mx-auto mt-4 mb-12 text-base font-light text-center text-gray-600 font-inter"> Learn
                how you can make a difference by donating blood today. Follow these easy steps to save lives and
                contribute to the health of your community. </p>
            <!-- HOW IT WORKS STEPS -->
            <div class="flex flex-col items-start justify-center lg:flex-row">
                <!-- BLOCK -->
                <div class="relative flex w-full my-8 bg-gray-100 rounded-md lg:mx-8 lg:flex-col">
                    <div class="flex items-center justify-center w-16 h-16 bg-gray-200 rounded-md">
                        <h2 class="text-3xl font-medium text-red-600">1</h2>
                    </div>
                    <div class="p-2 ml-6 lg:ml-0">
                        <h2 class="mb-5 text-xl font-medium text-red-800 lg:mt-8"> Find a Blood Drive </h2>
                        <p class="max-w-md pr-5 text-base text-gray-600 font-inter"> Locate a nearby blood donation
                            center or blood drive event in your area. </p>
                    </div>

                </div>
                <!-- BLOCK -->
                <div class="relative flex w-full my-8 bg-gray-100 rounded-md lg:mx-8 lg:flex-col">
                    <div class="flex items-center justify-center w-16 h-16 bg-gray-200 rounded-md">
                        <h2 class="text-3xl font-medium text-red-600">2</h2>
                    </div>
                    <div class="p-2 ml-6 lg:ml-0">
                        <h2 class="mb-5 text-xl font-medium text-red-800 lg:mt-8"> Donate Blood </h2>
                        <p class="max-w-md pr-5 text-base text-gray-600 font-inter"> Give your donation in a safe
                            environment to save linves. </p>
                    </div>

                </div>
                <!-- BLOCK -->
                <div class="relative flex w-full my-8 bg-gray-100 rounded-md lg:mx-8 lg:flex-col">
                    <div class="flex items-center justify-center w-16 h-16 bg-gray-200 rounded-md">
                        <h2 class="text-3xl font-medium text-red-600">3</h2>
                    </div>
                    <div class="p-2 ml-6 lg:ml-0">
                        <h2 class="mb-5 text-xl font-medium text-red-800 lg:mt-8"> Make an Impact </h2>
                        <p class="max-w-md pr-5 text-base text-gray-600 font-inter"> Your donation helps save lives.
                            Thank you for your contribution. </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section id="about">
        <!-- Container -->
        <div class="w-full px-5 py-12 mx-auto max-w-7xl md:px-10 md:py-16 lg:py-20">
            <!-- Component -->
            <div class="flex flex-col gap-8 lg:flex-row lg:gap-10">
                <!-- Content -->
                <div class="flex flex-col gap-8 lg:w-3/5">
                    <h2 class="mb-8 text-3xl font-bold text-red-600 md:text-5xl">About Us</h2>
                    <p class="text-sm sm:text-base">
                        We're passionate about transforming businesses with our innovative solutions. Lorem ipsum dolor
                        sit
                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua.
                        Proin fermentum leo vel orci. Dui faucibus in ornare quam viverra orci sagittis eu. Viverra nam
                        libero
                        justo laoreet sit amet. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit. A
                        lacus
                        vestibulum sed arcu non odio euismod. Feugiat pretium nibh ipsum consequat. Cum sociis natoque
                        penatibus et. Leo in vitae turpis massa sed. Neque aliquam vestibulum morbi blandit cursus.
                        Facilisis
                        sed odio morbi quis. A pellentesque sit amet porttitor eget.
                    </p>
                    <a href="{{ route('pages.terms') }}"
                        class="px-6 py-3 font-semibold text-center text-white bg-red-600 rounded-md w-36">
                        Learn More
                    </a>
                    <!-- Divider -->
                    <div class="w-full h-px my-8 bg-black"></div>
                    <!-- Testimonials -->

                </div>
                <!-- Placeholder image -->
                <div class="w-full rounded-md bg-gray-100 max-[991px]:h-[475px] lg:w-2/5">
                    <img alt="Blood Donation" src="{{ asset('images/1 (8).jpg') }}"
                        class="w-full h-full object-conver" />
                </div>
            </div>
        </div>
    </section> --}}

    {{--
    <footer class="bg-white ">
        <div class="w-full max-w-screen-xl p-4 py-6 mx-auto lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="{{ route('dashboard') }}" class="flex items-center">
                        <img src="{{ asset('images/1 (6).jpg') }}" class="h-12 rounded-full me-3"
                            alt="donate life Logo" />
                        <span class="self-center text-2xl font-semibold text-red-600 whitespace-nowrap">Donate
                            Life</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                        <ul class="font-medium text-gray-500 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Donate Life</a>
                            </li>
                            <li>
                                <a href="#about" class="hover:underline">about us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="font-medium text-gray-500 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="{{ route('pages.news') }}" class="hover:underline ">Last news</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.contact') }}" class="hover:underline">Contact us</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="font-medium text-gray-500 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="{{ route('pages.terms') }}" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.terms') }}" class="hover:underline">Terms &amp;
                                    Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href=""
                        class="hover:underline">Donate Life</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>

                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>

                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Email</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer> --}}






    </x-app-lyout>
