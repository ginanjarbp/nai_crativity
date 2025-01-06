<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
            <img src="assets/page1/logo.png" alt="logo" style="height: 3rem;">
                <!-- <a class="navbar-brand fw-bold" href="#page-top">Start Bootstrap</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-left me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('welcome')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#portofolio">Our Portopolio</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#contact">Contact</a></li>
                    </ul>
                </div>
                        <nav class="navbar navbar-expand-lg  navbar-light">
        <div class="container">
            <!-- Toggler for small screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi-person-circle me-1 fs-3"></i> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</nav>