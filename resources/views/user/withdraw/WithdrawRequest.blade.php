<main id="as-main-deposit" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">
        <header class="uk-heading uk-text-center uk-margin-small-bottom">
            <h1 class="uk-heading-line">Withdraw Request</h1>
        </header>


       
        <form action="{{ route('user.Withdraw-Request') }}" method="POST" name="spendform" class="uk-form-stacked uk-child-width-1-2@l"
            uk-height-match="target: &gt; fieldset &gt; div &gt; .uk-card" uk-grid="uk-grid">
            @csrf

            <fieldset id="as-new-deposit-amount" class="uk-fieldset uk-form-controls-label-figure">
                <div class="uk-cube-bottom-left uk-cube-figure">
                    <div class="uk-card uk-card-default as-card-medium">
                    <div style="margin-left:70px;" class="uk-legend">
                            <span class="uk-text-background">Make Withdraw</span>
                        </div>
                    
                        <div class="new-deposit-amount-row uk-margin-medium-top">

                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                    Available Balance                                      </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="text" name=walletType value="( {{ currency() }}{{ number_format(Auth::user()->available_balance(), 2) }})"    
                                        class="uk-input form-control" />
                                </div>

                            </div>
                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                        Enter Amount
                                    </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="text" name=amount  required   
                                        class="uk-input form-control" />
                                </div>

                            </div>
                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                    Payment Mode
                                    </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="text" name=paymentMode  required value="USDT" placeholder="USDT"
                                        class="uk-input form-control" />
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
                                    <input type="password" name="transaction_password"  required    
                                        class="uk-input form-control" />
                                </div>

                            </div>
                        
                        



                            <div class="new-deposit-amount-row__btn-cell">
                                <button  type="submit"class="uk-button uk-button-primary uk-button-large">
                                    Create Withdraw
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
<style>




   </style>