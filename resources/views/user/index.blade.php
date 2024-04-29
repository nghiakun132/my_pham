@extends('user.layouts.index')
@section('title', 'Trang chủ')
@section('content')
    @foreach ($result as $key => $item)
        <section class="man-banner spad">
            <div class="container-fluid">
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-header">
                                <p style="font-size: 20px; font-weight: bold; vertical-align: center">
                                    {{ $key }}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product-slider owl-carousel">
                                @foreach ($item as $value)
                                    <div class="product-item">
                                        <a href="{{ route('user.product.index', $value->slug) }}">
                                            <div class="pi-pic">
                                                <img src="{{ $value->image }}" alt="" style="height: 300px">
                                                @if ($value->sale > 0)
                                                    <div class="sale">Sale</div>
                                                @endif
                                                <div class="icon">
                                                    <a href="{{ route('user.white_list.add', $value->id) }}"
                                                        style="color: red; text-decoration: none;"><i
                                                            class="icon_heart_alt"></i></a>
                                                </div>
                                            </div>
                                            <div class="pi-text">
                                                <div class="catagory-name">
                                                    {{ $value->category->name }}
                                                </div>
                                                <a href="{{ route('user.product.index', $value->slug) }}">
                                                    <h5>
                                                        {{ $value->name }}
                                                    </h5>
                                                </a>
                                                <div class="product-price">
                                                    @if ($value->sale > 0)
                                                        {{ number_format($value->price - ($value->price * $value->sale) / 100) }}
                                                        <span>{{ number_format($value->price) }}</span>
                                                    @else
                                                        ${{ number_format($value->price) }}
                                                    @endif
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
    @endforeach

    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="{{ asset('user/img/insta-1.jpg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">

                    </a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{ asset('user/img/insta-2.jpg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#"></a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{ asset('user/img/insta-3.jpg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#"></a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{ asset('user/img/insta-4.jpg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#"></a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{ asset('user/img/insta-5.jpg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#"></a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{ asset('user/img/insta-6.jpg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#"></a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    {{-- <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="{{asset('user/img/latest-1.jpg')}}" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>The Best Street Style From London Fashion Week</h4>
                            </a>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="{{asset('user/img/latest-2.jpg')}}" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>Vogue's Ultimate Guide To Autumn/Winter 2019 Shoes</h4>
                            </a>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="{{asset('user/img/latest-3.jpg')}}" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>How To Brighten Your Wardrobe With A Dash Of Lime</h4>
                            </a>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{asset('user/img/icon-1.png')}}" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{asset('user/img/icon-2.png')}}" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery On Time</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{asset('user/img/icon-1.png')}}" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Latest Blog Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{ asset('user/img/logo-carousel/logo-1.png') }}" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{ asset('user/img/logo-carousel/logo-2.png') }}" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{ asset('user/img/logo-carousel/logo-3.png') }}" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{ asset('user/img/logo-carousel/logo-4.png') }}" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{ asset('user/img/logo-carousel/logo-5.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
