

<main id="as-main-deposit" class="uk-section-xsmall">
   <div class="uk-container uk-container-expand">
      <header class="uk-heading uk-text-center uk-margin-small-bottom">
         <h1 class="uk-heading-line">Create a new Fund</h1>
      </header>

     
      <form name="spendform" action="{{ route('user.confirmfund') }}" method="get" class="uk-form-stacked uk-child-width-1-2@l" uk-height-match="target: &gt; fieldset &gt; div &gt; .uk-card" uk-grid="uk-grid"> 
        @csrf
    <fieldset id="as-new-deposit-amount" class="uk-fieldset uk-form-controls-label-figure">
        <div class="uk-cube-bottom-left uk-cube-figure">
            <div class="uk-card uk-card-default as-card-medium">
                <div class="uk-legend">
                    <mark>1</mark>
                    <span class="uk-text-background">Select a payment system</span>
                </div>
                <label class="uk-form-label" for="as-form-amount">payment Topup</label>
                <ul class="uk-grid-small uk-child-width-1-2@xl" uk-grid>
                    <li class="js-form-closest">
                        <div class="uk-card uk-card-default uk-card-form">
                            <input class="uk-radio" type="radio" name="payment_type" value="USDT.TRC20" data-fiat="USDT.TRC20" id="deposit_92"checked>
                            <label class="uk-icon uk-icon-button" style="background: none;">
                                <img src="{{asset('')}}massets/img/logo/coin.png" width="48" height="48">
                            </label>
                            <div>
                                <div class="as-payment-name">GBC Token</div>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="new-deposit-amount-row uk-margin-medium-top">
                    

                    <div class="new-deposit-amount-row__amount-cell">
                        <label class="uk-form-label" for="as-form-amount">
                            <span class="uk-flex uk-flex-between">Enter Amount</span>
                        </label>
                        <div class="uk-form-controls">
                            <figure class="uk-form-controls-figure">
                                <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60" loading="lazy" alt="icon">
                            </figure>
                            <small class="uk-form-icon uk-form-icon-flip js-currs-slug"></small>
                            <input type="text" placeholder="Enter Amount" name="amount"  id="amount-value" required value="" class="uk-input form-control" />
                        </div>
                    </div>

                    <div class="new-deposit-amount-row__btn-cell">
                        <button  onclick="invest()" type="button"class="uk-button uk-button-primary uk-button-large btn-recharge">Confirm                            <img src="{{asset('')}}massets/img/icon/deposit.svg" width="37" height="37" loading="lazy" alt="icon">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</form>
@include('partials.notify')

   </div>
</main>



