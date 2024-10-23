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
                    <h1 class="uk-heading-line">Direct Team</h1>
                </header>

         
                      

             

<form  action="{{ route('user.referral-team') }}" method="GET" name="opts">

<!-- Form Grid with Flexbox for better alignment -->
<div class="uk-grid-medium uk-flex-middle uk-flex-start uk-grid" uk-grid="">

    <!-- Form Control 1: Select Dropdown -->
    <div class="uk-form-controls"> 
        <select name="type" class="uk-input form-control" onchange="window.location.href = this.value;" id="historySelect">
            <option value="{{ route('user.level-team') }}">Level Team</option>
            <option value="{{ route('user.referral-team') }}">Direct Team</option>
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

        <a href="{{ route('user.referral-team') }}" 
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
													 <th class="table__th">Name</th>
													 <th class="table__th">User ID</th>
													 <th class="table__th">Registration date</th>
                                                     <th class="table__th">E-mail</th>
													 <th class="table__th">Package</th>
                                                     <th class="table__th">Status</th>

												  </tr>
											   </thead>
											   <tbody>
                                               <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

<?php
   date_default_timezone_set('UTC');
$cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
@foreach ($direct_team as $value)
                                    <td>
                                        <div >{{ $value->name }}</div>
                                    </td>

                                    <td>
                                        <div > {{ $value->username }}</div>
                                    </td>

                                    

    

                                    <td>
                                        <div >{{ date('D, d M Y', strtotime($value->created_at)) }}</div>
                                    </td>
                                    
                                    <td>
                                        <div >{{ $value->email }}</div>
                                    </td>

                                    <td>
                                        <div> {{currency()}} {{ $value->investment->sum('amount') }}</div>
                                    </td>
                                   
                                    <td>
                                        <div >{{ $value->active_status }}</div>
                                    </td>



    
                                </tr>
                            @endforeach
    
                            <?php }?>

											     
											   </tbody>
											</table>
                                            <br>
                                            {{ $direct_team->withQueryString()->links() }}

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