<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('welcome2.title') }}</title>
    <link rel="icon" href="{{ asset('WebSite/images/favicon.png') }}" type="image/x-icon">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('WebSite/css/fontawesome-all.css') }}">
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('WebSite/css/flaticon.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('WebSite/css/animate.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('WebSite/css/welcome2-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/welcome2.css') }}">

    <style>
        .carousel-item {
            height: 500px;
            background-size: cover;
            background-position: center;
            background-color: #007BFF;
        }
        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }
        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        /* Language Switcher Styles */
        .dropdown-menu .dropdown-item.active {
            background-color: #007BFF;
            color: white;
        }
        .dropdown-menu .dropdown-item:hover {
            background-color: #f8f9fa;
        }
        .dropdown-menu .dropdown-item.active:hover {
            background-color: #0056b3;
        }
        #navbarDropdownMenuLink {
            font-weight: 500;
        }
        #navbarDropdownMenuLink i.fa-globe {
            color: #007BFF;
        }

        /* Structures Section Styles */
        .structure-card {
            transition: all 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
        }
        .structure-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 123, 255, 0.2) !important;
        }
        .structure-image-wrapper {
            position: relative;
            overflow: hidden;
        }
        .structure-image {
            transition: transform 0.5s ease;
        }
        .structure-card:hover .structure-image {
            transform: scale(1.1);
        }
        .structure-overlay {
            transition: opacity 0.3s ease;
        }
        .structure-card:hover .structure-overlay {
            opacity: 1 !important;
        }
        .stat-box {
            transition: all 0.3s ease;
        }
        .stat-box:hover {
            background-color: #007BFF !important;
            color: white;
            transform: scale(1.05);
        }
        .stat-box:hover h5,
        .stat-box:hover small {
            color: white !important;
        }
        .hover-shadow-xl {
            transition: box-shadow 0.3s ease;
        }
        .transition-all {
            transition: all 0.3s ease;
        }
        .transition-opacity {
            transition: opacity 0.3s ease;
        }
        .badge {
            font-size: 0.75rem;
            padding: 0.4rem 0.6rem;
        }
        .gap-1 {
            gap: 0.25rem;
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">{{ __('welcome2.title') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">{{ __('welcome2.navbar.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services">{{ __('welcome2.navbar.services') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">{{ __('welcome2.navbar.about') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">{{ __('welcome2.navbar.contact') }}</a>
                        </li>
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(app()->getLocale() == 'ar')
                                    <i class="fas fa-globe mr-2"></i>
                                    <span>العربية</span>
                                @elseif(app()->getLocale() == 'fr')
                                    <i class="fas fa-globe mr-2"></i>
                                    <span>Français</span>
                                @else
                                    <i class="fas fa-globe mr-2"></i>
                                    <span>English</span>
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item {{ app()->getLocale() == $localeCode ? 'active' : '' }}"
                                       rel="alternate"
                                       hreflang="{{ $localeCode }}"
                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        @if($localeCode == 'ar')
                                            <i class="fas fa-flag mr-2"></i>
                                        @elseif($localeCode == 'fr')
                                            <i class="fas fa-flag mr-2"></i>
                                        @else
                                            <i class="fas fa-flag mr-2"></i>
                                        @endif
                                        {{ $properties['native'] }}
                                        @if(app()->getLocale() == $localeCode)
                                            <i class="fas fa-check ml-2 text-success"></i>
                                        @endif
                                    </a>
                                @endforeach
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">{{ __('welcome2.navbar.login') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- MAIN CAROUSEL -->
    <section class="main-carousel">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="5000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('WebSite/images/main-slider/slider-1.jpg') }}" class="d-block w-100" alt="{{ __('welcome2.carousel.slide1.title') }}" onerror="this.src='https://via.placeholder.com/1920x500/007BFF/FFFFFF?text=EPSP+Bachir+Mentouri'">
                    <div class="carousel-caption d-md-block">
                        <h2 class="display-4 fw-bold text-white">{{ __('welcome2.carousel.slide1.title') }}</h2>
                        <p class="lead">{{ __('welcome2.carousel.slide1.subtitle') }}</p>
                        <a href="{{ route('services') }}" class="btn btn-primary btn-lg mt-3">{{ __('welcome2.carousel.slide1.button') }}</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('WebSite/images/main-slider/slider-2.jpg') }}" class="d-block w-100" alt="{{ __('welcome2.carousel.slide2.title') }}" onerror="this.src='https://via.placeholder.com/1920x500/0056b3/FFFFFF?text=Quality+Healthcare'">
                    <div class="carousel-caption d-md-block">
                        <h2 class="display-4 fw-bold text-white">{{ __('welcome2.carousel.slide2.title') }}</h2>
                        <p class="lead">{{ __('welcome2.carousel.slide2.subtitle') }}</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg mt-3">{{ __('welcome2.carousel.slide2.button') }}</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('WebSite/images/main-slider/slider-3.jpg') }}" class="d-block w-100" alt="{{ __('welcome2.carousel.slide3.title') }}" onerror="this.src='https://via.placeholder.com/1920x500/007BFF/FFFFFF?text=Your+Health+Our+Priority'">
                    <div class="carousel-caption d-md-block">
                        <h2 class="display-4 fw-bold text-white">{{ __('welcome2.carousel.slide3.title') }}</h2>
                        <p class="lead">{{ __('welcome2.carousel.slide3.subtitle') }}</p>
                        <a href="{{ route('about') }}" class="btn btn-primary btn-lg mt-3">{{ __('welcome2.carousel.slide3.button') }}</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- ABOUT US SECTION -->
    <section class="about-us py-5 wow fadeInUp" data-wow-delay="0.2s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-image">
                        <img src="{{ asset('WebSite/images/resource/about-epsp.jpg') }}"
                             alt="{{ __('welcome2.about.title') }}"
                             class="img-fluid rounded shadow"
                             onerror="this.src='https://via.placeholder.com/600x400/007BFF/FFFFFF?text=EPSP+Bachir+Mentouri'">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2 class="mb-4 text-primary fw-bold">{{ __('welcome2.about.title') }}</h2>
                        <p class="lead mb-3">{{ __('welcome2.about.text') }}</p>
                        <p class="mb-4">{{ __('welcome2.about.text2') }}</p>
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success fa-2x me-3"></i>
                                    <div>
                                        <h5 class="mb-0">{{ __('website.experienced_doctors') ?? 'Experienced Doctors' }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success fa-2x me-3"></i>
                                    <div>
                                        <h5 class="mb-0">{{ __('website.modern_facilities') ?? 'Modern Facilities' }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('about') }}" class="btn btn-primary btn-lg">{{ __('welcome2.about.button') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="services py-5 bg-light wow fadeInUp" data-wow-delay="0.3s">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary">{{ __('welcome2.services.title') }}</h2>
                <p class="lead text-muted">{{ __('welcome2.services.subtitle') }}</p>
            </div>
            <div class="row g-4">
                @if(isset($services) && $services->count() > 0)
                    @foreach($services as $index => $service)
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card card h-100 border-0 shadow-sm hover-shadow transition">
                                <div class="card-body text-center p-4">
                                    <div class="service-icon mb-3">
                                        @if($service->icon_class)
                                            <i class="{{ $service->icon_class }}" style="font-size: 60px; color: {{ $service->color_code ?? '#007BFF' }};"></i>
                                        @else
                                            <i class="flaticon-stethoscope" style="font-size: 60px; color: #007BFF;"></i>
                                        @endif
                                    </div>
                                    <h4 class="card-title mb-3">{{ $service->name }}</h4>
                                    <p class="card-text text-muted">{{ Str::limit($service->description, 100) }}</p>
                                    @if($service->price)
                                        <p class="text-primary fw-bold">{{ $service->formatted_price }}</p>
                                    @endif
                                    <a href="{{ route('service-details', $service->id) }}" class="btn btn-outline-primary mt-2">{{ __('website.learn_more') ?? 'Learn More' }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Default Services if no data -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card card h-100 border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <div class="service-icon mb-3">
                                    <i class="flaticon-stethoscope" style="font-size: 60px; color: #007BFF;"></i>
                                </div>
                                <h4 class="card-title mb-3">{{ __('website.general_medicine') ?? 'General Medicine' }}</h4>
                                <p class="card-text text-muted">{{ __('website.general_medicine_desc') ?? 'Comprehensive primary healthcare services' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card card h-100 border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <div class="service-icon mb-3">
                                    <i class="flaticon-pediatrician" style="font-size: 60px; color: #28a745;"></i>
                                </div>
                                <h4 class="card-title mb-3">{{ __('website.pediatrics') ?? 'Pediatrics' }}</h4>
                                <p class="card-text text-muted">{{ __('website.pediatrics_desc') ?? 'Specialized care for children' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card card h-100 border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <div class="service-icon mb-3">
                                    <i class="flaticon-laboratory" style="font-size: 60px; color: #dc3545;"></i>
                                </div>
                                <h4 class="card-title mb-3">{{ __('website.laboratory') ?? 'Laboratory' }}</h4>
                                <p class="card-text text-muted">{{ __('website.laboratory_desc') ?? 'Advanced diagnostic testing' }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="text-center mt-5">
                <a href="{{ route('services') }}" class="btn btn-primary btn-lg">{{ __('welcome2.services.button') }}</a>
            </div>
        </div>
    </section>

    <!-- STRUCTURES SECTION -->
    <section class="structures py-5 bg-light wow fadeInUp" data-wow-delay="0.4s">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary">{{ __('welcome2.structures.title') }}</h2>
                <p class="lead text-muted">{{ __('welcome2.structures.subtitle') }}</p>
            </div>
            <div class="row g-4">
                @if(isset($polyclinics) && $polyclinics->count() > 0)
                    @foreach($polyclinics as $polyclinic)
                        <div class="col-lg-4 col-md-6">
                            <div class="structure-card card h-100 border-0 shadow-lg hover-shadow-xl transition-all">
                                <!-- Image with Overlay -->
                                <div class="position-relative overflow-hidden structure-image-wrapper">
                                    <img src="{{ asset('WebSite/images/resource/structure-' . $loop->iteration . '.jpg') }}"
                                         class="card-img-top structure-image"
                                         alt="{{ $polyclinic->name }}"
                                         style="height: 250px; object-fit: cover;"
                                         onerror="this.src='https://via.placeholder.com/400x250/007BFF/FFFFFF?text={{ urlencode($polyclinic->name) }}'">

                                    <!-- Statistics Badges Overlay -->
                                    <div class="position-absolute top-0 end-0 p-3">
                                        <span class="badge bg-primary bg-opacity-90 mb-2 d-block">
                                            <i class="fas fa-user-md"></i> {{ $polyclinic->doctors->count() }} {{ __('welcome2.structures.doctors') }}
                                        </span>
                                        <span class="badge bg-success bg-opacity-90 d-block">
                                            <i class="fas fa-heartbeat"></i> {{ $polyclinic->services->count() }} {{ __('welcome2.structures.services') }}
                                        </span>
                                    </div>

                                    <!-- Hover Overlay -->
                                    <div class="structure-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-75 d-flex align-items-center justify-content-center opacity-0 transition-opacity">
                                        <div class="text-center text-white">
                                            <a href="{{ route('polyclinic-details', $polyclinic->id) }}" class="btn btn-light btn-lg mb-2">
                                                <i class="fas fa-eye"></i> {{ __('welcome2.structures.view_details') }}
                                            </a>
                                            <p class="mb-0 small">{{ __('welcome2.structures.learn_more') }}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card Body -->
                                <div class="card-body">
                                    <h4 class="card-title text-primary mb-3 fw-bold">
                                        <i class="fas fa-hospital-alt"></i> {{ $polyclinic->name }}
                                    </h4>
                                    <p class="card-text text-muted mb-3">{{ Str::limit($polyclinic->description, 100) }}</p>

                                    <!-- Statistics Row -->
                                    <div class="row text-center mb-3 g-2">
                                        <div class="col-4">
                                            <div class="stat-box p-2 bg-light rounded">
                                                <h5 class="text-primary mb-0 fw-bold">{{ $polyclinic->doctors->count() }}</h5>
                                                <small class="text-muted">{{ __('welcome2.structures.doctors') }}</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="stat-box p-2 bg-light rounded">
                                                <h5 class="text-success mb-0 fw-bold">{{ $polyclinic->services->count() }}</h5>
                                                <small class="text-muted">{{ __('welcome2.structures.services') }}</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="stat-box p-2 bg-light rounded">
                                                <h5 class="text-info mb-0 fw-bold">{{ $polyclinic->activeEmployees->count() }}</h5>
                                                <small class="text-muted">{{ __('welcome2.structures.employees') }}</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Services List (if available) -->
                                    @if($polyclinic->services->count() > 0)
                                        <div class="mb-3">
                                            <h6 class="text-secondary mb-2">
                                                <i class="fas fa-stethoscope"></i> {{ __('welcome2.structures.available_services') }}:
                                            </h6>
                                            <div class="d-flex flex-wrap gap-1">
                                                @foreach($polyclinic->services->take(3) as $service)
                                                    <span class="badge bg-secondary bg-opacity-75">{{ $service->name }}</span>
                                                @endforeach
                                                @if($polyclinic->services->count() > 3)
                                                    <span class="badge bg-dark">+{{ $polyclinic->services->count() - 3 }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Action Button -->
                                    <div class="d-grid">
                                        <a href="{{ route('polyclinic-details', $polyclinic->id) }}" class="btn btn-outline-primary">
                                            <i class="fas fa-arrow-right"></i> {{ __('welcome2.structures.view_details') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- No Data Message -->
                    <div class="col-12">
                        <div class="alert alert-info text-center py-5">
                            <i class="fas fa-info-circle fa-3x mb-3"></i>
                            <h4>{{ __('welcome2.structures.no_data') }}</h4>
                        </div>
                    </div>
                @endif
            </div>

            <!-- View All Button -->
            @if(isset($polyclinics) && $polyclinics->count() > 0)
                <div class="text-center mt-5">
                    <a href="{{ route('polyclinics') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-th-large"></i> {{ __('welcome2.structures.view_all') }}
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="testimonials py-5 bg-light wow fadeInUp" data-wow-delay="0.5s">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary">{{ __('welcome2.testimonials.title') }}</h2>
                <p class="lead text-muted">{{ __('welcome2.testimonials.subtitle') }}</p>
            </div>
            <div class="row g-4">
                <!-- Testimonial 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://ui-avatars.com/api/?name=Ahmed+Benali&background=007BFF&color=fff&size=60"
                                     class="rounded-circle me-3"
                                     alt="Ahmed Benali"
                                     width="60" height="60">
                                <div>
                                    <h5 class="mb-0">Ahmed Benali</h5>
                                    <small class="text-muted">{{ __('welcome2.testimonials.patient') }}</small>
                                </div>
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text fst-italic text-muted">
                                <i class="fas fa-quote-left text-primary me-2"></i>
                                {{ app()->getLocale() == 'ar' ? 'خدمة ممتازة وطاقم طبي محترف. أنا ممتن جدًا للرعاية التي تلقيتها في مؤسسة الصحة الجوارية بشير منتوري.' : (app()->getLocale() == 'fr' ? 'Excellent service et personnel médical professionnel. Je suis très reconnaissant pour les soins que j\'ai reçus à l\'EPSP Bachir Mentouri.' : 'Excellent service and professional medical staff. I am very grateful for the care I received at EPSP Bachir Mentouri.') }}
                                <i class="fas fa-quote-right text-primary ms-2"></i>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://ui-avatars.com/api/?name=Fatima+Zahra&background=28a745&color=fff&size=60"
                                     class="rounded-circle me-3"
                                     alt="Fatima Zahra"
                                     width="60" height="60">
                                <div>
                                    <h5 class="mb-0">Fatima Zahra</h5>
                                    <small class="text-muted">{{ __('welcome2.testimonials.patient') }}</small>
                                </div>
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text fst-italic text-muted">
                                <i class="fas fa-quote-left text-primary me-2"></i>
                                {{ app()->getLocale() == 'ar' ? 'مرافق حديثة ورعاية شخصية. الأطباء والممرضات متفانون حقًا في عملهم.' : (app()->getLocale() == 'fr' ? 'Installations modernes et soins personnalisés. Les médecins et infirmières sont vraiment dévoués à leur travail.' : 'Modern facilities and personalized care. The doctors and nurses are truly dedicated to their work.') }}
                                <i class="fas fa-quote-right text-primary ms-2"></i>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://ui-avatars.com/api/?name=Karim+Mansouri&background=dc3545&color=fff&size=60"
                                     class="rounded-circle me-3"
                                     alt="Karim Mansouri"
                                     width="60" height="60">
                                <div>
                                    <h5 class="mb-0">Karim Mansouri</h5>
                                    <small class="text-muted">{{ __('welcome2.testimonials.patient') }}</small>
                                </div>
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text fst-italic text-muted">
                                <i class="fas fa-quote-left text-primary me-2"></i>
                                {{ app()->getLocale() == 'ar' ? 'أفضل مركز صحي في المنطقة. أوصي به بشدة لجميع أفراد عائلتي وأصدقائي.' : (app()->getLocale() == 'fr' ? 'Le meilleur centre de santé de la région. Je le recommande vivement à tous mes proches.' : 'The best healthcare center in the region. I highly recommend it to all my family and friends.') }}
                                <i class="fas fa-quote-right text-primary ms-2"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <!-- About Column -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase mb-4 fw-bold">{{ __('welcome2.footer.about_title') }}</h5>
                    <p class="text-white-50">{{ __('welcome2.footer.about_text') }}</p>
                    <div class="mt-3">
                        <img src="{{ asset('WebSite/images/footer-logo.png') }}"
                             alt="{{ __('welcome2.title') }}"
                             class="img-fluid mb-3"
                             style="max-width: 150px;"
                             onerror="this.style.display='none'">
                    </div>
                </div>

                <!-- Contact Column -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase mb-4 fw-bold">{{ __('welcome2.footer.coordinates') }}</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>
                            <span class="text-white-50">{{ __('welcome2.footer.address') }}</span>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-phone text-primary me-2"></i>
                            <a href="tel:+21321XXXXXX" class="text-white-50 text-decoration-none">{{ __('welcome2.footer.phone') }}</a>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-envelope text-primary me-2"></i>
                            <a href="mailto:contact@epspbm.dz" class="text-white-50 text-decoration-none">{{ __('welcome2.footer.email') }}</a>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links Column -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase mb-4 fw-bold">{{ __('welcome2.footer.quick_links') }}</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="{{ url('/') }}" class="text-white-50 text-decoration-none hover-primary">
                                <i class="fas fa-chevron-right me-2"></i>{{ __('welcome2.navbar.home') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('services') }}" class="text-white-50 text-decoration-none hover-primary">
                                <i class="fas fa-chevron-right me-2"></i>{{ __('welcome2.navbar.services') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('about') }}" class="text-white-50 text-decoration-none hover-primary">
                                <i class="fas fa-chevron-right me-2"></i>{{ __('welcome2.navbar.about') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('contact') }}" class="text-white-50 text-decoration-none hover-primary">
                                <i class="fas fa-chevron-right me-2"></i>{{ __('welcome2.navbar.contact') }}
                            </a>
                        </li>
                    </ul>

                    <!-- Social Media -->
                    <h5 class="text-uppercase mb-3 mt-4 fw-bold">{{ __('welcome2.footer.social_media') }}</h5>
                    <div class="social-links">
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle me-2" style="width: 40px; height: 40px;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle me-2" style="width: 40px; height: 40px;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle me-2" style="width: 40px; height: 40px;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 40px; height: 40px;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <hr class="my-4 bg-white opacity-25">

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-white-50">{{ __('welcome2.footer.copyright') }}</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white-50 text-decoration-none me-3">{{ __('welcome2.footer.privacy') }}</a>
                    <a href="#" class="text-white-50 text-decoration-none">{{ __('welcome2.footer.terms') }}</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('WebSite/js/jquery.js') }}"></script>
    <!-- Popper JS (required for Bootstrap dropdowns) -->
    <script src="{{ asset('WebSite/js/popper.min.js') }}"></script>
    <!-- Bootstrap Bundle JS -->
    <script src="{{ asset('WebSite/js/bootstrap.min.js') }}"></script>
    <!-- WOW Animation -->
    <script src="{{ asset('WebSite/js/wow.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Initialize WOW.js for animations
            new WOW().init();

            // Initialize Bootstrap 4 dropdowns explicitly
            $('.dropdown-toggle').dropdown();

            // Add smooth scrolling
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top
                    }, 1000);
                }
            });

            // Add hover effects for service and structure cards
            const cards = document.querySelectorAll('.service-card, .structure-card, .testimonial-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                    this.style.transition = 'all 0.3s ease';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Language switcher enhancement
            $('.dropdown-item[hreflang]').on('click', function() {
                // Add loading indicator
                var icon = $(this).find('i.fa-flag');
                if (icon.length) {
                    icon.removeClass('fa-flag').addClass('fa-spinner fa-spin');
                }
            });

            // Debug: Log when dropdown is clicked
            $('#navbarDropdownMenuLink').on('click', function(e) {
                console.log('Language dropdown clicked');
                e.preventDefault();
                $(this).dropdown('toggle');
            });

            // Ensure dropdown works on hover as well (optional)
            $('.dropdown').hover(
                function() {
                    $(this).addClass('show');
                    $(this).find('.dropdown-menu').addClass('show');
                },
                function() {
                    $(this).removeClass('show');
                    $(this).find('.dropdown-menu').removeClass('show');
                }
            );
        });
    </script>

    <style>
        /* Additional inline styles for animations and effects */
        .hover-shadow:hover {
            box-shadow: 0 15px 40px rgba(0, 123, 255, 0.2) !important;
        }

        .hover-primary:hover {
            color: #007BFF !important;
        }

        .hover-opacity-100 {
            transition: opacity 0.3s ease;
        }

        .hover-opacity-100:hover {
            opacity: 1 !important;
        }

        .transition {
            transition: all 0.3s ease;
        }

        .overlay {
            transition: opacity 0.3s ease;
        }

        .structure-card:hover .overlay {
            opacity: 1 !important;
        }

        /* RTL Support */
        [dir="rtl"] .carousel-control-prev {
            right: 0;
            left: auto;
        }

        [dir="rtl"] .carousel-control-next {
            left: 0;
            right: auto;
        }

        [dir="rtl"] .navbar-nav {
            margin-right: auto !important;
            margin-left: 0 !important;
        }

        [dir="rtl"] .dropdown-menu-right {
            right: auto !important;
            left: 0 !important;
        }

        [dir="rtl"] .ml-auto {
            margin-left: 0 !important;
            margin-right: auto !important;
        }

        [dir="rtl"] .mr-2 {
            margin-right: 0 !important;
            margin-left: 0.5rem !important;
        }

        [dir="rtl"] .ml-2 {
            margin-left: 0 !important;
            margin-right: 0.5rem !important;
        }

        /* Language Switcher Animation */
        .dropdown-menu {
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-item {
            transition: all 0.2s ease;
        }

        .dropdown-item i.fa-spinner {
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</body>
</html>
