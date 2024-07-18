<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <section class="bg-white">
                <div class="max-w-screen-md px-4 py-8 mx-auto lg:py-16">
                    <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-center text-gray-900">اتصل بنا</h2>
                    <p class="mb-8 font-light text-center text-gray-500 lg:mb-16 sm:text-xl">هل تواجه مشكلة تقنية؟ هل ترغب في إرسال ملاحظات حول ميزة تجريبية؟ تحتاج إلى تفاصيل حول خطة الأعمال لدينا؟ دعنا نعرف.</p>
                    <form action="#" class="space-y-8">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">بريدك الإلكتروني</label>
                            <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="name@flowbite.com" required>
                        </div>
                        <div>
                            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">الموضوع</label>
                            <input type="text" id="subject" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg shadow-sm bg-gray-50 focus:ring-primary-500 focus:border-primary-500" placeholder="دعنا نعرف كيف يمكننا مساعدتك" required>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">رسالتك</label>
                            <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="اترك تعليق..."></textarea>
                        </div>
                        <div class="py-3">
                            <button type="submit" class="px-5 py-3 my-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg sm:w-fit hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-primary-300">أرسل الرسالة</button>
                        </div>

                    </form>
                </div>
              </section>

        </div>
    </div>
</x-app-layout>
