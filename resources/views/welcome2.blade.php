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


</head>
<body class="bg-gray-100">

    <!-- HEADER -->
    <header x-data="{ open: false, dropdownOpen: false }" class="bg-white shadow">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <a href="#" class="text-xl font-bold text-gray-800">{{ __('welcome2.title') }}</a>
                <div class="flex lg:hidden">
                    <button @click="open = !open" type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div :class="{'block': open, 'hidden': !open}" class="lg:flex lg:items-center lg:justify-between w-full">
                <div class="flex flex-col lg:flex-row lg:items-center">
                    <a href="/" class="my-2 text-gray-800 hover:text-blue-500 lg:mx-4 lg:my-0">{{ __('welcome2.navbar.home') }}</a>
                    <a href="/services" class="my-2 text-gray-800 hover:text-blue-500 lg:mx-4 lg:my-0">{{ __('welcome2.navbar.services') }}</a>
                    <a href="/about" class="my-2 text-gray-800 hover:text-blue-500 lg:mx-4 lg:my-0">{{ __('welcome2.navbar.about') }}</a>
                    <a href="/contact" class="my-2 text-gray-800 hover:text-blue-500 lg:mx-4 lg:my-0">{{ __('welcome2.navbar.contact') }}</a>
                </div>

                <div class="flex flex-col lg:flex-row lg:items-center">
                    <div x-data="{ dropdownOpen: false }" class="relative my-2 lg:my-0">
                        <button @click="dropdownOpen = !dropdownOpen" class="flex items-center text-gray-800 hover:text-blue-500 focus:outline-none lg:mx-4">
                            <i class="fas fa-globe"></i>
                            <span class="ml-2">
                                @if(app()->getLocale() == 'ar')
                                    العربية
                                @elseif(app()->getLocale() == 'fr')
                                    Français
                                @else
                                    English
                                @endif
                            </span>
                            <svg class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="dropdownOpen" @click.away="dropdownOpen = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white {{ app()->getLocale() == $localeCode ? 'bg-blue-500 text-white' : '' }}">
                                    {{ $properties['native'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <a href="/login" class="my-2 text-gray-800 hover:text-blue-500 lg:mx-4 lg:my-0">{{ __('welcome2.navbar.login') }}</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- HERO SECTION -->
    <section class="relative">
        <div class="h-[500px] bg-cover bg-center" style="background-image: url('{{ asset('WebSite/images/main-slider/slider-1.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white p-5 rounded-lg bg-black bg-opacity-50">
                    <h2 class="text-4xl lg:text-6xl font-bold">{{ __('welcome2.carousel.slide1.title') }}</h2>
                    <p class="text-lg lg:text-2xl mt-4">{{ __('welcome2.carousel.slide1.subtitle') }}</p>
                    <a href="{{ route('services') }}" class="mt-8 inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg text-lg">{{ __('welcome2.carousel.slide1.button') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT US SECTION -->
    <section class="py-16 wow fadeInUp" data-wow-delay="0.2s">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap items-center">
                <div class="w-full lg:w-1/2 lg:pr-12 mb-8 lg:mb-0">
                    <div class="about-image">
                        <img src="{{ asset('WebSite/images/resource/about-epsp.jpg') }}"
                             alt="{{ __('welcome2.about.title') }}"
                             class="max-w-full h-auto rounded-lg shadow-lg"
                             onerror="this.src='https://via.placeholder.com/600x400/007BFF/FFFFFF?text=EPSP+Bachir+Mentouri'">
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="about-content">
                        <h2 class="text-3xl font-bold text-blue-500 mb-4">{{ __('welcome2.about.title') }}</h2>
                        <p class="text-xl text-gray-700 mb-6">{{ __('welcome2.about.text') }}</p>
                        <p class="text-gray-600 mb-8">{{ __('welcome2.about.text2') }}</p>
                        <div class="flex flex-wrap mb-8">
                            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                                <div class="flex items-center">
                                    <i class="fas fa-check-circle text-green-500 text-2xl mr-3"></i>
                                    <div>
                                        <h5 class="text-lg font-semibold">{{ __('website.experienced_doctors') ?? 'Experienced Doctors' }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2">
                                <div class="flex items-center">
                                    <i class="fas fa-check-circle text-green-500 text-2xl mr-3"></i>
                                    <div>
                                        <h5 class="text-lg font-semibold">{{ __('website.modern_facilities') ?? 'Modern Facilities' }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('about') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg">{{ __('welcome2.about.button') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="py-16 bg-gray-50 wow fadeInUp" data-wow-delay="0.3s">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-500">{{ __('welcome2.services.title') }}</h2>
                <p class="text-xl text-gray-600 mt-2">{{ __('welcome2.services.subtitle') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @if(isset($services) && $services->count() > 0)
                    @foreach($services as $index => $service)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                            <div class="p-8 text-center">
                                <div class="mb-4">
                                    @if($service->icon_class)
                                        <i class="{{ $service->icon_class }}" style="font-size: 60px; color: {{ $service->color_code ?? '#007BFF' }};"></i>
                                    @else
                                        <i class="flaticon-stethoscope" style="font-size: 60px; color: #007BFF;"></i>
                                    @endif
                                </div>
                                <h4 class="text-xl font-semibold mb-2">{{ $service->name }}</h4>
                                <p class="text-gray-600">{{ Str::limit($service->description, 100) }}</p>
                                @if($service->price)
                                    <p class="text-blue-500 font-bold mt-4">{{ $service->formatted_price }}</p>
                                @endif
                                <a href="{{ route('service-details', $service->id) }}" class="mt-6 inline-block border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white font-bold py-2 px-4 rounded">{{ __('website.learn_more') ?? 'Learn More' }}</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Default Services if no data -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="p-8 text-center">
                            <div class="mb-4">
                                <i class="flaticon-stethoscope" style="font-size: 60px; color: #007BFF;"></i>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">{{ __('website.general_medicine') ?? 'General Medicine' }}</h4>
                            <p class="text-gray-600">{{ __('website.general_medicine_desc') ?? 'Comprehensive primary healthcare services' }}</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="p-8 text-center">
                            <div class="mb-4">
                                <i class="flaticon-pediatrician" style="font-size: 60px; color: #28a745;"></i>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">{{ __('website.pediatrics') ?? 'Pediatrics' }}</h4>
                            <p class="text-gray-600">{{ __('website.pediatrics_desc') ?? 'Specialized care for children' }}</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="p-8 text-center">
                            <div class="mb-4">
                                <i class="flaticon-laboratory" style="font-size: 60px; color: #dc3545;"></i>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">{{ __('website.laboratory') ?? 'Laboratory' }}</h4>
                            <p class="text-gray-600">{{ __('website.laboratory_desc') ?? 'Advanced diagnostic testing' }}</p>
                        </div>
                    </div>
                @endif
            </div>
            <div class="text-center mt-12">
                <a href="{{ route('services') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg text-lg">{{ __('welcome2.services.button') }}</a>
            </div>
        </div>
    </section>

    <!-- STRUCTURES SECTION -->
    <section class="py-16 bg-gray-50 wow fadeInUp" data-wow-delay="0.4s">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-500">{{ __('welcome2.structures.title') }}</h2>
                <p class="text-xl text-gray-600 mt-2">{{ __('welcome2.structures.subtitle') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @if(isset($polyclinics) && $polyclinics->count() > 0)
                    @foreach($polyclinics as $polyclinic)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                            <div class="relative">
                                <img src="{{ asset('WebSite/images/resource/structure-' . $loop->iteration . '.jpg') }}"
                                     class="w-full h-64 object-cover"
                                     alt="{{ $polyclinic->name }}"
                                     onerror="this.src='https://via.placeholder.com/400x250/007BFF/FFFFFF?text={{ urlencode($polyclinic->name) }}'">
                                <div class="absolute top-0 right-0 p-4">
                                    <span class="bg-blue-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">{{ $polyclinic->doctors->count() }} {{ __('welcome2.structures.doctors') }}</span>
                                    <span class="bg-green-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">{{ $polyclinic->services->count() }} {{ __('welcome2.structures.services') }}</span>
                                </div>
                                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    <a href="{{ route('polyclinic-details', $polyclinic->id) }}" class="bg-white text-gray-800 font-bold py-2 px-4 rounded-lg flex items-center">
                                        <i class="fas fa-eye mr-2"></i>
                                        {{ __('welcome2.structures.view_details') }}
                                    </a>
                                </div>
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold text-blue-500 mb-2 flex items-center">
                                    <i class="fas fa-hospital-alt mr-2"></i>
                                    {{ $polyclinic->name }}
                                </h4>
                                <p class="text-gray-600 mb-4">{{ Str::limit($polyclinic->description, 100) }}</p>
                                <div class="grid grid-cols-3 gap-4 text-center mb-4">
                                    <div>
                                        <h5 class="font-bold text-blue-500">{{ $polyclinic->doctors->count() }}</h5>
                                        <small class="text-gray-500">{{ __('welcome2.structures.doctors') }}</small>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-green-500">{{ $polyclinic->services->count() }}</h5>
                                        <small class="text-gray-500">{{ __('welcome2.structures.services') }}</small>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-indigo-500">{{ $polyclinic->activeEmployees->count() }}</h5>
                                        <small class="text-gray-500">{{ __('welcome2.structures.employees') }}</small>
                                    </div>
                                </div>
                                @if($polyclinic->services->count() > 0)
                                    <div class="mb-4">
                                        <h6 class="text-gray-700 font-semibold mb-2 flex items-center">
                                            <i class="fas fa-stethoscope mr-2"></i>
                                            {{ __('welcome2.structures.available_services') }}:
                                        </h6>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($polyclinic->services->take(3) as $service)
                                                <span class="bg-gray-200 text-gray-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">{{ $service->name }}</span>
                                            @endforeach
                                            @if($polyclinic->services->count() > 3)
                                                <span class="bg-gray-800 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">+{{ $polyclinic->services->count() - 3 }}</span>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                                <div class="text-right">
                                    <a href="{{ route('polyclinic-details', $polyclinic->id) }}" class="text-blue-500 hover:text-blue-600 font-semibold">
                                        {{ __('welcome2.structures.view_details') }} <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-span-3">
                        <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
                            <p class="font-bold">{{ __('welcome2.structures.no_data') }}</p>
                        </div>
                    </div>
                @endif
            </div>
            @if(isset($polyclinics) && $polyclinics->count() > 0)
                <div class="text-center mt-12">
                    <a href="{{ route('polyclinics') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg text-lg">
                        <i class="fas fa-th-large mr-2"></i>
                        {{ __('welcome2.structures.view_all') }}
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="py-16 bg-gray-50 wow fadeInUp" data-wow-delay="0.5s">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-500">{{ __('welcome2.testimonials.title') }}</h2>
                <p class="text-xl text-gray-600 mt-2">{{ __('welcome2.testimonials.subtitle') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="flex items-center mb-4">
                        <img src="https://ui-avatars.com/api/?name=Ahmed+Benali&background=007BFF&color=fff&size=60"
                             class="w-16 h-16 rounded-full mr-4"
                             alt="Ahmed Benali">
                        <div>
                            <h5 class="text-lg font-semibold">Ahmed Benali</h5>
                            <small class="text-gray-500">{{ __('welcome2.testimonials.patient') }}</small>
                        </div>
                    </div>
                    <div class="mb-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic">
                        <i class="fas fa-quote-left text-blue-500 mr-2"></i>
                        {{ app()->getLocale() == 'ar' ? 'خدمة ممتازة وطاقم طبي محترف. أنا ممتن جدًا للرعاية التي تلقيتها في مؤسسة الصحة الجوارية بشير منتوري.' : (app()->getLocale() == 'fr' ? 'Excellent service et personnel médical professionnel. Je suis très reconnaissant pour les soins que j\'ai reçus à l\'EPSP Bachir Mentouri.' : 'Excellent service and professional medical staff. I am very grateful for the care I received at EPSP Bachir Mentouri.') }}
                        <i class="fas fa-quote-right text-blue-500 ml-2"></i>
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="flex items-center mb-4">
                        <img src="https://ui-avatars.com/api/?name=Fatima+Zahra&background=28a745&color=fff&size=60"
                             class="w-16 h-16 rounded-full mr-4"
                             alt="Fatima Zahra">
                        <div>
                            <h5 class="text-lg font-semibold">Fatima Zahra</h5>
                            <small class="text-gray-500">{{ __('welcome2.testimonials.patient') }}</small>
                        </div>
                    </div>
                    <div class="mb-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic">
                        <i class="fas fa-quote-left text-blue-500 mr-2"></i>
                        {{ app()->getLocale() == 'ar' ? 'مرافق حديثة ورعاية شخصية. الأطباء والممرضات متفانون حقًا في عملهم.' : (app()->getLocale() == 'fr' ? 'Installations modernes et soins personnalisés. Les médecins et infirmières sont vraiment dévoués à leur travail.' : 'Modern facilities and personalized care. The doctors and nurses are truly dedicated to their work.') }}
                        <i class="fas fa-quote-right text-blue-500 ml-2"></i>
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="flex items-center mb-4">
                        <img src="https://ui-avatars.com/api/?name=Karim+Mansouri&background=dc3545&color=fff&size=60"
                             class="w-16 h-16 rounded-full mr-4"
                             alt="Karim Mansouri">
                        <div>
                            <h5 class="text-lg font-semibold">Karim Mansouri</h5>
                            <small class="text-gray-500">{{ __('welcome2.testimonials.patient') }}</small>
                        </div>
                    </div>
                    <div class="mb-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic">
                        <i class="fas fa-quote-left text-blue-500 mr-2"></i>
                        {{ app()->getLocale() == 'ar' ? 'أفضل مركز صحي في المنطقة. أوصي به بشدة لجميع أفراد عائلتي وأصدقائي.' : (app()->getLocale() == 'fr' ? 'Le meilleur centre de santé de la région. Je le recommande vivement à tous mes proches.' : 'The best healthcare center in the region. I highly recommend it to all my family and friends.') }}
                        <i class="fas fa-quote-right text-blue-500 ml-2"></i>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- About Column -->
                <div>
                    <h5 class="uppercase mb-4 font-bold">{{ __('welcome2.footer.about_title') }}</h5>
                    <p class="text-gray-400">{{ __('welcome2.footer.about_text') }}</p>
                    <div class="mt-4">
                        <img src="{{ asset('WebSite/images/footer-logo.png') }}"
                             alt="{{ __('welcome2.title') }}"
                             class="max-w-[150px] mb-4"
                             onerror="this.style.display='none'">
                    </div>
                </div>

                <!-- Contact Column -->
                <div>
                    <h5 class="uppercase mb-4 font-bold">{{ __('welcome2.footer.coordinates') }}</h5>
                    <ul class="list-none">
                        <li class="mb-3 flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-400 mr-3 mt-1"></i>
                            <span class="text-gray-400">{{ __('welcome2.footer.address') }}</span>
                        </li>
                        <li class="mb-3 flex items-center">
                            <i class="fas fa-phone text-blue-400 mr-3"></i>
                            <a href="tel:+21321XXXXXX" class="text-gray-400 hover:text-white">{{ __('welcome2.footer.phone') }}</a>
                        </li>
                        <li class="mb-3 flex items-center">
                            <i class="fas fa-envelope text-blue-400 mr-3"></i>
                            <a href="mailto:contact@epspbm.dz" class="text-gray-400 hover:text-white">{{ __('welcome2.footer.email') }}</a>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links Column -->
                <div>
                    <h5 class="uppercase mb-4 font-bold">{{ __('welcome2.footer.quick_links') }}</h5>
                    <ul class="list-none">
                        <li class="mb-2">
                            <a href="{{ url('/') }}" class="text-gray-400 hover:text-white flex items-center">
                                <i class="fas fa-chevron-right mr-2"></i>{{ __('welcome2.navbar.home') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('services') }}" class="text-gray-400 hover:text-white flex items-center">
                                <i class="fas fa-chevron-right mr-2"></i>{{ __('welcome2.navbar.services') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('about') }}" class="text-gray-400 hover:text-white flex items-center">
                                <i class="fas fa-chevron-right mr-2"></i>{{ __('welcome2.navbar.about') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('contact') }}" class="text-gray-400 hover:text-white flex items-center">
                                <i class="fas fa-chevron-right mr-2"></i>{{ __('welcome2.navbar.contact') }}
                            </a>
                        </li>
                    </ul>

                    <!-- Social Media -->
                    <h5 class="uppercase mb-3 mt-6 font-bold">{{ __('welcome2.footer.social_media') }}</h5>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-500 rounded-full flex items-center justify-center">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-500 rounded-full flex items-center justify-center">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-500 rounded-full flex items-center justify-center">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-500 rounded-full flex items-center justify-center">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-gray-700">

            <!-- Copyright -->
            <div class="flex flex-wrap items-center justify-between">
                <div class="w-full md:w-1/2 text-center md:text-left">
                    <p class="text-sm text-gray-400">{{ __('welcome2.footer.copyright') }}</p>
                </div>
                <div class="w-full md:w-1/2 text-center md:text-right">
                    <a href="#" class="text-sm text-gray-400 hover:text-white mx-2">{{ __('welcome2.footer.privacy') }}</a>
                    <a href="#" class="text-sm text-gray-400 hover:text-white mx-2">{{ __('welcome2.footer.terms') }}</a>
                </div>
            </div>
        </div>
    </footer>

    </body>

    </html>
