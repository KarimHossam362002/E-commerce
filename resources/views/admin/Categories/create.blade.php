@extends('adminlte::page')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <form action="{{ route('categories.store') }}" method="POST">
        @method('POST')
        @csrf
        @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div>
            <label for="name" class="form-label">Category new name:</label>
            <input type="text" class="form-control w-50" name="name" id="name">
        </div>
        {{--  --}}
        <label for="parent_id">Category Parent:</label>
        <div>
        <select class="custom-select w-50" aria-label="Default select example" name="parent_id" id="parent_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
        
       


        <input type="submit" class="btn btn-primary" value="Create" />
    </form>
@endsection
