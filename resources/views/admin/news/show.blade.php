{{-- @extends('admin.layouts.app')

@section('content')
<div class="container p-6 mx-auto">
    <div class="p-6 bg-white rounded-lg shadow-lg">
        <img src="/storage/images/{{ $news->image }}" alt="{{ $news->title }}" class="w-full mb-4 rounded-lg">
        <h1 class="mb-4 text-4xl font-bold">{{ $news->title }}</h1>
        <p class="mb-4 text-gray-700">{{ $news->content }}</p>
        <a href="{{ route('news.edit', $news->id) }}" class="text-blue-600 hover:underline">Edit</a>
        <form action="{{ route('news.destroy', $news->id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="ml-4 text-red-600 hover:underline">Delete</button>
        </form>
    </div>
</div>
@endsection --}}


@extends('admin.layouts.app')

@section('content')
<div class="container p-6 mx-auto">
    <div class="p-6 bg-white rounded-lg shadow-lg">
        <img src="/storage/images/{{ $news->image }}" alt="{{ $news->title }}" class="w-full mb-4 rounded-lg">
        <h1 class="mb-4 text-4xl font-bold">{{ $news->title }}</h1>
        <p class="mb-4 text-gray-700">{{ $news->content }}</p>
        <a href="{{ route('news.edit', $news->id) }}" class="text-blue-600 hover:underline">تعديل</a>
        <form action="{{ route('news.destroy', $news->id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="ml-4 text-red-600 hover:underline">حذف</button>
        </form>
    </div>
</div>
@endsection
