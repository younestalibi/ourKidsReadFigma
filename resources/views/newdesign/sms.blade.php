<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Kids Read: Sparking the Joy of Reading in Low-Income Communities</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundel.css')}}">
    <!-- <link rel="stylesheet" href="stylesecond.css"> -->
    <!-- <link rel="stylesheet" href="boostrap.css"> -->
    <style>
        body {
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .p-text {
            font-size: 14px;
            line-height: 23px;
        }

        .policy-container {
            text-align: justify;
            margin: 0 auto;
            margin-bottom: 100px;
            padding: 20px;
        }

        @media (max-width: 1023px) {
            .policy-container {
                padding-left: 4.8rem;
                padding-right: 4.8rem;
            }
        }

        .policy-container {
            padding-left: 6.4rem;
            padding-right: 6.4rem;
        }

        @media (max-width: 1023px) {
            .policy-container {
                padding-left: 4.8rem;
                padding-right: 4.8rem;
            }
        }

        .policy-container {
            padding-left: 6.4rem;
            padding-right: 6.4rem;
        }

        h1 {
            margin-top: 0;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="wrapper">


        <header class="header js-header ">

            <div class="shell header__shell">

                <a href="{{ route('home') }}" class="logo">

                    <img src="{{ asset('new/assets/images/logo.svg  ')}}  " alt="">

                </a>



                <div class="header__bar">
                    <nav class="nav-secondary">
                        <ul>
                            <li>
                                <a href="{{ route('free_book_festivals') }}">
                                    Free Book Festivals
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('newsletter_24_feb') }}">
                                    <i class="ico-arrow-right"></i>
                                    Newsletter
                                </a>
                            </li>
                            <li>
                                <a href="/reading-buddies">
                                    <i class="ico-arrow-right"></i>
                                    Reading Buddies
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('volunteer') }}">
                                    <i class="ico-arrow-right"></i>
                                    Volunteer
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}">
                                    <i class="ico-arrow-right"></i>
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact_us') }}">
                                    <i class="ico-arrow-right"></i>
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </nav><!-- /.nav-secondary -->

                    <nav class="nav">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">
                                    <i class="ico-arrow-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">
                                    <i class="ico-arrow-right"></i>
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('mission') }}">
                                    <i class="ico-arrow-right"></i>
                                    Mission
                                </a>
                            </li>
                            <!--<li>-->
                            <!--    <a href="{{ route('book_collection') }}">-->
                            <!--        <i class="ico-arrow-right"></i>-->
                            <!--        Book Collections-->
                            <!--    </a>-->

                            <!--</li>-->
                            <li>
                                <a href="{{ route('succes_stories') }}">
                                    <i class="ico-arrow-right"></i>
                                    Success Stories
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('sponsors') }}">
                                    <i class="ico-arrow-right"></i>
                                    Sponsors
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('new_letter_sign_up') }}">
                                    <i class="ico-arrow-right"></i>
                                    Newsletter Sign-up
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('donate_now') }}">Donate Now</a>
                            </li>

                        </ul>

                    </nav><!-- /.nav -->

                </div>



                <div class="nav-toggle js-nav-mobile">

                    <span></span>



                    <span></span>



                    <span></span>

                </div><!-- /.nav-toggle -->

            </div><!-- /.shell -->

        </header><!-- /.header -->

        <main class="main">
            <div class="success-stories">
                <div class="privacy-policy__head">
                    <div class="shell">
                        <h1>Privacy Policy</h1>
                    </div><!-- /.shell -->
                </div><!-- /.privacy-policy__head -->
                <div class="policy-container">
                    <p><strong>Data</strong></p>
                    <p class="p-text">We collect personal and activity data, which may be linked. We use technologies like cookies (small files stored on your browser), web beacons, or unique device identifiers to identify your computer or device so we can deliver a better experience. Our systems also log information like your browser, operating system, and IP address.</p>
                    <p class="p-text">We also may collect personally identifiable information that you provide to us, such as your name, address, phone number, or email address. With your permission, we may also access other personal information on your device, such as your phone book, calendar, or messages, in order to provide services to you. If authorized by you, we may also access profile and other information from services like Facebook.</p>
                    <p class="p-text">Our systems may associate this personal information with your activities in the course of providing service to you (such as pages you view or things you click on or search for).</p>
                    <p class="p-text">We do not knowingly contact or collect personal information from children under 13. If you believe we have inadvertently collected such information, please contact us so we can promptly obtain parental consent or remove the information.</p>

                    <p><strong>Location</strong></p>
                    <p class="p-text">We may collect and share anonymous location data. To customize our service for you, we and our partners may collect, use, and share precise location data, including the real-time geographic location of your computer or device. This location data is collected anonymously in a form that does not personally identify you and is used only to provide and improve our service. We may obtain your consent on your first use of the service.</p>

                    <p><strong>Access</strong></p>
                    <p class="p-text">You can request to see or delete your personal data. You can sign into your account to see or delete any personally identifiable information we have stored, such as your name, address, email, or phone number. You can also contact us by email to request to see or delete this information.</p>

                    <p><strong>Deletion</strong></p>
                    <p class="p-text">We may keep data indefinitely.</p>

                    <p><strong>Sharing</strong></p>
                    <p class="p-text">We may share personal data with companies we trust.</p>
                    <p class="p-text">We may share personally identifiable information (such as name, address, email, or phone) with trusted partners in order to provide you with relevant advertising, offers, or services.</p>
                    <p class="p-text">California residents are legally entitled (at no charge and no more than once annually) to request information about how we may have shared your information with others for direct marketing purposes. Contact us for this information: <a href="mailto:nathan@simpletexting.net">nathan@simpletexting.net</a>.</p>

                    <p><strong>Ad Tracking</strong></p>
                    <p class="p-text">Ad companies collect anonymous data. You can opt out. Ad companies may use and collect anonymous data about your interests to customize content and advertising here and in other sites and applications. Interest and location data may be linked to your device, but are not linked to your identity.</p>

                    <p><strong>Contact</strong></p>
                    <p class="p-text">If you have any questions or concerns about our privacy policies, please contact us: <a href="mailto:nathan@simpletexting.net">nathan@simpletexting.net</a>.</p>

                    <p><strong>Vendors</strong></p>
                    <p class="p-text">Service providers access data on our behalf. In order to serve you, we may share your personal and anonymous information with other companies, including vendors and contractors. Their use of information is limited to these purposes, and subject to agreements that require them to keep the information confidential. Our vendors provide assurance that they take reasonable steps to safeguard the data they hold on our behalf, although data security cannot be guaranteed.</p>
                    <p class="p-text">Analytics companies may access anonymous data (such as your IP address or device ID) to help us understand how our services are used. They use this data solely on our behalf. They do not share it except in aggregate form; no data is shared as to any individual user. Click to see company privacy policies that govern their use of data.</p>
                    <p class="p-text">Vendors access data on our behalf. In order to serve you, we may share your personal and anonymous information with other companies, including vendors and contractors. Their use of information is limited to these purposes, and subject to agreements that require them to keep the information confidential. Our vendors provide assurance that they take reasonable steps to safeguard the data they hold on our behalf, although data security cannot be guaranteed.</p>
                    <p class="p-text">Analytics providers access data on our behalf. Analytics companies may access anonymous data (such as your IP address or device ID) to help us understand how our services are used. They use this data solely on our behalf. They do not share it except in aggregate form; no data is shared as to any individual user. Click to see company privacy policies that govern their use of data.</p>

                    <p><strong>Special</strong></p>
                    <p class="p-text">Special situations may require disclosure of your data. To operate the service, we also may make identifiable and anonymous information available to third parties in these limited circumstances: (1) with your express consent, (2) when we have a good faith belief it is required by law, (3) when we have a good faith belief it is necessary to protect our rights or property, or (4) to any successor or purchaser in a merger, acquisition, liquidation, dissolution, or sale of assets. Your consent will not be required for disclosure in these cases, but we will attempt to notify you, to the extent permitted by law to do so.</p>

                    <p><strong>More</strong></p>
                    <p class="p-text">Our privacy policy may change from time to time. If you are a registered user of our site, you will receive notice of changes to this policy via e-mail 30 days before a new policy is published for public consumption.</p>
                </div>


            </div><!-- /.privacy-policy__body -->
    </div><!-- /.privacy-policy -->


    </main>
    <footer class="footer">
        <div class="shell">
            <div class="grid grid--align-center">
                <div class="grid__col grid__col--6of12">
                    <a href="home.html" class="logo logo--footer">
                        <img src="{{ asset('new/assets/images/svg/logo-compact.svg  ')}}" alt="">
                    </a><!-- /.logo -->

                    <div class="copyright">
                        <p>Copyright 2024 Our Kids Read</p>
                    </div><!-- /.copyright -->

                    <nav class="nav-footer">
                        <ul>
                            <!-- <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
        
                                <li>
                                    <a href="#">Terms and Conditions</a>
                                </li>-->

                            <li>
                                <a href="https://www.ourkidsread.org/contact-us">Contact Us</a>

                                <span class="hidden">Tax ID: XXXXXXXXXXXXXX</span>
                            </li>
                        </ul>
                    </nav><!-- /.nav-footer -->

                    <div class="legal">
                        <p>Our Kids Read is a Federally recognized 501c3 not-for-profit entity, Federal Tax ID # 83-3401365</p>
                    </div><!-- /.legal -->
                </div><!-- /.grid__col -->

                <div class="grid__col grid__col--6of12">
                    <div class="socials">
                        <h6>Follow us</h6>

                        <ul>
                            <li>
                                <a href="https://www.facebook.com/ourkidsreadinc">
                                    <i class="ico-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://twitter.com/ourkidsreadinc">
                                    <i class="ico-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/ourkidsreadinc">
                                    <i class="ico-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="ico-linkedin"></i>
                                </a>
                            </li>

                            <!--<li>
                                    <a href="#">
                                        <i class="ico-youtube"></i>
                                    </a>
                                </li>-->
                        </ul>
                    </div><!-- /.socials -->
                </div><!-- /.grid__col -->
            </div><!-- /.grid -->
        </div><!-- /.shell -->
    </footer><!-- /.footer -->

    <!-- Start of LiveChat (www.livechat.com) code -->


    </div>
    <!--<script src="{{ asset('frontend/js/style.js') }}"></script>-->
    <!--<script src="{{ asset('frontend/js/styletwo.js') }}"></script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://www.ourkidsreadinc.org/public/new/assets/js/bundle.js"></script>
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 16558326;;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script>
</body>

</html>