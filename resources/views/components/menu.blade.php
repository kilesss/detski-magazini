<header class="header-area clearfix">
    <div class="container">
        <div class="row">
            <div class="col-xl-12" style="margin-top: 30px">
{{--                <div class="headet-top">--}}
{{--                    <div class="htop-one">--}}
{{--                        <ul class="curency">--}}
{{--                            <li>--}}
{{--                                <a href="#">Currency : <span>gbp</span><i class="fa fa-caret-down"></i></a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">Dollar<span>(usd)</span></a></li>--}}
{{--                                    <li><a href="#">Pound<span>(GBP)</span></a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="htop-one">--}}
{{--                        <ul class="lenguage">--}}
{{--                            <li>--}}
{{--                                <a href="#">english<i class="fa fa-caret-down"></i></a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">English</a></li>--}}
{{--                                    <li><a href="#">اللغة العربية</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="htop-one last">--}}
{{--                        <ul class="account">--}}
{{--                            <li><a href="#">My account<i class="fa fa-caret-down"></i></a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">My account</a></li>--}}
{{--                                    <li><a href="#">My wishlist</a></li>--}}
{{--                                    <li><a href="#">Checkout</a></li>--}}
{{--                                    <li><a href="#">Log in</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-midile">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                    <div class="lago">
                        <a href="{{ route('home') }}"><img src="{{asset('front/img/detski_magazini.png')}}" style="max-width: 120%" alt="lago" /></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="search">
                        <form method="POST" action="{{ route('search') }}">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <input type="text" name="search" placeholder="Търсене"/>
                            <input type="submit" value="search">
                        </form>
                    </div>
                </div>
{{--                <div class="col-xl-3 col-lg-3 col-md-3 col-12">--}}
{{--                    <ul class="curt">--}}
{{--                        <li><a class="total-cart-b" href="#">--}}
{{--                                <span>2</span>--}}
{{--                                <p>Shopping Cart</p>--}}
{{--                                <h6>£ 125.19</h6>--}}
{{--                            </a>--}}
{{--                            <div class="curt-list">--}}
{{--                                <ul>--}}
{{--                                    <li class="curt-list-li">--}}
{{--                                        <a href="#"><img src="{{asset('front/img/product/printed-chiffon-dress.jpg.png')}}" alt="img"/></a>--}}
{{--                                        <a href="#"><span class="curt-list-item-color">1 X</span><p>Printed</p></a>--}}
{{--                                        <span>S, Yellow</span>--}}
{{--                                        <h6>£ 61.19</h6>--}}
{{--                                    </li>--}}
{{--                                    <li class="curt-list-li border-li">--}}
{{--                                        <a href="#"><img src="{{asset('front/img/product/printed-dress.chear.jpg.png')}}" alt="img"/></a>--}}
{{--                                        <a href="#"><span class="curt-list-item-color">1 X</span><p>Blouse</p></a>--}}
{{--                                        <span>L, Orang</span>--}}
{{--                                        <h6>£ 25.19</h6>--}}
{{--                                    </li>--}}
{{--                                    <li><p class="totel">totel</p><h6>£ 61.19</h6></li>--}}
{{--                                </ul>--}}
{{--                                <button>check out</button>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="main-menu">
                    <ul class="nav floatleft">
                        <li class="active" ><a href="">home</a>

                    @foreach($categories as $kcat => $cat)
                            <li class="mega-menu-two"><a href="{{route('category',$kcat)}}">{{$cat['title']}}</a>
                                <ul class="sub-menu">

                                @if($cat['elements'])
                                    <ul class="sub-menu">
                                @foreach($cat['elements'] as $skcat => $lem)
                                            <li style="width: 350px"><a href="{{route('category',$skcat)}}">{{$lem['title']}}</a></li>

                                @endforeach
                                    </ul>
                                </li>
                            @endif
                                </ul>
                            </li>
                        @endforeach

                </div>
            </div>
        </div>
    </div>


    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                @foreach($categories as $kcat => $cat)
                                    <li><a href="#">{{$cat['title']}}</a>

                                        @if($cat['elements'])
                                            <ul>
                                                @foreach($cat['elements'] as $skcat => $lem)
                                                    <li><a href="{{route('category',$skcat)}}">{{$lem['title']}}</a></li>


                                                @endforeach
                                        </ul>
                                        @endif

                                    </li>
                            @endforeach
                                <li><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">kids beds</a>
                                    <ul>
                                        <li><a href="shop.html">dresses</a>
                                            <ul>
                                                <li><a href="shop.html">Cocktail</a></li>
                                                <li><a href="shop.html">day</a></li>
                                                <li><a href="shop.html">Evening</a></li>
                                                <li><a href="shop.html">Sports</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">clothing</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Sports</a></li>
                                                <li><a href="shop.html">Evening</a></li>
                                                <li><a href="shop.html">Cocktail</a></li>
                                                <li><a href="shop.html">day</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">handbags</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Sports</a></li>
                                                <li><a href="shop.html">day</a></li>
                                                <li><a href="shop.html">Cocktail</a></li>
                                                <li><a href="shop.html">Evening</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">shoes</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Sports</a></li>
                                                <li><a href="shop.html">Evening</a></li>
                                                <li><a href="shop.html">day</a></li>
                                                <li><a href="shop.html">Cocktail</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop.html"><img src="{{asset('front/img/block_menu.png')}}" alt="" /></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">dressers</a>
                                    <ul>
                                        <li><a href="shop.html">dresses</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Bootees  Bags</a></li>
                                                <li><a href="shop.html">Blazers</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">clothing</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">coats</a></li>
                                                <li><a href="shop.html">T-shirts</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">handbags</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Bands</a></li>
                                                <li><a href="shop.html">Furniture</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">shoes</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Bands</a></li>
                                                <li><a href="shop.html">Lifestyle</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">desks</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">dresses</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Cocktail</a></li>
                                                <li><a href="shop.html">day</a></li>
                                                <li><a href="shop.html">Evening</a></li>
                                                <li><a href="shop.html">Sports</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">clothing</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Sports</a></li>
                                                <li><a href="shop.html">Evening</a></li>
                                                <li><a href="shop.html">Cocktail</a></li>
                                                <li><a href="shop.html">day</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">handbags</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Sports</a></li>
                                                <li><a href="shop.html">day</a></li>
                                                <li><a href="shop.html">Cocktail</a></li>
                                                <li><a href="shop.html">Evening</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">shoes</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Sports</a></li>
                                                <li><a href="shop.html">Evening</a></li>
                                                <li><a href="shop.html">day</a></li>
                                                <li><a href="shop.html">Cocktail</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">bookshelves</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">dresses</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Cocktail</a></li>
                                                <li><a href="shop.html">day</a></li>
                                                <li><a href="shop.html">Evening</a></li>
                                                <li><a href="shop.html">Sports</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">clothing</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Sports</a></li>
                                                <li><a href="shop.html">Evening</a></li>
                                                <li><a href="shop.html">Cocktail</a></li>
                                                <li><a href="shop.html">day</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">handbags</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Sports</a></li>
                                                <li><a href="shop.html">day</a></li>
                                                <li><a href="shop.html">Cocktail</a></li>
                                                <li><a href="shop.html">Evening</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">shoes</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Sports</a></li>
                                                <li><a href="shop.html">Evening</a></li>
                                                <li><a href="shop.html">day</a></li>
                                                <li><a href="shop.html">Cocktail</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">armoires</a></li>
                                <li><a href="shop.html">pages</a>
                                    <ul>
                                        <li><a href="shop.html">Shop page</a></li>
                                        <li><a href="single-product.html">Single product</a></li>
                                        <li><a href="checkout-page.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="contact-page.html">Contact us</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog details</a></li>
                                        <li><a href="about-us.html">About us</a></li>
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="my-account.html">My account</a></li>
                                        <li><a href="login-register.html">Login register</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
