<nav class="navbar navbar-inverse">
            <div class="nav">
                
                <!-- Left Side Of Navbar -->
                <a class="nav_item_left" href="/home">Home</a>
                <a class="nav_item_left" href="{{ route('shop.index') }}">Shop</a>
                <a class="nav_item_left" href="/about">About</a>


                <!-- Right Side Of Navbar -->
                <div class="LogStat_dropdown">
                    <!-- Authentication Links -->
                    @guest
                         <span class="log_status">Not LoggedIn</span>
                         <div class="LogStat_dropdown_content">
                            <a  href="{{ route('login') }}">Login</a>
                            <a  href="{{ route('register') }}">Register</a>
                         </div>
                    @else
                        <span class="log_status">Welcome {{ Auth::user()->name }}</span>
                         <div class="LogStat_dropdown_content">
                            <a  href="{{route('user.index') }}">Profile</a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                         </div>
                    @endguest
                </div>
                <a class="nav_item_right" href="{{route("product.shoppingCart")}}">Cart <i class="fas fa-shopping-cart"></i>
                    <span>{{Session:: has('cart')? Session::get('cart')->totalQty: ''}}</span></a>

            </div>
        </nav>