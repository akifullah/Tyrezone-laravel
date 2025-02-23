<aside class="side-bar">

    <ul>
        <li><a href="{{ route("profile") }}" class="{{ Route::is("profile")? "active": "" }}"><i class="fa-solid fa-user"></i>
                Profile</a></li>
        <li><a href="{{ route("changePassword") }}" class="{{ Route::is("changePassword")? "active": "" }}"><i class="fa-solid fa-lock"></i>
                Change Password</a></li>

        <li><a href="{{ route("orders") }}" class="{{ Route::is("orders")? "active": "" }}"><i class="fa-solid fa-cart-flatbed"></i>
                My Orders</a>
        </li>

        <li><a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket"></i>
                Logout</a>
        </li>
    </ul>
</aside>
