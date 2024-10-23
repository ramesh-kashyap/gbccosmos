<main id="as-main-settings" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">



        <script language="javascript">
            function IsNumeric(sText) {
                var ValidChars = "0123456789.";
                var IsNumber = true;
                var Char;
                if (sText == '') return false;
                for (i = 0; i < sText.length && IsNumber == true; i++) {
                    Char = sText.charAt(i);
                    if (ValidChars.indexOf(Char) == -1) {
                        IsNumber = false;
                    }
                }
                return IsNumber;
            }

            function checkform() {






                for (i in document.editform.elements) {
                    f = document.editform.elements[i];
                    if (f.name && f.name.match(/^pay_account/)) {
                        if (f.value == '') continue;
                        var notice = f.getAttribute('data-validate-notice');
                        var invalid = 0;
                        if (f.getAttribute('data-validate') == 'regexp') {
                            var re = new RegExp(f.getAttribute('data-validate-regexp'));
                            if (!f.value.match(re)) {
                                invalid = 1;
                            }
                        } else if (f.getAttribute('data-validate') == 'email') {
                            var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                            if (!f.value.match(re)) {
                                invalid = 1;
                            }
                        }
                        if (invalid) {
                            alert('Invalid account format. Expected ' + notice);
                            f.focus();
                            return false;
                        }
                    }
                }

                return true;
            }

        </script>








        <form action="{{route('user.update-password')}}" method="post" name="editform">
            {{ csrf_field() }}
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
            @endforeach
            @endif
            <div class="uk-grid uk-grid-stack" uk-grid="">
                <section class="uk-width-1-2@xl uk-first-column">

                    <div class="uk-child-width-1-2@l uk-child-width-1-1@xl uk-grid uk-grid-stack" uk-grid="">
                        <div class="uk-first-column">

                            <div id="as-settings-personal" class="uk-cube-bottom-left uk-cube-figure">
                                <div class="uk-card uk-card-default uk-card-body">
                                  


                                    <div class="uk-margin-small-top uk-margin-bottom">
                                        <div class="uk-form-controls">
                                            <figure class="uk-form-controls-figure">
                                                <img src="{{asset('')}}massets/img/icon/form/user.svg" width="60"
                                                    height="60" loading="lazy" alt="icon">
                                            </figure>
                                            <input class="uk-input uk-text-emphasis" type="text" placeholder="One time password"
                                            name="code">
                                        </div>
                                    </div>
                                  

                                  



                                    <button class="uk-button uk-button-primary uk-button-large" type="submit">
                                    Submit
                                        <img class="uk-visible@s"
                                            src="{{asset('')}}massets/img/icon/form/save-changes.svg" width="36"
                                            height="36" loading="lazy" alt="icon">
                                    </button>


                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
        </form>

    </div>

    @include('partials.notify')

</main>
