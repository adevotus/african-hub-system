@include('assets.css')

<body>
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y" >
        <div class="authentication-inner" style="max-width: 400px !important;">
            <!-- Verify Email -->
            <div class="card px-sm-6 px-0">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="#" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <img src="{{ asset('assets/img/logo-01.png') }}" width="90" height="90" style="color: #000000; border-radius: 50%">
                                </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-1 text-center text-bold" style="font-weight: 900; color: #0c0c0c">Verify your email ✉️</h4>
                    <p class="text-start mb-0 mt-3" style="color: #0c0c0c"> Account activation link sent to your email address <b>{{ session('user_details')->email }}</b>
                        Please follow the link inside to continue.
                    </p>
                    <p class="text-center mb-0 mt-4">Didn't get the mail? <a href="{{route('verification.resend')}}">Resend</a></p>
                </div>
            </div>
            <!-- /Verify Email -->
        </div>
    </div>
</div>

@include('assets.js')

<!-- Toastr Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if there's a toast message in the session
        @if (session('message'))
        toastr.success("{{ session('message') }}");
        @endif
    });
</script>
</body>
