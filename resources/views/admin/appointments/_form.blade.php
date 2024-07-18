{{--

<!-- resources/views/admin/appointments/_form.blade.php -->

<form action="{{ $action }}" method="POST">
    @csrf
    @isset($method)
        @method($method)
    @endisset
    @if ($errors->any())
        <div class="mb-4 text-red-500">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="mb-4">
        <label for="user_id" class="block text-sm font-medium text-gray-700">Donor</label>
        <select name="user_id" id="user_id" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            @foreach (\App\Models\User::all() as $user)
                <option value="{{ $user->id }}"
                    {{ old('user_id', $appointment->user_id ?? '') == $user->id ? 'selected' : '' }}>{{ $user->name }}
                </option>
            @endforeach
        </select>

    </div>

    <div class="mb-4">
        <label for="scheduled_date" class="block text-sm font-medium text-gray-700">Scheduled Date</label>
        <input type="date" name="scheduled_date" id="scheduled_date"
            value="{{ old('scheduled_date', $appointment->scheduled_date ?? '') }}"
            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">

    </div>

    <div class="mb-4">
        <label for="scheduled_time" class="block text-sm font-medium text-gray-700">Scheduled Time</label>
        <select name="scheduled_time" id="scheduled_time" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            @foreach (range(8, 17) as $hour)
                @foreach (['00', '30'] as $minute)
                    <option value="{{ sprintf('%02d:%02d', $hour, $minute) }}"
                        {{ old('scheduled_time', $appointment->scheduled_time ?? '') == sprintf('%02d:%02d', $hour, $minute) ? 'selected' : '' }}>
                        {{ date('h:i A', strtotime(sprintf('%02d:%02d', $hour, $minute))) }}
                    </option>
                @endforeach
            @endforeach
        </select>


    </div>

    <div class="mt-6">
        <button type="submit"
            class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Save</button>
        <a href="{{ route('appointments.index') }}"
            class="inline-block ml-4 text-gray-500 hover:text-gray-700">Cancel</a>
    </div>
</form> --}}

<!-- resources/views/admin/appointments/_form.blade.php -->

<form action="{{ $action }}" method="POST">
    @csrf
    @isset($method)
        @method($method)
    @endisset
    @if ($errors->any())
        <div class="mb-4 text-red-500">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-4">
        <label for="user_id" class="block text-sm font-medium text-gray-700">المانح</label>
        <select name="user_id" id="user_id" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            @foreach (\App\Models\User::all() as $user)
                <option value="{{ $user->id }}"
                    {{ old('user_id', $appointment->user_id ?? '') == $user->id ? 'selected' : '' }}>{{ $user->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label for="scheduled_date" class="block text-sm font-medium text-gray-700">تاريخ التعيين</label>
        <input type="date" name="scheduled_date" id="scheduled_date"
            value="{{ old('scheduled_date', $appointment->scheduled_date ?? '') }}"
            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
    </div>

    <div class="mb-4">
        <label for="scheduled_time" class="block text-sm font-medium text-gray-700">وقت التعيين</label>
        <select name="scheduled_time" id="scheduled_time" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            @foreach (range(8, 17) as $hour)
                @foreach (['00', '30'] as $minute)
                    <option value="{{ sprintf('%02d:%02d', $hour, $minute) }}"
                        {{ old('scheduled_time', $appointment->scheduled_time ?? '') == sprintf('%02d:%02d', $hour, $minute) ? 'selected' : '' }}>
                        {{ date('h:i A', strtotime(sprintf('%02d:%02d', $hour, $minute))) }}
                    </option>
                @endforeach
            @endforeach
        </select>
    </div>

    <div class="mt-6">
        <button type="submit"
            class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">حفظ</button>
        <a href="{{ route('appointments.index') }}"
            class="inline-block ml-4 text-gray-500 hover:text-gray-700">إلغاء</a>
    </div>
</form>

