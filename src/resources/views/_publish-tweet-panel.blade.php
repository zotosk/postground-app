    <h1 class="text-4xl font-bold text-blue-800 mb-10">Hey , {{auth()->user()->username}} </h1>

    <div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
        <form method="POST" action="/tweets">
            @csrf
            <textarea name="body" class="w-full" placeholder="Share your thoughts.. !"></textarea>


            <hr class="my-4">
            <footer class="flex justify-between items-center">

                <img src="{{auth()->user()->avatar}}" alt="avatar" class="rounded-full mr-2" style="width:50px; height:50px; object-fit: cover;">

                <button type="submit" style="background: #528CFF;" class="hover:bg-blue-600 text-white rounded-lg px-10 py-3 text-sm">Post it !</button>
            </footer>
        </form>
        @error('body')

        <div class="bg-red-100 border border-red-200 text-center text-sm text-red-500 py-2 rounded relative mt-5" role="alert">
            <strong class="font-bold">Oops!</strong>
            <span class="block sm:inline">{{$message}}</span>
        </div>
        @enderror
    </div>