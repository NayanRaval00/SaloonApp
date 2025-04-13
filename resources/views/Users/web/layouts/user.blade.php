<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'SPA Center - Beauty & Spa')</title>
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

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Open modal on "Make Order" click
            document.querySelectorAll(".make-order").forEach(button => {
                button.addEventListener("click", () => {
                    const service = button.getAttribute("data-service");
                    const category = button.getAttribute("data-category");
                    document.getElementById("orderModalLabel").innerText = `Order: ${service}`;
                    document.getElementById("serviceCategory").value = category;
                    document.getElementById("serviceName").value = service;
                    new bootstrap.Modal(document.getElementById("orderModal")).show();
                });
            });

            // Handle form submission
            document.getElementById("orderForm").addEventListener("submit", (e) => {
                e.preventDefault();
                const formData = new FormData(e.target);
                const orderDetails = Object.fromEntries(formData.entries());
                alert(`Order placed successfully for ${orderDetails["serviceName"]}`);
                // Optionally add API call logic here
                document.getElementById("orderForm").reset();
                bootstrap.Modal.getInstance(document.getElementById("orderModal")).hide();
            });
        });
    </script>
    <!-- JavaScript to Handle Radio Button Selection -->
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


    @stack('scripts')
</body>

</html>