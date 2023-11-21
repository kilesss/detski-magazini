@include('components.header')
<!-- Header Area-->
@include('components.menu')
<!-- Promotion Area	Start -->

<!-- Promotion Area End-->
<!-- Product Area Start -->
<section class="product-area">
    <div class="container">
        <div class="row">
            <div class=" right-featured responsive-padding tab-content jump">
                <div role="tabpanel" class="tab-pane  active" id="arrival">
                    <div class="right-all-product">
                        <div class="row">
                            @foreach($mostChecked as  $mchec)
                                <div class="single-product col-xl-4 col-lg-6 col-md-4 col-12">
                                    <div class="product-image">
                                        <a href="{{route('product',$mchec['id'])}}"><img
                                                src="{{$mchec['image_url']}}"
                                                alt=""/>
                                        </a>
                                        <div class="efface"></div>
                                        <div class="cart-box">

                                            <div class="link">
                                                <a href="#"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <a href="{{route('product',$mchec['id'])}}"><p>{{$mchec['title']}}</p></a>
                                        <div class="price">
                                            <a href="{{route('product',$mchec['id'])}}"><h5>{{$mchec['price']}} лв.</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="container" style="
    margin-bottom: 45px;
">
    <div class="bg-bd">
        <div class="cl-logo owl-carousel owl-loaded owl-drag">


            <div class="owl-stage-outer">
                <div class="owl-stage"
                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1870px;">
                    @foreach($clients as $client)
                        <div class="owl-item active" style="width: 157px; margin-right: 30px;">
                            <div class="brand-logo">
                                <a href="{{$client['url']}}"><img src="{{$client['logo']}}" alt=""></a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>

    </div>
</div><!-- Product Area End -->
<!-- Featured Product Area Start -->
<section class="featured-product-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="left-featured  bg-bd">
                    <h4 class="left-featured-head">ADS</h4>
                    <div style="background-color: red;width: 100%;HEIGHT: 423PX;">

                    </div>
                </div>
                <div class="add">
                    <a href="#"><img src="{{asset('front/img/free_shipping.jpg')}}" alt=""/></a>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-8">
                <div class="right-featured responsive-padding">
                    <div class="right-feature-head">
                    </div>
                    <div class="right-all-product">
                        <div class="row">

                        @foreach($randomProd2 as  $mchec)

                            <div class="single-product col-xl-4 col-lg-6 col-md-4 col-12">
                                <div class="product-image">
                                    <a href="{{route('product',$mchec['id'])}}"><img
                                            src="{{$mchec['image_url']}}"
                                            alt=""/>
                                    </a>
                                    <div class="efface"></div>
                                    <div class="cart-box">

                                        <div class="link">
                                            <a href="#"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <a href="{{route('product',$mchec['id'])}}"><p>{{$mchec['title']}}</p></a>
                                    <div class="price">
                                        <a href="{{route('product',$mchec['id'])}}"><h5>{{$mchec['price']}} лв.</h5></a>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                        </div>
                    </div>

                </div>

                <div class=" right-featured responsive-padding tab-content jump">
                    <div role="tabpanel" class="tab-pane  active" id="arrival">
                        <div class="right-all-product">
                            <div class="row">
                                @foreach($randomProd3 as  $mchec)
                                    <div class="single-product col-xl-4 col-lg-6 col-md-4 col-12">
                                        <div class="product-image">
                                            <a href="{{route('product',$mchec['id'])}}"><img
                                                    src="{{$mchec['image_url']}}"
                                                    alt=""/>
                                            </a>
                                            <div class="efface"></div>
                                            <div class="cart-box">

                                                <div class="link">
                                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <a href="{{route('product',$mchec['id'])}}"><p>{{$mchec['title']}}</p></a>
                                            <div class="price">
                                                <a href="{{route('product',$mchec['id'])}}"><h5>{{$mchec['price']}} лв.</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('components.footer')
