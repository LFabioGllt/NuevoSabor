<div>
    <a href="/">Home</a>
    <a href="/menu">Menu</a>
    <a href="/forum">Forum</a>
    <a href="/contact">Contact</a>
    <br>

    -

    <br>
    @if (auth()->user() != null)
        <a href="#">{{ auth()->user()->name }}</a>
        <form action="{{route('logout.handle')}}" method="POST">
            @csrf
            <a href="{{route('logout.handle')}}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
        </form>
    @else
        <a href="{{route('login')}}">SignIn</a>
        <a href="{{route('register')}}">SignUp</a>
        <br>
    @endif

    -

    <br>
    <img src="" alt="Logo">

    <hr>
</div>
