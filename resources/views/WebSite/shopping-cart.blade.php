@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.shopping_cart') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li><a href="{{ url('shop') }}">{{ trans('website.shop') }}</a></li>
                <li>{{ trans('website.shopping_cart') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Cart Section -->
    <section class="cart-section">
        <div class="auto-container">
            <!-- Cart Outer -->
            <div class="cart-outer">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th class="prod-column">{{ trans('website.product') }}</th>
                                <th>&nbsp;</th>
                                <th class="price">{{ trans('website.price') }}</th>
                                <th class="qty">{{ trans('website.quantity') }}</th>
                                <th>{{ trans('website.total') }}</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="cart-item">
                                <td class="prod-column">
                                    <div class="column-box">
                                        <div class="prod-thumb">
                                            <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-1.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="prod-title">
                                    <div class="title">Digital Thermometer</div>
                                    <div class="sku">SKU: DT-001</div>
                                </td>
                                <td class="price">$25.00</td>
                                <td class="qty">
                                    <div class="item-quantity">
                                        <input class="quantity-spinner" type="text" value="1" name="quantity">
                                    </div>
                                </td>
                                <td class="sub-total">$25.00</td>
                                <td class="remove">
                                    <a href="#" class="remove-btn"><span class="fa fa-times"></span></a>
                                </td>
                            </tr>

                            <tr class="cart-item">
                                <td class="prod-column">
                                    <div class="column-box">
                                        <div class="prod-thumb">
                                            <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-2.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="prod-title">
                                    <div class="title">Blood Pressure Monitor</div>
                                    <div class="sku">SKU: BP-002</div>
                                </td>
                                <td class="price">$45.00</td>
                                <td class="qty">
                                    <div class="item-quantity">
                                        <input class="quantity-spinner" type="text" value="2" name="quantity">
                                    </div>
                                </td>
                                <td class="sub-total">$90.00</td>
                                <td class="remove">
                                    <a href="#" class="remove-btn"><span class="fa fa-times"></span></a>
                                </td>
                            </tr>

                            <tr class="cart-item">
                                <td class="prod-column">
                                    <div class="column-box">
                                        <div class="prod-thumb">
                                            <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-3.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="prod-title">
                                    <div class="title">Pulse Oximeter</div>
                                    <div class="sku">SKU: PO-003</div>
                                </td>
                                <td class="price">$35.00</td>
                                <td class="qty">
                                    <div class="item-quantity">
                                        <input class="quantity-spinner" type="text" value="1" name="quantity">
                                    </div>
                                </td>
                                <td class="sub-total">$35.00</td>
                                <td class="remove">
                                    <a href="#" class="remove-btn"><span class="fa fa-times"></span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="cart-options clearfix">
                    <div class="pull-left">
                        <div class="apply-coupon clearfix">
                            <div class="form-group">
                                <input type="text" name="coupon-code" value="" placeholder="{{ trans('website.coupon_code') }}">
                            </div>
                            <div class="form-group">
                                <button type="button" class="theme-btn btn-style-two">
                                    <span class="txt">{{ trans('website.apply_coupon') }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="button" class="theme-btn btn-style-two">
                            <span class="txt">{{ trans('website.update_cart') }}</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <!-- Calculate Shipping -->
                    <div class="calculate-shipping">
                        <h3>{{ trans('website.calculate_shipping') }}</h3>
                        <form method="post" action="#">
                            @csrf
                            <div class="form-group">
                                <select class="custom-select-box">
                                    <option>{{ trans('website.select_country') }}</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>Canada</option>
                                    <option>Australia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="state" placeholder="{{ trans('website.state_province') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="zip" placeholder="{{ trans('website.zip_code') }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-two">
                                    <span class="txt">{{ trans('website.update_totals') }}</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <!-- Cart Totals -->
                    <div class="cart-totals">
                        <h3>{{ trans('website.cart_totals') }}</h3>
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('website.subtotal') }}</td>
                                    <td class="price">$150.00</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('website.shipping') }}</td>
                                    <td class="price">$10.00</td>
                                </tr>
                                <tr class="total">
                                    <td>{{ trans('website.total') }}</td>
                                    <td class="price">$160.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ url('checkout') }}" class="theme-btn btn-style-two">
                            <span class="txt">{{ trans('website.proceed_to_checkout') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Section -->
@endsection

