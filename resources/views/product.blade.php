@include('components.header')
<!-- Header Area-->
@include('components.menu')
<!-- Promotion Area	Start -->

<section class="page-medile-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9">
                <div class="bg-bd">
                    <div class="right-all-product" id="right-ap">
                        <div class="row">
                            <div class="zoomWrapper col-xl-6 col-lg-6 col-md-5">
                                <div id="img-1" class="zoomWrapper product-image">
                                    <a href="#">
                                        @foreach($images as $image)
                                            @if ($image == reset($images ))
                                                <img id="zoom1" src="{{$image['image_url']}}"
                                                     data-zoom-image="{{$image['image_url']}}" alt="img"/>
                                            @endif
                                        @endforeach
                                    </a>
                                </div>
                                <div class="smol-slide">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-6 col-7 ms-auto me-auto">
                                            <ul class="bxslider" id="gallery_01">
                                                @foreach($images as $image)
                                                    <li>
                                                        <a href="#" class="elevatezoom-gallery active"
                                                           data-image="{{$image['image_url']}}"
                                                           data-zoom-image="{{$image['image_url']}}"><img
                                                                src="{{$image['image_url']}}" alt="zo-th-1"/>
                                                        </a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-7">
                                <div class="price-box">
                                    <p class="price-box-heading">{{$product['title']}}</p>

                                    <p class="desc">{{strip_tags($product['description'])}} </p>
                                    <div class="action">
                                        <div class="cart-box">
                                            <div class="price">
                                                <h5>{{$product['price']}} лв.</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-size clear">
                                        <div style="  font-weight: bolder;">Предлагани от
                                            <a
                                                    href="{{$client['url']}}" >
                                            <img src="{{$client['logo']}}" alt=""></a>
                                        </div>
                                        <div class="product-text">
                                            <a href="{{$product['link']}}"><p>Купи</p></a>
                                        </div>
                                        <div class="social-button">
                                            <button type="button" class="twitter"><i class="fa fa-twitter "></i>twittet
                                            </button>

                                            <button type="button" class="facebook"><i class="fa fa-facebook "></i>facebook
                                            </button>

                                            <button type="button" class=" google-plus"><i class="fa fa-google-plus"></i>google+
                                            </button>

                                            <button type="button" class="pinterest"><i class="fa fa-pinterest"></i>pinterest
                                            </button>

                                        </div>

                                        <div class="print">
                                            <ul class="clear">
                                                <li><a class="envelop" href="#"><i class="fa fa-envelope"></i></a></li>
                                                <li><a class="print" href="#"><i class="fa fa-print"></i></a></li>
                                                <li><a class="headt" href="#"><i class="fa fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviw-tab bg-bd product-tab">
                        <ul class="tab-menu nav" role="tablist">
                            <li role="presentation"><a href="#info" class="active" aria-controls="info" role="tab"
                                                       data-bs-toggle="tab">More info</a></li>
                            <li role="presentation"><a href="#data" aria-controls="data" role="tab"
                                                       data-bs-toggle="tab">Data sheet</a></li>
                            <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab"
                                                       data-bs-toggle="tab">Reviews</a></li>
                        </ul>
                        <div class="tab-content jump">
                            <div role="tabpanel" class="tab-pane active" id="info">
                                <div class="reviw-tab-text">
                                    <p>{{strip_tags($product['description'])}}</p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="data">
                                <table class="tabel-data-sheet">
                                    <tbody>
                                    <tr class="odd">
                                        <td>Compositions</td>
                                        <td>Cotton</td>
                                    </tr>
                                    <tr class="even">
                                        <td>Styles</td>
                                        <td>Casual</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Properties</td>
                                        <td>Short Sleeve</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="reviews">
                                <div class="tab-vew-reviw">
                                    <ul>
                                        <li>
												<span class="reviw-text">
													 Grade
												</span>
                                            <div class="rank">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="reviw-date">
                                                <h6>gdragaggd</h6>
                                                <span class="date">
														25/12/2022
													</span>
                                            </div>
                                        </li>
                                        <li class="right-reviw">
                                            <h6>gdra</h6>
                                            <p>gdra</p>
                                        </li>
                                    </ul>
                                    <div class="r-y-w">
                                        <a href="#"><p>Write your review!</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-m-s bg-bd">
                        <div class="right-featured">
                            <div class="right-feature-head s-p-r-f">
                                <h3>Accessories</h3>
                            </div>
                            <div class="single-all-product owl-carousel">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="#"><img src="img/product/printed-chiffon-dress.jpg.png" alt=""/> </a>
                                        <div class="cart-box">
                                            <div class="product-text">
                                                <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                <a href="#"><p>add to card</p></a>
                                                <a href="#"><span class="retweet"><i
                                                            class="fa fa-retweet"></i></span></a>
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
                                        <a href="#"><p>Blouse</p></a>
                                        <div class="price">
                                            <a href=""><h5>£ 23.37</h5></a>
                                        </div>
                                    </div>
                                    <a href="#"><span class="leval">new</span></a>
                                </div>
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="#"><img src="img/product/dress.jpg.png" alt=""/> </a>
                                        <div class="cart-box">
                                            <div class="product-text">
                                                <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                <a href="#"><p>add to card</p></a>
                                                <a href="#"><span class="retweet"><i
                                                            class="fa fa-retweet"></i></span></a>
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
                                        <a href="#"><p>Printed Summer Dress</p></a>
                                        <div class="price">
                                            <a href=""><h5>£ 23.37<span>£ 24.60</span></h5></a>
                                        </div>
                                    </div>
                                    <a href="#"><span class="leval">new</span></a>
                                </div>
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="#"><img src="img/product/faded-short-sleeves-tshirt.jpg.png" alt=""/>
                                        </a>
                                        <div class="cart-box">
                                            <div class="product-text">
                                                <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                <a href="#"><p>add to card</p></a>
                                                <a href="#"><span class="retweet"><i
                                                            class="fa fa-retweet"></i></span></a>
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
                                        <a href="#"><p>Faded Short Sleeves T-shirt</p></a>
                                        <div class="price">
                                            <a href=""><h5>£ 23.37<span>£ 24.60</span></h5></a>
                                        </div>
                                    </div>
                                    <a href="#"><span class="leval">new</span></a>
                                </div>
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="#"><img src="img/product/printed.jpg.png" alt=""/> </a>
                                        <div class="cart-box">
                                            <div class="product-text">
                                                <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                <a href="#"><p>add to card</p></a>
                                                <a href="#"><span class="retweet"><i
                                                            class="fa fa-retweet"></i></span></a>
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
                                        <a href="#"><p>Printed Summer Dress</p></a>
                                        <div class="price">
                                            <a href=""><h5>£ 23.37<span>£ 24.60</span></h5></a>
                                        </div>
                                        <span class="descount">seal</span>
                                    </div>
                                    <a href="#"><span class="leval">new</span></a>
                                </div>
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="#"><img src="img/product/printed-dress.chear.jpg.png" alt=""/> </a>
                                        <div class="cart-box">
                                            <div class="product-text">
                                                <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                <a href="#"><p>add to card</p></a>
                                                <a href="#"><span class="retweet"><i
                                                            class="fa fa-retweet"></i></span></a>
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
                                        <a href="#"><p>Printed Dresss</p></a>
                                        <div class="price">
                                            <a href=""><h5>£ 23.37<span>£ 24.60</span></h5></a>
                                        </div>
                                        <span class="descount">seal</span>
                                    </div>
                                    <a href="#"><span class="leval">new</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-m-s bg-bd">
                        <div class="right-featured">
                            <div class="right-feature-head">
                                <h3>Featured Products</h3>
                            </div>
                            <div class="single-all-product owl-carousel">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="#"><img src="img/product/printed-chiffon-dress.jpg.png" alt=""/> </a>
                                        <div class="cart-box">
                                            <div class="product-text">
                                                <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                <a href="#"><p>add to card</p></a>
                                                <a href="#"><span class="retweet"><i
                                                            class="fa fa-retweet"></i></span></a>
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
                                        <a href="#"><p>Blouse</p></a>
                                        <div class="price">
                                            <a href=""><h5>£ 23.37</h5></a>
                                        </div>
                                    </div>
                                    <a href="#"><span class="leval">new</span></a>
                                </div>
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="#"><img src="img/product/dress.jpg.png" alt=""/> </a>
                                        <div class="cart-box">
                                            <div class="product-text">
                                                <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                <a href="#"><p>add to card</p></a>
                                                <a href="#"><span class="retweet"><i
                                                            class="fa fa-retweet"></i></span></a>
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
                                        <a href="#"><p>Printed Summer Dress</p></a>
                                        <div class="price">
                                            <a href=""><h5>£ 23.37<span>£ 24.60</span></h5></a>
                                        </div>
                                    </div>
                                    <a href="#"><span class="leval">new</span></a>
                                </div>
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="#"><img src="img/product/faded-short-sleeves-tshirt.jpg.png" alt=""/>
                                        </a>
                                        <div class="cart-box">
                                            <div class="product-text">
                                                <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                <a href="#"><p>add to card</p></a>
                                                <a href="#"><span class="retweet"><i
                                                            class="fa fa-retweet"></i></span></a>
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
                                        <a href="#"><p>Faded Short Sleeves T-shirt</p></a>
                                        <div class="price">
                                            <a href=""><h5>£ 23.37<span>£ 24.60</span></h5></a>
                                        </div>
                                    </div>
                                    <a href="#"><span class="leval">new</span></a>
                                </div>
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="#"><img src="img/product/printed.jpg.png" alt=""/> </a>
                                        <div class="cart-box">
                                            <div class="product-text">
                                                <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                <a href="#"><p>add to card</p></a>
                                                <a href="#"><span class="retweet"><i
                                                            class="fa fa-retweet"></i></span></a>
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
                                        <a href="#"><p>Printed Summer Dress</p></a>
                                        <div class="price">
                                            <a href=""><h5>£ 23.37<span>£ 24.60</span></h5></a>
                                        </div>
                                        <span class="descount">seal</span>
                                    </div>
                                    <a href="#"><span class="leval">new</span></a>
                                </div>
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="#"><img src="img/product/printed-dress.chear.jpg.png" alt=""/> </a>
                                        <div class="cart-box">
                                            <div class="product-text">
                                                <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                <a href="#"><p>add to card</p></a>
                                                <a href="#"><span class="retweet"><i
                                                            class="fa fa-retweet"></i></span></a>
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
                                        <a href="#"><p>Printed Dresss</p></a>
                                        <div class="price">
                                            <a href=""><h5>£ 23.37<span>£ 24.60</span></h5></a>
                                        </div>
                                        <span class="descount">seal</span>
                                    </div>
                                    <a href="#"><span class="leval">new</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="single-product-left">
                        <div class="to-seal">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="top-seal bg-bd">
                                        <h4 class="left-featured-head">Top sellers</h4>
                                        <div class="all-seal-product owl-carousel">
                                            <div class="seal-product-slide">
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-summer-dress.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p>Printed Chiffon Dress</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37</h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-chiffon-dress.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p>Printed</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37</h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-dress.chear.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p> Dress</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37<span>£ 24.60</span></h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-dress.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p>Chiffon Dress</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37<span>£ 24.60</span></h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-summer-dress.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p>Printed Chiffon</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37<span>£ 24.60</span></h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="seal-product-slide">
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img
                                                                src="img/product/faded-short-sleeves-tshirt.jpg.png"
                                                                alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p>Printed Chiffon Dress</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37</h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-dress.riksa.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p>Dress</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37</h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-chiffon-bad.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p>Printed Chiffon</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37</h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img
                                                                src="img/product/faded-short-sleeves-tshirt.jpg.png"
                                                                alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p>Chiffon Dress</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37</h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-dress.chear.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p> Dress</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37<span>£ 24.60</span></h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="seal-product-slide">
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-summer-dress.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p>Printed Chiffon Dress</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37</h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-chiffon-dress.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p>Printed</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37</h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-dress.chear.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p> Dress</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37<span>£ 24.60</span></h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-dress.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p>Chiffon Dress</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37<span>£ 24.60</span></h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-summer-dress.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <div class="price-box">
                                                        <a href="#"><p>Printed Chiffon</p></a>
                                                        <div class="price">
                                                            <a href="#">
                                                                <h5>£ 23.37<span>£ 24.60</span></h5>
                                                            </a>
                                                        </div>
                                                        <div class="rank">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-bd">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="tage-section">
                                        <div class="tag-heading">
                                            <h3>tag</h3>
                                        </div>
                                        <ul>
                                            <li><a href="#">sale</a></li>
                                            <li><a href="#">Dressers</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Kids</a></li>
                                            <li><a href="#">Beds</a></li>
                                            <li><a href="#">shoes</a></li>
                                            <li><a href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Page Medial Section End-->
<!-- Footer Area Start-->
<!-- Featured Product Area End-->
@include('components.footer')
