<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Radiant Beauty Studio')</title>
    <!-- Fonts and Global Styles -->

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('user/web/img/logo.jpeg')}}" rel="icon">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('user/web/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/web/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/web/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('user/web/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('user/web/css/services.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        .header_logo {
            max-width: 100px;
        }
    </style>

    @stack('styles')
</head>

<body class="index-page">


    @include('Users.web.layouts.partials.header')
    @yield('content')


    @include('Users.web.layouts.partials.footer')



    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user/web/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('user/web/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('user/web/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('user/web/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('user/web/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{ asset('user/web/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{ asset('user/web/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('user/web/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{ asset('user/web/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('user/web/js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        // Get all radio buttons
        const scheduleRadios = document.querySelectorAll('input[name="schedule"]');
        const dateTimePicker = document.getElementById('date-time-picker');
        const bookingDateInput = document.getElementById('booking-date');
        const bookingTimeInput = document.getElementById('booking-time');

        // Add event listeners to the radio buttons
        scheduleRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                // Show date and time picker when a radio is selected
                if (this.value !== "Sunday : Closed") {
                    dateTimePicker.style.display = "block";
                    bookingDateInput.removeAttribute("disabled");
                    bookingTimeInput.removeAttribute("disabled");
                } else {
                    // Hide and disable date/time picker if "Sunday : Closed" is selected
                    dateTimePicker.style.display = "none";
                    bookingDateInput.setAttribute("disabled", true);
                    bookingTimeInput.setAttribute("disabled", true);
                    alert("Bookings are not available on Sundays.");
                }
            });
        });

        // Handle booking confirmation
        document.getElementById('confirm-booking').addEventListener('click', function() {
            const selectedSchedule = document.querySelector('input[name="schedule"]:checked').value;
            const bookingDate = bookingDateInput.value;
            const bookingTime = bookingTimeInput.value;

            if (bookingDate && bookingTime) {
                alert(`Booking confirmed for:\n${selectedSchedule}\nDate: ${bookingDate}\nTime: ${bookingTime}`);
            } else {
                alert("Please select a valid date and time for your booking.");
            }
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