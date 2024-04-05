@extends('newdesign.layouts.app')

@section('content')

<form action="{{route('third-step-update')}}" method="post" enctype="multipart/form-data">
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
                            For Your Student
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-15 p-4 px-0">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">STEP 3 OF 6: PROVIDE INFORMATION ABOUT YOURSELF FOR YOUR STUDENT</h4>
            </div>
        </div>
    </div>


    <div class="row align-items-center">
        <div class="col-12">
            <h3 class="fw-bold my-3">UPLOAD PHOTO/HEADSHOT</h3>
        </div>
        <div class="col-sm-12 col-md-6 mb-4">
            <img src="{{ asset('assets/images/placeholder.png') }}" alt="user-avatar" class="d-block border rounded img-fluid" id="uploadedAvatar" />
        </div>
        <div class="button-wrapper col-sm-12 col-md-6">
            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                <span class="d-sm-block">Upload new photo</span>
                <i class="bx bx-upload d-block "></i>
                <input type="file" id="upload" name="picture" class="account-file-input @error('picture') is-invalid @enderror" hidden accept="image/png, image/jpeg" />
            </label>
            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                <i class="bx bx-reset d-block "></i>
                <span class="d-sm-block">Reset</span>
            </button>
            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
            @error('picture')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <h3 class="fw-bold my-3">TELL YOUR STUDENT ABOUT YOURSELF</h3>
        </div>
        <div class="col-12">
            <div class="input-style-1">
                <label for="describe1" class="fw-bold bg-secondary text-white p-2 rounded">
                    (DESCRIBE YOUR FAMILY, SOME OF YOUR FAVORITE BOOKS, ACTIVITIES, PETS OR OTHER DETAILS ABOUT YOURSELF THAT YOU FEEL COMFORTABLE SHARING)
                </label>
                <input name='user_other_activities' id="describe1" type="text" value="{{old('user_other_activities',$profile->user_other_activities)}}" placeholder="..." />
                @error('user_other_activities')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="input-style-1">
                <label for="describe2" class="fw-bold bg-secondary text-white p-2 rounded">
                    LET YOU STUDENT KNOW WHY YOU THINK READING IS IMPORTANT:
                </label>
                <input name='user_think' id="describe2" type="text" value="{{old('user_think',$profile->user_think)}}" placeholder="..." />
                @error('user_think')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <button type="submit" id='nextButton' class="my-btn light-btn py-3  rounded-full px-5 btn-hover">
                Submit
            </button>

        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        // Listen for change event on file input
        $('#upload').change(function() {
            // Get the selected file
            var file = this.files[0];

            // Check if a file is selected
            if (file) {
                // Read the file as URL
                var reader = new FileReader();
                reader.onload = function(e) {
                    // Update the src attribute of the img element with the file's URL
                    $('#uploadedAvatar').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        });

        // Listen for click event on reset button
        $('.account-image-reset').click(function() {
            // Reset the src attribute of the img element to the default value
            $('#uploadedAvatar').attr('src', "{{ asset('assets/images/placeholder.png') }}");
            // Clear the file input value
            $('#upload').val('');
        });
    });
</script>
@endsection