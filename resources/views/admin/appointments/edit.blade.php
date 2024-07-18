{{--
@extends('admin.layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <h1 class="mb-4 text-2xl font-bold">Edit Appointment</h1>
        @include('admin.appointments._form', ['action' => route('appointments.update', $appointment->id), 'method' => 'PUT'])
    </div>
@endsection --}}


@extends('admin.layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <h1 class="mb-4 text-2xl font-bold">تعديل موعد</h1>
        @include('admin.appointments._form', ['action' => route('appointments.update', $appointment->id), 'method' => 'PUT'])
    </div>
@endsection
