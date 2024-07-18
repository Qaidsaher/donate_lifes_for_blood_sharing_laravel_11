{{-- <x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="container px-4 py-8 mx-auto">
                <h1 class="mb-4 text-2xl font-bold text-red-600">Create Appointment</h1>

                @include('appointments._form', [
                    'action' => route('userappoinment.store'),
                    'mothed'=>'POST'])
            </div>

        </div>
    </div>
</x-app-layout> --}}


<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="container px-4 py-8 mx-auto">
                <h1 class="mb-4 text-2xl font-bold text-red-600">إنشاء موعد</h1>

                @include('appointments._form', [
                    'action' => route('userappoinment.store'),
                    'method'=>'POST'])
            </div>
        </div>
    </div>
</x-app-layout>
