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
    <form id="myForm" method="post" action="{{route('fifth-step-update')}}" class="content-container">
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
                <input class="form-check-input" type="checkbox" value="" id="checkbox-1" checked required />
                <label class="form-check-label" for="checkbox-1">
                    ATTENDING EIGHT SESSIONS OVER THE COURSE OF THE 12 WEEK SEMESTER</label>
                <div class="invalid-feedback" style="display: none;">This checkbox must be checked to proceed.</div>
            </div>
            <div class="form-check checkbox-style mb-20">
                <input class="form-check-input" type="checkbox" value="" id="checkbox-2" checked required />
                <label class="form-check-label" for="checkbox-2">
                    SHOWING UP 5 MINUTES BEFORE THE START OF YOUR SESSION</label>
                <div class="invalid-feedback" style="display: none;">This checkbox must be checked to proceed.</div>
            </div>
            <div class="form-check checkbox-style mb-20">
                <input class="form-check-input" type="checkbox" value="" id="checkbox-3" checked required />
                <label class="form-check-label" for="checkbox-3">
                    COMMUNICATING IN A POSITIVE AND SUPPORTIVE TONE DURING SESSIONS</label>
                <div class="invalid-feedback" style="display: none;">This checkbox must be checked to proceed.</div>
            </div>
            <div class="form-check checkbox-style mb-20">
                <input class="form-check-input" type="checkbox" value="" id="checkbox-4" checked required />
                <label class="form-check-label" for="checkbox-4">
                    CANCELLING MY SESSION AT LEAST ONE BUSSINESS DAY IN ADVANCE IF I AM UNABLE TO MAKE IT</label>
                <div class="invalid-feedback" style="display: none;">This checkbox must be checked to proceed.</div>
            </div>
            <div class="form-check checkbox-style mb-20">
                <input class="form-check-input" type="checkbox" value="" id="checkbox-5" checked required />
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
                <button id="nextButton" class="my-btn light-btn py-3  rounded-full px-5 btn-hover">
                    Submit
                </button>

            </div>
        </div>

    </form>

</div>
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