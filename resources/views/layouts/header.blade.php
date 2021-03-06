<section id="top_header">
    <a href="{{ route('home') }}">
        <img src="{{ asset('../imgs/Logo.png') }}" alt="Codex Literary">
    </a>
    <ul id="nav_list">
        <li>
            <a href="#" id="search_button">SEARCH</a>
        </li>
        <li>
            <a href="{{ route('library.index') }}">LIBRARY</a>
        </li>
        <li>
            <a href="{{ route('store.index') }}">STORE</a>
            <ul id="store_list">
                <li>
                    <a href="{{ route('store.cart') }}">CART</a>
                </li>
            </ul>
        </li>
        @guest
            <li>
                <a href="{{ route('login') }}">CREATE</a>
            </li>                
        @else
            <li>
                <a href="{{ empty(auth()->user()->email_verified_at) ? route('verification.notice') : route('create.index') }}">CREATE</a>
            </li>
        @endguest
        <li>
            <a href="#">COMMUNITY</a>
        </li>
        <li>
            <a href="#">FORUM</a>
        </li>
        @guest
            <li>USER
                <ul id="user_list">
                    <li>
                        <a href="{{ route('login') }}">LOGIN</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">REGISTER</a>
                    </li>
                </ul>
            </li>
        @else
            <li>USER
                <ul id="user_list">
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
                    </li>
                </ul>
            </li>
            <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none">
                @csrf
            </form>
        @endguest
    </ul>
</section>