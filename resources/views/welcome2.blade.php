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
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="bg-gray-100">

    <!-- HEADER -->
    <header x-data="{ open: false, dropdownOpen: false }" class="bg-white shadow-sm">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <a href="#" class="text-xl font-bold text-gray-800 hover:text-blue-600 transition-colors">{{ __('welcome2.title') }}</a>
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
                    <a href="/" class="my-2 text-gray-800 hover:text-blue-600 lg:mx-4 lg:my-0 transition-colors">{{ __('welcome2.navbar.home') }}</a>
                    <a href="/services" class="my-2 text-gray-800 hover:text-blue-600 lg:mx-4 lg:my-0 transition-colors">{{ __('welcome2.navbar.services') }}</a>
                    <a href="/about" class="my-2 text-gray-800 hover:text-blue-600 lg:mx-4 lg:my-0 transition-colors">{{ __('welcome2.navbar.about') }}</a>
                    <a href="/contact" class="my-2 text-gray-800 hover:text-blue-600 lg:mx-4 lg:my-0 transition-colors">{{ __('welcome2.navbar.contact') }}</a>
                </div>

                <div class="flex flex-col lg:flex-row lg:items-center">
                    <div x-data="{ dropdownOpen: false }" class="relative my-2 lg:my-0">
                        <button @click="dropdownOpen = !dropdownOpen" class="flex items-center text-gray-800 hover:text-blue-600 focus:outline-none lg:mx-4 transition-colors">
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
                        <div x-show="dropdownOpen" @click.away="dropdownOpen = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20 border border-gray-200">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white {{ app()->getLocale() == $localeCode ? 'bg-blue-500 text-white' : '' }} transition-colors">
                                    {{ $properties['native'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <a href="/login" class="my-2 text-gray-800 hover:text-blue-600 lg:mx-4 lg:my-0 transition-colors">{{ __('welcome2.navbar.login') }}</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- HERO SECTION -->
    <section class="relative h-[500px] lg:h-[600px] overflow-hidden" x-data="carousel()" x-init="start()">
        <template x-for="(slide, index) in slides" :key="index">
            <div
                x-show="active === index"
                class="absolute inset-0 w-full h-full bg-cover bg-center transition-all duration-1000 ease-in-out"
                :style="'background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(\"' + slide.image + '\");'"
                x-transition:enter="transition ease-in-out duration-1000"
                x-transition:enter-start="opacity-0 transform translate-y-10"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in-out duration-1000"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-10"
            >
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center text-white px-4 sm:px-6 lg:px-8 max-w-4xl">
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold mb-4 leading-tight" x-text="slide.title"></h2>
                        <p class="text-base sm:text-lg lg:text-xl mb-8 max-w-2xl mx-auto" x-text="slide.subtitle"></p>
                        <a :href="slide.button_url" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg text-base sm:text-lg transition-colors duration-300 transform hover:scale-105" x-text="slide.button_text"></a>
                    </div>
                </div>
            </div>
        </template>

        <!-- Carousel Indicators -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
            <template x-for="(slide, index) in slides" :key="index">
                <button
                    @click="goTo(index)"
                    class="w-3 h-3 rounded-full transition-colors duration-300"
                    :class="active === index ? 'bg-white' : 'bg-white/50 hover:bg-white/75'"
                    aria-label="Go to slide " x-text="index + 1"
                ></button>
            </template>
        </div>

        <!-- Navigation Arrows -->
        <button @click="prev()" class="absolute left-4 top-1/2 transform -translate-y-1/2 z-10 w-12 h-12 bg-black/30 hover:bg-black/50 text-white rounded-full transition-colors">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button @click="next()" class="absolute right-4 top-1/2 transform -translate-y-1/2 z-10 w-12 h-12 bg-black/30 hover:bg-black/50 text-white rounded-full transition-colors">
            <i class="fas fa-chevron-right"></i>
        </button>
    </section>

    <!-- ABOUT US SECTION -->
    <section class="py-16 lg:py-20 bg-gray-50 wow fadeInUp" data-wow-delay="0.2s">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full lg:w-1/2 px-4 mb-10 lg:mb-0">
                    <div class="relative">
                        <img src="{{ asset('WebSite/images/resource/about-epsp.jpg') }}"
                             alt="{{ __('welcome2.about.title') }}"
                             class="w-full h-auto rounded-xl shadow-2xl transform hover:scale-105 transition-transform duration-500"
                             onerror="this.src='https://via.placeholder.com/600x400/007BFF/FFFFFF?text=EPSP+Bachir+Mentouri'">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-transparent rounded-xl"></div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-4">
                    <div class="max-w-lg">
                        <h2 class="text-3xl sm:text-4xl font-bold text-blue-600 mb-6 leading-tight">{{ __('welcome2.about.title') }}</h2>
                        <p class="text-lg sm:text-xl text-gray-700 mb-6 font-medium">{{ __('welcome2.about.text') }}</p>
                        <p class="text-gray-600 mb-8 leading-relaxed">{{ __('welcome2.about.text2') }}</p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check-circle text-green-500 text-2xl mr-3"></i>
                                </div>
                                <div>
                                    <h5 class="text-lg font-semibold text-gray-800">{{ __('website.experienced_doctors') ?? 'Experienced Doctors' }}</h5>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check-circle text-green-500 text-2xl mr-3"></i>
                                </div>
                                <div>
                                    <h5 class="text-lg font-semibold text-gray-800">{{ __('website.modern_facilities') ?? 'Modern Facilities' }}</h5>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('about') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg text-lg transition-colors duration-300 transform hover:translate-y-[-2px] shadow-lg hover:shadow-xl">
                            {{ __('welcome2.about.button') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="py-16 lg:py-20 bg-white wow fadeInUp" data-wow-delay="0.3s">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-blue-600 mb-4">{{ __('welcome2.services.title') }}</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">{{ __('welcome2.services.subtitle') }}</p>
                <div class="w-24 h-1 bg-blue-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @if(isset($services) && $services->count() > 0)
                    @foreach($services as $index => $service)
                        <div class="bg-white rounded-xl shadow-xl overflow-hidden transform hover:-translate-y-3 hover:shadow-2xl transition-all duration-500 group">
                            <div class="p-8 text-center relative">
                                <div class="mb-6 relative z-10">
                                    @if($service->icon_class)
                                        <i class="{{ $service->icon_class }} text-5xl sm:text-6xl" style="color: {{ $service->color_code ?? '#007BFF' }};"></i>
                                    @else
                                        <i class="flaticon-stethoscope text-5xl sm:text-6xl text-blue-500"></i>
                                    @endif
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl"></div>
                                <div class="relative z-10">
                                    <h4 class="text-xl sm:text-2xl font-semibold mb-3 text-gray-800 group-hover:text-blue-600 transition-colors">{{ $service->name }}</h4>
                                    <p class="text-gray-600 mb-6 leading-relaxed">{{ Str::limit($service->description, 100) }}</p>
                                    @if($service->price)
                                        <p class="text-blue-600 font-bold text-lg mb-4">{{ $service->formatted_price }}</p>
                                    @endif
                                    <a href="{{ route('service-details', $service->id) }}" class="inline-block border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300 transform hover:scale-105">
                                        {{ __('website.learn_more') ?? 'Learn More' }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Default Services if no data -->
                    <div class="bg-white rounded-xl shadow-xl overflow-hidden transform hover:-translate-y-3 hover:shadow-2xl transition-all duration-500">
                        <div class="p-8 text-center">
                            <div class="mb-6">
                                <i class="flaticon-stethoscope text-5xl sm:text-6xl text-blue-500"></i>
                            </div>
                            <h4 class="text-xl sm:text-2xl font-semibold mb-3 text-gray-800">{{ __('website.general_medicine') ?? 'General Medicine' }}</h4>
                            <p class="text-gray-600 mb-6">{{ __('website.general_medicine_desc') ?? 'Comprehensive primary healthcare services' }}</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-xl overflow-hidden transform hover:-translate-y-3 hover:shadow-2xl transition-all duration-500">
                        <div class="p-8 text-center">
                            <div class="mb-6">
                                <i class="flaticon-pediatrician text-5xl sm:text-6xl text-green-500"></i>
                            </div>
                            <h4 class="text-xl sm:text-2xl font-semibold mb-3 text-gray-800">{{ __('website.pediatrics') ?? 'Pediatrics' }}</h4>
                            <p class="text-gray-600 mb-6">{{ __('website.pediatrics_desc') ?? 'Specialized care for children' }}</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-xl overflow-hidden transform hover:-translate-y-3 hover:shadow-2xl transition-all duration-500">
                        <div class="p-8 text-center">
                            <div class="mb-6">
                                <i class="flaticon-laboratory text-5xl sm:text-6xl text-red-500"></i>
                            </div>
                            <h4 class="text-xl sm:text-2xl font-semibold mb-3 text-gray-800">{{ __('website.laboratory') ?? 'Laboratory' }}</h4>
                            <p class="text-gray-600 mb-6">{{ __('website.laboratory_desc') ?? 'Advanced diagnostic testing' }}</p>
                        </div>
                    </div>
                @endif
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('services') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg text-lg transition-colors duration-300 transform hover:translate-y-[-2px] shadow-lg hover:shadow-xl">
                    {{ __('welcome2.services.button') }}
                </a>
            </div>
        </div>
    </section>

    <!-- STRUCTURES SECTION -->
    <section class="py-16 lg:py-20 bg-gray-50 wow fadeInUp" data-wow-delay="0.4s">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-blue-600 mb-4">{{ __('welcome2.structures.title') }}</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">{{ __('welcome2.structures.subtitle') }}</p>
                <div class="w-24 h-1 bg-blue-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @if(isset($polyclinics) && $polyclinics->count() > 0)
                    @foreach($polyclinics as $polyclinic)
                        <div class="bg-white rounded-xl shadow-xl overflow-hidden transform hover:-translate-y-3 hover:shadow-2xl transition-all duration-500 group">
                            <div class="relative">
                                <img src="{{ asset('WebSite/images/resource/structure-' . $loop->iteration . '.jpg') }}"
                                     class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500"
                                     alt="{{ $polyclinic->name }}"
                                     onerror="this.src='https://via.placeholder.com/400x250/007BFF/FFFFFF?text={{ urlencode($polyclinic->name) }}'">
                                <div class="absolute top-4 right-4 flex flex-wrap gap-2">
                                    <span class="bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-sm">
                                        <i class="fas fa-user-md mr-1"></i> {{ $polyclinic->doctors->count() }} {{ __('welcome2.structures.doctors') }}
                                    </span>
                                    <span class="bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-sm">
                                        <i class="fas fa-stethoscope mr-1"></i> {{ $polyclinic->services->count() }} {{ __('welcome2.structures.services') }}
                                    </span>
                                </div>
                                <div class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <a href="{{ route('polyclinic-details', $polyclinic->id) }}" class="bg-white text-gray-800 font-bold py-3 px-6 rounded-lg flex items-center transform hover:scale-105 transition-transform">
                                        <i class="fas fa-eye mr-2"></i>
                                        {{ __('welcome2.structures.view_details') }}
                                    </a>
                                </div>
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold text-blue-600 mb-3 flex items-center">
                                    <i class="fas fa-hospital-alt mr-2 text-blue-500"></i>
                                    {{ $polyclinic->name }}
                                </h4>
                                <p class="text-gray-600 mb-6 leading-relaxed">{{ Str::limit($polyclinic->description, 100) }}</p>

                                <div class="grid grid-cols-3 gap-4 text-center mb-6 border-t border-b border-gray-100 py-4">
                                    <div>
                                        <h5 class="font-bold text-blue-600 text-xl">{{ $polyclinic->doctors->count() }}</h5>
                                        <small class="text-gray-500 text-sm">{{ __('welcome2.structures.doctors') }}</small>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-green-600 text-xl">{{ $polyclinic->services->count() }}</h5>
                                        <small class="text-gray-500 text-sm">{{ __('welcome2.structures.services') }}</small>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-indigo-600 text-xl">{{ $polyclinic->activeEmployees->count() }}</h5>
                                        <small class="text-gray-500 text-sm">{{ __('welcome2.structures.employees') }}</small>
                                    </div>
                                </div>

                                @if($polyclinic->services->count() > 0)
                                    <div class="mb-6">
                                        <h6 class="text-gray-700 font-semibold mb-3 flex items-center">
                                            <i class="fas fa-stethoscope mr-2 text-blue-500"></i>
                                            {{ __('welcome2.structures.available_services') }}:
                                        </h6>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($polyclinic->services->take(3) as $service)
                                                <span class="bg-gray-100 text-gray-800 text-xs font-semibold px-3 py-1 rounded-full border border-gray-200">{{ $service->name }}</span>
                                            @endforeach
                                            @if($polyclinic->services->count() > 3)
                                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded-full">+{{ $polyclinic->services->count() - 3 }}</span>
                                            @endif
                                        </div>
                                    </div>
                                @endif

                                <div class="text-right">
                                    <a href="{{ route('polyclinic-details', $polyclinic->id) }}" class="text-blue-600 hover:text-blue-700 font-semibold text-sm flex items-center justify-end">
                                        {{ __('welcome2.structures.view_details') }} <i class="fas fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-span-3">
                        <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 rounded-lg" role="alert">
                            <p class="font-bold">{{ __('welcome2.structures.no_data') }}</p>
                        </div>
                    </div>
                @endif
            </div>

            @if(isset($polyclinics) && $polyclinics->count() > 0)
                <div class="text-center mt-12">
                    <a href="{{ route('polyclinics') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg text-lg transition-colors duration-300 transform hover:translate-y-[-2px] shadow-lg hover:shadow-xl">
                        <i class="fas fa-th-large mr-2"></i>
                        {{ __('welcome2.structures.view_all') }}
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="py-16 lg:py-20 bg-white wow fadeInUp" data-wow-delay="0.5s">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-blue-600 mb-4">{{ __('welcome2.testimonials.title') }}</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">{{ __('welcome2.testimonials.subtitle') }}</p>
                <div class="w-24 h-1 bg-blue-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-xl shadow-xl p-8 transform hover:-translate-y-2 hover:shadow-2xl transition-all duration-500">
                    <div class="flex items-center mb-6">
                        <img src="https://ui-avatars.com/api/?name=Ahmed+Benali&background=007BFF&color=fff&size=60"
                             class="w-16 h-16 rounded-full mr-4 border-2 border-blue-200 shadow-sm"
                             alt="Ahmed Benali">
                        <div>
                            <h5 class="text-lg font-semibold text-gray-800">Ahmed Benali</h5>
                            <small class="text-gray-500 block mt-1">{{ __('welcome2.testimonials.patient') }}</small>
                        </div>
                    </div>
                    <div class="mb-4 text-yellow-400 text-xl">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic leading-relaxed">
                        <i class="fas fa-quote-left text-blue-500 mr-2 text-2xl"></i>
                        {{ app()->getLocale() == 'ar' ? 'خدمة ممتازة وطاقم طبي محترف. أنا ممتن جدًا للرعاية التي تلقيتها في مؤسسة الصحة الجوارية بشير منتوري.' : (app()->getLocale() == 'fr' ? 'Excellent service et personnel médical professionnel. Je suis très reconnaissant pour les soins que j\'ai reçus à l\'EPSP Bachir Mentouri.' : 'Excellent service and professional medical staff. I am very grateful for the care I received at EPSP Bachir Mentouri.') }}
                        <i class="fas fa-quote-right text-blue-500 ml-2 text-2xl"></i>
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-xl shadow-xl p-8 transform hover:-translate-y-2 hover:shadow-2xl transition-all duration-500">
                    <div class="flex items-center mb-6">
                        <img src="https://ui-avatars.com/api/?name=Fatima+Zahra&background=28a745&color=fff&size=60"
                             class="w-16 h-16 rounded-full mr-4 border-2 border-green-200 shadow-sm"
                             alt="Fatima Zahra">
                        <div>
                            <h5 class="text-lg font-semibold text-gray-800">Fatima Zahra</h5>
                            <small class="text-gray-500 block mt-1">{{ __('welcome2.testimonials.patient') }}</small>
                        </div>
                    </div>
                    <div class="mb-4 text-yellow-400 text-xl">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic leading-relaxed">
                        <i class="fas fa-quote-left text-blue-500 mr-2 text-2xl"></i>
                        {{ app()->getLocale() == 'ar' ? 'مرافق حديثة ورعاية شخصية. الأطباء والممرضات متفانون حقًا في عملهم.' : (app()->getLocale() == 'fr' ? 'Installations modernes et soins personnalisés. Les médecins et infirmières sont vraiment dévoués à leur travail.' : 'Modern facilities and personalized care. The doctors and nurses are truly dedicated to their work.') }}
                        <i class="fas fa-quote-right text-blue-500 ml-2 text-2xl"></i>
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-xl shadow-xl p-8 transform hover:-translate-y-2 hover:shadow-2xl transition-all duration-500">
                    <div class="flex items-center mb-6">
                        <img src="https://ui-avatars.com/api/?name=Karim+Mansouri&background=dc3545&color=fff&size=60"
                             class="w-16 h-16 rounded-full mr-4 border-2 border-red-200 shadow-sm"
                             alt="Karim Mansouri">
                        <div>
                            <h5 class="text-lg font-semibold text-gray-800">Karim Mansouri</h5>
                            <small class="text-gray-500 block mt-1">{{ __('welcome2.testimonials.patient') }}</small>
                        </div>
                    </div>
                    <div class="mb-4 text-yellow-400 text-xl">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic leading-relaxed">
                        <i class="fas fa-quote-left text-blue-500 mr-2 text-2xl"></i>
                        {{ app()->getLocale() == 'ar' ? 'أفضل مركز صحي في المنطقة. أوصي به بشدة لجميع أفراد عائلتي وأصدقائي.' : (app()->getLocale() == 'fr' ? 'Le meilleur centre de santé de la région. Je le recommande vivement à tous mes proches.' : 'The best healthcare center in the region. I highly recommend it to all my family and friends.') }}
                        <i class="fas fa-quote-right text-blue-500 ml-2 text-2xl"></i>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white py-12 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- About Column -->
                <div class="lg:col-span-1">
                    <h5 class="uppercase mb-4 font-bold text-lg tracking-wider">{{ __('welcome2.footer.about_title') }}</h5>
                    <p class="text-gray-400 mb-6 leading-relaxed">{{ __('welcome2.footer.about_text') }}</p>
                    <div class="mt-4">
                        <img src="{{ asset('WebSite/images/footer-logo.png') }}"
                             alt="{{ __('welcome2.title') }}"
                             class="max-w-[150px] h-auto mb-4 transition-transform hover:scale-105"
                             onerror="this.style.display='none'">
                    </div>
                </div>

                <!-- Contact Column -->
                <div>
                    <h5 class="uppercase mb-4 font-bold text-lg tracking-wider">{{ __('welcome2.footer.coordinates') }}</h5>
                    <ul class="list-none space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-400 mr-3 mt-1 text-lg"></i>
                            <span class="text-gray-400">{{ __('welcome2.footer.address') }}</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone text-blue-400 mr-3 text-lg"></i>
                            <a href="tel:+21321XXXXXX" class="text-gray-400 hover:text-white transition-colors">{{ __('welcome2.footer.phone') }}</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-blue-400 mr-3 text-lg"></i>
                            <a href="mailto:contact@epspbm.dz" class="text-gray-400 hover:text-white transition-colors">{{ __('welcome2.footer.email') }}</a>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links Column -->
                <div>
                    <h5 class="uppercase mb-4 font-bold text-lg tracking-wider">{{ __('welcome2.footer.quick_links') }}</h5>
                    <ul class="list-none space-y-3">
                        <li>
                            <a href="{{ url('/') }}" class="text-gray-400 hover:text-white flex items-center transition-colors">
                                <i class="fas fa-chevron-right mr-2 text-sm"></i>{{ __('welcome2.navbar.home') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}" class="text-gray-400 hover:text-white flex items-center transition-colors">
                                <i class="fas fa-chevron-right mr-2 text-sm"></i>{{ __('welcome2.navbar.services') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="text-gray-400 hover:text-white flex items-center transition-colors">
                                <i class="fas fa-chevron-right mr-2 text-sm"></i>{{ __('welcome2.navbar.about') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="text-gray-400 hover:text-white flex items-center transition-colors">
                                <i class="fas fa-chevron-right mr-2 text-sm"></i>{{ __('welcome2.navbar.contact') }}
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Social Media & Newsletter Column -->
                <div>
                    <h5 class="uppercase mb-4 font-bold text-lg tracking-wider">{{ __('welcome2.footer.social_media') }}</h5>
                    <div class="flex space-x-4 mb-6">
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-500 rounded-full flex items-center justify-center transition-colors transform hover:scale-110">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-500 rounded-full flex items-center justify-center transition-colors transform hover:scale-110">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-500 rounded-full flex items-center justify-center transition-colors transform hover:scale-110">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-500 rounded-full flex items-center justify-center transition-colors transform hover:scale-110">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>

                    <!-- Newsletter Signup -->
                    <h5 class="uppercase mb-3 font-bold text-lg tracking-wider">{{ __('welcome2.footer.newsletter') ?? 'Newsletter' }}</h5>
                    <p class="text-gray-400 text-sm mb-3">{{ __('welcome2.footer.newsletter_text') ?? 'Subscribe to our newsletter for health tips and updates' }}</p>
                    <div class="flex">
                        <input type="email" placeholder="{{ __('welcome2.footer.email_placeholder') ?? 'Your email' }}" class="flex-1 px-4 py-2 rounded-l-lg bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-r-lg transition-colors">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>

            <hr class="my-8 border-gray-800">

            <!-- Copyright -->
            <div class="flex flex-wrap items-center justify-between">
                <div class="w-full md:w-1/2 text-center md:text-left mb-4 md:mb-0">
                    <p class="text-sm text-gray-400">{{ __('welcome2.footer.copyright') }}</p>
                </div>
                <div class="w-full md:w-1/2 text-center md:text-right">
                    <a href="#" class="text-sm text-gray-400 hover:text-white mx-2 transition-colors">{{ __('welcome2.footer.privacy') }}</a>
                    <a href="#" class="text-sm text-gray-400 hover:text-white mx-2 transition-colors">{{ __('welcome2.footer.terms') }}</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        function carousel() {
            return {
                active: 0,
                slides: [
                    {
                        image: "{{ asset('WebSite/images/main-slider/slider-1.jpg') }}",
                        title: "{{ __('Protéger la santé de notre communauté') }}",
                        subtitle: "{{ __('Des soins de proximité pour tous.') }}",
                        button_text: "{{ __('Découvrir nos services') }}",
                        button_url: "{{ route('services') }}"
                    },
                    {
                        image: "{{ asset('WebSite/images/main-slider/2.jpg') }}",
                        title: "{{ __('Des soins de qualité pour tous') }}",
                        subtitle: "{{ __('Votre bien-être est notre mission.') }}",
                        button_text: "{{ __('Prendre rendez-vous') }}",
                        button_url: "#"
                    },
                    {
                        image: "{{ asset('WebSite/images/main-slider/3.jpg') }}",
                        title: "{{ __('Votre santé, notre priorité') }}",
                        subtitle: "{{ __('Technologie de pointe et expertise médicale.') }}",
                        button_text: "{{ __('En savoir plus') }}",
                        button_url: "{{ route('about') }}"
                    }
                ],
                start() {
                    setInterval(() => {
                        this.active = this.active === this.slides.length - 1 ? 0 : this.active + 1;
                    }, 5000);
                },
                next() {
                    this.active = this.active === this.slides.length - 1 ? 0 : this.active + 1;
                },
                prev() {
                    this.active = this.active === 0 ? this.slides.length - 1 : this.active - 1;
                },
                goTo(index) {
                    this.active = index;
                }
            }
        }
    </script>
    </body>

    </html>
