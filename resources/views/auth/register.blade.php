<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>{{siteName()}}</title>

    <script src="{{asset('')}}assets//js/modernizr-f5732a00c247.js"></script>
    <style>
        .s1358ab99f8858f3e306 {
            background: #050d1e;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1501;
            width: 100%;
            height: 100%;
            height: 100vh;
            opacity: 1;
        }

        .s1358ab99f8858f3e306.ready {
            opacity: 0;
            top: -100%;
            top: -100vh;
            transition: opacity 0.15s 0.2s linear, top 0s 0.7s;
        }

        .s1358ab99f8858f3e306.ready .s9f6dad57bc874381e76 {
            opacity: 0;
            transition: opacity 0.2s linear;
        }

        .s9f6dad57bc874381e76 {
            position: absolute;
            width: 80px;
            height: 80px;
            left: 50%;
            top: 50%;
            margin-left: -40px;
            margin-top: -40px;
            -webkit-transform: rotate(45deg) translate3d(0, 0, 0);
            transform: rotate(45deg) translate3d(0, 0, 0);
            -webkit-animation: loader 1.2s infinite ease-in-out;
            animation: loader 1.2s infinite ease-in-out;
        }

        .s9f6dad57bc874381e76 span {
            position: absolute;
            display: block;
            width: 40px;
            height: 40px;
            background-color: #f7ef9e;
            -webkit-animation: loaderBlock 1.2s infinite ease-in-out both;
            animation: loaderBlock 1.2s infinite ease-in-out both;
        }

        .s9f6dad57bc874381e76 span:nth-child(1) {
            top: 0;
            left: 0;
        }

        .s9f6dad57bc874381e76 span:nth-child(2) {
            top: 0;
            right: 0;
            -webkit-animation: loaderBlockInverse 1.2s infinite ease-in-out both;
            animation: loaderBlockInverse 1.2s infinite ease-in-out both;
        }

        .s9f6dad57bc874381e76 span:nth-child(3) {
            bottom: 0;
            left: 0;
            -webkit-animation: loaderBlockInverse 1.2s infinite ease-in-out both;
            animation: loaderBlockInverse 1.2s infinite ease-in-out both;
        }

        .s9f6dad57bc874381e76 span:nth-child(4) {
            bottom: 0;
            right: 0;
        }

        @keyframes loader {

            0%,
            10%,
            100% {
                width: 80px;
                height: 80px;
            }

            65% {
                width: 150px;
                height: 150px;
            }
        }

        @keyframes loaderBlock {

            0%,
            30% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            55% {
                background-color: #fffffc;
            }

            100% {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
            }
        }

        @keyframes loaderBlockInverse {

            0%,
            20% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            55% {
                background-color: #fffffc;
            }

            100% {
                -webkit-transform: rotate(-90deg);
                transform: rotate(-90deg);
            }
        }

        .responsive-logo {
                    margin-top: 20px;
            width: 231px;
            max-width: 100%;
            height: auto;
            display: block;
        }

/* Responsive Design for mobile */
        @media (max-width: 768px) {
            .responsive-logo {
                width: 83%;
                max-width: 160px;
                margin-top: -15px;

            }
        }

    </style>
    <link rel="icon" href="{{asset('')}}assets//img/favicon.png" />
</head>

