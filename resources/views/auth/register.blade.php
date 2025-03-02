@include('assets.css')

<body>
<!-- Loader -->
<div id="loader" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255, 255, 255, 0.8); z-index: 1000; justify-content: center; align-items: center;">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<!-- Content -->
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="app-brand justify-content-center">
                    <span class="app-brand-logo demo">
                        <img src="{{ asset('assets/img/logo-01.png') }}" width="90" height="90" style="color: #000000; border-radius: 50%">
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
                            <h4 class="text-bold text-center m-2 mt-4" style="color: #000000; font-family: 'Poppins', sans-serif; font-weight: bold;">Register</h4>
                            <form id="registrationForm" class="mb-3 mt-4" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstName" class="form-label text-capitalize" style="color: #000000">First Name</label>
                                            <input type="text" class="form-control @error('firstName') is-invalid @enderror" id="firstName" name="firstName" value="{{ old('firstName') }}" placeholder="Enter your First Name" autofocus required>
                                            @error('firstName')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="lastName" class="form-label text-capitalize" style="color: #000000">Last Name</label>
                                            <input type="text" class="form-control @error('lastName') is-invalid @enderror" id="lastName" name="lastName" value="{{ old('lastName') }}" placeholder="Enter your Last Name" required>
                                            @error('lastName')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label text-capitalize" style="color: #000000">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>

                                <div class="mb-3 form-password-toggle">
                                    <label class="form-label text-capitalize" for="password" style="color: #000000">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" required>
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button id="submitButton" class="btn btn-primary d-grid w-100" type="submit"> {{ __('Register') }}</button>
                                </div>
                            </form>

                            <p class="text-center text-small mt-3" style="font-size: small">
                                <span style="color: #0c0c0c;" class="text-sm">Have an account?</span>
                                <a href="{{ route('login') }}"><span style="font-weight: bold">Login here</span></a>
                            </p>

                            <div class="divider my-2">
                                <div class="divider-text">or</div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <a href="{{ route('auth.google') }}" class="btn btn-danger btn-sm w-50">Sign up with Google</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p style="font-size: small; color: #000c3f;" class="text-center mt-3">Copyright &copy;<script>document.write(new Date().getFullYear());</script> | African Hub</p>
        </div>
    </div>
</div>

@include('assets.js')

<!-- JavaScript to Handle Form Submission -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('registrationForm');
        const loader = document.getElementById('loader');
        const submitButton = document.getElementById('submitButton');

        form.addEventListener('submit', function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Disable the submit button
            submitButton.disabled = true;
            submitButton.innerText = 'Registering...';

            // Show the loader
            loader.style.display = 'flex';
            // Submit the form programmatically
            fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                },
            })
                .then(response => {
                    if (response.redirected) {
                        // Redirect to the verification page
                        window.location.href = response.url;
                    } else {
                        // Handle errors (e.g., validation errors)
                        return response.json();
                    }
                })
                .then(data => {
                    if (data && data.errors) {
                        // Re-enable the form and show validation errors
                        submitButton.disabled = false;
                        submitButton.innerText = 'Register';
                        loader.style.display = 'none';
                        // console.log("the lis",data.message);
                        toastr.error(data.message);
                    }
                })
                .catch(error => {
                    // console.error('Error:', error);
                    submitButton.disabled = false;
                    submitButton.innerText = 'Register';
                    loader.style.display = 'none';
                    toastr.error("something went wrong");
                });
        });
    });
</script>
</body>
