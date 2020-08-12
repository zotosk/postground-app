<ul>
    <li>
        <a href="{{route('home')}}" class="font-bold text-lg mb-4 block hover:underline">
            Home
        </a>
    </li>

    <li>
        <a href="/explore" class="font-bold text-lg mb-4 block  hover:underline">
            Find Users
        </a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block  hover:underline">
            Notifications
        </a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block  hover:underline">
            Messages
        </a>
    </li>

    <li>
        <a href="#" class="font-bold text-lg mb-4 block  hover:underline">
            News & Media
        </a>
    </li>

    <li>
        <a href="{{route('profile', auth()->user())}}" class="font-bold text-lg mb-4 block  hover:underline">
            My Profile
        </a>
    </li>

    <!-- <li>
        <a href="#" class="font-bold text-lg mb-4 block  hover:underline">
            More
        </a>
    </li> -->

    <li class="mt-10">
        <a href="/logout" class="font-bold text-lg mb-4 block  hover:underline">
            <a href="{{ route('logout') }}" class="hover:underline" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                #Logout
            </a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </a>
    </li>



</ul>