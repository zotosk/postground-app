@extends('layouts.app')

@section('content')
@include('_publish-tweet-panel')

<div class="border border-gray-300 rounded-lg">

    @forelse($tweets as $tweet)
    @include('_tweet')

    @empty
    <p class="p-4">No tweets yet ?!</p>

    @endforelse

</div>

{{$tweets->links()}}
@endsection