<body class="body" style="overflow-x: hidden !important">
    <div class="s1358ab99f8858f3e306" id="preloader">
        <div class="s9f6dad57bc874381e76">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="s89ed8b319c0944ab115" id="js-outer">
        <div class="page sf2126f09ef2880e6c49">
            <div class="outer__body">
                <div class="s2eaa6c5f22e2bee70bc" id="js-control-panel">
                    <div class="s4028cc25a74f8af38bf">
                        <div class="s8ee82f6a5e1ab59b645">
                            <div class="s810ab62c54740cd9705">
                                <div class="s26a3f56d59811ed1db0">
                                    <div class="s34b1f5c5ed748488792">
                                    <a href="{{ route('Index') }}" class=" s53d13bdb71d5e83ed29 ">
                                                <img style="margin-top:6px;" src="{{ asset('massets/img/logo/logo-white.png') }}" alt="Logo"
                                                    class="responsive-logo">
                                            </a>
                                    </div>
                                    <div class="sb395a6d4de39364d003">
                                        <button class="s47286ec85d779e402ab control-panel__burger js-main-burger">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="se5e25fa1fdaceeef360">
                                    <div class="sc82330a9d2e5c2fc209">
                                    <a href="{{ route('Index') }}" class=" s53d13bdb71d5e83ed29 ">
                                                <img src="{{ asset('massets/img/logo/logo-white.png') }}" alt="Logo"
                                                    class="responsive-logo">
                                            </a>
                                    </div>
                                    <div class="s228283ec544c464aade">
                                        <div class="s4c8118ff52454be8a1a s6669431eca75bae510d">
                                            <div class="s810fbcee983b892f2b8">
                                                <a href="{{route('about-us')}}" class="s853cd858d50683c0e00 js-link"
                                                    data-ajax>
                                                    About
                                                </a>
                                                <a href="{{route('team')}}" class="s853cd858d50683c0e00 js-link"
                                                    data-ajax>
                                                    Investors
                                                </a>
                                                <a href="{{route('tutorial')}}" class="s853cd858d50683c0e00 js-link"
                                                    data-ajax>
                                                    Partners
                                                </a>
                                                <a href="{{route('term-candition')}}"
                                                    class="s853cd858d50683c0e00 js-link" data-ajax>
                                                    Rules
                                                </a>
                                                <a href="{{route('faq')}}" class="s853cd858d50683c0e00 js-link"
                                                    data-ajax>
                                                    FAQ
                                                </a>
                                                <a href="{{route('contact-us')}}" class="s853cd858d50683c0e00 js-link"
                                                    data-ajax>
                                                    Contacts
                                                </a>
                                                <a href="{{route('login')}}"
                                                    class="s853cd858d50683c0e00 s3a629c67ad4fb191b43" data-ajax>
                                                    Log in
                                                </a>
                                                <a href="{{route('register')}}"
                                                    class="s853cd858d50683c0e00 s3a629c67ad4fb191b43" data-ajax>
                                                    Sign up
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s858a46b8e313846c9a2">
                                        <div class="control-btns-group s8182028d7906313f23c">
                                            
                                            <a href="{{route('login')}}"
                                                class="s33127ef4acbf82b3964 s74f63b5ee420d3b520f s6702e95f7365a368406"
                                                data-ajax>
                                                Log in
                                            </a>
                                            <a href="{{route('register')}}"
                                                class="s33127ef4acbf82b3964 sbeff0940880ae426f28 s6702e95f7365a368406"
                                                data-ajax>
                                                Sign up
                                            </a>
                                        </div>
                                    </div>
                                    <div class="s5908246332eb037a586">
                                        <button
                                            class="s86ddb74699f506d1ea0 control-btns-group__close-btn js-main-burger"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sf4f625148df40a9b356">
                    <div class="s8ee82f6a5e1ab59b645">
                        <div class="s4286b16b623e4d35d73">
                            <div class="s8dbaf18de438fbf6694"></div>
                        </div>
                        <div class="s2683b5814bb5ef8310e">
                            <form name="signup_form" method="post" action="{{route('registers')}}"
                                class="log-form sb5728db9063b5d08f0a" autocomplete="off" >
								{{ csrf_field() }}

                                @php
    $sponsor = @$_GET['ref'];
