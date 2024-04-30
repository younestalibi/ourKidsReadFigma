<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">-->

    <title>Our Kids Read: Sparking the Joy of Reading in Low-Income Communities</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundel.css') }}">

    <style>
        body {
            background-color: #bfe9e1 !important;
        }

        .header__shell {
            align-items: center !important;
        }

        .header__bar {
            height: 80px;
            font-size: 3rem;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .tab {
            overflow: hidden;
            background-color: #f1f1f1;
        }

        .tabcontent {
            padding: 12px;
        }

        .tabcontent>p {
            margin-bottom: 50px;
        }

        /* Style the buttons inside the tab */
        button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 12px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        button:hover {
            background-color: #004750;
            color: #ffffff;
        }

        /* Create an active/current tablink class */
        button.active {
            background-color: #004750;
            color: #ffffff;
        }

        .element {
            position: relative;
            width: 45%;
            padding: 30px;
        }

        .element span {
            position: absolute;
            top: -30px;
            left: 40%;
            border-radius: 50%;
            background-color: #a7dcd1;
            padding: 10px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }

        .element img {
            width: 30px;
            height: 30px;
        }

        .tabcontent .element {
            border: 1px solid #9DC8C0;
            border-style: dashed;
        }

        .validation_err {
            color: red;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('error'))
    <script>
        Swal.fire({
            title: 'User Not Found!',
            text: @json(session('error')),
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
    @endif

    <!--@if(session('alert'))-->
    <!--<div class="alert alert-success">-->
    <!--    {{ session('alert') }}-->
    <!--</div>-->

    <!--    <div id="myModal" class="modal">-->
    <!--      <div class="modal-content">-->
    <!--        <span class="close">&times;</span>-->
    <!--        <p id="alertMessage">{{ session('alert') }}</p>-->
    <!--      </div>-->
    <!--    </div>-->



    <!--@endif-->

    <header class="header js-header ">

        <div class="shell header__shell">

            {{--<a href="{{ route('home') }}" class="logo">--}}
            <a href="" class="logo">

                <img src="{{ asset('new/assets/images/logo.svg  ')}}  " alt="">

            </a>


            <div class="header__bar">
                <nav class="nav-secondary">
                    <ul>
                        <li>
                            {{--<a href="{{ route('free_book_festivals') }}">--}}
                            <a href="">
                                Free Book Festivals
                            </a>
                        </li>
                        <li>
                            {{--<a href="{{ route('newsletter_24_feb') }}">--}}
                            <a href="">
                                <i class="ico-arrow-right"></i>
                                Newsletter
                            </a>
                        </li>
                        <li>
                            <a href="/reading-portal">
                                <i class="ico-arrow-right"></i>
                                Reading Portal
                            </a>
                        </li>

                        <li>
                            {{--<a href="{{ route('volunteer') }}">--}}
                            <a href="">
                                <i class="ico-arrow-right"></i>
                                Volunteer
                            </a>
                        </li>
                        <li>
                            {{--<a href="{{ route('faq') }}">--}}
                            <a href="">
                                <i class="ico-arrow-right"></i>
                                FAQ
                            </a>
                        </li>
                        <li>
                            {{--<a href="{{ route('contact_us') }}">--}}
                            <a href=" ">
                                <i class="ico-arrow-right"></i>
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav><!-- /.nav-secondary -->

                <nav class="nav">
                    <ul>
                        <li>
                            {{--<a href="{{ route('home') }}">--}}
                            <a href=" ">
                                <i class="ico-arrow-right"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href=" ">
                                {{--<a href="{{ route('about') }}">--}}
                                <i class="ico-arrow-right"></i>
                                About
                            </a>
                        </li>
                        <li>
                            <a href=" ">
                                {{--<a href="{{ route('mission') }}">--}}
                                <i class="ico-arrow-right"></i>
                                Mission
                            </a>
                        </li>

                        <li>
                            <a href="">
                                {{--<a href="{{ route('succes_stories') }}">--}}
                                <i class="ico-arrow-right"></i>
                                Success Stories
                            </a>
                        </li>
                        <li>
                            <a href="">
                                {{--<a href="{{ route('sponsors') }}">--}}
                                <i class="ico-arrow-right"></i>
                                Sponsors
                            </a>
                        </li>
                        <li>
                            <a href="">
                                {{--<a href="{{ route('new_letter_sign_up') }}">--}}
                                <i class="ico-arrow-right"></i>
                                Newsletter Sign-up
                            </a>
                        </li>
                        <li>
                            {{-- <ahref="route('donate_now') --}}
                            <a href=" ">Donate Now</a>
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

    </header>
    <div class="main">
        <div class="section-forms">
            <div class="shell">
                <div class="section__inner">
                    <div class="section__content">
                        <h1 class="section__title">
                            OKR READING PORTAL

                        </h1><!-- /.section__title -->

                        <div style="display: flex; flex-direction: column">
                            <div>
                                <button class="tablinks" onclick="openCity(event, 'Overview')" id="defaultOpen">Overview</button>
                                <button class="tablinks" onclick="openCity(event, 'Eligibility')">Eligibility</button>
                                <button class="tablinks" onclick="openCity(event, 'Onboarding_process')">Onboarding Process</button>
                            </div>
                            <div id="Overview" class="tabcontent">
                                <p>Our Reading Portal is a unique online resource for children, teens and adults. The Reading Rortal allows</p>

                                <div style="display: flex; flex-wrap: wrap; gap: 40px 20px; justify-content: space-evenly">
                                    <div class="element">
                                        <span><img src="{{ asset('new/assets/images/reading-portal/social-media.png ')}} " alt="" /></span>
                                        <p>K-5th Grade Students to Connect with reading mentors (their "Reading Buddy") online</p>
                                    </div>
                                    <div class="element">
                                        <span><img src="{{ asset('new/assets/images/reading-portal/console.png ')}} " alt="" /></span>
                                        <p>Play vocabulary-building and other fun literacy games</p>
                                    </div>
                                    <div class="element">
                                        <span><img src="{{ asset('new/assets/images/reading-portal/book_1.png ')}} " alt="" /></span>
                                        <p>Subscription to the Free Physical Book Program (limited spots available)</p>
                                    </div>
                                    <div class="element">
                                        <span><img src="{{ asset('new/assets/images/reading-portal/book_2.png ')}} " alt="" /></span>
                                        <p>Unlimited access to the Reading Portal FREE ONLINE BOOK collection</p>
                                    </div>
                                </div>
                            </div>

                            <div id="Eligibility" class="tabcontent">

                                <p style="margin-bottom:10px!important;">
                                
                                
                                
                                
                                The following are eligibility requirements for the Our Kids Read Reading Buddies program:</p>
<p style="margin-bottom:10px!important;margin-top:10px!important">
<b>For Reading Buddies (adults/high school students):</b></p>
<ul>
<li>a PC or Mac with a functioning camera and microphone</li>
<li>45 minutes once per week between 4:30 PM EST and 7:45 PM EST to read with a K-5th grade student</li>
<li>ability to pass a criminal background screening</li>
<li>willingness to complete the Reading Buddy training process</li>
<li>a positive, nurturing, fun attitude!</li>
</ul>
<p style="margin-bottom:10px!important;margin-top:10px!important">
<b>For Elementary School participants:</b>
</p>
<ul>
<li>a PC or Mac with a functioning camera and microphone</li>
<li>45 minutes once per week between 4:30 PM EST and 7:45 PM EST to read with their Reading Buddy</li>
<li>willingness to participate in a 30-minute on-boarding session</li>
<li>complete the Reading Buddy program registration process</li>
               </ul>                 
                                
                                
                            </div>

                            <div id="Onboarding_process" class="tabcontent">

                                <p style="margin-bottom:10px!important;">
                                
                                The onboarding process for adult/high school Reading Buddies and the students they serve is outlined below.
</p>
<p style="margin-bottom:10px!important;margin-top:10px!important">
<b>For Reading Buddies (adults/high school students):</b></p>
<ul>
<li>complete the online registration process</li>
<li>participate in a 30-minute onboarding video interview (camera-on)</li>
<li>successfully complete a criminal background check</li>
<li>complete a review of the Our Kids Read training videos</li>

</ul>
<p style="margin-bottom:10px!important;margin-top:10px!important">
<b>For Elementary School participants:</b>
</p>
<ul>
<li>complete the online registration process</li>
<li>participate in a 30-minute orientation video interview (camera-on)</li>
<li>successfully complete a technology check to confirm that the PC or Mac being used meets minimum technical requirements</li>

               </ul>                 
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                        </div>
                    </div><!-- /.section__content -->

                    <div class="section__form">
                        <div class="form form--alt form--contact">


                            <!--newslettersignup_info-->


                            <form action="{{ route('reading-portal-register') }}" id="registration_form" method="post">
                                @csrf
                                <header class="form__head">
                                    <h4>Register to Participate in the OKR Reading Buddy Program!</h4>
                                </header><!-- /.form__head -->
                                <div class="form__body">

                                    @if(session('success'))
                                    <h3 class="alert alert-success" style="color:green">
                                        {{ session('success') }}
                                    </h3>
                                    @endif

                                    <div class="form__row">
                                        @if(isset ($error_message))
                                        <h5 class="validation" style="font-size:30px; color: red;">
                                            {{ $error_message }}
                                        </h5>
                                        @endif
                                        <label for="field-okr_student" class="form__label">I am an ...</label>

                                        <div class="form__controls">
                                            <div class="">
                                                <input type="radio" name="okr_student" id="ess" value="1" {{old("okr_student")==1 ? 'checked' : '' }} {{ optional($data1)['okr_student'] && old('okr_student', optional($data1)['okr_student']) == 1 ? 'checked' : '' }}>
                                                <label for="field-okr_student" style="font-size: 2rem; margin-bottom: 0.9rem;">Elementary School Student</label>
                                            </div>
                                            <div class="">
                                                <input type="radio" name="okr_student" id="hss" value="2" {{old("okr_student")==2 ? 'checked' : '' }} {{ old('okr_student', $data1['okr_student']) == 2 ? 'checked' : '' }}> <label for="field-okr_student" style="font-size: 2rem; margin-bottom: 0.9rem;">Adult/High School Student (Prospective Reading Buddy)</label>
                                            </div>
                                        </div><!-- /.form__controls -->
                                        <div id="val_okr_student" class="validation_err"></div>
                                    </div><!-- /.form__row -->

                                    <div class="form__row">
                                        <label for="field-fname" id='firstName' class="form__label">Parent First Name*</label>
                                        <div class="form__controls">
                                            <input type="text" class="form__field" name="fname" id="field-fname" value="{{ old('fname', $data1['user_name_first']) }}" placeholder="">
                                        </div><!-- /.form__controls -->
                                        <div id="val_fname" class="validation_err"></div>
                                    </div><!-- /.form__row -->

                                    <div class="form__row">
                                        <label for="field-lname" id="lastName" class="form__label">Parent Last Name*</label>
                                        <div class="form__controls">
                                            <input type="text" class="form__field" name="lname" id="field-lname" value="{{ old('lname', $data1['user_name_last']) }}" placeholder="">
                                        </div><!-- /.form__controls -->
                                        <div id="val_lname" class="validation_err"></div>
                                    </div><!-- /.form__row -->
                                    <div class="form__row">
                                        <label for="field-regemail" class="form__label">Email Address*</label>

                                        <div class="form__controls">
                                            <input type="email" class="form__field" name="email" id="field-regemail" value="{{ old('email', $data1['user_email']) }}" placeholder="">



                                        </div><!-- /.form__controls -->


                                        <div id="val_email" class="validation_err"></div>



                                        @error('email')
                                        <div class="validation_err">{{ $message }}</div>
                                        @enderror




                                    </div><!-- /.form__row -->

                                    <div class="form__row">



                                        <label for="field-regemail" class="form__label">Password*</label>







                                        <div class="form__controls">



                                            <input type="password" maxlength="16" class="form__field" name="password" id="field-regpassword" value="{{ old('password', $data1['user_password']) }}" placeholder="">



                                        </div><!-- /.form__controls -->

                                        <div id="val_password" class="validation_err"></div>

                                    </div><!-- /.form__row -->
                                    <div class="form__row">
                                        <label for="cfield-password" class="form__label">Confirm Password*</label>
                                        <div class="form__controls">
                                            <input type="password" maxlength="16" class="form__field" name="cpassword" id="field-cpassword" value="{{ old('password', $data1['user_password']) }}" placeholder="">
                                        </div><!-- /.form__controls -->
                                        <div id="val_cpassword" class="validation_err"></div>
                                    </div><!-- /.form__row -->
                                    
                                    <div class="form__row">
                                        <label for="field-zip" class="form__label">Zip Code*</label>
                                        <div class="form__controls">
                                            <input type="text" class="form__field" maxlength="5" name="zip" id="field-zip" value="{{ old('zip', $data1['user_profile_address_zip']) }}" placeholder="">
                                        </div><!-- /.form__controls -->
                                        <div id="val_zip" class="validation_err"></div>
                                    </div><!-- /.form__row -->
                                </div><!-- /.form__body -->
                                <div class="form__actions">
                                    <!-- <input type="button" class="btn" id="register_now" onclick="validateRegistrationForm()" name="submit" value="Submit"> -->
                                    <input type="button" id="register_now" class="form__btn btn btn--secondary" value="Submit" onclick="validateRegistrationForm()">
                                </div><!-- /.form__actions -->
                                <div>
                                    <button><a href="{{route('reading-portal-login-form')}}">Already have account?</a></button>
                                </div>

                            </form>


                            <script>
                                // Get the radio buttons
                                const elementaryRadio = document.getElementById('ess');
                                const highSchoolRadio = document.getElementById('hss');

                                const NameSpan = document.getElementById('firstName');
                                const lastSpan = document.getElementById('lastName');

                                elementaryRadio.addEventListener('change', function() {
                                    if (this.checked) {
                                        NameSpan.textContent = "Parent First Name*";
                                        lastSpan.textContent = "Parent Last Name*";
                                    }
                                });

                                highSchoolRadio.addEventListener('change', function() {
                                    if (this.checked) {
                                        NameSpan.textContent = "Reader First Name*";
                                        lastSpan.textContent = "Reader Last Name*";
                                    }
                                });
                            </script>




                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Object to store old input values
                                    let oldValues = {};

                                    // Populate form fields with old values
                                    Object.keys(oldValues).forEach(function(name) {
                                        document.getElementById('field-' + name).value = oldValues[name];
                                    });

                                    // Listen for form submission
                                    document.getElementById('registration_form').addEventListener('submit', function() {
                                        // Store form values in the oldValues object before submission
                                        document.querySelectorAll('.field').forEach(function(input) {
                                            oldValues[input.name] = input.value;
                                        });
                                        console.log('Old Input Values:', oldValues);

                                        // Re-populate form fields with old values before submission
                                        Object.keys(oldValues).forEach(function(name) {
                                            document.getElementById('field-' + name).value = oldValues[name];
                                        });
                                    });
                                });







                                function validateRegistrationForm() {
                                    let oldValues = {};
                                    var studentType = document.querySelector('input[name="okr_student"]:checked');
                                    var firstName = document.getElementById('field-fname').value;
                                    var lastName = document.getElementById('field-lname').value;
                                    var email = document.getElementById('field-regemail').value;
                                    var password = document.getElementById('field-regpassword').value;
                                    var confirmPassword = document.getElementById('field-cpassword').value;
                                    var zipCode = document.getElementById('field-zip').value;

                                    // Reset previous error messages
                                    document.getElementById('val_okr_student').innerHTML = '';
                                    document.getElementById('val_fname').innerHTML = '';
                                    document.getElementById('val_lname').innerHTML = '';
                                    document.getElementById('val_email').innerHTML = '';
                                    document.getElementById('val_password').innerHTML = '';
                                    document.getElementById('val_cpassword').innerHTML = '';
                                    document.getElementById('val_zip').innerHTML = '';

                                    var hasError = false;

                                    Object.keys(oldValues).forEach(function(name) {
                                        document.getElementById('field-' + name).value = oldValues[name];
                                    });

                                    if (!studentType) {
                                        document.getElementById('val_okr_student').innerHTML = 'Please select your role';
                                        hasError = true;
                                    }

                                    if (firstName.trim() === '') {
                                        document.getElementById('val_fname').innerHTML = 'First Name is required';
                                        hasError = true;
                                    }

                                    if (lastName.trim() === '') {
                                        document.getElementById('val_lname').innerHTML = 'Last Name is required';
                                        hasError = true;
                                    }

                                    if (email.trim() === '') {
                                        document.getElementById('val_email').innerHTML = 'Email Address is required';
                                        hasError = true;
                                    } else if (!isValidEmail(email)) {
                                        document.getElementById('val_email').innerHTML = 'Please Enter a valid Email';
                                        hasError = true;
                                    }

                                    if (password.length < 8) {
                                        document.getElementById('val_password').innerHTML = 'Password must be at least 8 characters long';
                                        hasError = true;
                                    }

                                    if (password.trim() === '') {
                                        document.getElementById('val_password').innerHTML = 'Password is required';
                                        hasError = true;
                                    }

                                    if (confirmPassword.trim() === '') {
                                        document.getElementById('val_cpassword').innerHTML = 'Re Enter Your Password';
                                        hasError = true;
                                    } else if (password !== confirmPassword) {
                                        document.getElementById('val_cpassword').innerHTML = 'Confirm Password not match';
                                        hasError = true;
                                    }

                                    if (zipCode.trim() === '') {
                                        document.getElementById('val_zip').innerHTML = 'Zip Code is required';
                                        hasError = true;
                                    }




                                    if (hasError) {
                                        return;
                                    }

                                    document.getElementById('registration_form').submit();
                                }

                                function isValidEmail(email) {
                                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                                    return emailRegex.test(email);
                                }
                            </script>



                        </div><!-- /.form-donations -->
                    </div><!-- /.section__form -->

                </div><!-- /.section__inner -->
            </div><!-- /.shell -->
        </div><!-- /.section-forms -->




        <!--<div class="section">-->
        <!--    <div class="shell">-->
        <!--        <div class="section__head">-->
        <!--            <h2>donate</h2>-->
        <!--        </div><!-- /.section__head -->

        <!--        <div class="grid">-->
        <!--            <div class="grid__col grid__col--6of12">-->
        <!--                <div class="callout">-->
        <!--                    <div class="callout__image">-->
        <!--                        <img src="{{ asset('new/assets/images/svg/illustration_heart.svg  ')}} " alt="" width="260" height="232">-->
        <!--                    </div><!-- /.callout__image -->

        <!--                    <div class="callout__content">-->
        <!--                        <h4>Make a Dollar Donation</h4>-->

        <!--                        <p>-->
        <!--                            Semper sed in massa ornare mattis turpis aliquam tellus augue. Morbi rutrum egestas parturient massa justo, convallis ornare. Vulputate nunc.-->
        <!--                        </p>-->
        <!--                    </div><!-- /.callout__content -->

        <!--                    <div class="callout__actions">-->
        <!--                        <a href="https://laravel.techizebuilder.net/donate-now" class="btn btn--primary">Give Money</a>-->
        <!--                    </div><!-- /.callout__actions -->
        <!--                </div><!-- /.callout -->
        <!--            </div><!-- /.grid__col -->

        <!--<div class="grid__col grid__col--6of12">
                    <!--    <div class="callout">-->
        <!--        <div class="callout__image">-->
        <!--            <img src="{{ asset('new/assets/images/svg/illustration_books.svg  ')}}  " alt="" width="200" height="232">-->
        <!--        </div><-->

        <!--        <div class="callout__content">-->
        <!--            <h4>Donate Diverse Books</h4>
    
                    <!--            <p>-->
        <!--                Semper sed in massa ornare mattis turpis aliquam tellus augue. Morbi rutrum egestas parturient massa justo, convallis ornare. Vulputate nunc.-->
        <!--            </p>-->
        <!--        </div>-->

        <!--        <div class="callout__actions">
                    <!--            <a href=" #" class="btn btn--primary">Give Books</a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!--        </div><!-- /.grid -->
        <!--    </div><!-- /.shell -->
        <!--</div>-->
    </div>
    <footer class="footer">
        <div class="shell">
            <div class="grid grid--align-center">
                <div class="grid__col grid__col--6of12">
                    <a href="home.html" class="logo logo--footer">
                        <img src="{{ asset('new/assets/images/svg/logo-compact.svg  ')}}  " alt="">
                    </a><!-- /.logo -->

                    <div class="copyright">
                        <p>Copyright 2023 Our Kids Read</p>
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
                                <a href="https://www.ourkidsreadinc.org/contact-us">Contact Us</a>

                                <span class="hidden">Tax ID: XXXXXXXXXXXXXX</span>
                            </li>
                        </ul>
                    </nav><!-- /.nav-footer -->

                    <div class="legal">
                        <p>Our Kids Read is a Federally recognized 501c3 not-for-profit entity, Federal Tax ID #
                            83-3401365</p>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://www.ourkidsreadinc.org/public/new/assets/js/bundle.js"></script>
    <script>
        function changeMargin() {
            var content = document.getElementById("myContent");
            if (content.style.marginLeft == "0px") {
                content.style.marginLeft = "-205px"; // Change margin-left to 0px
            } else {
                content.style.marginLeft = "0px"; // Change margin-left to 0px
            }
        }
    </script>
    <script>
        const div = document.querySelector(".page-header1");
        const toggleClass1 = "is-sticky1";

        window.addEventListener("scroll", () => {
            const currentScroll = window.pageYOffset;
            if (currentScroll > 1) {
                div.classList.add(toggleClass1);
            } else {
                div.classList.remove(toggleClass1);
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            var modal = document.getElementById("myModal");
            var span = document.getElementsByClassName("close")[0];

            // Display the modal
            modal.style.display = "block";

            // Close the modal when the close button is clicked
            span.onclick = function() {
                modal.style.display = "none";
            }

            // Close the modal after 5 seconds
            setTimeout(function() {
                modal.style.display = "none";
            }, 5000);
        });
    </script>

    <script>
        function openCity(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
    </script>

</body>

</html>