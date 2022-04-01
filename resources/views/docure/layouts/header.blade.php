<!-- Header -->
<header class="header">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="{{ url('/') }}" class="navbar-brand logo">
                <img src="{{ url('assets/img/logo.png') }}" class="img-fluid" alt="Logo">
            </a>
        </div>
        @include('docure.layouts.partials.menu')	 
        <ul class="nav header-navbar-rht"> 
            <li class="nav-item contact-item">
                <div class="header-contact-img">
                    <i class="far fa-hospital"></i>							
                </div>
                <div class="header-contact-detail">
                    <p class="contact-header">Contact</p>
                    <p class="contact-info-header"> +1 315 369 5943</p>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link header-login" href="{{ url('login') }}">login / Signup </a>
            </li>
        </ul>
    </nav>
</header>
<!-- /Header -->