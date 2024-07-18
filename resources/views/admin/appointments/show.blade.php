{{--
@extends('admin.layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <div class="mb-4">
            <h1 class="px-1 text-3xl font-bold text-gray-900">Appointment Details</h1>
        </div>

        <div class="p-6 bg-white rounded-lg shadow-md">
            <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2">
                <div>
                    <p class="text-lg"><strong>Donor Name:</strong> {{ $appointment->user->name }}</p>
                    <p class="text-lg"><strong>Donor Email:</strong> {{ $appointment->user->email }}</p>
                </div>
                <div class="text-right">
                    <p class="text-lg"><strong>Scheduled Date:</strong> {{ $appointment->scheduled_date }}</p>
                    <p class="text-lg text-right"><strong>Scheduled Time:</strong> {{ $appointment->scheduled_time }}</p>
                </div>
            </div>

            <div class="mt-4">
                <p class="text-lg"><strong>Status:</strong></p>
                <div class="flex items-center mt-2">
                    @if ($appointment->status == 'pending')
                        <form action="{{ route('appointments.mark-donated', $appointment->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit"class="px-3 py-1 text-white bg-green-500 rounded-sm hover:bg-green-600">
                                Confirm
                            </button>
                        </form>
                    @else
                        <span class="text-green-500">
                            Expired
                        </span>
                    @endif
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('appointments.index') }}"
                    class="px-4 py-2 text-white bg-blue-500 rounded-sm hover:bg-blue-600">Go back</a>
            </div>

        </div>
    </div>
@endsection --}}


@extends('admin.layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <div class="mb-4">
            <h1 class="px-1 text-3xl font-bold text-gray-900">تفاصيل الموعد</h1>
        </div>

        <div class="p-6 bg-white rounded-lg shadow-md">
            <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2">
                <div>
                    <p class="text-lg"><strong>اسم المتبرع:</strong> {{ $appointment->user->name }}</p>
                    <p class="text-lg"><strong>بريد المتبرع الإلكتروني:</strong> {{ $appointment->user->email }}</p>
                </div>
                <div class="text-right">
                    <p class="text-lg"><strong>تاريخ الجدولة:</strong> {{ $appointment->scheduled_date }}</p>
                    <p class="text-lg text-right"><strong>وقت الجدولة:</strong> {{ $appointment->scheduled_time }}</p>
                </div>
            </div>

            <div class="mt-4">
                <p class="text-lg"><strong>الحالة:</strong></p>
                <div class="flex items-center mt-2">
                    @if ($appointment->status == 'pending')
                        <form action="{{ route('appointments.mark-donated', $appointment->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="px-3 py-1 text-white bg-green-500 rounded-sm hover:bg-green-600">
                                تأكيد
                            </button>
                        </form>
                    @else
                        <span class="text-green-500">
                            منتهية
                        </span>
                    @endif
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('appointments.index') }}"
                    class="px-4 py-2 text-white bg-blue-500 rounded-sm hover:bg-blue-600">العودة</a>
            </div>

        </div>
    </div>
@endsection
