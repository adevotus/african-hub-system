
@include('assets.css')

<body>
<!-- Content -->
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="app-brand justify-content-center">
                         <span class="app-brand-logo demo">
                             <img src="{{asset('assets/img/logo-01.png')}}" width="90" height="90" style="color: #000000; border-radius: 50%" >
                         </span>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="w-100 d-flex justify-content-center mt-5">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{asset('assets/img/ah-1.jpg')}}" class="d-block w-100 h-100" style="border-radius: 10px" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-bold">Business Incubation's</h5>
                                                <p>Some representative placeholder content for the first slide.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('assets/img/ah-2.jpg')}}" class="d-block w-100"  style="border-radius: 10px" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-bold">Innovation Labs and Workshops</h5>
                                                <p>Some representative placeholder content for the second slide.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('assets/img/ah-3.jpg')}}" class="d-block w-100"  style="border-radius: 10px" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-bold">Strategic Business Consulting</h5>
                                                <p>Some representative placeholder content for the third slide.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-bold text-center m-2 mt-4" style="color: #000000;  font-family: 'Poppins', sans-serif; font-weight: bold;">Reset Your Password</h4>
                            <form id="resetPasswordForm" class="mb-3 mt-4" action="{{ route('password-reset-submit', ['token' => $token]) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="password" class="form-label text-capitalize" style="color: #000000">Your Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" placeholder="Enter your new password" autofocus />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label text-capitalize" style="color: #000000">Confirm Password</label>
                                    <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" id="confirm_password" name="confirm_password" value="{{ old('confirm_password') }}" placeholder="Confirm your new password" autofocus />
                                    @error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div id="passwordError" class="text-danger mb-3" style="display: none;">Passwords do not match!</div>

                                <div class="mb-3">
                                    <button id="submitButton" class="btn btn-primary d-grid w-100" type="submit" disabled>Send Reset</button>
                                </div>
                            </form>

                            <p class="text-center text-small mt-3" style="font-size: small">
                                <span style="color: #0c0c0c;" class="text-sm">Back </span>
                                <a href="{{ route('login') }}"><span style="font-weight: bold">Login here </span></a>
                            </p>

                            <div class="divider my-2"><div class="divider-text">or</div></div>

                            <div class="d-flex justify-content-center">
                                <small>For additional help, contact AfricaHub support at info@africanhub</small>
                            </div>
                        </div>
                    </div>
                    <!-- Logo -->
                </div>
            </div>

            <p style="font-size: small;color:#000c3f;" class="text-center mt-3">Copyright &copy;<script>document.write(new Date().getFullYear());</script> | African Hub</p>

        </div>

    </div>

</div>

<!-- / Content -->


@include('assets.js')
<script>
    // Get the password and confirm password fields
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('confirm_password');
    const submitButton = document.getElementById('submitButton');
    const passwordError = document.getElementById('passwordError');

    // Function to check if passwords match
    function checkPasswordMatch() {
        if (passwordField.value !== confirmPasswordField.value) {
            passwordError.style.display = 'block';  // Show error
            submitButton.disabled = true;  // Disable submit button
        } else {
            passwordError.style.display = 'none';
            submitButton.disabled = false;
        }
    }

    passwordField.addEventListener('input', checkPasswordMatch);
    confirmPasswordField.addEventListener('input', checkPasswordMatch);
</script>


