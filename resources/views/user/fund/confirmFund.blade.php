<main id="as-main-withdrawal" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">

        <header class="uk-heading uk-text-center uk-margin-small-bottom">
            <h1 class="uk-heading-line">Deposit Confirmation</h1>
        </header>

        <div class="uk-grid uk-grid-stack" uk-grid="" style="justify-content:center">
            <section style="width:100%" class="uk-width-1-3@xl uk-first-column">
                <fieldset id="as-withdrawal-select" class="uk-fieldset">
                    <div class="uk-cube-top-left uk-cube-figure">
                        <div class="uk-card uk-card-default as-card-medium">
                            <div class="uk-margin-small-top uk-margin-bottom">
                                <div class="uk-form-controls">
                                    <img id="qr_code"
                                        src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{$walletAdress}}"
                                        alt="QR Code" style="width:150px; height:150px;">
                                </div>
                            </div>
                            <div  class="uk-margin-small-top uk-margin-bottom">
    <div class="uk-form-controls uk-flex uk-flex-middle">
        <td id="wallet_address" class="uk-text-truncate" style="margin: 0; width: 450px;">
            {{$walletAdress}}
        </td>
        <img src="{{ asset('massets/img/icon/icons8-copy-24.png') }}" alt="Copy Icon" 
             style="width: 24px; height: 24px; cursor: pointer; margin-left: 10px;" 
             onclick="copyToClipboard('{{$walletAdress}}')" />
    </div>
</div>



                            <div class="uk-margin-small-top uk-margin-bottom">
                                <label class="uk-form-label" for="as-form-user">Payment Mode</label>
                                <div class="uk-form-controls" style="font-weight:bold; color: #ffcc00">
                                    {{$paymentMode}}
                                </div>
                            </div>
                            <div class="uk-margin-small-top uk-margin-bottom">
                                <label class="uk-form-label" for="as-form-user">Amount</label>
                                <div class="uk-form-controls" style="font-weight:bold; color: #ffcc00">
                                    {{$amount}}
                                </div>
                            </div>

                            <div class="uk-margin-small-top uk-margin-bottom">
                                <label class="uk-form-label" for="transaction_id">Transaction Id</label>
                                <div class="uk-form-controls">
                                    <input id="transaction_id" name="transaction_id" type="text" class="uk-input" required style="max-width: 350px; width: 100%;">
                                </div>
                            </div>

                            <div class="uk-margin-small-top uk-margin-bottom">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="uk-alert uk-alert-danger" role="alert">{{ $error }}</div>
                                    @endforeach
                                @endif

                                <form method="post" action="{{ route('user.SubmitBuyFund') }}" onsubmit="updateTransactionIdInput()">
                                    @csrf
                                    <input type="hidden" name="amount" id="amount_input" value="{{ $amount }}">
                                    <input type="hidden" name="payment_type" id="payment_type_input" value="{{ $paymentMode }}">
                                    <input type="hidden" name="transaction_id" id="transaction_id_input">

                                    <span class="deposit-process-wrap">
                                        <input type="submit" value="Process" class="sbmt deposit-process">
                                    </span>
                                    <span class="deposit-cancel-wrap">
                                        <input type="button" value="Cancel" class="sbmt deposit-cancel"
                                            onclick="window.location.href='{{ route('user.AddFund') }}'">
                                    </span>
                                </form>
                            </div>
                            @include('partials.notify')

                        </div>
                    </div>
                </fieldset>

            </section>
        </div>

    </div>
</main>

<script>
    // Function to extract query parameters from the URL
    function getQueryParams() {
        let params = {};
        let search = window.location.search.substring(1);
        let queries = search.split("&");

        for (let i = 0; i < queries.length; i++) {
            let pair = queries[i].split("=");
            params[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1]);
        }
        return params;
    }

    function updateTransactionIdInput() {
        let transactionId = document.getElementById('transaction_id').value;
        document.getElementById('transaction_id_input').value = transactionId;
    }

    // Get data from URL and display it on the second form
    window.onload = function () {
        let params = getQueryParams();
        let paymentTopup = params['payment_type'];
        let amount = params['amount'];

        // Display the data in the form
        document.getElementById('amount_input').value = amount;
        document.getElementById('payment_type_input').value = paymentTopup;

        let qrCodeUrl = "";

        if (paymentTopup === "USDT.TRC20") {
            qrCodeUrl = "{{ asset('massets/img/another/download.png') }}";

        } else if (paymentTopup === "USDT.BEP20") {
            qrCodeUrl = "{{ asset('massets/img/another/download (1).png') }}";
        }

        if (qrCodeUrl) {
            document.getElementById('qr_code').src = qrCodeUrl;
        }
    };

    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(function () {
            alert("Wallet address copied to clipboard!");
        }, function (err) {
            console.error('Could not copy text: ', err);
        });
    }
</script>

<style>
    .deposit-process {
        background-color: #4CAF50; /* Green background */
        border: none; /* Remove borders */
        color: white; /* White text */
        padding: 10px 20px; /* Reduced padding for shorter height */
        text-align: center; /* Center the text */
        text-decoration: none; /* Remove underline */
        display: inline-block; /* Get the button to display inline */
        font-size: 16px; /* Larger text */
        margin: 4px 2px; /* Margins around the button */
        cursor: pointer; /* Pointer cursor on hover */
        border-radius: 4px; /* Rounded corners */
        transition: background-color 0.3s; /* Smooth transition for hover effect */
    }

    .deposit-process:hover {
        background-color: #45a049; /* Darker green on hover */
    }

    .deposit-cancel {
        background-color: #f44336; /* Red background */
        border: none;
        color: white;
        padding: 10px 20px; /* Reduced padding for shorter height */
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .deposit-cancel:hover {
        background-color: #e53935; /* Darker red on hover */
    }
</style>
