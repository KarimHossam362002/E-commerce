@extends('adminlte::page')
@section('content')
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @method('PUT')
        @csrf
        @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div>
            <label for="name" class="form-label">Category name:</label>
            <input type="text" value="{{ $category->name }}" class="form-control w-50" name="name"
                id="name">
        </div>

        {{--  --}}
        <label for="parent_id">Category Parent:</label>

        <select class="custom-select w-50" aria-label="Default select example" name="parent_id">
            @foreach ($categories as $category)
                <option @if (old('id') == $category->id) selected @endif value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-primary" value="Update" />
    </form>
@endsection
