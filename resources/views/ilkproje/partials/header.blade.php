
<nav class="navbar navbar-expand-lg bg-warning">



    @if(Auth::id())

    <ul class="nav">

        <li class="nav-item">
            <a class="nav-link active" href="{{Route('home')}}">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="{{Route('peopleArray')}}">People Array</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{Route('nextpage',rand(10,100))}}">Next Page</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{Route('postOne')}}">Post Page</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
        @else

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('register') }}">Register</a>
            </li>

        </ul>
    @endif


</nav>


