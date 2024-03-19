@extends('newdesign.layouts.app')

@section('content')
<div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="menu-toggle-btn mr-15 d-flex align-items-center">
                    <button id="menu-toggle" class="main-btn rounded-circle primary-btn btn-hover">
                        <i class="lni lni-chevron-left me-2"></i>
                    </button>
                    <h1 class="title-header">READING SESSION</h1>
                </div>
                <form action="{{route('reading-portal-logout')}}" method="post">
                    @csrf
                    <button type="submit" style="background: none; border: none;">
                        <i class="bi bi-power fs-1 rounded-circle"></i>
                    </button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="mt-3 text-light title-header title">
                    <h3>Pending Student Assignment</h3>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->
    <form action="{{route('first-step-update')}}" method="post" class="content-container">
        @csrf
        <div class="row">
            <div class="col-12 d-flex ">
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#0">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/firstpage.html">Onboarding Process</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Complete Profile
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h6 class="mb-25">Name</h6>
            </div>
            <div class="col-md-4 col-sm-6">
                <input name='id' type="hidden" value="{{$user->user_id}}" />
                <div class="input-style-1">
                    <input name='email' type="text" value="{{$user->user_email}}" placeholder="E-mail address" />
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- end input -->
                <div class="input-style-1">
                    <input name='first_name' type="text" value="{{$user->student_fname}}" placeholder="Student first name" />
                    @error('first_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- end input -->
                <div class="input-style-1">
                    <input name='last_name' type="text" value="{{$user->user_name_last}}" placeholder="Last Name" />
                    @error('last_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- end input -->
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="input-style-1">
                    <input name='parent_first_name' type="text" value="{{$user->parent_fname}}" placeholder="Parent first name" />
                    @error('parent_first_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- end input -->
                <div class="input-style-1">
                    <input name='student_last_name' type="text" value="{{$user->student_lname}}" placeholder="Student last name" />
                    @error('student_last_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- end input -->
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="input-style-1">
                    <input name='parent_last_name' type="text" value="{{$user->parent_lname}}" placeholder="Parent last name" />
                    @error('parent_last_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- end input -->
                <div class="input-style-1">
                    <input name='first_name' type="text" value="{{$user->user_name_first}}" placeholder="First name" />
                    @error('first_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- end input -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="mb-25">Address</h6>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="input-style-1">
                    <input name='address' type="text" value="{{$profile->user_profile_address_01}}" placeholder="Street address" />
                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="col-md-6 col-sm-6">
                <div class="input-style-1">
                    <input name='city' type="text" value="{{$profile->city_name}}" placeholder="City" />
                    @error('city')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- end input -->

            </div>
            <div class="col-md-4 col-sm-6">
                <div class="select-style-1">
                    <div class="select-position">
                        <select name="state">
                            <option value="" disabled>State</option>
                            @foreach ($countries as $country)
                            <option value="{{ $country->country_id }}" {{ $country->country_id == $profile->country_id ? 'selected' : '' }}>
                                {{ $country->country_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- end input -->
                @error('state')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="input-style-1">
                    <input name='zip' type="text" value="{{$profile->user_profile_address_zip}}" placeholder="Zip" />
                    @error('zip')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- end input -->
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="input-style-1">
                    <input name='phone' type="text" value="{{$user->cell_phone}}" placeholder="Cell phone" />
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- end input -->
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-md-flex align-items-center">
                <h6 class="mb-2 ">Time Zone : </h6>
                <div class="form-check radio-style mb-20">
                    <input class="form-check-input" type="radio" name="timezone" value="EST" id="radio-1" {{ $profile->time_zone == 'EST' ? 'checked' : '' }} />
                    <label class="form-check-label" for="radio-1">
                        EST</label>
                </div>
                <!-- end radio -->
                <div class="form-check radio-style mb-20">
                    <input class="form-check-input" type="radio" name="timezone" value="CST" id="radio-2" {{ $profile->time_zone == 'CST' ? 'checked' : '' }} />
                    <label class="form-check-label" for="radio-2">
                        CST</label>
                </div>
                <!-- end radio -->
                <div class="form-check radio-style mb-20">
                    <input class="form-check-input" type="radio" name="timezone" value="PST" id="radio-3" {{ $profile->time_zone == 'PST' ? 'checked' : '' }} />
                    <label class="form-check-label" for="radio-3">
                        PST</label>
                </div>
                <!-- end radio -->
                <div class="form-check radio-style mb-20">
                    <input class="form-check-input" type="radio" name="timezone" value="MST" id="radio-4" {{ $profile->time_zone == 'MST' ? 'checked' : '' }} />
                    <label class="form-check-label" for="radio-4">
                        MST</label>
                </div>
                <!-- end radio -->
                @error('timezone')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h6 class="mb-25">Employer</h6>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="input-style-1">
                    <!--<input name='employent' type="text" placeholder="Employent" />-->
                    <div class="select-style-1">
                        <div class="select-position">
                            <select name="employment">
                                <option value="" disabled>Employment</option>
                                @foreach ($employers as $employer)
                                <option value="{{ $employer->employer_id }}" {{ $employer->employer_id == $profile->employer_id ? 'selected' : '' }}>
                                    {{ $employer->employer_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @error('employment')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="input-style-1">
                    <input name='other_employer' value="{{$profile->other_employer}}" type="text" placeholder="Other employer" />
                    @error('other_employer')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- end input -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="my-btn py-3 light-btn  rounded-full px-5 btn-hover">CONTINUE</button>
            </div>
        </div>
    </form>
</div>
@endsection
