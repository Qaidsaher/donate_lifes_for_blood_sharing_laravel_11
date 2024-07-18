
{{--
@extends('admin.layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <h1 class="mb-4 text-2xl font-bold">Create Appointment</h1>

        @include('admin.appointments._form', ['action' => route('appointments.store')])
    </div>
@endsection --}}



@extends('admin.layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <h1 class="mb-4 text-2xl font-bold">إنشاء موعد</h1>

        @include('admin.appointments._form', ['action' => route('appointments.store')])
    </div>
@endsection

