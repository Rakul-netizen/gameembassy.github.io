<nav id="adminnav">
    <div class="container">
        <div class="logo ps-3">
            <img src="{{ url('asset/icon/gamelogo.png') }}" alt="" width="180px">
        </div>
        <div id="adminNavbar">
            <ul>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" id="logout-btn">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
