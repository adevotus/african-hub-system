@include('assets.css')

<body>


<!-- Error -->
<div class="container-xxl container-p-y">
    <div class="misc-wrapper">
        <h1 class="mb-2 mx-2" style="line-height: 6rem;font-size: 6rem; color: red">404</h1>
        <h2 class="mb-2 mx-2" style="color: #000000">Page Not Found ⚠️</h2>

        <p class="mb-6 mx-2" style="color: #000000; font-size: 15px"> Sorry, the page you're looking for does not exist or has been moved. Please check the URL or return to the homepage.
        </p>
        <a href="{{route('login')}}" class="btn btn-primary">Back to home</a>
        <div class="mt-6">
            <img src="{{asset('assets/img/illustrations/img.png')}}" alt="page-misc-error-light" width="500" class="img-fluid" data-app-light-img="illustrations/img.png" data-app-dark-img="illustrations/img.png" />
        </div>
    </div>
</div>
<!-- /Error -->


@include('assets.js')

