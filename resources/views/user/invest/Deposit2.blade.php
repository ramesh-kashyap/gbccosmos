

<main id="as-main-settings" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">


        <div class="uk-card uk-card-default uk-card-body uk-margin-medium disable-tfa-form__wrapper">
            <header class="uk-heading uk-text-center">
                <h2 class="uk-heading-line" style="position: relative; z-index: 3;">2FA Security</h2>
            </header>


            <ul class="uk-child-width-1-3@l uk-grid-medium uk-grid-divider uk-grid" uk-grid="">
                <li class="uk-first-column">
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend">
                            <mark>1</mark>
                            <span class="uk-text-background">Download Google Authenticator app for your device</span>
                        </legend>
                        <p class="uk-text-center">
                            Google Authentification is available in the following app stores on your mobile device.
                        </p>
                        <div class="uk-text-center uk-margin-top">
                            <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" target="_blank" class="as-btn-app">
                                <img src="{{asset('')}}massets/img/icon/google-play.svg" width="272" height="84" alt="Google Play">
                            </a>
                            <a href="https://apps.apple.com/ru/app/google-authenticator/id388497605" target="_blank" class="as-btn-app">
                                <img src="{{asset('')}}massets/img/icon/app-store.svg" width="272" height="84" alt="App Store">
                            </a>
                        </div>
                    </fieldset>
                </li>
                <li>
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend">
                            <mark>2</mark>
                            Scan QR code or enter the reserve code from app
                        </legend>
                        <figure class="uk-text-center">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&amp;data=otpauth%3A%2F%2Ftotp%2Fstakeon.pro%3Fsecret%3DAJVOV4WKFVJALHYS" width="186" height="180" loading="lazy" alt="demo">
                        </figure>
                        <div class="uk-margin-top uk-text-center">
                            <label class="uk-form-label" for="as-form-key">Your reserve key</label>

                            <div class="uk-form-controls">
                                <input class="uk-input uk-text-emphasis" type="text" id="as-form-key" value="AJVOV4WKFVJALHYS" disabled="">
                            </div>
                        </div>
                    </fieldset>
                </li>
                <li>

                    <fieldset class="uk-fieldset">
                        <form method="post" name="mainform"><input type="hidden" name="form_id" value="17283275806789"><input type="hidden" name="form_token" value="16bc2d39be50c2879d20be1f84e7dc70">
                            <input type="hidden" name="a" value="security">
                            <input type="hidden" name="action" value="tfa_save">
                            <input type="hidden" name="time" value="1728327579448">
                            <input type="hidden" name="tfa_secret" value="AJVOV4WKFVJALHYS">
                            <legend class="uk-legend">
                                <mark>3</mark>
                                <span class="uk-text-background">
                                    Activate
                                    2FA with code from app
                                </span>
                            </legend>
                            <p class="uk-text-center">
                                Please enter two factor token from Google Authenticator to verify correct setup.
                            </p>
                            <div class="uk-margin uk-text-center">
                                <label class="uk-form-label" for="as-form-2FA">Enter 2FA Code</label>
                                <div class="uk-form-controls">
                                    <input type="password" id="tfa_form_token" name="code" required="required" autocomplete="new-password" class="uk-input uk-text-emphasis form-control" aria-autocomplete="list">
                                </div>
                            </div>
                            <div class="uk-margin-medium-top uk-text-center">
                                <button class="uk-button uk-button-primary uk-button-large" type="submit">
                                    Activate
                                    2FA
                                    <img src="{{asset('')}}massets/img/icon/form/qr.svg" width="36" height="36" loading="lazy" alt="icon">
                                </button>
                            </div>
                        </form>
                    </fieldset>
                </li>
            </ul>
        </div>


    </div>
</main>

<aside id="asOffcanvasRight" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">

        <div class="uk-offcanvas-header">
            Close Menu
            <button class="uk-offcanvas-close" type="button" uk-close></button>
        </div>

        <ul class="uk-nav uk-nav-default uk-hidden@s">
            <li>
                <a href="?a=account">
                    <img src="{{asset('')}}massets/img/icon/account/dashboard.svg" width="31" height="30" loading="lazy" alt="" uk-svg>
                    Dashboard
                </a>
            </li>
            <li class="">
            <a href="?a=deposit">
                <img src="{{asset('')}}massets/img/icon/account/new-deposit.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
                New Deposit
            </a>
			</li>
			<li class="">
				<a href="?a=withdraw">
					<img src="{{asset('')}}massets/img/icon/account/withdrawal.svg" width="28" height="28" loading="lazy" alt="" uk-svg>
					Withdrawals
				</a>
			</li>
			<li class="">
				<a href="?a=history&type=earning">
					<img src="{{asset('')}}massets/img/icon/account/my-deposit.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
					Transactions
				</a>
			</li>
			<li class="">
				<a href="?a=referals">
					<img src="{{asset('')}}massets/img/icon/account/partners.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
					Partners
				</a>
			</li>
			<li class="">
				<a href="?a=edit_account">
					<img src="{{asset('')}}massets/img/icon/account/account-menu-support.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
					Settings
				</a>
			</li>
			<li class="">
				<a href="?a=security">
					<img src="{{asset('')}}massets/img/icon/account/account-menu-history.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
					Security
				</a>
			</li>

            <li class="uk-nav-divider"></li>
        </ul>

        <ul class="uk-nav uk-nav-default">
            
                            <li>
                    <a href="https://t.me/stakeonpro" target="_blank">
                        <img src="{{asset('')}}massets/img/another/telegram-yellow-icon.svg" width="29" height="29" loading="lazy" alt="" uk-svg>
                        Telegram
                    </a>
                </li>
            
            <li class="uk-nav-divider"></li>

            <li>
                <a href="?a=logout">
                    <img src="{{asset('')}}massets/img/icon/sign-in.svg" width="21" height="21" loading="lazy" alt="icon" uk-svg>
                    Log out
                </a>
            </li>

        </ul>
    </div>
</aside>
    
    

</body>
</html>