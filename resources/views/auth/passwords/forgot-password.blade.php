<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>{{siteName()}}</title>
    <script src="{{asset('')}}assets/js/modernizr-f5732a00c247.js"></script>
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
    <link rel="icon" href="{{asset('')}}assets/img/favicon.png" />
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
     
                        <form name="recovery_form" method="post" action="{{route('forgot_submit')}}"
                            class="log-form sb5728db9063b5d08f0a" >
                            {{ csrf_field() }}
                            <div class="log-form__inner">
                                <div class="s80ad67c7161f67c1dff">
                                    <div class="s39fa6b98e5279296e3a">
                                        <div class="s71134aef7072f13d68c log-form__third-title">
                                            Forgot <b>Password?</b>
                                        </div>
                                    </div>
                                    <div class="s98fda4ac6c62c0c6fc5">
                                        <div class="sec2c04fd5b8fe7b70da">
                                            or
                                            <a href="signup.html" data-ajax>Sign up</a>
                                            /
                                            <a href="login.html" data-ajax>Log in</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="s2528b43b7267613ead4">
                                    <div class="s95676c4e95e90dc5b02 s02031d7a89a80db0c2b">
                                        <div class="s37c69ae933058bb1d3d">
                                            <div class="s3ab3a2e46acfb834afa s11056a478c09c023732">
                                                <div class="sa2063eae21fc0ceae4f">
                                                    <div class="s6c115a200219fd0ceea s35c38811854923afd63">
                                                        <i class="sd4465208bbe015f5043 sac0628cedce205ef064"></i>
                                                    </div>
                                                    <div class="s02613053f46725c4217">
                                                        Enter your email address and we’ll send you instructions
                                                        to reset your password.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s0037c69eb4b84fb6277">
                                        <label for=""
                                            class="s946795edf26ee7709c9 scdf91f4cb2842256173 log-form__form-label">
                                            Username
                                        </label>
                                        <div class="s64ff7ecb96725b6565e s4bdbd13174f2fcb29c4 log-form__form-group">
                                            <span class="s6f66d945fe4083856ba">
                                                <i class="s7c8d644d7253d186492"></i>
                                            </span>
                                            <input type="text" id="recovery_form_email" name="username" value=""
                                                placeholder="Your Login"
                                                class="s3ed15a1c01ac7e45c1d log-form__form-control form-control" />
                                        </div>
                                    </div>
                                    <div class="s0037c69eb4b84fb6277">
                                        <label for=""
                                            class="s946795edf26ee7709c9 scdf91f4cb2842256173 log-form__form-label">
                                            Email
                                        </label>
                                        <div class="s64ff7ecb96725b6565e s4bdbd13174f2fcb29c4 log-form__form-group">
                                            <span class="s6f66d945fe4083856ba">
                                                <i class="s7c8d644d7253d186492"></i>
                                            </span>
                                            <input type="text" id="recovery_form_email" name="email" value="" placeholder="Enter e-mail"
                                                class="s3ed15a1c01ac7e45c1d log-form__form-control form-control" />
                                        </div>
                                    </div>
                                    <div class="s0037c69eb4b84fb6277">
                                        <label for=""
                                            class="s946795edf26ee7709c9 scdf91f4cb2842256173 log-form__form-label  log-form__form-label--footer">
                                            Enter code
                                        </label>
                                        <div class="captcha-group">
                                            <div class="s285db4d530c0328cf83">
                                                <div class="s4440a7552d699dfa413">
                                                    <div
                                                        class="s64ff7ecb96725b6565e s4bdbd13174f2fcb29c4 s565e48c4000091a9c6e">
                                                        <span class="s6f66d945fe4083856ba">
                                                            <i class="s5dc8dec092e5b1b0886"></i>
                                                        </span>
                                                        <input type="text" name="captcha" value="" placeholder="Enter Captcha"
                                                            class="s3ed15a1c01ac7e45c1d captcha-group__form-control">
                                                    </div>
                                                </div>
                                                <div class="s976a3ba93b02aec37c0">
                                                    <img
                                                        src="data:image/jpeg;base64,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">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s0037c69eb4b84fb6277">
                                        <label style="max-width:630px;width:100%;"  for=""
                                            class="s946795edf26ee7709c9 scdf91f4cb2842256173 log-form__form-label">
                                           
                           @php
                                                $captcha = getCustomCaptcha($height = 46, $width = '100%', $bgcolor = '#003');
                                                @endphp 

                                              @php echo  $captcha @endphp
                                            @if(reCaptcha())
                                            @php echo reCAPTCHA(); @endphp
                                            @endif

                                        </label>
                                       
                                    </div>
                                    <div class="seb5a3f38f058e5c9564">
                                        <button type="submit" id="recovery_form_submit"
                                            class="s33127ef4acbf82b3964 sbeff0940880ae426f28 sb2f023228505bea984c sc99682b1cb5b0e63cbe btn">Reset
                                            password</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="s1dab33613abadb0cc48 s0643251b7041f81d19b">
                            <div class="se6064b19f8f79ce6a25">
                                <div class="s33c3761b3091ae8112d sb776cf8ce854af55dc8">
                                    <a href="https://t.me/santera_group" target="_blank"
                                        class="sa9b62efbc946a658b67 s0bfcd081967e1ac882a">
                                        <span class="s06c98fe1938eb74d270">
                                            <span class="s30c7c55921a92c292cf">
                                                <span class="s2dc3968485132430838">
                                                    <i class="saa3132e9667e1e0db2b s8678425de6e020307ae"></i>
                                                </span>
                                            </span>
                                            <span class="s481147518fd44c61fea">
                                                Group
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="s33c3761b3091ae8112d s0a5597b8746d7600762">
                                    <a href="https://t.me/santera_channel" target="_blank"
                                        class="sa9b62efbc946a658b67 s0bfcd081967e1ac882a">
                                        <span class="s06c98fe1938eb74d270">
                                            <span class="s30c7c55921a92c292cf">
                                                <span class="s2dc3968485132430838">
                                                    <i class="saa3132e9667e1e0db2b s8678425de6e020307ae"></i>
                                                </span>
                                            </span>
                                            <span class="s481147518fd44c61fea">
                                                News
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="s33c3761b3091ae8112d socials-gutter__cell--3">
                                    <a href="https://t.me/santera_Support" target="_blank"
                                        class="sa9b62efbc946a658b67 s0bfcd081967e1ac882a">
                                        <span class="s06c98fe1938eb74d270">
                                            <span class="s30c7c55921a92c292cf">
                                                <span class="s2dc3968485132430838">
                                                    <i class="saa3132e9667e1e0db2b s8678425de6e020307ae"></i>
                                                </span>
                                            </span>
                                            <span class="s481147518fd44c61fea">
                                                Support
                                            </span>
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
    <link rel="stylesheet" href="{{asset('')}}assets/css/style-f5732a00c247.css">
    <script src="{{asset('')}}assets/js/index-f5732a00c247.js"></script>
    <script src="{{asset('')}}assets/js/ajax-f5732a00c247.js"></script>
</body>

</html>
