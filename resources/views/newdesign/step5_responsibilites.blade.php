@extends('newdesign.layouts.app')

@section('content')

<form id="myForm" method="post" action="{{route('fifth-step-update')}}">
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
                            Responsibilities
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-15 p-4 px-0">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">STEP 5 OF 6: CERTIFICATION OF UNDERSTANDING OF RESPONSIBILITIES</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3 class="py-3 fw-bold">I UNDERSTAND THAT AS A READING BUDDY I MUST COMMIT TO:
            </h3>
        </div>
    </div>
    <div class="row p-3 fw-bold">
        <div class="form-check checkbox-style ">
            <input class="form-check-input" type="checkbox" value="" id="checkbox-1" required {{ $checked ? 'checked' : '' }} />
            <label class="form-check-label" for="checkbox-1">
                ATTENDING EIGHT SESSIONS OVER THE COURSE OF THE 12 WEEK SEMESTER</label>
            <div class="invalid-feedback" style="display: none;">This checkbox must be checked to proceed.</div>
        </div>
        <div class="form-check checkbox-style mb-20">
            <input class="form-check-input" type="checkbox" value="" id="checkbox-2" required {{ $checked ? 'checked' : '' }} />
            <label class="form-check-label" for="checkbox-2">
                SHOWING UP 5 MINUTES BEFORE THE START OF YOUR SESSION</label>
            <div class="invalid-feedback" style="display: none;">This checkbox must be checked to proceed.</div>
        </div>
        <div class="form-check checkbox-style mb-20">
            <input class="form-check-input" type="checkbox" value="" id="checkbox-3" required {{ $checked ? 'checked' : '' }} />
            <label class="form-check-label" for="checkbox-3">
                COMMUNICATING IN A POSITIVE AND SUPPORTIVE TONE DURING SESSIONS</label>
            <div class="invalid-feedback" style="display: none;">This checkbox must be checked to proceed.</div>
        </div>
        <div class="form-check checkbox-style mb-20">
            <input class="form-check-input" type="checkbox" value="" id="checkbox-4" required {{ $checked ? 'checked' : '' }} />
            <label class="form-check-label" for="checkbox-4">
                CANCELLING MY SESSION AT LEAST ONE BUSSINESS DAY IN ADVANCE IF I AM UNABLE TO MAKE IT</label>
            <div class="invalid-feedback" style="display: none;">This checkbox must be checked to proceed.</div>
        </div>
        <div class="form-check checkbox-style mb-20">
            <input class="form-check-input" type="checkbox" value="" id="checkbox-5" required {{ $checked ? 'checked' : '' }} />
            <label class="form-check-label" for="checkbox-5">
                ONLY COMMUNICATING WITH MY ASSIGNED STUDENT WITHIN THIS PORTAL</label>
            <div class="invalid-feedback" style="display: none;">This checkbox must be checked to proceed.</div>
        </div>


    </div>
    <div class="row">
        <div class="col-12">
            <h4 class="py-3 fw-bold text-danger">
                CHECK EACH BOX TO CERTIFY YOUR UNDERSTANDING AND CONCURRENCE WITH THESE STATEMENTS
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            
            <button type="submit" style="color: red;" class="my-btn py-3 light-btn rounded-full px-5 btn-hover">CONTINUE</button>
            
            <!--<button id="nextButton" class="my-btn light-btn py-3  rounded-full px-5 btn-hover">CONTINUE</button>-->

        </div>
    </div>

</form>

<script>
    $(document).ready(function() {
        $('#nextButton').click(function() {
            var allChecked = true;
            $('.form-check-input').each(function() {
                if (!$(this).prop('checked')) {
                    allChecked = false;
                    $(this).siblings('.invalid-feedback').show();
                } else {
                    $(this).siblings('.invalid-feedback').hide();
                }
            });

            if (!allChecked) {
                return false; // Prevent form submission
            } else {
                $('#myForm').submit();
            }
        });
    });
</script>
@endsection