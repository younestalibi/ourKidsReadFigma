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
                                            {{--<div class="">

											<input type="radio" name="okr_student" id="ess" value="1" {{ optional($data1)['okr_student'] && old('okr_student', optional($data1)['okr_student']) == 1 ? 'checked' : '' }}>


                                            <label for="field-okr_student" style="font-size: 2rem; margin-bottom: 0.9rem;">Elementary School Student</label>

                                        </div>--}}

                                        <div class="">

                                            <input type="radio" name="okr_student" id="hss" value="2" {{ old('okr_student', $data1['okr_student']) == 2 ? 'checked' : '' }}> <label for="field-okr_student" style="font-size: 2rem; margin-bottom: 0.9rem;">Adult/High School Student (Prospective Reading Buddy)</label>

                                        </div>



                                    </div><!-- /.form__controls -->



                                    <div id="val_okr_student" class="validation_err"></div>

                                </div><!-- /.form__row -->





                                <div class="form__row">



                                    <label for="field-fname" class="form__label">First Name*</label>







                                    <div class="form__controls">



                                        <input type="text" class="field" name="fname" id="field-fname" value="{{ old('fname', $data1['user_name_first']) }}" placeholder="">



                                    </div><!-- /.form__controls -->

                                    <div id="val_fname" class="validation_err"></div>

                                </div><!-- /.form__row -->







                                <div class="form__row">



                                    <label for="field-lname" class="form__label">Last Name*</label>







                                    <div class="form__controls">



                                        <input type="text" class="field" name="lname" id="field-lname" value="{{ old('lname', $data1['user_name_last']) }}" placeholder="">



                                    </div><!-- /.form__controls -->

                                    <div id="val_lname" class="validation_err"></div>

                                </div><!-- /.form__row -->







                                <div class="form__row">



                                    <label for="field-regemail" class="form__label">Email Address*</label>







                                    <div class="form__controls">



                                        <input type="email" class="field" name="email" id="field-regemail" value="{{ old('email', $data1['user_email']) }}" placeholder="">



                                    </div><!-- /.form__controls -->


                                    <div id="val_email" class="validation_err"></div>


                                    @if(isset ($error_message_email))
                                    <div class="validation_err">{{ $error_message_email }}</div>


                                    @endif


                                </div><!-- /.form__row -->

                                <div class="form__row">



                                    <label for="field-regemail" class="form__label">Password*</label>







                                    <div class="form__controls">



                                        <input type="password" maxlength="16" class="field" name="password" id="field-regpassword" value="{{ old('password', $data1['user_password']) }}" placeholder="">



                                    </div><!-- /.form__controls -->

                                    <div id="val_password" class="validation_err"></div>

                                </div><!-- /.form__row -->







                                <div class="form__row">



                                    <label for="cfield-password" class="form__label">Confirm Password*</label>







                                    <div class="form__controls">



                                        <input type="password" maxlength="16" class="field" name="cpassword" id="field-cpassword" value="{{ old('password', $data1['user_password']) }}" placeholder="">



                                    </div><!-- /.form__controls -->

                                    <div id="val_cpassword" class="validation_err"></div>

                                </div><!-- /.form__row -->







                                <div class="form__row">



                                    <label for="field-zip" class="form__label">Zip Code*</label>







                                    <div class="form__controls">



                                        <input type="text" class="field" maxlength="5" name="zip" id="field-zip" value="{{ old('zip', $data1['user_profile_address_zip']) }}" placeholder="">



                                    </div><!-- /.form__controls -->

                                    <div id="val_zip" class="validation_err"></div>

                                </div><!-- /.form__row -->



                        </div><!-- /.form__body -->







                        <div class="form__actions">



                            <!-- <input type="button" class="btn" id="register_now" onclick="validateRegistrationForm()" name="submit" value="Submit"> -->

                            <input type="button" id="register_now" class="btn" value="Submit" onclick="validateRegistrationForm()">



                        </div><!-- /.form__actions -->



                        </form>