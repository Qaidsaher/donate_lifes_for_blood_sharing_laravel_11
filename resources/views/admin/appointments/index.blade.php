{{--
@extends('admin.layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <h1 class="mb-4 text-2xl font-bold text-red-600">Appointments</h1>

        @if (session('success'))
            <div class="p-4 mb-4 text-green-700 bg-green-100 border-l-4 border-green-500" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <div class="flex items-center justify-between mb-4">
            <div class="py-3">
                <a href="{{ route('appointments.create') }}"
                    class="px-4 py-2 mb-4 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">New Appointment</a>


            </div>
            <div>
                <a href="{{ route('appointments.index', ['filter' => 'expired_or_confirmed']) }}"
                    class="px-4 py-2 text-white bg-red-500 rounded-md">Expired or Confirmed</a>
                <a href="{{ route('appointments.index', ['filter' => 'pending_and_not_expired']) }}"
                    class="px-4 py-2 text-white bg-green-500 rounded-md">Pending and Not Expired</a>
            </div>
        </div>




        <div>
            <table class="w-full text-sm text-left text-gray-500 rtl:text-right ">
                <thead class="text-xs uppercase 9text-gray-00 bg-gray-50 ">
                    <tr>

                        <th scope="col" class="px-6 py-3">
                            Donor's infor
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
                        <tr
                            class="bg-white border-b dark:hover:bg-red-200">

                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">

                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{ $appointment->user->name }}</div>
                                    <div class="font-normal text-gray-500">{{ $appointment->user->email }}</div>
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
                                @if ($appointment->status == "pending")
                                <form action="{{ route('appointments.mark-donated', $appointment->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit"
                                        class="px-3 py-1 text-white bg-green-500 rounded-sm hover:bg-green-600">
                                        Confirm
                                    </button>
                                </form>
                                @else
                                <div class="flex items-center">
                                    <span class="text-green-500">
                                        expired
                                    </span>

                                </div>
                                @endif

                            </td>


                            <td class="px-6 py-4">
                                <a href="{{ route('appointments.show', $appointment->id) }}"
                                    class="text-blue-500 hover:text-blue-700">View</a>
                                <a href="{{ route('appointments.edit', $appointment->id) }}"
                                    class="ml-2 text-yellow-500 hover:text-yellow-700">Edit</a>
                                <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-2 text-red-500 hover:text-red-700">Delete</button>
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
@endsection --}}

@extends('admin.layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <h1 class="mb-4 text-2xl font-bold text-red-600">المواعيد</h1>

        @if (session('success'))
            <div class="p-4 mb-4 text-green-700 bg-green-100 border-l-4 border-green-500" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <div class="flex items-center justify-between mb-4">
            <div class="py-3">
                <a href="{{ route('appointments.create') }}"
                    class="px-4 py-2 mb-4 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">موعد جديد</a>
            </div>
            <div>
                <a href="{{ route('appointments.index', ['filter' => 'expired_or_confirmed']) }}"
                    class="px-4 py-2 text-white bg-red-500 rounded-md">منتهية أو مؤكدة</a>
                <a href="{{ route('appointments.index', ['filter' => 'pending_and_not_expired']) }}"
                    class="px-4 py-2 text-white bg-green-500 rounded-md">قيد الانتظار ولم تنته بعد</a>
            </div>
        </div>

        <div>
            <table class="w-full text-sm text-left text-gray-500 rtl:text-right">
                <thead class="text-xs uppercase text-gray-00 bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            معلومات المتبرع
                        </th>
                        <th scope="col" class="px-6 py-3">
                            تاريخ ووقت الجدولة
                        </th>
                        <th scope="col" class="px-6 py-3">
                            حالة الجدولة
                        </th>
                        <th scope="col" class="px-6 py-3">
                            تأكيد
                        </th>
                        <th scope="col" class="px-6 py-3">
                            الإجراء
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                        <tr class="bg-white border-b dark:hover:bg-red-200">
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{ $appointment->user->name }}</div>
                                    <div class="font-normal text-gray-500">{{ $appointment->user->email }}</div>
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
                                @if ($appointment->status == "pending")
                                    <form action="{{ route('appointments.mark-donated', $appointment->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit"
                                            class="px-3 py-1 text-white bg-green-500 rounded-sm hover:bg-green-600">
                                            تأكيد
                                        </button>
                                    </form>
                                @else
                                    <div class="flex items-center">
                                        <span class="text-green-500">
                                            منتهية
                                        </span>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('appointments.show', $appointment->id) }}"
                                    class="text-blue-500 hover:text-blue-700">عرض</a>
                                <a href="{{ route('appointments.edit', $appointment->id) }}"
                                    class="ml-2 text-yellow-500 hover:text-yellow-700">تعديل</a>
                                <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST"
                                    class="inline-block">
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
@endsection