@endphp
                                <div class="log-form__inner">
                                    <div class="s80ad67c7161f67c1dff">
                                        <div class="s39fa6b98e5279296e3a">
                                            <div class="s71134aef7072f13d68c log-form__third-title">
                                                Create <b>an Account</b>
                                            </div>
                                        </div>
                                        <div class="s98fda4ac6c62c0c6fc5">
                                            <div class="sec2c04fd5b8fe7b70da">
                                                or
                                                <a href="{{route('login')}}" data-ajax>Log in</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s2528b43b7267613ead4">
                                        <div class="s8ee82f6a5e1ab59b645">
                                            <div class="s4c32c27a70b9038f904">
                                            <div class="s0037c69eb4b84fb6277"> 
    <label for=""
        class="s946795edf26ee7709c9 scdf91f4cb2842256173 log-form__form-label">
        Username
    </label>
    <div class="s64ff7ecb96725b6565e s4bdbd13174f2fcb29c4 log-form__form-group">
        <span class="s6f66d945fe4083856ba">
            <i class="seb0b4ac79a5f85af139"></i>
        </span>
        <input type="text" id="referral_id"
            name="sponsor" value="" data-response="sponsor_res"
            class="s3ed15a1c01ac7e45c1d log-form__form-control form-control" />
        <span id="sponsor_res"></span>
    </div> 
