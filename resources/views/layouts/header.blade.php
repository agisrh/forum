<header>
    <div class="container">
        <div class="header-data">
            <div class="logo pd-btm">
                <a href="index-2.html" title=""><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
            </div><!--logo end-->
            <div class="forum-bar">
                <h2>Forum</h2>
            </div><!--search-bar end-->
            @if (Route::has('login'))
                    @auth
                                <div class="user-account">
                            <div class="user-info">
                                <img src="{{ asset('assets/images/resources/user.png') }}" alt="">
                                <?php
                                $name = explode(' ', Auth::user()->name);
                                ?>
                                <a href="#" title="">{{ $name[0] }}</a>
                                <i class="la la-sort-down"></i>
                            </div>
                            <div class="user-account-settingss" id="users">
                                <h3>Setting</h3>
                                <ul class="us-links">
                                    <li><a href="profile-account-setting.html" title="">Account Setting</a></li>
                                    <li><a href="#" title="">Privacy</a></li>
                                    <li><a href="#" title="">Faqs</a></li>
                                    <li><a href="#" title="">Terms & Conditions</a></li>
                                </ul>
                                <h3 class="tc"><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" title="">{{ __('Logout') }}</a>
                                </h3>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div><!--user-account-settingss end-->
                        </div>
                    @else
                    <div class="login_register">
						<ul>
							<li><a href="{{ route('login') }}" title="">Login</a></li>
						</ul>
					</div><!--login_register end-->
                    @endauth
            @endif

        </div><!--header-data end-->
    </div>
</header>

