@extends('WebSite.layouts.master')

@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Our Services</span>
                        <h1 class="text-capitalize mb-5 text-lg">What We Do</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section service-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="images/service/service-1.jpg" alt="" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Child Care</h4>
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="images/service/service-2.jpg" alt="" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Personal Care</h4>
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="images/service/service-3.jpg" alt="" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">CT scan</h4>
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
