@extends('Users.web.layouts.user')

@section('title', 'Services')


@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Services</h3>

    </div>
</div>
<!-- Header End -->

<div class="services-grid" id="services-container">
    <div class="service-card">
        <img src="images/packages.jpg" alt="Packages" class="service-image"> <!-- Image for the service -->
        <div class="service-title">Packages</div>
        <div class="rating">⭐ 4.94 (480K reviews)</div>
        <div class="price-duration">
            <span class="price">₹6,000</span>
            <span class="duration">• 3 hrs</span>
        </div>
        <div class="button-container">
            <button class="view-details-btn" onclick="showMenu(0)">View Details</button>
            <button class="add-btn" onclick="addToCart('Packages')">Add</button>
        </div>
    </div>

    <div class="service-card">
        <img src="images/professional-makeup.jpg" alt="Professional Makeup" class="service-image"> <!-- Image for the service -->
        <div class="service-title">Professional Makeup</div>
        <div class="rating">⭐ 4.97 (530K reviews)</div>
        <div class="price-duration">
            <span class="price">₹4,500</span>
            <span class="duration">• 2 hrs</span>
        </div>
        <div class="button-container">
            <button class="view-details-btn" onclick="showMenu(1)">View Details</button>
            <button class="add-btn" onclick="addToCart('Professional Makeup')">Add</button>
        </div>
    </div>

    <div class="service-card">
        <img src="images/share-own-makeup.jpg" alt="Share Your Own Makeup" class="service-image"> <!-- Image for the service -->
        <div class="service-title">Share Your Own Makeup</div>
        <div class="rating">⭐ 4.85 (300K reviews)</div>
        <div class="price-duration">
            <span class="price">₹2,000</span>
            <span class="duration">• 1 hr 30 mins</span>
        </div>
        <div class="button-container">
            <button class="view-details-btn" onclick="showMenu(2)">View Details</button>
            <button class="add-btn" onclick="addToCart('Share Your Own Makeup')">Add</button>
        </div>
    </div>

    <div class="service-card">
        <img src="images/styling.jpg" alt="Styling" class="service-image"> <!-- Image for the service -->
        <div class="service-title">Styling</div>
        <div class="rating">⭐ 4.92 (410K reviews)</div>
        <div class="price-duration">
            <span class="price">₹2,500</span>
            <span class="duration">• 1 hr</span>
        </div>
        <div class="button-container">
            <button class="view-details-btn" onclick="showMenu(3)">View Details</button>
            <button class="add-btn" onclick="addToCart('Styling')">Add</button>
        </div>
    </div>

    <div class="service-card">
        <img src="images/add-ons.jpg" alt="Add-Ons" class="service-image"> <!-- Image for the service -->
        <div class="service-title">Add-Ons</div>
        <div class="rating">⭐ 4.80 (200K reviews)</div>
        <div class="price-duration">
            <span class="price">₹500</span>
            <span class="duration">• 30 mins</span>
        </div>
        <div class="button-container">
            <button class="view-details-btn" onclick="showMenu(4)">View Details</button>
            <button class="add-btn" onclick="addToCart('Add-Ons')">Add</button>
        </div>
    </div>
</div>


<div class="menu-overlay" id="menuOverlay">
    <div class="menu-content">
        <button class="close-menu" onclick="closeMenu()">×</button>
        <div id="menuDetails"></div>
    </div>
</div>
@endsection