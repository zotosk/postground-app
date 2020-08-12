@extends('layouts.app')

@section('content')


<form method="POST" class="bg-gray-100 rounded-r-lg p-5" action="{{$user->path()}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <h1 class="text-4xl font-bold text-gray-700 mb-6">Edit profile</h1>

    <div class="mb-6">

        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
            Name
        </label>

        <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" required value="{{$user->name}}">

        @error('name')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

    </div>

    <div class="mb-6">

        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
            username
        </label>

        <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username" required value="{{$user->username}}">

        @error('username')
        <p class="text-red-700 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="avatar">
            Avatar
        </label>
        <div class="flex">


            <input class="border border-gray-400 p-2 w-full" type="file" name="avatar" id="avatar" value="{{$user->avatar}}">

            <img src="{{$user->avatar}}" alt="your avatar.." style="width: 35px;">

        </div>
        @error('avatar')
        <p class="text-red-700 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="background">
            background
        </label>
        <div class="flex">


            <input class="border border-gray-400 p-2 w-full" type="file" name="background" id="background" value="{{$user->background}}">

            <img src="{{$user->background}}" alt="your background.." style="width: 35px;">

        </div>
        @error('avatar')
        <p class="text-red-700 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>



    <div class="mb-6">

        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
            email
        </label>

        <input class="border border-gray-400 p-2 w-full" type="text" name="email" id="email" required value="{{$user->email}}">

        @error('email')
        <p class="text-red-700 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">

        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="description">
            description
        </label>

        <textarea class="border border-gray-400 p-2 w-full" name="description" rows=5 id="description">{{$user->description}}</textarea>

        @error('description')
        <p class="text-red-700 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">

        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
            Password
        </label>

        <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required>

        @error('password')
        <p class="text-red-700 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-6">

        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password_confirmation">
            Password Confirmation
        </label>

        <input class="border border-gray-400 p-2 w-full" type="password" name="password_confirmation" id="password_confirmation" required>

        @error('password_confirmation')
        <p class="text-red-700 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group row mb-0 flex">
        <div class="col-md-6 offset-md-4 space-between">
            <button type="submit" class="btn btn-primary px-20 py-3 mt-5 mr-10 text-white" style="background:#1f3a93;">
                Submit
            </button>
            <a href="{{$user->path()}}" class="px-20 py-3 mt-5 border border-gray-500 hover:bg-gray-300">Cancel</a>
        </div>

    </div>

</form>



@endsection