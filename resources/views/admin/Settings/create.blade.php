@extends('adminlte::page')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{--  --}}
        <div>
            <label for="name" class="form-label">Setting Name:</label>
            <input type="text" value="{{ old('name') }}" class="form-control w-50" name="name"
            id="name">
            <div class="input-group w-100">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
       
        
        {{--  --}}
        {{--  --}}
        <div>
            <label for="description" class="form-label">Description:</label>
            <input type="text" value="{{ old('description') }}" class="form-control w-50" name="description"
            id="description">
            <div class="input-group w-100">
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
       
        
        {{--  --}}
        <div>
            <label for="address" class="form-label">Address:</label>
            <input type="text" value="{{ old('address') }}" class="form-control w-50" name="address"
            id="address">
            <div class="input-group w-100">
            @error('address')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>
       
        
        {{--  --}}
        {{--  --}}
        <div>
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" value="{{ old('phone') }}" class="form-control w-50" name="phone"
            id="phone">
            <div class="input-group w-100">
            @error('phone')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>
       
        
        {{--  --}}
        {{--  --}}
        <div>
            <label for="email" class="form-label">Email:</label>
            <input type="text" value="{{ old('email') }}" class="form-control w-50" name="email"
            id="email">
           <div class="input-group w-100"> 
            @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>
       
        
        {{--  --}}
        <div>
            <label for="facebook" class="form-label">Facebook:</label>
            <input type="text" value="{{ old('facebook') }}" class="form-control w-50" name="facebook"
            id="facebook">
            <div class="input-group w-100">
            @error('facebook')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>
       
        
        {{--  --}}
        {{--  --}}
        <div>
            <label for="twitter" class="form-label">Twitter:</label>
            <input type="text" value="{{ old('twitter') }}" class="form-control w-50" name="twitter"
            id="twitter">
            <div class="input-group w-100">
            @error('twitter')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>
       
        
        {{--  --}}
        {{--  --}}
        <div>
            <label for="instagram" class="form-label">Instagram:</label>
            <input type="text" value="{{ old('instagram') }}" class="form-control w-50" name="instagram"
            id="instagram">
            <div class="input-group w-100">
            @error('instagram')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>
       
        
        {{--  --}}
        {{--  --}}
        <div>
            <label for="youtube" class="form-label">Youtube:</label>
            <input type="text" value="{{ old('youtube') }}" class="form-control w-50" name="youtube"
            id="youtube">
            <div class="input-group w-100">
            @error('youtube')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        </div>
       
        
        {{--  --}}
        <div class="input-group w-25">
            @error('logo')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <label for="exampleInputFile" class="w-25">Logo</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="logo" id="exampleInputFile" style="width: 100px;">
            <label class="custom-file-label" for="exampleInputFile">Upload</label>
        </div>
        
        {{--  --}}


        <input type="submit" class="btn btn-primary" value="Create" />
    </form>
@endsection