<main id="as-main-dashboard" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand uk-position-relative">
        <header class="uk-heading uk-text-center uk-margin-small-bottom uk-hidden@l">
            <h1 class="uk-heading-line">Dashboard</h1>
        </header>

        <section id="as-dashboard-top" class="uk-grid-medium uk-flex-between@l" uk-grid>
            <div class="uk-width-3-4@l uk-width-1-2@xl">
                <div class="uk-cube-top-left">
                    <div class="uk-card uk-card-default uk-card-body uk-text-center uk-text-left@l">
                        <div class="uk-wow">
                            <ins class="uk-wow-large">
                                1%
                            </ins>
                            <div>
                                <div class="uk-wow-text">
                                    Earn
                                    <br>
                                    Up To
                                </div>
                            </div>
                        </div>

                        <div id="as-dashboard-top_return" class="uk-margin">
                            <ul class="uk-list uk-list-bullet">
                                <li>Start from $25</li>
                                <li>Principal available</li>
                                <li>Fast withdrawals</li>
                            </ul>
                        </div>
                        <div class="uk-margin">
                            <div
                                class="as-label-secondary as-label-secondary-small uk-animation-fade uk-animation-fast">
                                Principal return at end!
                            </div>
                            <a href="{{ route('user.invest') }}" class="uk-button uk-button-primary uk-button-large">
                                Deposit Now
                                <img src="{{asset('')}}massets/img/icon/finger.svg" width="40" height="40" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <figure class="uk-width-auto@l uk-visible@l">
                <img id="as-dashboard-img" src="{{asset('')}}massets/img/another/dashboard.webp" width="560"
                    height="609" loading="lazy" alt="">
            </figure>

            <div id="as-dashboard-top_right" class="uk-width-2-5@xl">
                <div class="dashboard-slider" uk-slider>
                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@l uk-child-width-1-1@xl uk-grid">
                        <li>
                            <div class="tg-join-card">
                                <div class="tg-join-card__inner">
                                    <div class="tg-join-card__title">
                                        For update offical information about <b>our company</b>
                                    </div>
                                    <a href="https://t.me/stakeonpro" target="_blank"
                                        class="uk-button uk-button-primary uk-button-rounded tg-join-card__link">
                                        <span>Join Telegram</span>
                                        <img src="{{asset('')}}massets/img/another/small-arrow-right-dark.svg"
                                            class="uk-margin-less-left" alt="icon" width="9" height="15">
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="uk-slider-nav uk-dotnav"></ul>
                </div>
            </div>

            

        </section>




        <section id="as-dashboard-bottom" class="uk-flex-center uk-margin" uk-grid>

            <div id="as-dashboard-bottom_statistic" class="as-statistic-buttons">


                <div id="as-dashboard-statistic-panel" class="uk-position-relative">

                    <div id="as-dashboard-statistic-exit">
                        <ul class="uk-grid-small uk-child-width-1-2@m js-stats-item js-stats-all" uk-grid>
                            <li>
                                <div class="balance-stats-block-icon">
                                    <img src="{{asset('')}}massets/img/another/balance-stats-1.svg">
                                </div>
                                <div class="uk-panel">
                                    <div class="as-exit-name">Account Balance</div>
                                    <ins class="js-stats-accrued-amount">
                                    {{ currency() }}{{ number_format(Auth::user()->available_balance(), 2) }}
                                    </ins>
                                </div>
                            </li>
                            <li>
                                <div class="balance-stats-block-icon">
                                    <img src="{{asset('')}}massets/img/another/balance-stats-2.svg">
                                </div>
                                <div class="uk-panel">
                                    <div class="as-exit-name">Total Deposit</div>
                                    <ins class="js-stats-invested-amount">
                                    {{ currency() }}{{ number_format(Auth::user()->investment->sum('amount'), 2) }}                                     </ins>
                                </div>
                            </li>
                            <li>
                                <div class="balance-stats-block-icon">
                                    <img src="{{asset('')}}massets/img/another/balance-stats-3.svg">
                                </div>
                                <div class="uk-panel">
                                    <div class="as-exit-name">Level Income</div>
                                    <ins class="js-stats-deposits-amount">
                                    {{ currency() }}{{ number_format(Auth::user()->level_bonus->sum('comm'), 2) }}  
                                    </ins>
                                </div>
                            </li>
                            <li>
                                <div class="balance-stats-block-icon">
                                    <img src="{{asset('')}}massets/img/another/balance-stats-4.svg">
                                </div>
                                <div class="uk-panel">
                                    <div class="as-exit-name">Royalty Income</div>
                                    <ins class="js-stats-withdrawn-amount">
                                    {{ currency() }}{{ number_format(Auth::user()->reward_bonus->sum('comm'), 2) }} 
                                    </ins>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div id="as-dashboard-bottom_statistic" class="as-statistic-buttons">


