

<style>
    #as-dashboard-bottom_inputs {
    max-width: 600px;  /* Set a maximum width suitable for desktop */
    width: 100%; /* Full width on smaller screens */
    justify-content: flex-start; /* Align items to the start */
    padding: 15px; /* Add padding for better spacing */
    border-radius: 8px; /* Optional: Rounded corners for aesthetics */
}

/* Adjustments for the week-limit-widget */
.week-limit-widget {
    display: flex;
    align-items: center;
    padding: 10px; /* Padding for aesthetics */
    border: 1px solid #e0e0e0; /* Optional: Add a border for definition */
    border-radius: 8px; /* Optional: Rounded corners */
}

/* Adjust the icon size if needed */
.week-limit-widget__icon-cell img {
    width: 80px; /* Adjust the icon size */
    height: auto; /* Maintain aspect ratio */
}

/* Adjust the body cell */
.week-limit-widget__body-cell {
    margin-left: 10px; /* Space between icon and text */
}

/* Responsive adjustments */
@media (max-width: 400px) {
    #as-dashboard-bottom_inputs {
        max-width: 100%; /* Full width on mobile screens */
        padding: 10px; /* Padding for mobile view */
    }
}

@media (min-width: 401px) {
    /* For larger screens */
    #as-dashboard-bottom_inputs {
        padding: 20px; /* Increased padding for larger screens */
    }

    .week-limit-widget {
        flex-direction: row; /* Ensure items are in a row */
        justify-content: flex-start; /* Align items to the start */
    }
}
@media (min-width: 1200px) {
    #as-dashboard-img {
        position: absolute;
        top: -100px;
        z-index: 1;
    }
}

    </style>
    
<main id="as-main-dashboard" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand uk-position-relative">
        <header class="uk-heading uk-text-center uk-margin-small-bottom uk-hidden@l">
            <h1 class="uk-heading-line">Dashboard</h1>
        </header>

        <section id="as-dashboard-top" class="uk-grid-medium uk-flex-between@l uk-grid" uk-grid="">
            <div class="uk-width-3-4@l uk-width-1-2@xl uk-first-column">
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
                            <div class="as-label-secondary as-label-secondary-small uk-animation-fade uk-animation-fast">
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
                <img id="as-dashboard-img" src="{{asset('')}}massets/img/another/dashboard.webp" width="560" height="609" loading="lazy" alt="">
            </figure>

          

        </section>
      <section id="as-dashboard-bottom" class="uk-flex-center uk-margin uk-grid" uk-grid="">

    <div id="as-dashboard-bottom_statistic" class="as-statistic-buttons uk-first-column">
        <div id="as-dashboard-statistic-panel" class="uk-position-relative">
            <div id="as-dashboard-statistic-exit">
                <ul class="uk-grid-small uk-child-width-1-2@m js-stats-item js-stats-all uk-grid" uk-grid="">
                    <li class="uk-first-column">
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
                            {{ currency() }}{{ number_format(Auth::user()->investment->sum('amount'), 2) }}                            </ins>
                        </div>
                    </li>
                    <li class="uk-grid-margin uk-first-column">
                        <div class="balance-stats-block-icon">
                            <img src="{{asset('')}}massets/img/another/balance-stats-3.svg">
                        </div>
                        <div class="uk-panel">
                            <div class="as-exit-name">Level Income</div>
                            <ins class="js-stats-deposits-amount">
                            {{ currency() }}{{ number_format(Auth::user()->level_bonus->sum('comm'), 2) }}                            </ins>
                        </div>
                    </li>
                    <li class="uk-grid-margin">
                        <div class="balance-stats-block-icon">
                            <img src="{{asset('')}}massets/img/another/balance-stats-4.svg">
                        </div>
                        <div class="uk-panel">
                            <div class="as-exit-name">Royalty Income</div>
                            <ins class="js-stats-withdrawn-amount">
                            {{ currency() }}{{ number_format(Auth::user()->reward_bonus->sum('comm'), 2) }}                            </ins>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="as-dashboard-bottom_statistic" class="as-statistic-buttons uk-first-column">
        <div id="as-dashboard-statistic-panel" class="uk-position-relative">
            <div id="as-dashboard-statistic-exit">
                <ul class="uk-grid-small uk-child-width-1-2@m js-stats-item js-stats-all uk-grid" uk-grid="">
                    <li class="uk-first-column">
                        <div class="balance-stats-block-icon">
                            <img src="{{asset('')}}massets/img/another/balance-stats-1.svg">
                        </div>
                        <div class="uk-panel">
                            <div class="as-exit-name">Level Team</div>
                            <ins class="js-stats-accrued-amount">
                            {{$total_team}}                            </ins>
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
                    <li class="uk-grid-margin uk-first-column">
                        <div class="balance-stats-block-icon">
                            <img src="{{asset('')}}massets/img/another/balance-stats-3.svg">
                        </div>
                        <div class="uk-panel">
                            <div class="as-exit-name">E Wallet</div>
                            <ins class="js-stats-deposits-amount">
                            {{ currency() }}{{ number_format(Auth::user()->FundBalance(), 2) }}                            </ins>
                        </div>
                    </li>
                    <li class="uk-grid-margin">
                        <div class="balance-stats-block-icon">
                            <img src="{{asset('')}}massets/img/another/balance-stats-4.svg">
                        </div>
                        <div class="uk-panel">
                            <div class="as-exit-name">Total Withdrawal</div>
                            <ins class="js-stats-withdrawn-amount">
                            {{ currency() }}{{ number_format(Auth::user()->withdraw(), 2) }}                            </ins>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    
    
    <!-- Move the referral link section below the statistics -->
    

