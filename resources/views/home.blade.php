@include('components.header')
<!-- Header Area-->
@include('components.menu')
<!-- Promotion Area	Start -->

<!-- Promotion Area End-->
<!-- Product Area Start -->
<section class="product-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="product-tab bg-bd responsive-padding">
                    <ul class="tab-menu nav" role="tablist">
                        <li role="presentation">
                            <a href="#arrival" role="tab" class="active" data-bs-toggle="tab">
                                Нови продукти
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#bestseller" role="tab" data-bs-toggle="tab">Най-разглаждани
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content jump">
                        <div role="tabpanel" class="tab-pane active" id="arrival">
                            <div class="all-product owl-carousel">
                                @foreach($mostChecked as  $mchec)
                                    <div class="single-product">
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
                        <div role="tabpanel" class="tab-pane" id="bestseller">
                            <div class="all-product owl-carousel">
                                @foreach($randomProd as  $mchec)
                                    <div class="single-product">
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
                    <div class="left-single-feature owl-carousel">
                        <div class="single-product">
                            <div class="product-image">
                                <a href="#"><img src="{{asset('front/img/product/printed-summer-dress.jpg.png')}}"
                                                 alt=""/></a>
                                <div class="cart-box">
                                    <div class="product-text">
                                        <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                        <a href="#"><p>add to card</p></a>
                                        <a href="#"><span class="retweet"><i class="fa fa-retweet"></i></span></a>
                                    </div>
                                    <div class="link">
                                        <a href="#"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-box">
                                <a href="#">
                                    <div class="rank">
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart-o"></i>
                                    </div>
                                </a>
                                <a href="#"><p>Printed Chiffon Dress</p></a>
                                <div class="price">
                                    <a href=""><h5>£ 23.37<span>£ 24.60</span></h5></a>
                                </div>
                                <span class="descount">5%</span>
                            </div>
                            <a href="#"><span class="leval">new</span></a>
                        </div>
                        <div class="single-product">
                            <div class="product-image">
                                <a href="#"><img src="{{asset('front/img/product/faded-short-tshirt.jpg.png')}}"
                                                 alt=""/> </a>
                                <div class="cart-box">
                                    <div class="product-text">
                                        <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                        <a href="#"><p>add to card</p></a>
                                        <a href="#"><span class="retweet"><i class="fa fa-retweet"></i></span></a>
                                    </div>
                                    <div class="link">
                                        <a href="#"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-box">
                                <a href="#">
                                    <div class="rank">
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart-o"></i>
                                    </div>
                                </a>
                                <a href="#"><p>Faded Short T-shirt</p></a>
                                <div class="price">
                                    <a href=""><h5>£ 36.60<span>£ 40.60</span></h5></a>
                                </div>
                                <span class="descount">5%</span>
                            </div>
                            <a href="#"><span class="leval">new</span></a>
                        </div>
                        <div class="single-product">
                            <div class="product-image">
                                <a href="#"><img src="{{asset('front/img/product/printed-dress.jpg.png')}}" alt=""/>
                                </a>
                                <div class="cart-box">
                                    <div class="product-text">
                                        <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                        <a href="#"><p>add to card</p></a>
                                        <a href="#"><span class="retweet"><i class="fa fa-retweet"></i></span></a>
                                    </div>
                                    <div class="link">
                                        <a href="#"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-box">
                                <a href="#">
                                    <div class="rank">
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart-o"></i>
                                    </div>
                                </a>
                                <a href="#"><p>Printed Chiffon Dress</p></a>
                                <div class="price">
                                    <a href="#"><h5>£ 23.37<span>£ 24.60</span></h5></a>
                                </div>
                                <span class="descount">5%</span>
                            </div>
                            <a href="#"><span class="leval">new</span></a>
                        </div>
                        <div class="single-product">
                            <div class="product-image">
                                <a href="#"><img src="{{asset('front/img/product/printed.jpg.png')}}" alt=""/> </a>
                                <div class="cart-box">
                                    <div class="product-text">
                                        <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                        <a href="#"><p>add to card</p></a>
                                        <a href="#"><span class="retweet"><i class="fa fa-retweet"></i></span></a>
                                    </div>
                                    <div class="link">
                                        <a href="#"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-box">
                                <a href="#">
                                    <div class="rank">
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart-o"></i>
                                    </div>
                                </a>
                                <a href="#"><p>Printed Chiffon Dress</p></a>
                                <div class="price">
                                    <a href=""><h5>£ 23.37<span>£ 24.60</span></h5></a>
                                </div>
                                <span class="descount">5%</span>
                            </div>
                            <a href="#"><span class="leval">new</span></a>
                        </div>
                        <div class="single-product">
                            <div class="product-image">
                                <a href="#"><img src="{{asset('front/img/product/faded-short-sleeves-tshirt.jpg.png')}}"
                                                 alt=""/> </a>
                                <div class="cart-box">
                                    <div class="product-text">
                                        <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                        <a href="#"><p>add to card</p></a>
                                        <a href="#"><span class="retweet"><i class="fa fa-retweet"></i></span></a>
                                    </div>
                                    <div class="link">
                                        <a href="#"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-box">
                                <a href="#">
                                    <div class="rank">
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart-o"></i>
                                    </div>
                                </a>
                                <a href="#"><p>Printed Chiffon Dress</p></a>
                                <div class="price">
                                    <a href=""><h5>£ 23.37<span>£ 24.60</span></h5></a>
                                </div>
                                <span class="descount">5%</span>
                            </div>
                            <a href="#"><span class="leval">new</span></a>
                        </div>
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
                    <div class="new-product owl-carousel">
                        @foreach($randomProd2 as  $mchec)

                            <div class="single-product">
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
                    <div class="new-product owl-carousel">
                        @foreach($randomProd3 as  $mchec)

                            <div class="single-product">
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

        </div>
    </div>
</section>

@include('components.footer')
