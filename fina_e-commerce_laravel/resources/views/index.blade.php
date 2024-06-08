@extends('layouts.base')
@section('content')
<section class="pt-0 poster-section" id="index">
        <div class="poster-image slider-for custome-arrow classic-arrow">

        @foreach ($xproducts as $xproduct )

            <div>
                <img src="assets/images/fashion/product/front/{{$xproduct->image}}" class="img-fluid blur-up lazyload" alt="">
            </div>

            @endforeach

        </div>
        <div class="slider-nav image-show" >
            @foreach ($xproducts as $xproduct)

            <div>
                <div class="poster-img">
                    <img src="assets/images/fashion/product/front/{{$xproduct->image}}" class="img-fluid blur-up lazyload" alt="" width="120">
                    <div class="overlay-color">
                        <i class="fas fa-plus theme-color"></i>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="left-side-contain">
            <div class="banner-left">
                <h4>A la <span class="theme-color">Venta!!!</span></h4>
                <h1>LOS ULTIMOS <span>PELUCHES</span></h1>
                <p>COMPRALO YA! <span class="theme-color">SE VENDEN COMO PAN CALIENTE</span></p>
            </div>
        </div>
    </section>
    <!-- banner section start -->
    <section class="ratio2_1 banner-style-2">
        <div class="container">
            <div class="row gy-4">
            @foreach ($rproducts as $rproduct )
                <div class="col-lg-4 col-md-6">

                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="shop-left-sidebar.html" class="banner-img">


                            <img src="assets/images/fashion/product/front/{{$rproduct->image}}" class="bg-img blur-up lazyload" alt="">



                        </a>
                        <div class="banner-detail">
                            <a href="javacript:void(0)" onclick="addProductToWishList({{$rproduct->id}}, '{{ $rproduct->name }}', 1, {{$rproduct->regular_price}})" class="heart-wishlist">
                                <i class="far fa-heart"></i>
                            </a>

                        </div>
                        <a href="{{ route('shop.product.details', ['slug'=>$rproduct->slug]) }}" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">NUEVO PELUCHE</h2>
                                <span>COMPRA 3 Y OBTEN UNO GRATIS</span>
                            </div>

                        </a>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- banner section end -->
    <style>
        .products-c .bg-size {
            background-position: center 0 !important;
        }
    </style>

@endsection

@push('scripts')

<script>


function addProductToWishList(id, name, quantity, price) {
        $.ajax({
            type: 'POST',
            url: "{{ route('wishlist.store') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
                name: name,
                quantity: quantity,
                price: price
            },
            success: function(data) {
                if (data.status == 200) {
                    getCartAndWishListCount();
                    $.notify({
                        icon: "fa fa-check",
                        title: "Success!",
                        message: "Item succesfully added to your wishlist!"
                    });
                }
            }
        });
    }


    function getCartAndWishListCount(){
        $.ajax({
            type:"GET",
            url:"{{ route('shop.cart.wishlist.count') }}",
            success:function(data){
                if(data.status==200){
                    $("#cart-count").html(data.cartCount);
                    $("#wishlist-count").html(data.wishlistCount);
                }
            }
        })
    }


</script>
