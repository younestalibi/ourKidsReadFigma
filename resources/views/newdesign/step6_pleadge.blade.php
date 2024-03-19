@extends('newdesign.layouts.app')

@section('content')
@if(session('error'))
<script>
    Swal.fire({
        title: 'Error!',
        text: @json(session('error')),
        icon: 'error',
        confirmButtonText: 'OK'
    });
</script>
@endif
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
    <div class="content-container">
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
                                Pleadge
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-15 p-4 px-0">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">
                        STEP 6 OF 6: SIGN THE READING BUDDY PLEDGE
                    </h4>
                    <p class="py-3 text-justify fw-bold">
                        BY TYPING MY NAME IN THE BOX BELOW I AFFIRM THAT I AGREE WITH AND WILL ABIDE BY THE READING BUDDY PLEDGE:
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="py-3 text-justify fw-bold">I UNDERSTAND THAT I HAVE A DUTY TO PROTECT AND ENCOURAGE THE STUDENT OR STUDENTS ASSIGNED TO ME. I WILL CONSISTENTLY USE AFFIRMING, POSITIVE LANGUAGE WITH MY STUDENT AND AVOID CRITICISM, RIDICULE OR NEGATIVE LANGUAGE OF ANY KIND. </p>
            </div>
            <div class="col-12">
                <p class="py-3 text-justify fw-bold">I UNDERSTAND THAT I WILL BE SERVING AS A MENTOR FOR MY STUDENT(S) AND COMMIT TO AVOIDING PROFANITY, ANY SEXUAL REFERENCES OR CONVERSATIONS ABOUT DRUGS OF ANY SORT.
                </p>
            </div>
            <div class="col-12">
                <p class="py-3 text-justify fw-bold">I COMMIT TO INFORMING THE OUR KIDS READ STAFF IN THE EVENT I FEEL A CHILD I AM WORKING WITH IS A DANGER TO THEMSELVES OR OTHERS OR IF THE CHILD THEMSELF APPEARS TO BE IN DANGER.
                </p>
            </div>
            <div class="col-12">
                <p class="py-3 text-justify fw-bold">LASTLY, I COMMIT TO LEARNING ABOUT MY STUDENT AND ALLOWING THEM TO LEAD THE READING EXPERIENCES.”
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form id="myForm" method="post" action="{{ route('sixth-step-update') }}" class="input-style-1">
                    @csrf
                    <label for="signature">Signature <code>(TYPE YOUR FULL NAME)</code></label>
                    <input name='signature' required class="w-25" id="signature" type="text" placeholder="Signature" />
                    <div class="invalid-feedback" style="display: none;">Signature is required.</div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button id="nextButton" class="my-btn light-btn py-3 rounded-full px-5 btn-hover">Submit</button>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#nextButton').click(function() {
                    // Check if the input field is empty
                    if ($('#myForm input[name="signature"]').val().trim() === '') {
                        $('.invalid-feedback').show(); // Show error message
                        return false; // Prevent form submission
                    } else {
                        $('#myForm').submit(); // Submit the form if input is not empty
                    }
                });
            });
        </script>

    </div>

</div>
<script>
    $(document).ready(function() {
        $('#nextButton').click(function() {
            // Check if the input field is empty
            if ($('#myForm input[name="text"]').val().trim() === '') {
                $('.invalid-feedback').show(); // Show error message
                return false; // Prevent form submission
            } else {
                $('#myForm').submit(); // Submit the form if input is not empty
            }
        });
    });
</script>
@endsection