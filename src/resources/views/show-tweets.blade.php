<div class="border border-gray-300 rounded-lg mt-5 mb-5">

    @foreach($tweets as $tweet)

    @include('_tweet')

    @endforeach

</div>

<div class="mb-10">{{$tweets->links()}}</div>