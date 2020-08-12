@extends('layouts.app')
@section('content')

<div class="flex-1">
    <h1 class="text-4xl font-bold text-gray-700 mb-6">Find members</h1>
    <hr>
    @foreach($users as $user)

    <li class="mb-4 bg-gray-100 rounded-lg p-4">
        <div>
            <a href="{{route('profile',$user) }}" class="flex items-center text-sm">
                <img src="{{$user->avatar}}" alt="avatar" class="rounded-full mr-2" style="width:50px; height:50px; object-fit: cover;">
                <div class="text-sm em ml-1 items-center">
                    <h1 class="font-bold items-center">{{ '@' . $user-> username}}</h1>
                    <p class="text-sm items-center text-gray-500">Name : {{$user-> name}}</p>
                    <p class="text-sm text-gray-600 flex items-center text-sm mt-1 mt-2">
                        @if($user -> description)
                        Description : {{$user-> description}}
                        @else
                        No summary
                        @endif

                    </p>
                </div>
            </a>
        </div>
    </li>
    @endforeach

    {{$users->links()}}
</div>

@endsection