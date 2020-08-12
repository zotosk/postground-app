  <div class="flex p-4 {{$loop->last ? '': 'border-b border-b-gray-400' }}">
      <div class="mr-2 flex-shrink-0">
          <a href="{{route('profile',$tweet->user->username) }}">
              <img src="{{$tweet->user->avatar}}" alt="avatar" class="rounded-full mr-2" style="width:50px; height:50px; object-fit: cover;">
          </a>
      </div>

      <div class="">
          <h5 class="font-bold mb-4">
              <a href="{{route('profile',$tweet->user->username) }}">

                  {{$tweet->user->username}}
              </a>


          </h5>
          <p class="text-sm">{{$tweet->body}}
          </p>
      </div>
  </div>