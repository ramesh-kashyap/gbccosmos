<style>
.flex-search-limit {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: center;
}


/* On mobile, align limit and search input side by side */
@media (max-width: 768px) {
    .flex-search-limit {
        justify-content: space-between;
    }

    /* Adjust widths on mobile view */
    .custom-select {
        flex-basis: 40%; /* Limit dropdown should take 40% width */
    }
    
    .custom-search {
        flex-basis: 55%; /* Search input takes the remaining space */
    }

    .search-reset-btns {
        width: 100%;
        text-align: left;
    }
}

/* On larger screens, keep everything in line and spaced */
@media (min-width: 768px) {
    .custom-select {
        width: auto;
    }

    .custom-search {
        width: auto;
    }

    .search-reset-btns {
        margin-left: 10px; /* Add margin to space buttons */
        display: flex;
        gap: 10px;
    }
}


    </style>
<main id="as-main-settings" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">

        <figure id="as-transactions-list" class="uk-width-expand@xl uk-first-column">
            <div class="uk-card uk-card-default uk-card-body">
                <header class="uk-heading uk-text-center">
                    <h1 class="uk-heading-line">Level Team</h1>
                </header>


           




<form action="{{ route('user.level-team') }}" method="GET" name="opts">
    <!-- Form Grid with Flexbox for better alignment -->
    <div class="uk-grid-medium uk-flex-middle uk-grid" uk-grid="">

        <!-- Form Control 1: History Select Dropdown -->
        <div class="uk-width-1-3@l uk-width-1-1@s uk-form-controls">
            <select name="type" class="uk-input form-control" onchange="window.location.href = this.value;" id="historySelect">
            <option value="{{ route('user.level-team') }}">Level Team</option>
            <option value="{{ route('user.referral-team') }}">Direct Team</option>
            </select>
        </div>

        <!-- Form Control 2: Limit Dropdown, Search Input, and Buttons -->
        <div class="uk-width-2-3@l uk-width-1-1@s uk-form-controls flex-search-limit">
       
            <!-- Search Input -->
            <div class="search-wrapper">
                <input type="text" 
                    placeholder="Search Users"
                    name="search" 
                    class="uk-input uk-text-emphasis custom-search" 
                    value="{{ @$search }}">
            </div>

            <!-- Limit Dropdown -->
            <div >
                <select name="limit" class="uk-input form-control custom-select">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>

            <!-- Buttons for search and reset -->
            <div class="uk-form-controls uk-width-auto uk-text-left search-reset-btns">
                <input type="submit" 
                    name="submit" 
                    class="uk-button uk-button-primary" 
                    value="Search" />

                <a href="{{ route('user.level-team') }}" 
                    name="reset" 
                    class="uk-button uk-button-default" 
                    value="Reset">Reset</a>
            </div>
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
													 <th class="table__th">Email</th>
                                                     <th class="table__th">Joining Date</th>
													 <th class="table__th">Level</th>
                                                     <th class="table__th">Sponsor ID</th>
                                                     <th class="table__th">Status</th>

												  </tr>
											   </thead>
											   <tbody>
                                               <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

<?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
@foreach ($direct_team as $value)
<tr>
                                    <td>
                                        <div >{{ $value->name }}</div>
                                    </td>

                                    <td>
                                        <div > {{ $value->username }}</div>
                                    </td>

                                    

    
                                    <td>
                                        <div >{{ $value->email }}</div>
                                    </td>

                                    <td>
                                        <div >{{ date('D, d M Y', strtotime($value->created_at)) }}</div>
                                    </td>

                                    <td>
                                        <div >{{$value->level - Auth::user()->level}}</div>
                                    </td>
                                    <td>
                                        <div >{{$value->sponsor_detail->username}}</div>
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