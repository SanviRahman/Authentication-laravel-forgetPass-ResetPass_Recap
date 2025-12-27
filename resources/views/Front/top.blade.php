<div>
    <?php
        $isAdmin = auth()->guard('admin')->check();
        $isUser = auth()->guard('web')->check();
    ?>

    <a href="{{ route('home') }}">Home</a> |
    <a href="{{ route('about') }}">About</a> |

    @if($isAdmin)
    <a href="#">Admin_Dashboard</a> |



    @elseif($isUser)
    <a href="{{ route('dashboard') }}">User_Dashboard</a> |
    <a href="{{ route('logout') }}">Logout</a>

    @else
    <a href="#">Admin Login</a>|
    <a href="{{ route('registration') }}">User Registration</a> |
    <a href="{{ route('login') }}">User Login</a>
    @endif
</div>