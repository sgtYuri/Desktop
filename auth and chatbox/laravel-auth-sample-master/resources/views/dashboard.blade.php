<p>
    You are logged in {{ Auth::user()->name}}

    <a href="{{ URL::route('logout') }}">
        Log me out
    </a>


</p>