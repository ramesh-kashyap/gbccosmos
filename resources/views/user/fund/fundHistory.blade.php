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
                    <h1 class="uk-heading-line">Deposit History</h1>
                </header>
                <form action="{{ route('user.fundHistory') }}" method="GET" name="opts">

<!-- Form Grid with Flexbox for better alignment -->
<div class="uk-grid-medium uk-flex-middle uk-flex-start uk-grid" uk-grid="">

    <!-- Form Control 1: Select Dropdown -->
    <div class="uk-form-controls"> 
        <select name="type" class="uk-input form-control" onchange="window.location.href = this.value;">
            <option value="">Select History</option>
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

        <a href="{{ route('user.fundHistory') }}" 
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
													 <th class="table__th">Sr No</th>
													 <th class="table__th">Amount</th>
                                                     <th class="table__th">  UTR Number</th>
													 <th class="table__th">Request Date</th>
                                                     <th class="table__th">Status</th>

												  </tr>
											   </thead>
											   <tbody>
                                               <?php if(is_array($level_income) || is_object($level_income)){ ?>

<?php $cnt =$level_income->perPage() * ($level_income->currentPage() - 1); ?>
@foreach($level_income as $value)
<tr>
                                    <td>
                                        <div ><?= $cnt += 1?></div>
                                    </td>

                                    <td>
                                        <div >{{currency()}} {{$value->amount}}</div>
                                    </td>

                                    

    
                                    <td>
                                        <div >{{$value->txn_no}}</div>
                                    </td>

                                    <td>
                                        <div >{{date("D, d M Y h:i:s a", strtotime($value->created_at));}}</div>
                                    </td>

                                    <td>
                                        <div > <span
                                        class="badge badge-{{($value->status=='Approved')?'success':'danger'}}">{{$value->status}}</span></div>
                                    </td>
                                

    
                                </tr>
                            @endforeach
    
                            <?php }?>

											     
											   </tbody>
											</table>
                                            <br>
                                            {{ $level_income->withQueryString()->links() }}

											</div>
											
                                        </div>
                                    </div>
                                </div>
                                                    </div>
                        
                        
                    </div>

                </figure>





</div>
</main>
<!-- Custom inline CSS for responsive design -->
<style>
/* Style for buttons */


</style>

