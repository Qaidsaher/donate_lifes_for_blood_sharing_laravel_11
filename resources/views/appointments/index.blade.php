{{-- <x-app-layout>
    <style>
        .fade-out {
            transition: opacity 0.5s ease-out;
        }
    </style>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">


            <div class="container px-4 py-8 mx-auto">
                <h1 class="mb-4 text-2xl font-bold text-red-600">Appointments</h1>
                <div id="alerts">
                    @if (session('success'))
                        <div class="relative px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded alert alert-success fade-out"
                            role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded alert alert-danger fade-out"
                            role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', (event) => {
                        setTimeout(() => {
                            const alerts = document.querySelectorAll('.alert');
                            alerts.forEach(alert => {
                                alert.classList.add('opacity-0');
                            });
                            setTimeout(() => {
                                alerts.forEach(alert => {
                                    alert.remove();
                                });
                            }, 500); // match this with the transition duration
                        }, 5000); // 5 seconds delay
                    });
                </script>

                <div class="flex items-center justify-between mb-4">
                    <div class="py-3">
                        <a href="{{ route('userappoinment.create') }}"
                            class="px-4 py-2 mb-4 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 ">New
                            Appointment</a>


                    </div>
                    <div>
                        <a href="{{ route('userappoinment.index', ['filter' => 'expired_or_confirmed']) }}"
                            class="px-4 py-2 text-white bg-red-500 rounded-md">Expired or Confirmed</a>
                        <a href="{{ route('userappoinment.index', ['filter' => 'pending_and_not_expired']) }}"
                            class="px-4 py-2 text-white bg-green-500 rounded-md">Pending and Not Expired</a>
                    </div>
                </div>




                <div>
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right ">
                        <thead class="text-xs uppercase 9text-gray-00 bg-gray-50 ">

                            <tr>

                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Scheduled Datatime
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Scheduled State
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Confirmed
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment)
                                <tr class="bg-white border-b dark:hover:bg-red-200">

                                    <th scope="row"
                                        class="flex items-center px-6 py-4 text-red-900 whitespace-nowrap ">

                                        <div class="ps-3">
                                            <div class="text-base font-semibold">{{ $appointment->id }}</div>

                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $appointment->scheduled_date }}-{{ $appointment->scheduled_time }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($appointment->status === 'confirmed')
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                                Confirmed
                                            </div>
                                        @elseif ($appointment->status === 'pending')
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-yellow-500 me-2"></div>
                                                Pending
                                            </div>
                                        @else
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div>
                                                expired
                                            </div>
                                        @endif

                                    </td>

                                    <td class="px-6 py-4">
                                        @if ($appointment->status == 'pending')
                                            <button type="button"
                                                class="px-3 py-1 text-white bg-yellow-500 rounded-sm hover:bg-yellow-600">
                                                pending
                                            </button>
                                        @else
                                            <div class="flex items-center">
                                                <span class="text-red-500">
                                                    expired
                                                </span>

                                            </div>
                                        @endif

                                    </td>


                                    <td class="px-6 py-4">


                                        <a href="{{ route('userappoinment.edit', $appointment->id) }}"
                                            class="ml-2 text-yellow-500 hover:text-yellow-700">Edit</a>
                                        <form action="{{ route('userappoinment.destroy', $appointment->id) }}"
                                            method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="ml-2 text-red-500 hover:text-red-700">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>

                    </table>
                    <div class="bg-white dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-red-200">
                        <div class="flex justify-center">
                            <div class="p-1">
                                {{ $appointments->links() }}
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout> --}}


<x-app-layout>
    <style>
        .fade-out {
            transition: opacity 0.5s ease-out;
        }
    </style>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="container px-4 py-8 mx-auto">
                <h1 class="mb-4 text-2xl font-bold text-red-600">المواعيد</h1>
                <div id="alerts">
                    @if (session('success'))
                        <div class="relative px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded alert alert-success fade-out"
                            role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded alert alert-danger fade-out"
                            role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', (event) => {
                        setTimeout(() => {
                            const alerts = document.querySelectorAll('.alert');
                            alerts.forEach(alert => {
                                alert.classList.add('opacity-0');
                            });
                            setTimeout(() => {
                                alerts.forEach(alert => {
                                    alert.remove();
                                });
                            }, 500); // تتطابق مع مدة الانتقال
                        }, 5000); // تأخير 5 ثوانٍ
                    });
                </script>

                <div class="flex items-center justify-between mb-4">
                    <div class="py-3">
                        <a href="{{ route('userappoinment.create') }}"
                            class="px-4 py-2 mb-4 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">موعد جديد</a>
                    </div>
                    <div>
                        <a href="{{ route('userappoinment.index', ['filter' => 'expired_or_confirmed']) }}"
                            class="px-4 py-2 text-white bg-red-500 rounded-md">منتهية أو مؤكدة</a>
                        <a href="{{ route('userappoinment.index', ['filter' => 'pending_and_not_expired']) }}"
                            class="px-4 py-2 text-white bg-green-500 rounded-md">قيد الانتظار ولم تنته بعد</a>
                    </div>
                </div>

                <div>
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right ">
                        <thead class="text-xs uppercase text-gray-00 bg-gray-50 ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    تاريخ ووقت الموعد
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    حالة الموعد
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    مؤكد
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    إجراء
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment)
                                <tr class="bg-white border-b dark:hover:bg-red-200">
                                    <th scope="row" class="flex items-center px-6 py-4 text-red-900 whitespace-nowrap ">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">{{ $appointment->id }}</div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $appointment->scheduled_date }}-{{ $appointment->scheduled_time }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($appointment->status === 'confirmed')
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                                مؤكد
                                            </div>
                                        @elseif ($appointment->status === 'pending')
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-yellow-500 me-2"></div>
                                                قيد الانتظار
                                            </div>
                                        @else
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div>
                                                منتهية
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($appointment->status == 'pending')
                                            <button type="button"
                                                class="px-3 py-1 text-white bg-yellow-500 rounded-sm hover:bg-yellow-600">
                                                قيد الانتظار
                                            </button>
                                        @else
                                            <div class="flex items-center">
                                                <span class="text-red-500">
                                                    منتهية
                                                </span>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('userappoinment.edit', $appointment->id) }}"
                                            class="ml-2 text-yellow-500 hover:text-yellow-700">تعديل</a>
                                        <form action="{{ route('userappoinment.destroy', $appointment->id) }}"
                                            method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-2 text-red-500 hover:text-red-700">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="bg-white dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-red-200">
                        <div class="flex justify-center">
                            <div class="p-1">
                                {{ $appointments->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

