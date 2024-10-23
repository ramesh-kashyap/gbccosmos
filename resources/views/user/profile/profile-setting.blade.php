<main id="as-main-settings" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">
        <div class="uk-grid uk-grid-stack" uk-grid="">
            <!-- Left Form -->
            <section class="uk-width-1-2@l">
                <div id="as-settings-personal" class="uk-cube-bottom-left uk-cube-figure">
                    <div class="uk-card uk-card-default uk-card-body">
                        <header class="uk-heading uk-text-center">
                            <h3 class="uk-margin-small-bottom">Personal Information</h3>
                        </header>
                        <form action="{{route('user.update-profile')}}" method="post" name="editform">
                            {{ csrf_field() }}
                            <!-- Name Input -->
                            <div class="uk-margin-small-top uk-margin-bottom">
                                <label class="uk-form-label" for="as-form-user">Name</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-text-emphasis" type="text" name="name" value="{{($profile_data)?$profile_data->name:''}}">
                                </div>
                            </div>
                            <!-- Email Input -->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="as-form-email">Your Email address</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-text-emphasis" type="email" name="email" value="{{($profile_data)?$profile_data->email:''}}">
                                </div>
                            </div>
                            <!-- Phone Input -->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="as-form-phone">Phone</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-text-emphasis" type="text" name="phone" value="{{($profile_data)?$profile_data->phone:''}}">
                                </div>
                            </div>
                            <!-- Save Changes Button -->
                            <button class="uk-button uk-button-primary uk-button-large" type="submit">Save Changes</button>
                        </form>
                    </div>
                    @include('partials.notify')

                </div>
            </section>

            <!-- Right Form -->
           
        </div>
    </div>
</main>