</div>
                                            </div>
                                            <div class="s4c32c27a70b9038f904">
                                                <div class="s0037c69eb4b84fb6277">
                                                    <label for=""
                                                        class="s946795edf26ee7709c9 scdf91f4cb2842256173 log-form__form-label">
                                                        Name
                                                    </label>
                                                    <div
                                                        class="s64ff7ecb96725b6565e s4bdbd13174f2fcb29c4 log-form__form-group">
                                                        <span class="s6f66d945fe4083856ba">
                                                        <i class="seb0b4ac79a5f85af139"></i>
                                                        </span>
                                                        <input type="text" value="" name=name value='' placeholder="Full Name"
                                                            class="s3ed15a1c01ac7e45c1d log-form__form-control"
                                                            >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="s0037c69eb4b84fb6277">
                                            <label for=""
                                                class="s946795edf26ee7709c9 scdf91f4cb2842256173 log-form__form-label">
                                                Email address
                                            </label>
                                            <div class="s64ff7ecb96725b6565e s4bdbd13174f2fcb29c4 log-form__form-group">
                                                <span class="s6f66d945fe4083856ba">
                                                    <i class="s7c8d644d7253d186492"></i>
                                                </span>
                                                <input type="text" id="signup_form_email" name=email value="" placeholder="Your Email"
                                                
                                                    class="s3ed15a1c01ac7e45c1d log-form__form-control form-control" />
                                            </div>
                                        </div>
                                        <div class="s8ee82f6a5e1ab59b645">
                                            <div class="s0d1fe773830c3551060">
                                                <div class="s0037c69eb4b84fb6277">
                                                    <label for=""
                                                        class="s946795edf26ee7709c9 scdf91f4cb2842256173 log-form__form-label">
                                                         Password
                                                    </label>
                                                    <div
                                                        class="s64ff7ecb96725b6565e s4bdbd13174f2fcb29c4 log-form__form-group">
                                                        <span class="s6f66d945fe4083856ba">
                                                            <i class="sfec9ff44998cd39428c"></i>
                                                        </span>
                                                        <input type="password" id="signup_form_password_first"
                                                            name=password value="" placeholder="Your Password"
                                                            class="s3ed15a1c01ac7e45c1d log-form__form-control form-control"
                                                            />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="s0d1fe773830c3551060">
                                                <div class="s0037c69eb4b84fb6277">
                                                    <label for=""
                                                        class="s946795edf26ee7709c9 scdf91f4cb2842256173 log-form__form-label">
                                                        Retype Password
                                                    </label>
                                                    <div
                                                        class="s64ff7ecb96725b6565e s4bdbd13174f2fcb29c4 log-form__form-group">
                                                        <span class="s6f66d945fe4083856ba">
                                                            <i class="sfec9ff44998cd39428c"></i>
                                                        </span>
                                                        <input type="password" id="signup_form_password_second"
                                                           name=password_confirmation value="" placeholder="Confirm Password"
                                                            class="s3ed15a1c01ac7e45c1d log-form__form-control form-control"
                                                            />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="check-row se932c4dda862a483513">
                                            <input type="checkbox" id="rules" class="s7452b19a4b531f8c10f" checked
                                                required />
                                            <label for="rules" class="sefdffb247abdbdc2abb">
                                                By clicking Register, you agree to
                                                <a href="{{route('term-candition')}}" data-ajax>
                                                    Terms of Service
                                                </a>
                                            </label>
                                        </div>
                                        <div class="seb5a3f38f058e5c9564">
                                            <button type="submit" id="signup_form_submit" name="signup_form[submit]"
                                                class="s33127ef4acbf82b3964 sbeff0940880ae426f28 sb2f023228505bea984c sc99682b1cb5b0e63cbe btn">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="s1dab33613abadb0cc48 s0643251b7041f81d19b">
                                <div class="se6064b19f8f79ce6a25">
                                    <div class="s33c3761b3091ae8112d sb776cf8ce854af55dc8">
                                        <a href="#" target="_blank" class="sa9b62efbc946a658b67 s0bfcd081967e1ac882a">
                                            <span class="s06c98fe1938eb74d270">
                                                <span class="s30c7c55921a92c292cf">
                                                    <span class="s2dc3968485132430838">
                                                        <i class="saa3132e9667e1e0db2b s8678425de6e020307ae"></i>
                                                    </span>
                                                </span>
                                                <span class="s481147518fd44c61fea"> Group </span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="s33c3761b3091ae8112d s0a5597b8746d7600762">
                                        <a href="#" target="_blank" class="sa9b62efbc946a658b67 s0bfcd081967e1ac882a">
                                            <span class="s06c98fe1938eb74d270">
                                                <span class="s30c7c55921a92c292cf">
                                                    <span class="s2dc3968485132430838">
                                                        <i class="saa3132e9667e1e0db2b s8678425de6e020307ae"></i>
                                                    </span>
                                                </span>
                                                <span class="s481147518fd44c61fea"> News </span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="s33c3761b3091ae8112d socials-gutter__cell--3">
                                        <a href="#" target="_blank" class="sa9b62efbc946a658b67 s0bfcd081967e1ac882a">
                                            <span class="s06c98fe1938eb74d270">
                                                <span class="s30c7c55921a92c292cf">
                                                    <span class="s2dc3968485132430838">
                                                        <i class="saa3132e9667e1e0db2b s8678425de6e020307ae"></i>
                                                    </span>
                                                </span>
                                                <span class="s481147518fd44c61fea"> Support </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @include('partials.notify')

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#js-outer" class="scroll-top-btn js-scroll-top-btn js-scroll-btn">
            <i class="sd34cbdfee3a6bf6a426 scroll-top-btn__sprite"></i>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
$(document).ready(function() {
    $('#referral_id').on('input', function() {
        var sponsor = $(this).val();
        var res_area = $(this).attr('data-response');

        // Check if the input field is not empty
        if (sponsor.length > 0) {
            $.ajax({
                type: "POST",
                url: "{{ route('getUserName') }}", // Your backend route
                data: {
                    "user_id": sponsor,
                    "_token": "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.status === 'success') {
                        // Show the user's name
                        $('#' + res_area).html(response.name).css('color', 'green').css('font-weight', '800');
                    } else {
                        // If user does not exist
                        $('#' + res_area).html("User not found!").css('color', 'red');
                    }
                },
                error: function() {
                    $('#' + res_area).html("Error fetching user").css('color', 'red');
                }
            });
        } else {
            // Clear the response area if the input field is empty
            $('#' + res_area).html('');
        }
    });
});
</script>

    <link rel="stylesheet" href="{{asset('')}}assets//css/style-f5732a00c247.css" />
    <script src="{{asset('')}}assets//js/index-f5732a00c247.js"></script>
    <script src="{{asset('')}}assets//js/ajax-f5732a00c247.js"></script>
</body>

</html>
