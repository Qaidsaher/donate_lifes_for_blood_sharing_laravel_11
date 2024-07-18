{{--
@extends('admin.layouts.app')

@section('content')
<div class="container p-6 mx-auto">
    <h1 class="mb-4 text-4xl font-bold">Edit News</h1>
    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block mb-2 text-sm font-bold text-gray-700">Title:</label>
            <input type="text" name="title" id="title" value="{{ $news->title }}" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="content" class="block mb-2 text-sm font-bold text-gray-700">Content:</label>
            <textarea name="content" id="content" rows="10" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" required>{{ $news->content }}</textarea>
        </div>
        <div class="mb-4">
            <label for="image" class="block mb-2 text-sm font-bold text-gray-700">Image:</label>
            <input type="file" name="image" id="image" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">Update</button>
        </div>
    </form>
</div>
@endsection --}}

@extends('admin.layouts.app')

@section('content')
<div class="container p-6 mx-auto">
    <h1 class="mb-4 text-4xl font-bold">تعديل الخبر</h1>
    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block mb-2 text-sm font-bold text-gray-700">العنوان:</label>
            <input type="text" name="title" id="title" value="{{ $news->title }}" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="content" class="block mb-2 text-sm font-bold text-gray-700">المحتوى:</label>
            <textarea name="content" id="content" rows="10" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" required>{{ $news->content }}</textarea>
        </div>
        <div class="mb-4">
            <label for="image" class="block mb-2 text-sm font-bold text-gray-700">الصورة:</label>
            <input type="file" name="image" id="image" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">تحديث</button>
        </div>
    </form>
</div>
@endsection

