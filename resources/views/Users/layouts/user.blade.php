<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Barber Panel')</title>
    <!-- Fonts and Global Styles -->
    <link rel="shortcut icon" href="{{ asset('user/web/img/logo.jpeg')}}" />

    <link href="{{ asset('user/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('user/assets/css/main.css') }}" rel="stylesheet">


    

    <!-- Include Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    @stack('styles')
</head>

<body class="index-page">


    @include('Users.layouts.partials.header')
    @yield('content')


    @include('Users.layouts.partials.footer')


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('user/assets/js/main.js') }}"></script>

    

    <!-- Include jQuery (required for Toastr) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('nayan');
            
            const popup = document.getElementById('popup');
            const contactLink = document.getElementById('contact-link');
            const closeBtn = document.querySelector('.close-btn');
            const form = document.getElementById('contact-form');

            // Function to open popup
            function openPopup() {
                popup.style.display = 'block';
            }

            // Function to close popup
            function closePopup() {
                popup.style.display = 'none';
            }

            // Open popup on contact link click
            contactLink.addEventListener('click', function(e) {
                e.preventDefault();
                openPopup();
            });

            // Close popup when clicking close button
            closeBtn.addEventListener('click', closePopup);

            // Close popup when clicking outside
            window.addEventListener('click', function(e) {
                if (e.target === popup) {
                    closePopup();
                }
            });

            // Handle form submission
            // form.addEventListener('submit', function(e) {
            //     e.preventDefault();
            //     // Add your form submission logic here
            //     console.log('Form submitted');
            //     closePopup();
            // });

            // Open popup after 30 seconds
            setTimeout(openPopup, 10000);
        });
    </script>



    <script>
        $(document).ready(function() {
            @if($errors->any())
            @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
            @endforeach
            @endif

            @if(session('success'))
            toastr.success("{{ session('success') }}");
            @endif

            @if(session('error'))
            toastr.error("{{ session('error') }}");
            @endif

            @if(session('warning'))
            toastr.warning("{{ session('warning') }}");
            @endif

            @if(session('info'))
            toastr.info("{{ session('info') }}");
            @endif
        });
    </script>
    @stack('scripts')
</body>

</html>