</section>





<section id="as-dashboard-bottom" class="uk-flex-center uk-margin uk-grid" uk-grid="">

<div id="as-dashboard-bottom_statistic" class="as-statistic-buttons uk-first-column">
    <div id="as-dashboard-statistic-panel" class="uk-position-relative">
        <div id="as-dashboard-statistic-exit">
            <ul class="uk-grid-small uk-child-width-1-2@m js-stats-item js-stats-all uk-grid" uk-grid="">
                <li class="uk-first-column">
                    <div class="balance-stats-block-icon">
                        <img src="{{asset('')}}massets/img/another/balance-stats-1.svg">
                    </div>
                    <div class="uk-panel">
                        <div class="as-exit-name">Direct Income</div>
                        <ins class="js-stats-accrued-amount">
                        {{ currency() }}{{ number_format(Auth::user()->sponsorship_bonus->sum('amount'), 2) }}                            </ins>

                        </ins>
                    </div>
                </li>
                <li>
                    <div class="balance-stats-block-icon">
                        <img src="{{asset('')}}massets/img/another/balance-stats-2.svg">
                    </div>
                    <div class="uk-panel">
                        <div class="as-exit-name">Roi Income</div>
                        <ins class="js-stats-invested-amount">
                        {{ currency() }}{{ number_format(Auth::user()->roi_bonus->sum('amount'), 2) }}                            </ins>
                    </div>
                </li>
                <li class="uk-grid-margin uk-first-column">
                    <div class="balance-stats-block-icon">
                        <img src="{{asset('')}}massets/img/another/balance-stats-3.svg">
                    </div>
                    <div class="uk-panel">
                        <div class="as-exit-name">Pool Income</div>
                        <ins class="js-stats-deposits-amount">
                        {{ currency() }}0.00</ins>
                    </div>
                </li>
                <li class="uk-grid-margin">
                    <div class="balance-stats-block-icon">
                        <img src="{{asset('')}}massets/img/another/balance-stats-4.svg">
                    </div>
                    <div class="uk-panel">
                        <div class="as-exit-name">Leadership Income</div>
                        <ins class="js-stats-withdrawn-amount">
                        {{ currency() }}0.00</ins>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="as-dashboard-bottom_statistic" class="as-statistic-buttons uk-first-column">
    <div id="as-dashboard-statistic-panel" class="uk-position-relative">
        <div id="as-dashboard-statistic-exit">
            <ul class="uk-grid-small uk-child-width-1-2@m js-stats-item js-stats-all uk-grid" uk-grid="">
                <li class="uk-first-column">
                    <div class="balance-stats-block-icon">
                        <img src="{{asset('')}}massets/img/another/balance-stats-1.svg">
                    </div>
                    <div class="uk-panel">
                        <div class="as-exit-name">Reward Income</div>
                        <ins class="js-stats-accrued-amount">
                        {{ currency() }}0.00
                                                 </ins>
                    </div>
                </li>
                <li>
                    <div class="balance-stats-block-icon">
                        <img src="{{asset('')}}massets/img/another/balance-stats-2.svg">
                    </div>
                    <div class="uk-panel">
                        <div class="as-exit-name">Re-Birth Income</div>
                        <ins class="js-stats-invested-amount">
                        {{ currency() }}0.00
                        </ins>
                    </div>
                </li>
                <li class="uk-grid-margin uk-first-column">
                    <div class="balance-stats-block-icon">
                        <img src="{{asset('')}}massets/img/another/balance-stats-3.svg">
                    </div>
                    <div class="uk-panel">
                        <div class="as-exit-name">Auto-Upgrade Income</div>
                        <ins class="js-stats-deposits-amount">
                        {{ currency() }}0.00
                        </ins>

                    </div>
                </li>
                <li class="uk-grid-margin">
                    <div class="balance-stats-block-icon">
                        <img src="{{asset('')}}massets/img/another/balance-stats-4.svg">
                    </div>
                    <div class="uk-panel">
                        <div class="as-exit-name">Package Auto Upgrade Income </div>
                        <ins class="js-stats-withdrawn-amount">
                        {{ currency() }}0.00
                        </ins>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>



<!-- Move the referral link section below the statistics -->


</section>
<div id="as-dashboard-bottom_inputs" class="uk-form-controls-label-figure uk-grid-margin uk-first-column">
        <div class="week-limit-widget">
            <div class="week-limit-widget__inner">
                <div class="week-limit-widget__icon-cell">
                    <img src="{{asset('')}}massets/img/icon/account/amount.svg" width="103" height="101" loading="lazy" alt="icon">
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
                    <img src="{{asset('')}}massets/img/icon/form/referral.svg" width="60" height="60" loading="lazy" alt="icon">
                </figure>
                <input class="uk-input" type="url" value="{{ asset('') }}register?ref={{ Auth::user()->username }}" id="as-form-referral" disabled="">
            </div>
        </div>
    </div>

        
        <br> <br>
    </div>
</main>
