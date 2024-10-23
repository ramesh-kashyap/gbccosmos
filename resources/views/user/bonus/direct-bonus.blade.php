<style>
    /* Custom Select Dropdown */
.custom-select {
    max-width: 150px;  /* Adjust as per design */
}

/* Custom Search Input */
.custom-search {
    max-width: 250px;  /* Adjust as per design */
    width: 100%;       /* Responsive */
    margin-left: 10px; /* Gap between select and input */
}

/* Responsive adjustments for smaller screens */
@media (max-width: 400px) {
    .custom-search {
        max-width: 100%; /* Full width on small screens */
    }
    .custom-select {
        max-width: 100%; /* Full width on small screens */
    }
}

    </style>
<main id="as-main-settings" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">

        <figure id="as-transactions-list" class="uk-width-expand@xl uk-first-column">
            <div class="uk-card uk-card-default uk-card-body">
                <header class="uk-heading uk-text-center">
                    <h1 class="uk-heading-line">Direct Income</h1>
                </header>
                <form action="{{ route('user.direct-income') }}" method="GET" name="opts">
<!-- Form Grid with Flexbox for better alignment -->
<div class="uk-grid-medium uk-flex-middle uk-flex-start uk-grid" uk-grid="">

    <!-- Form Control 1: Select Dropdown -->
    <div class="uk-form-controls"> 
    <select name="type" class="uk-input form-control" onchange="window.location.href = this.value;" id="historySelect">
    <option value="{{ route('user.DepositHistory') }}">Deposit History</option>
    <option value="{{ route('user.Withdraw-History') }}">Withdraw History</option>
    <option value="{{ route('user.fundHistory') }}">Fund History</option>
    <option value="{{ route('user.direct-income') }}">Direct Income</option>
    <option value="{{ route('user.level-income') }}">Level Income</option>
    <option value="{{ route('user.royalty-bonus') }}">Royalty Income</option>
    <option value="{{ route('user.leadership-bonus') }}">Leadership Income</option>
    <option value="{{ route('user.reward-bonus') }}">Reward Income</option>
    <option value="{{ route('user.pool-bonus') }}">Pool Income</option>
</select>
    </div>

    <!-- Form Control 2: Limit Dropdown -->
    <div class="uk-form-controls" style="margin-right: 10px;">
        <select name="limit" class="uk-input form-control custom-select">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>

    <!-- Search Input with custom width and spacing -->
    <input type="text" 
           placeholder="Search Users"
           name="search" 
           class="uk-input uk-text-emphasis custom-search" 
           value="{{ @$search }}">

    <!-- Buttons aligned with margin-left for larger screens -->
    <div class="uk-form-controls uk-width-auto uk-text-left search-reset-btns">
        <input type="submit" 
               name="submit" 
               class="uk-button uk-button-primary" 
               value="Search" />

        <a href="{{ route('user.direct-income') }}" 
           name="reset" 
           class="uk-button uk-button-default" 
           value="Reset">Reset</a>
    </div>

</div>
</form>


                       
                        <div class="uk-overflow-auto uk-margin-bottom">
                                                            <div>
                                    <div class="uk-card uk-card-default uk-margin-top">
                                        <div class="as-card-no-ticket">
										<div class="table-responsive">
                                           <table class="table">
											   <thead>
												  <tr>
													 <th class="table__th">SR</th>
													 <th class="table__th">Package</th>
													 <th class="table__th"> Commission</th>
                                                     <th class="table__th">Date</th>
													 <th class="table__th">From ID</th>
                                                     <th class="table__th"> Description</th>

												  </tr>
											   </thead>
											   <tbody>
                                               <?php if(is_array($Direct_income) || is_object($Direct_income)){ ?>

<?php $cnt = $Direct_income->perPage() * ($Direct_income->currentPage() - 1); ?>
@foreach ($Direct_income as $value)
<tr>
                                    <td>
                                        <div ><?= $cnt += 1 ?></div>
                                    </td>

                                    <td>
                                        <div >{{currency()}} {{ $value->amt }}</div>
                                    </td>

                                    

    
                                    <td>
                                        <div >{{currency()}} {{ $value->comm }}</div>
                                    </td>

                                   

                                    <td>
                                        <div >{{ date('D, d M Y', strtotime($value->created_at)) }}</div>
                                    </td>
                                    
                                    <td>
                                        <div >{{ $value->rname }}</div>
                                    </td>
                                    
                                    <td>
                                        <div >{{ $value->remarks }}</div>
                                    </td>

    
                                </tr>
                            @endforeach
    
                            <?php }?>

											     
											   </tbody>
											</table>
                                            <br>
                                            {{ $Direct_income->withQueryString()->links() }}

											</div>
											
                                        </div>
                                    </div>
                                </div>
                                                    </div>
                        
                        
                    </div>

                </figure>





</div>
</main>

<script>
    // Function to select the option based on current URL
    window.onload = function() {
        var selectElement = document.getElementById('historySelect');
        var currentUrl = window.location.href;

        // Loop through each option and check if the value matches the current URL
        for (var i = 0; i < selectElement.options.length; i++) {
            if (selectElement.options[i].value === currentUrl) {
                selectElement.selectedIndex = i; // Set the matching option as selected
                break;
            }
        }
    };
</script>