<div id="as-dashboard-statistic-panel" class="uk-position-relative">

    <div id="as-dashboard-statistic-exit">
        <ul class="uk-grid-small uk-child-width-1-2@m js-stats-item js-stats-all" uk-grid>
            <li>
                <div class="balance-stats-block-icon">
                    <img src="{{asset('')}}massets/img/another/balance-stats-1.svg">
                </div>
                <div class="uk-panel">
                    <div class="as-exit-name">Level Team</div>
                    <ins class="js-stats-accrued-amount">
                    {{$total_team}}   
                    </ins>
                </div>
            </li>
            <li>
                <div class="balance-stats-block-icon">
                    <img src="{{asset('')}}massets/img/another/balance-stats-2.svg">
                </div>
                <div class="uk-panel">
                    <div class="as-exit-name">Direct Team</div>
                    <ins class="js-stats-invested-amount">
                    {{$user_direct}}

                    </ins>
                </div>
            </li>
            <li>
                <div class="balance-stats-block-icon">
                    <img src="{{asset('')}}massets/img/another/balance-stats-3.svg">
                </div>
                <div class="uk-panel">
                    <div class="as-exit-name">E Wallet</div>
                    <ins class="js-stats-deposits-amount">
                    {{ currency() }}{{ number_format(Auth::user()->FundBalance(), 2) }} 
                    </ins>
                </div>
            </li>
            <li>
                <div class="balance-stats-block-icon">
                    <img src="{{asset('')}}massets/img/another/balance-stats-4.svg">
                </div>
                <div class="uk-panel">
                    <div class="as-exit-name">Total Withdrawal</div>
                    <ins class="js-stats-withdrawn-amount">
                    {{ currency() }}{{ number_format(Auth::user()->withdraw(), 2) }} 
                    </ins>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>

          

            

        </section>

        <section id="as-dashboard-bottom" class="uk-flex-center uk-margin" uk-grid>

            <div id="as-dashboard-bottom_statistic" class="as-statistic-buttons">


                <div id="as-dashboard-statistic-panel" class="uk-position-relative">

                    <div id="as-dashboard-statistic-exit">
                        <ul class="uk-grid-small uk-child-width-1-2@m js-stats-item js-stats-all" uk-grid>
                            <li>
                                <div class="balance-stats-block-icon">
                                    <img src="{{asset('')}}massets/img/another/balance-stats-1.svg">
                                </div>
                                <div class="uk-panel">
                                    <div class="as-exit-name">Direct Income</div>
                                    <ins class="js-stats-accrued-amount">
                                    {{ currency() }}{{ number_format(Auth::user()->sponsorship_bonus->sum('amount'), 2) }}   
                                    </ins>
                                </div>
                            </li>
                            <li>
                                <div class="balance-stats-block-icon">
                                    <img src="{{asset('')}}massets/img/another/balance-stats-2.svg">
                                </div>
                                <div class="uk-panel">
                                    <div class="as-exit-name">Pool Income</div>
                                    <ins class="js-stats-invested-amount">
                                    {{ currency() }}{{ number_format(Auth::user()->pool_bonus->sum('amount'), 2) }}                                     </ins>
                                    </ins>
                                </div>
                            </li>
                            <li>
                                <div class="balance-stats-block-icon">
                                    <img src="{{asset('')}}massets/img/another/balance-stats-3.svg">
                                </div>
                                <div class="uk-panel">
                                    <div class="as-exit-name">Leadership Income</div>
                                    <ins class="js-stats-deposits-amount">
                                    {{ currency() }}{{ number_format(Auth::user()->leadership_bonus->sum('amount'), 2) }}                                     </ins>
                                </div>
                            </li>
                            <li>
                                <div class="balance-stats-block-icon">
                                    <img src="{{asset('')}}massets/img/another/balance-stats-4.svg">
                                </div>
                                <div class="uk-panel">
                                    <div class="as-exit-name">Active Stake</div>
                                    <ins class="js-stats-withdrawn-amount">
                                        $0.00
                                    </ins>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="as-dashboard-bottom_inputs" class="uk-form-controls-label-figure">
                <div class="week-limit-widget">
                    <div class="week-limit-widget__inner">
                        <div class="week-limit-widget__icon-cell">
                            <img src="{{asset('')}}massets/img/icon/account/amount.svg" width="103" height="101"
                                loading="lazy" alt="icon">
                        </div>
                        <div class="week-limit-widget__body-cell">
                            <div class="week-limit-widget__title">
                                Referral
                            </div>
                            <div class="week-limit-widget__amount">
                                Program
                            </div>
                            <div class="week-limit-widget__text">
                                Refer your friend and earn extra income
                            </div>
                        </div>
                    </div>
                </div>


                <div class="uk-margin">
                    <label class="uk-form-label" for="as-form-referral">Your Referral link</label>
                    <div class="uk-form-controls">
                        <figure class="uk-form-controls-figure">
                            <img src="{{asset('')}}massets/img/icon/form/referral.svg" width="60" height="60"
                                loading="lazy" alt="icon">
                        </figure>
                        <input class="uk-input" type="url" value="{{ asset('') }}register?ref={{ Auth::user()->username }}"
                            id="as-form-referral" disabled>
                    </div>
                </div>
            </div>

            <div id="as-dashboard-bottom_token" class="uk-text-center">
                <div id="as-sec-few-token-block" class="">
                    <figure class="uk-cube-figure uk-cube-top-right">
                        <div class="uk-card uk-card-body uk-card-secondary uk-card-no-before">
                            <div class="next-plan-card">


                                <div class="next-plan-widget next-plan-card__next-plan-widget">
                                    <div class="next-plan-widget__inner">
                                        <div class="next-plan-widget__title">
                                            Balance
                                        </div>
                                        <div class="next-plan-widget__percent">
                                            $0
                                        </div>
                                        <div class="next-plan-widget__footer">
                                            <div class="plan-upgrade-title next-plan-widget__plan-upgrade-title">
                                                <div class="plan-upgrade-title__inner">
                                                    <a href="?a=withdraw" target="_blank"
                                                        class="uk-button uk-button-primary uk-button-rounded tg-join-card__link">
                                                        <span>Withdraw</span>
                                                        <img src="{{asset('')}}massets/img/another/small-arrow-right-dark.svg"
                                                            class="uk-margin-less-left" alt="icon" width="9"
                                                            height="15">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </figure>
                </div>
            </div>

        </section>
        <br> <br>
    </div>
</main>
