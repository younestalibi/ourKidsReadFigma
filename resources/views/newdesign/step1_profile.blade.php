@extends('newdesign.layouts.app')

@section('content')

<form action="{{route('first-step-update')}}" method="post">
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
            <h6 class="mb-25">Parent Information</h6>
        </div>
        <div class="col-md-6 col-sm-6">
            <input name='parent_last_name' type="hidden" value="_" />
            <!-- end input -->
            <div class="input-style-1">
                <input name='first_name' type="text" value="{{ old('first_name',$user->user_name_first)}}" placeholder="Parent First name" />
                @error('first_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- end input -->
        </div>
        <div class="col-md-6 col-sm-6">
            <input name='parent_first_name' type="hidden" value="_" />
            <!-- end input -->
            <input name='student_last_name' type="hidden" value="_" />
            <div class="input-style-1">
                <input name='last_name' type="text" value="{{ old('last_name',$user->user_name_last)}}" placeholder="Parent Last Name" />
                @error('last_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- end input -->
        </div>

    </div>

    <div class="row">
        <div class="col-md-6 col-sm-6">
            <input name='id' type="hidden" value="{{$user->user_id}}" />
            <div class="input-style-1">
                <input name='email' type="text" value="{{ old('email',$user->user_email)}}" placeholder="E-mail address" />
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- end input -->
            <input name='student_first_name' type="hidden" value="_" />

            <!-- end input -->

            <!-- end input -->
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="input-style-1">
                <input name='phone' type="text" value="{{ old('phone',$user->cell_phone)}}" placeholder="Cell phone" />
                @error('phone')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- end input -->
        </div>

    </div>




    <div class="row">
        <div class="col-12">
            <h6 class="mb-25">Child Information</h6>
        </div>
    </div>

    <div class="feature-extra"></div>
    @for ($i = 0; $i < count(old('child',$child)) ; $i++) <div class="row feature-extra">
        <small>Child: <b class='removeFeature text-danger' style="cursor: pointer;">Remove</b></small>
        <div class="col-md-6 col-sm-6">
            <input name='child[{{$i}}][id]' type="hidden" value="{{(isset($child[$i]) ? $child[$i]->child_id : '')}}" />
            <div class="input-style-1">
                <input name='child[{{$i}}][child_name_first]' type="text" value="{{ old('child.' . $i . '.child_name_first',(isset($child[$i]) ? $child[$i]->child_name_first : ''))}}" placeholder="Child First Name" />
                @error('child.' . $i . '.child_name_first')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="input-style-1">
                <input name='child[{{$i}}][child_name_last]' type="text" value="{{ old('child.' . $i . '.child_name_last', (isset($child[$i]) ? $child[$i]->child_name_last : ''))}}" placeholder="Child Last Name" />
                @error('child.' . $i . '.child_name_last')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="input-style-1">
                <input name='child[{{$i}}][child_grade]' type="number" min="1" value="{{ old('child.' . $i . '.child_grade',(isset($child[$i]) ? $child[$i]->child_grade : ''))}}" placeholder="Grade" />
                @error('child.' . $i . '.child_grade')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="input-style-1">
                <input name='child[{{$i}}][child_school]' type="text" value="{{ old('child.' . $i . '.child_school',(isset($child[$i]) ? $child[$i]->child_school : ''))}}" placeholder="School" />
                @error('child.' . $i . '.child_school')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        </div>
        @endfor


        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="input-style-1">
                    <input id="featureInputs" type="button" value="Add New Child" />
                </div>
            </div>
            @error('child')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>




        <div class="row">
            <div class="col-12">
                <h6 class="mb-25">Address</h6>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="input-style-1">
                    <input name='address' type="text" value="{{ old('address',$profile->user_profile_address_01)}}" placeholder="Street address" />
                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="col-md-6 col-sm-6">
                <div class="input-style-1">
                    <input name='city' type="text" value="{{ old('city',$profile->city_name)}}" placeholder="City" />
                    @error('city')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- end input -->

            </div>
            <div class="col-md-6 col-sm-6">
                <div class="select-style-1">
                    <div class="select-position">
                        <select name="state">
                            <option value="" disabled>State</option>
                            @foreach ($countries as $country)
                            <option value="{{ $country->country_id }}" {{ old('state',$profile->country_id)==$country->country_id  ? 'selected' : '' }}>
                                {{ $country->country_name }}
                                {{ old("state",$country->country_id) == $profile->country_id ? 'selected' : '' }}

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
            <div class="col-md-6 col-sm-6">
                <div class="input-style-1">
                    <input name='zip' type="text" value="{{ old('zip',$profile->user_profile_address_zip)}}" placeholder="Zip" />
                    @error('zip')
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
                    <input class="form-check-input" type="radio" name="timezone" value="EST" id="radio-1" {{ old('timezone',$profile->time_zone) == 'EST' ? 'checked' : '' }} />
                    <label class="form-check-label" for="radio-1">
                        EST</label>
                </div>
                <!-- end radio -->
                <div class="form-check radio-style mb-20">
                    <input class="form-check-input" type="radio" name="timezone" value="CST" id="radio-2" {{ old('timezone',$profile->time_zone) == 'CST' ? 'checked' : '' }} />
                    <label class="form-check-label" for="radio-2">
                        CST</label>
                </div>
                <!-- end radio -->
                <div class="form-check radio-style mb-20">
                    <input class="form-check-input" type="radio" name="timezone" value="PST" id="radio-3" {{ old('timezone',$profile->time_zone) == 'PST' ? 'checked' : '' }} />
                    <label class="form-check-label" for="radio-3">
                        PST</label>
                </div>
                <!-- end radio -->
                <div class="form-check radio-style mb-20">
                    <input class="form-check-input" type="radio" name="timezone" value="MST" id="radio-4" {{ old('timezone',$profile->time_zone) == 'MST' ? 'checked' : '' }} />
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
                                <option value="{{ $employer->employer_id }}" {{ old('employment',$profile->employer_id)==$employer->employer_id ? 'selected' : '' }}>
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
                    <input name='other_employer' value="{{ old('other_employer',$profile->other_employer)}}" type="text" placeholder="Other employer" />
                    @error('other_employer')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- end input -->
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" style="color: red;" class="my-btn py-3 light-btn rounded-full px-5 btn-hover">CONTINUE</button>
            </div>
        </div>
</form>

<script>
    $(() => {

        $(document).on('click', '#featureInputs', function() {
            let childCount = $('.row.feature-extra').length;
            newFeatureInput = `
            

            <div class="row feature-extra">
            <small>child: <b class='removeFeature text-danger' style="cursor: pointer;">Remove</b></small>
            <input name='child[${childCount}][id]' type="hidden" value="" />
        <div class="col-md-6 col-sm-6">
            <div class="input-style-1">
                <input name='child[${childCount}][child_name_first]' type="text" class="child_name_first" placeholder="Child First Name" />
      
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="input-style-1">
                <input name='child[${childCount}][child_name_last]' type="text" class="child_name_last" placeholder="Child Last Name" />
    
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="input-style-1">
                <input name='child[${childCount}][child_grade]' type="number" min='1' class="child_grade" placeholder="Grade" />
    
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="input-style-1">
                <input name='child[${childCount}][child_school]' type="text" class="child_school" placeholder="School" />
   
            </div>
        </div>

    </div>
                `;
            $('.feature-extra:last').after(newFeatureInput);
            childCount++;
        })
        $(document).on('click', '.removeFeature', function() {
            $(this).parent().parent().remove()
            $('.row.feature-extra').each(function(index) {
                $(this).find('input[type=text], input[type=number], , input[type=hidden]').each(function() {
                    $(this).attr('name', $(this).attr('name').replace(/\[(\d+)\]/, '[' + index + ']'));
                });
            });

        });

    })
</script>




@endsection