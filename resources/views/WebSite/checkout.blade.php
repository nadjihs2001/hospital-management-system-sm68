@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.checkout') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li><a href="{{ url('shop') }}">{{ trans('website.shop') }}</a></li>
                <li>{{ trans('website.checkout') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Checkout Section -->
    <section class="checkout-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Billing Details -->
                <div class="column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3>{{ trans('website.billing_details') }}</h3>
                        <div class="checkout-form">
                            <form method="post" action="#">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>{{ trans('website.first_name') }} *</label>
                                        <input type="text" name="firstname" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>{{ trans('website.last_name') }} *</label>
                                        <input type="text" name="lastname" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>{{ trans('website.company_name') }}</label>
                                        <input type="text" name="company">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>{{ trans('website.country') }} *</label>
                                        <select class="custom-select-box" required>
                                            <option>{{ trans('website.select_country') }}</option>
                                            <option>United States</option>
                                            <option>United Kingdom</option>
                                            <option>Canada</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>{{ trans('website.street_address') }} *</label>
                                        <input type="text" name="address" placeholder="{{ trans('website.house_number_street') }}" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="address2" placeholder="{{ trans('website.apartment_suite') }}">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>{{ trans('website.town_city') }} *</label>
                                        <input type="text" name="city" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>{{ trans('website.state_province') }} *</label>
                                        <input type="text" name="state" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>{{ trans('website.zip_code') }} *</label>
                                        <input type="text" name="zip" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>{{ trans('website.phone') }} *</label>
                                        <input type="text" name="phone" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>{{ trans('website.email') }} *</label>
                                        <input type="email" name="email" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <div class="check-box">
                                            <input type="checkbox" name="shipping-option" id="account-option">
                                            <label for="account-option">{{ trans('website.create_account') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <div class="check-box">
                                            <input type="checkbox" name="shipping-option" id="shipping-option">
                                            <label for="shipping-option">{{ trans('website.ship_different_address') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>{{ trans('website.order_notes') }}</label>
                                        <textarea name="message" placeholder="{{ trans('website.order_notes_placeholder') }}"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Order Details -->
                <div class="column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3>{{ trans('website.your_order') }}</h3>
                        <div class="order-box">
                            <table>
                                <thead>
                                    <tr>
                                        <th>{{ trans('website.product') }}</th>
                                        <th class="text-right">{{ trans('website.total') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Digital Thermometer x 1</td>
                                        <td class="text-right">$25.00</td>
                                    </tr>
                                    <tr>
                                        <td>Blood Pressure Monitor x 2</td>
                                        <td class="text-right">$90.00</td>
                                    </tr>
                                    <tr>
                                        <td>Pulse Oximeter x 1</td>
                                        <td class="text-right">$35.00</td>
                                    </tr>
                                    <tr class="subtotal">
                                        <td>{{ trans('website.subtotal') }}</td>
                                        <td class="text-right">$150.00</td>
                                    </tr>
                                    <tr class="shipping">
                                        <td>{{ trans('website.shipping') }}</td>
                                        <td class="text-right">$10.00</td>
                                    </tr>
                                    <tr class="total">
                                        <td>{{ trans('website.total') }}</td>
                                        <td class="text-right">$160.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Payment Options -->
                        <div class="payment-options">
                            <h4>{{ trans('website.payment_method') }}</h4>
                            <ul>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment-group" id="payment-1" checked>
                                        <label for="payment-1">{{ trans('website.direct_bank_transfer') }}</label>
                                    </div>
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                </li>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment-group" id="payment-2">
                                        <label for="payment-2">{{ trans('website.check_payment') }}</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment-group" id="payment-3">
                                        <label for="payment-3">{{ trans('website.cash_on_delivery') }}</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment-group" id="payment-4">
                                        <label for="payment-4">{{ trans('website.paypal') }}</label>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="text">
                            Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.
                        </div>

                        <div class="form-group">
                            <button type="submit" class="theme-btn btn-style-two">
                                <span class="txt">{{ trans('website.place_order') }}</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Checkout Section -->
@endsection

