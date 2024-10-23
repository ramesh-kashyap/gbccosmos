<main id="as-main-deposit" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">
        <header class="uk-heading uk-text-center uk-margin-small-bottom">
            <h1 class="uk-heading-line">Create a new Deposit</h1>
        </header>
        <style>
            .new-deposit-amount-row__amount-cell {
            -ms-flex: 1;
            flex: 1;
            margin-top: 22px;
        }
        </style>
        <form method=post action="{{ route('user.fundActivation') }}" name="spendform"
            class="uk-form-stacked uk-child-width-1-2@l" uk-height-match="target: &gt; fieldset &gt; div &gt; .uk-card"
            uk-grid="uk-grid">
            @csrf

            <fieldset id="as-new-deposit-amount" class="uk-fieldset uk-form-controls-label-figure">
                <div class="uk-cube-bottom-left uk-cube-figure">
                    <div class="uk-card uk-card-default as-card-medium">
                        <div style="margin-left:70px;" class="uk-legend">
                            <span class="uk-text-background">Make Deposit</span>
                        </div>
                        <div class="new-deposit-amount-row uk-margin-medium-top">


                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                        Wallet Type </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="text" name=walletType readonly
                                        value="Activation Wallet( {{ currency() }}{{ number_format(Auth::user()->FundBalance(), 2) }})"
                                        class="uk-input form-control" />
                                </div>

                            </div>
                        

                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                        Select Amount
                                    </span>
                                </label>
                                <div class="uk-form-controls" style="display: flex; align-items: center;">
                                    <figure class="uk-form-controls-figure" style="margin-right:10px;" >
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg"  width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <select name="amount" class="uk-select form-control uniform-input" style="padding: 10px; 
                                        border-radius: 6px; 
                                         font-size: 1rem; 
                                        cursor: pointer; 
                                        width: 100%;" >
                                        <option value="20">20 USD</option>
                                        <option  value="50">50 USD</option>
                                        <option  value="100">100 USD</option>
                                        <option  value="200">200 USD</option>
                                        <option  value="400">400 USD</option>
                                        <option  value="800">800 USD</option>
                                        <option  value="1600">1600 USD</option>
                                        <option  value="3200">3200 USD</option>
                                        <option  value="6400">6400 USD</option>
                                        <option  value="12800">12800 USD</option>
                                        <option  value="51200">51200 USD</option>
                                        <option  value="102400">102400 USD</option>
                                        <option  value="202800">202800 USD</option>
                                        <option  value="405600">405600 USD</option>
                                        <option  value="811200">811200 USD</option>
                                        <option  value="1622400">1622400 USD</option>
                                        <option  value="3242800">3242800 USD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                        Member Id
                                    </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="text" name="user_id"  placeholder="Member Id" required class="uk-input form-control" />
                                </div>

                            </div>
                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                        Transaction Password
                                    </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="password" placeholder="Transaction Password" name="transaction_password" required
                                        class="uk-input form-control" />
                                </div>

                            </div>





                            <div class="new-deposit-amount-row__btn-cell">
                                <button type="submit" class="uk-button uk-button-primary uk-button-large">
                                    Create Deposit
                                    <img src="{{asset('')}}massets/img/icon/deposit.svg" width="37" height="37"
                                        loading="lazy" alt="icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    

    </div>
    @include('partials.notify')
</main>






<script language=javascript>
    for (i = 0; i < document.spendform.h_id.length; i++) {
        if (document.spendform.h_id[i].value == id) {
            document.spendform.h_id[i].checked = true;
        }
    }

</script>


<script language=javascript>
    for (i = 0; i < document.spendform.type.length; i++) {
        if ((document.spendform.type[i].value.match(/^process_/))) {
            document.spendform.type[i].checked = true;
            break;
        }
    }

</script>











<script>
    function filterFormRadio() {
        var planSelector = '[name="h_id"]';


        function filterButtons() {

            var planId = $(planSelector + ':checked').val();

            $(planSelector).closest('label').removeClass('uk-active');
            $(planSelector + ':checked').closest('label').addClass('uk-active');

            $('.js-plan-tab').hide();
            $('.js-plan-tab-' + planId).show();

        }

        filterButtons();
        $(planSelector).on('change', filterButtons);
    }

    if (document.addEventListener) {
        document.addEventListener('DOMContentLoaded', filterFormRadio);
    } else {
        document.attachEvent('onreadystatechange', filterFormRadio);
    }

</script>

