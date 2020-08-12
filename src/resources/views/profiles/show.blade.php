@extends('layouts.app')

@section('content')
<header class="mb-6 relative">
    <div class="relative">
        <img src="{{ $user->background }}" class="rounded-lg mb-2" style="width: 100%; height:220px; object-fit: cover;">

        <img src="{{ $user->avatar }}" alt="" class="rounded-full bg-white absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" style="border:6px solid #fff;left:50%; width:150px; height:150px; object-fit: cover;">

    </div>

    <div class="flex justify-between items-center">
        <div>
            <h2 class="font-bold text-2xl mb-6">{{$user->name}}</h2>

            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>

        <div class="flex">
            <div style="float:left;" class="mr-4">
                <img src="/img/msg.png" width="40" id="msg-icon">
            </div>
            @can ('edit', $user)
            <a href="{{ $user->path('edit')}}" class="rounded-full border border-grey-500 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
            @endcan

            <x-follow-button :user="$user"></x-follow-button>

        </div>
    </div>
    <div class="flex">
        <p class="text-sm mt-5 break-all"><strong>Description :</strong> {{$user->description}}</p>
    </div>


    @include('show-tweets' , ['tweets'=> $tweets])



</header>


@endsection