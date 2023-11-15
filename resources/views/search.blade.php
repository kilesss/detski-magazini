@include('components.header')
<!-- Header Area-->
@include('components.menu')
<!-- Promotion Area	Start -->

<section class="page-medile-section">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="product-right">
                    <div class="product-right-tab bg-bd">
                        <ul class="tab-menu top-bg nav" role="tablist" style="
    background-color: #0A97D4;
    padding: 9px;
    border-radius: 12px;
    color: white;
">
                            <li role="presentation" class="tab-menu-li-one">
                                <a class="active" href="#arrival" role="tab" data-bs-toggle="tab">
                                    <i class="fa fa-th-large"></i>
                                </a>
                            </li>
                            <li role="presentation" class="tab-menu-li-one">
                                <a href="#bestseller" role="tab" data-bs-toggle="tab"><i class="fa fa-th-list"></i>
                                </a>
                            </li>
                            <input type="hidden" name="search" id="searchId" value="{{$search}}">
                            <li class="tab-menu-li"><span>Сортирай по</span>
                                <select name="#" id="sortingCategorySearch" style="color: black">
                                    <option value="">Избор</option>
                                    <option value="priceLow">Цена: първо ниската</option>
                                    <option value="priceHigh">Цена: Първо високата</option>
                                    <option value="nameLow">Име: А - Я</option>
                                    <option value="nameHigh">Име:  Я - А</option>
                                </select>
                            </li>

                        </ul>

                        <div class="tab-content jump">
                            <div role="tabpanel" class="tab-pane  active" id="arrival">
                                <div class="right-all-product">
                                    <div class="row">
                                            @foreach($items as $item)
                                            <div class="col-xl-4 col-lg-6 col-md-4 col-12">

                                            <div class="single-product">
                                                <div class="product-image">
                                                    <a href="{{route('product',$item->id)}}"><img src="{{$item->image_url}}" alt="" />
                                                    </a>
                                                </div>
                                                <div class="price-box">

                                                    <a href="{{route('product',$item->id)}}"><p>{{$item->title}}</p></a>
                                                    <div class="price">
                                                        <a href=""><h5>{{$item->price}} лв.</h5></a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

                                            @endforeach


                                    </div>
                                </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        @if($currentPage >=2)
                                            <li class="page-item"><a class="page-link" href="{{route('searching',[$search, $currentPage-1])}}">Предишна страница</a></li>

                                        <li class="page-item"><a class="page-link" href="{{route('searching',[$search, $currentPage-1])}}">{{$currentPage-1}}</a></li>
                                        @endif
                                        <li class="page-item"><a class="page-link" href="{{route('searching',[$search, $currentPage])}}"><b>{{$currentPage}}</b></a></li>
                                            @if($currentPage<$lastPage)
                                        <li class="page-item"><a class="page-link" href="{{route('searching',[$search, $currentPage+1])}}">{{$currentPage+1}}</a></li>
                                        <li class="page-item"><a class="page-link" href="{{route('searching')}}/{{$search}}/{{$currentPage+1}}">Следваща страница</a></li>
                                            @endif
                                    </ul>
                                </nav>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="bestseller">
                                <div class="right-all-product" id="right-ap">
                                    <ul>
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-chiffon-dress.jpg.png" alt="" /> </a>
                                                    </div>
                                                    <a href="#"><span class="leval">new</span></a>
                                                </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                                    <div class="price-box">
                                                        <a href="#"><p class="price-box-heading">Printed Chiffon Dress</p></a>
                                                        <div class="price">
                                                            <a href=""><h5>£ 35.37<span>£ 30.60</span></h5></a>
                                                            <div class="rank">
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <p class="desc">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer! </p>
                                                        <div class="action">
                                                            <div class="cart-box">
                                                                <div class="product-text">
                                                                    <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                                    <a href="#"><p>add to card</p></a>
                                                                    <a href="#"><span class="retweet"><i class="fa fa-retweet"></i></span></a>
                                                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="color-list">
                                                            <ul>
                                                                <li><a class="orange" href="#"></a></li>
                                                                <li><a class="pink" href="#"></a></li>
                                                            </ul>
                                                        </div>
                                                        <span>In stock</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-dress.chear.jpg.png" alt="" /> </a>
                                                    </div>
                                                    <a href="#"><span class="leval">new</span></a>
                                                </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                                    <div class="price-box">
                                                        <a href="#"><p class="price-box-heading">Faded Short Sleeves T-shirt</p></a>
                                                        <div class="price">
                                                            <a href=""><h5>£ 29.37<span>£ 24.60</span></h5></a>
                                                            <div class="rank">
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <p class="desc">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer! </p>
                                                        <div class="action">
                                                            <div class="cart-box">
                                                                <div class="product-text">
                                                                    <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                                    <a href="#"><p>add to card</p></a>
                                                                    <a href="#"><span class="retweet"><i class="fa fa-retweet"></i></span></a>
                                                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="color-list">
                                                            <ul>
                                                                <li><a class="orange" href="#"></a></li>
                                                                <li><a class="pink" href="#"></a></li>
                                                                <li><a class="Orange" href="#"></a></li>
                                                            </ul>
                                                        </div>
                                                        <span>In stock</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-dress.jpg.png" alt="" /> </a>
                                                    </div>
                                                    <a href="#"><span class="leval">new</span></a>
                                                </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                                    <div class="price-box">
                                                        <a href="#"><p class="price-box-heading">Blouse</p></a>
                                                        <div class="price">
                                                            <a href=""><h5>£ 23.37<span>£ 24.60</span></h5></a>
                                                            <div class="rank">
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <p class="desc">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer! </p>
                                                        <div class="action">
                                                            <div class="cart-box">
                                                                <div class="product-text">
                                                                    <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                                    <a href="#"><p>add to card</p></a>
                                                                    <a href="#"><span class="retweet"><i class="fa fa-retweet"></i></span></a>
                                                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="color-list">
                                                            <ul>
                                                                <li><a class="white" href="#"></a></li>
                                                                <li><a class="orange" href="#"></a></li>
                                                                <li><a class="pink" href="#"></a></li>
                                                            </ul>
                                                        </div>
                                                        <span>In stock</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/blouse.jpg.png" alt="" /> </a>
                                                    </div>
                                                    <a href="#"><span class="leval">new</span></a>
                                                </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                                    <div class="price-box">
                                                        <a href="#"><p class="price-box-heading">Chiffon Dress</p></a>
                                                        <div class="price">
                                                            <a href=""><h5>£ 20.37<span>£ 18.60</span></h5></a>
                                                            <div class="rank">
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <p class="desc">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer! </p>
                                                        <div class="action">
                                                            <div class="cart-box">
                                                                <div class="product-text">
                                                                    <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                                    <a href="#"><p>add to card</p></a>
                                                                    <a href="#"><span class="retweet"><i class="fa fa-retweet"></i></span></a>
                                                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="color-list">
                                                            <ul>
                                                                <li><a class="orange" href="#"></a></li>
                                                                <li><a class="white" href="#"></a></li>
                                                                <li><a class="pink" href="#"></a></li>
                                                            </ul>
                                                        </div>
                                                        <span>In stock</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                    <div class="product-image">
                                                        <a href="#"><img src="img/product/printed-chiffon-dress.jpg.png" alt="" /> </a>
                                                    </div>
                                                    <a href="#"><span class="leval">new</span></a>
                                                </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                                    <div class="price-box">
                                                        <a href="#"><p class="price-box-heading">Printed Chiffon Dress</p></a>
                                                        <div class="price">
                                                            <a href=""><h5>£ 23.37<span>£ 24.60</span></h5></a>
                                                            <div class="rank">
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <p class="desc">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer! </p>
                                                        <div class="action">
                                                            <div class="cart-box">
                                                                <div class="product-text">
                                                                    <a href="#"><span class="heart"><i class="fa fa-heart"></i></span></a>
                                                                    <a href="#"><p>add to card</p></a>
                                                                    <a href="#"><span class="retweet"><i class="fa fa-retweet"></i></span></a>
                                                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="color-list">
                                                            <ul>
                                                                <li><a class="orange" href="#"></a></li>
                                                                <li><a class="pink" href="#"></a></li>
                                                            </ul>
                                                        </div>
                                                        <span>In stock</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="previous-next">
                                        <ul class="pagination">
                                            <li class="previous"><a href="#">Previous</a></li>
                                            <li><a href="#">1</a></li>
                                            <li class="active"><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li class="next"><a href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="product-left">
                    <div class="beds-section bg-bd">
                        <h4 class="pp-left-heading">Kids Beds</h4>
                        <div class="category-menu" id="cate-toggle">
                            <ul>
                                <li class="has-sub"><a href="#">Dresses</a>
                                    <ul>
                                        <li><a href="#">Cocktail</a></li>
                                        <li><a href="#">Day</a></li>
                                        <li><a href="#">Evening</a></li>
                                        <li><a href="#">Sports</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="#">Clothing</a>
                                    <ul>
                                        <li><a href="#">T-shirts</a></li>
                                        <li><a href="#">coats</a></li>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">jeans</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="#">Handbags</a>
                                    <ul>
                                        <li><a href="#">Blazers</a></li>
                                        <li><a href="#">table</a></li>
                                        <li><a href="#">coats</a></li>
                                        <li><a href="#">kids</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="#">shoes</a>
                                    <ul>
                                        <li><a href="#">shoes</a></li>
                                        <li><a href="#">Sports</a></li>
                                        <li><a href="#">run</a></li>
                                        <li><a href="#">sandals</a></li>
                                        <li><a href="#">Books</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="catalog-section  bg-bd">
                        <h4 class="pp-left-heading">Catalog</h4>
                        <div class="form-section">
                            <form action="#">
                                <div class="categori">
                                    <div class="fs-head">
                                        <h5>Categories</h5>
                                    </div>
                                    <ul class="check">
                                        <li>
                                            <span><input type="checkbox" /></span>
                                            <label><a href="#">Dresses <span>(13)</span></a></label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" /></span>
                                            <label><a href="#">Clothing<span>(13)</span></a></label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" /></span>
                                            <label><a href="#">Handbags<span>(13)</span></a></label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" /></span>
                                            <label for="#"><a href="#">shoes<span>(13)</span></a></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="availability">
                                    <div class="fs-head">
                                        <h5>Availability</h5>
                                    </div>
                                    <ul class="check">
                                        <li>
                                            <span><input type="checkbox" /></span>
                                            <label for="#"><a href="#">In stock<span>(13)</span></a></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="condition">
                                    <div class="fs-head">
                                        <h5>Conditions</h5>
                                    </div>
                                    <ul class="check">
                                        <li>
                                            <span><input type="checkbox" /></span>
                                            <label for="#"><a href="#">new<span>(13)</span></a></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="manufacturer">
                                    <div class="fs-head">
                                        <h5>Manufacturer</h5>
                                    </div>
                                    <ul class="check">
                                        <li>
                                            <span><input type="checkbox" /></span>
                                            <label for="#"><a href="#">new<span>(13)</span></a></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <div class="price-head">
                                        <h5>price</h5>
                                    </div>
                                    <div class="info_widget">
                                        <div class="price_filter">
                                            <div class="price_slider_amount">
                                                <input type="text" id="amount" name="price pla"/>
                                                <input type="submit"  value="Filter"/>
                                            </div>
                                            <div id="slider-range"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="size">
                                    <div class="fs-head">
                                        <h5>Size</h5>
                                    </div>
                                    <ul class="check">
                                        <li>
                                            <span><input type="checkbox" /></span>
                                            <label for="#"><a href="#">S<span>(13)</span></a></label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" /></span>
                                            <label for="#"><a href="#">M<span>(13)</span></a></label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" /></span>
                                            <label for="#"><a href="#">L<span>(13)</span></a></label>
                                        </li>
                                        <li>
                                            <span><input type="checkbox" /></span>
                                            <label for="#"><a href="#">XL<span>(13)</span></a></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="color">
                                    <div class="fs-head">
                                        <h5>Color</h5>
                                    </div>
                                    <ul class="check">
                                        <li>
                                            <span class="box"></span>
                                            <p><a href="#">Beige<span>(13)</span> </a></p>

                                        </li>
                                        <li>
                                            <span class="box white"></span>
                                            <p><a href="#">White<span>(13)</span></a></p>
                                        </li>
                                        <li>
                                            <span class="box black"></span>
                                            <p><a href="#"> Black<span>(13)</span></a> </p>
                                        </li>
                                        <li>
                                            <span class="box orange"></span>
                                            <p><a href="#">Orange<span>(13)</span></a> </p>
                                        </li>
                                        <li>
                                            <span class="box blue"></span>
                                            <p><a href="#"> Blue<span>(13)</span></a></p>
                                        </li>
                                        <li>
                                            <span class="box green"></span>
                                            <p><a href="#">Green<span>(13)</span></a></p>
                                        </li>
                                        <li>
                                            <span class="box yellow"></span>
                                            <p><a href="#">Yellow<span>(13)</span></a></p>
                                        </li>
                                        <li>
                                            <span class="box pink"></span>
                                            <p><a href="#"> Pink<span>(13)</span></a></p>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Product Area End-->
@include('components.footer')
