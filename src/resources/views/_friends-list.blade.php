<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
    @forelse (auth()->user()->follows as $user)
    <li class="mb-4">
        <div>
            <a href="{{route('profile',$user) }}" class="flex items-center text-sm hover:underline">
                <img src="{{$user->avatar}}" alt="avatar" class="rounded-full mr-2" style="width:40px; height:40px; object-fit: cover;">


                {{'@' . $user->username}}
            </a>
        </div>
    </li>
    @empty
    <li>No friends yet!</li>

    @endforelse
</ul>