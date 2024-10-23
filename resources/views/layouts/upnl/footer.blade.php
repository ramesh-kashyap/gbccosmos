
<aside id="asOffcanvasRight" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">

        <div class="uk-offcanvas-header">
            Close Menu
            <button class="uk-offcanvas-close" type="button" uk-close></button>
        </div>

        <ul class="uk-nav uk-nav-default uk-hidden@s">
            <li>
                <a href="{{ route('user.dashboard') }}">
                    <img src="{{asset('')}}massets/img/icon/account/dashboard.svg" width="31" height="30" loading="lazy" alt="" uk-svg>
                    Dashboard
                </a>
            </li>
            <li class="">
            <a href="{{ route('user.invest') }}">
                <img src="{{asset('')}}massets/img/icon/account/new-deposit.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
                New Deposit
            </a>
			</li>
			<li class="">
				<a href="{{ route('user.Withdraw') }}">
					<img src="{{asset('')}}massets/img/icon/account/withdrawal.svg" width="28" height="28" loading="lazy" alt="" uk-svg>
					Withdrawals
				</a>
			</li>
			<li class="">
				<a href="{{ route('user.Withdraw-History') }}">
					<img src="{{asset('')}}massets/img/icon/account/my-deposit.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
					History
				</a>
			</li>
			<li class="">
				<a href="{{ route('user.referral-team') }}">
					<img src="{{asset('')}}massets/img/icon/account/partners.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
					Refrael Team
				</a>
			</li>
			<li class="">
				<a href="{{ route('user.profile') }}">
					<img src="{{asset('')}}massets/img/icon/account/account-menu-support.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
					Settings
				</a>
			</li>
			<li class="">
				<a href="{{ route('user.ChangePass') }}">
					<img src="{{asset('')}}massets/img/icon/account/account-menu-history.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
					Security
				</a>
			</li>

        </ul>

        <ul class="uk-nav uk-nav-default">                     
            <li>
                <a href="{{route('logout')}}">
                    <img src="{{asset('')}}massets/img/icon/sign-in.svg" width="21" height="21" loading="lazy" alt="icon" uk-svg>
                    Log out
                </a>
            </li>

        </ul>
    </div>
</aside>
    
</body>
</html>