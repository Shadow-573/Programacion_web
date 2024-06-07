@extends('layouts.base')


@push('styles')

    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('assets/css/demo2.css')}}">

@endpush

@section('content')

<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>{{$product->name}}</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('app.index') }}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section> <!-- Shop Section start -->

<section>
    <div class="container">
        <div class="row gx-4 gy-5">
            <div class="col-lg-12 col-12">
                <div class="details-items">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="details-image-vertical black-slide rounded">
                                        <div>
                                            <img src="{{ asset('assets/images/fashion/product/front')}}/{{$product->image}}"
                                                class="img-fluid blur-up lazyload" alt="{{ $product->name }}">
                                        </div>
                                        @if ($product->images)

                                                                                @php
                                                                                    $images = explode(',', $product->images);
                                                                                @endphp
                                                                                @foreach ($images as $image)

                                                                                    <div>
                                                                                        <img src="{{ asset('assets/images/fashion/product/front')}}/{{$product->image}}"
                                                                                            class="img-fluid blur-up lazyload" alt="">
                                                                                    </div>


                                                                                @endforeach
                                        @endif

                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="details-image-1 ratio_asos">
                                        <div>
                                            <img src="{{ asset('assets/images/fashion/product/front')}}/{{$product->image}}"
                                                class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload"
                                                alt="{{ $product->name }}">
                                        </div>


                                        @if ($product->images)

                                                                                @php
                                                                                    $images = explode(',', $product->images);
                                                                                @endphp
                                                                                @foreach ($images as $image)

                                                                                    <div>
                                                                                        <img src="{{ asset('assets/images/fashion/product/front')}}/{{$product->image}}"
                                                                                            class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">
                                                                                    </div>


                                                                                @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="cloth-details-size">


                                <div class="details-image-pconcept">
                                    <h2>{{ $product->name }}</h2>
                                </div>



                                <h3 class="price-detail">
                                    @if ($product->sale_price)

                                        ${{$product->sale_price}}


                                        <del>${{$product->regular_price}}</del>
                                        <span>
                                            {{round((($product->regular_price - $product->sale_price) / $product->regular_price) * 100)}}
                                            %off</span>

                                    @else

                                        {{$product->regular_price}}


                                    @endif
                                </h3>



                                <div id="selectSize" class="addeffect-section product-description border-product">


                                    <h6 class="product-title product-title-2 d-block">quantity</h6>

                                    <form id="addtocart" method="post" action="{{route('cart.store')}}">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn quantity-left-minus"
                                                    onclick="updateQuantity()" data-type="minus" data-field="">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quantity" id="quantity"
                                                class="form-control input-number" value="1">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn quantity-right-plus"
                                                    onclick="updateQuantity()" data-type="plus" data-field="">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-buttons">

                                    <a href="javascript:void(0)" id="cartEffect" onclick="event.preventDefault();document.getElementById('addtocart').submit();" class="btn btn-solid hover-solid btn-animation">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Add To Cart</span>

                                            @csrf
                                            <input type="hidden" name="id" value="{{$product->id}}">

                                        </form>
                                    </a>



                                </div>



                                <div class="mt-2 mt-md-3 border-product">
                                    <h6 class="product-title hurry-title d-block">
                                        @if ($product->stock_status == 'instock')
                                            InStock
                                        @else
                                            Out of stock

                                        @endif
                                    </h6>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Shop Section end -->

<!-- product section start -->
<section class="ratio_asos section-b-space overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <center>
                <h2 class="mb-lg-4 mb-3">Customers Also Bought These</h2>
                </center>

                <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space">
                    <div>
                        @foreach ($rproducts as $rproduct)
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="{{ route('shop.product.details', ['slug' => $rproduct->slug])}}">
                                                <img src="{{ asset('assets/images/fashion/product/front')}}/{{$rproduct->image}}"
                                                    class="bg-img blur-up lazyload" alt="">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ route('shop.product.details', ['slug' => $rproduct->slug])}}">
                                                <img src="{{ asset('assets/images/fashion/product/front')}}/{{$rproduct->image}}"
                                                    class="bg-img blur-up lazyload" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-wrap">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                        data-bs-target="#addtocart">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" class="wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                        <div class="rating-details">
                                            <span class="font-light grid-content">{{$rproduct->category->name }}</span>
                                            <ul class="rating mt-0">
                                                <li>
                                                    <i class="fas fa-star theme-color"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star theme-color"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-price">
                                            <a href="{{ asset('assets/images/fashion/product/front')}}/{{$rproduct->image}}"
                                                class="font-default"
                                                style="background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                <h5>{{ $rproduct->name }}</h5>
                                            </a>
                                            <div class="listing-content">
                                                <span class="font-light">{{ $rproduct->category->name }}</span>
                                                <p class="font-light">{{ $rproduct->short_description }}</p>
                                            </div>
                                            <h3 class="theme-color">
                                                @if($rproduct->sale_price)


                                                    ${{$rproduct->sale_price}}

                                                @else

                                                    ${{$rproduct->regular_price}}

                                                @endif

                                                <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                                    To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