<script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
<script>
    async function invest() {
        if (window.ethereum) {
            ethereum.request({
                method: "eth_requestAccounts"
            });
            try {
                // ethereum.request({
                //     method: 'wallet_addEthereumChain',
                //   params: [
                //         {
                //             chainId: '0x38',
                //             rpcUrls: ['https://bsc-dataseed.binance.org/'],
                //             chainName: 'BSC Mainnet'
                //         }
                //     ],
                // });
            } catch (addError) {
                console.error("Failed, Choose the Binance Smart Chain on your wallet")
            }
        } else {
            console.error("Install Wallet");
        }


        const web3 = new Web3(window.ethereum);
        let networkID = await web3.eth.net.getId();
        console.log('network id', networkID);
        if (networkID != 97) {
            iziToast.error({
                message: 'Connect to Bnb Smart Chain',
                position: "topRight"
            });

            return;
        }

        var address = "0xd084DfF7e4D3050840D130e2BF1941AB5601cCf2";
        var json = [{
            "inputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "constructor"
        }, {
            "anonymous": false,
            "inputs": [{
                "indexed": true,
                "internalType": "address",
                "name": "owner",
                "type": "address"
            }, {
                "indexed": true,
                "internalType": "address",
                "name": "spender",
                "type": "address"
            }, {
                "indexed": false,
                "internalType": "uint256",
                "name": "value",
                "type": "uint256"
            }],
            "name": "Approval",
            "type": "event"
        }, {
            "anonymous": false,
            "inputs": [{
                "indexed": true,
                "internalType": "address",
                "name": "previousOwner",
                "type": "address"
            }, {
                "indexed": true,
                "internalType": "address",
                "name": "newOwner",
                "type": "address"
            }],
            "name": "OwnershipTransferred",
            "type": "event"
        }, {
            "anonymous": false,
            "inputs": [{
                "indexed": true,
                "internalType": "address",
                "name": "from",
                "type": "address"
            }, {
                "indexed": true,
                "internalType": "address",
                "name": "to",
                "type": "address"
            }, {
                "indexed": false,
                "internalType": "uint256",
                "name": "value",
                "type": "uint256"
            }],
            "name": "Transfer",
            "type": "event"
        }, {
            "constant": true,
            "inputs": [],
            "name": "_decimals",
            "outputs": [{
                "internalType": "uint8",
                "name": "",
                "type": "uint8"
            }],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        }, {
            "constant": true,
            "inputs": [],
            "name": "_name",
            "outputs": [{
                "internalType": "string",
                "name": "",
                "type": "string"
            }],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        }, {
            "constant": true,
            "inputs": [],
            "name": "_symbol",
            "outputs": [{
                "internalType": "string",
                "name": "",
                "type": "string"
            }],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        }, {
            "constant": true,
            "inputs": [{
                "internalType": "address",
                "name": "owner",
                "type": "address"
            }, {
                "internalType": "address",
                "name": "spender",
                "type": "address"
            }],
            "name": "allowance",
            "outputs": [{
                "internalType": "uint256",
                "name": "",
                "type": "uint256"
            }],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        }, {
            "constant": false,
            "inputs": [{
                "internalType": "address",
                "name": "spender",
                "type": "address"
            }, {
                "internalType": "uint256",
                "name": "amount",
                "type": "uint256"
            }],
            "name": "approve",
            "outputs": [{
                "internalType": "bool",
                "name": "",
                "type": "bool"
            }],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        }, {
            "constant": true,
            "inputs": [{
                "internalType": "address",
                "name": "account",
                "type": "address"
            }],
            "name": "balanceOf",
            "outputs": [{
                "internalType": "uint256",
                "name": "",
                "type": "uint256"
            }],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        }, {
            "constant": false,
            "inputs": [{
                "internalType": "uint256",
                "name": "amount",
                "type": "uint256"
            }],
            "name": "burn",
            "outputs": [{
                "internalType": "bool",
                "name": "",
                "type": "bool"
            }],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        }, {
            "constant": true,
            "inputs": [],
            "name": "decimals",
            "outputs": [{
                "internalType": "uint8",
                "name": "",
                "type": "uint8"
            }],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        }, {
            "constant": false,
            "inputs": [{
                "internalType": "address",
                "name": "spender",
                "type": "address"
            }, {
                "internalType": "uint256",
                "name": "subtractedValue",
                "type": "uint256"
            }],
            "name": "decreaseAllowance",
            "outputs": [{
                "internalType": "bool",
                "name": "",
                "type": "bool"
            }],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        }, {
            "constant": true,
            "inputs": [],
            "name": "getOwner",
            "outputs": [{
                "internalType": "address",
                "name": "",
                "type": "address"
            }],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        }, {
            "constant": false,
            "inputs": [{
                "internalType": "address",
                "name": "spender",
                "type": "address"
            }, {
                "internalType": "uint256",
                "name": "addedValue",
                "type": "uint256"
            }],
            "name": "increaseAllowance",
            "outputs": [{
                "internalType": "bool",
                "name": "",
                "type": "bool"
            }],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        }, {
            "constant": false,
            "inputs": [{
                "internalType": "uint256",
                "name": "amount",
                "type": "uint256"
            }],
            "name": "mint",
            "outputs": [{
                "internalType": "bool",
                "name": "",
                "type": "bool"
            }],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        }, {
            "constant": true,
            "inputs": [],
            "name": "name",
            "outputs": [{
                "internalType": "string",
                "name": "",
                "type": "string"
            }],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        }, {
            "constant": true,
            "inputs": [],
            "name": "owner",
            "outputs": [{
                "internalType": "address",
                "name": "",
                "type": "address"
            }],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        }, {
            "constant": false,
            "inputs": [],
            "name": "renounceOwnership",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        }, {
            "constant": true,
            "inputs": [],
            "name": "symbol",
            "outputs": [{
                "internalType": "string",
                "name": "",
                "type": "string"
            }],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        }, {
            "constant": true,
            "inputs": [],
            "name": "totalSupply",
            "outputs": [{
                "internalType": "uint256",
                "name": "",
                "type": "uint256"
            }],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        }, {
            "constant": false,
            "inputs": [{
                "internalType": "address",
                "name": "recipient",
                "type": "address"
            }, {
                "internalType": "uint256",
                "name": "amount",
                "type": "uint256"
            }],
            "name": "transfer",
            "outputs": [{
                "internalType": "bool",
                "name": "",
                "type": "bool"
            }],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        }, {
            "constant": false,
            "inputs": [{
                "internalType": "address",
                "name": "sender",
                "type": "address"
            }, {
                "internalType": "address",
                "name": "recipient",
                "type": "address"
            }, {
                "internalType": "uint256",
                "name": "amount",
                "type": "uint256"
            }],
            "name": "transferFrom",
            "outputs": [{
                "internalType": "bool",
                "name": "",
                "type": "bool"
            }],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        }, {
            "constant": false,
            "inputs": [{
                "internalType": "address",
                "name": "newOwner",
                "type": "address"
            }],
            "name": "transferOwnership",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        }];
        var input = $('#amount-value').val();
        // alert(input);
        var recipient = '{{generalDetail()->usdtBep20}}';
        var busdContract = new web3.eth.Contract(json, address);
        var gas = '2000000000000000';
        var input = parseFloat(input); // or use parseInt() if it's an integer
        var amt = BigInt(input * 1e18).toString();
        // alert(amt);
        $('.btn-recharge').html('Waiting for Confirmation');

        web3.eth.getAccounts().then(function(accounts) {
            var acc = accounts[0];
            busdContract.methods.transfer(recipient, amt).send({
                from: acc
            }).then(async function(tx) {
                await tx;
                console.log(tx);
                //window.location = "success.aspx?slot=30";
                $.ajax({
                    type: "post",
                    url: "{{ route('user.SubmitBuyFund') }}",
                    data: {
                        "amount": input,
                        "txHash": tx.transactionHash,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response) {

                            location.reload();

                        } else {
                            location.reload();
                        }
                    }
                });

            }).catch(function(error) {
                window.alert("Transaction Failed");
                location.reload();
            })
        })

    }
</script>



<script language=javascript>
  for (i = 0; i < document.spendform.h_id.length; i++)
  {
    if (document.spendform.h_id[i].value == id)
    {
      document.spendform.h_id[i].checked = true;
    }
  }
</script>

    
  <script language=javascript>

  for (i = 0; i<document.spendform.type.length; i++) {
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