@include('components.header')
<!-- Header Area-->
@include('components.menu')
<!-- Promotion Area	Start -->

{{--{{var_dump(auth()->user()->name)}}--}}
<input type="hidden" id="categoryID" value="{{$categoryID}}">
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
                            <li class="tab-menu-li"><span>Сортирай по</span>
                                <select name="#" id="sortingCategory" style="color: black">
                                    <option value="">Избор</option>
                                    <option value="priceLow">Цена: първо ниската</option>
                                    <option value="priceHigh">Цена: Първо високата</option>
                                    <option value="nameLow">Име: А - Я</option>
                                    <option value="nameHigh">Име: Я - А</option>
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
                                                        <a href="{{route('product',$item->id)}}"><img
                                                                src="{{$item->image_url}}" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="price-box">

                                                        <a href="{{route('product',$item->id)}}"><p>{{$item->title}}</p>
                                                        </a>
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
                                            <li class="page-item"><a class="page-link"
                                                                     href="{{route('category',[$categoryID,$currentPage-1])}}">Предишна
                                                    страница</a></li>

                                            <li class="page-item"><a class="page-link"
                                                                     href="{{route('category',[$categoryID,$currentPage-1])}}">{{$currentPage-1}}</a>
                                            </li>
                                        @endif
                                        <li class="page-item"><a class="page-link"
                                                                 href="{{route('category',[$categoryID,$currentPage])}}"><b>{{$currentPage}}</b></a>
                                        </li>
                                        @if($currentPage<$lastPage)
                                            <li class="page-item"><a class="page-link"
                                                                     href="{{route('category',[$categoryID,$currentPage+1])}}">{{$currentPage+1}}</a>
                                            </li>
                                            <li class="page-item"><a class="page-link"
                                                                     href="{{route('category',[$categoryID,$currentPage+1])}}">Следваща
                                                    страница</a></li>
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
                                                        <a href="#"><img src="img/product/printed-chiffon-dress.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <a href="#"><span class="leval">new</span></a>
                                                </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                                    <div class="price-box">
                                                        <a href="#"><p class="price-box-heading">Printed Chiffon
                                                                Dress</p></a>
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
                                                        <p class="desc">Faded short sleeves t-shirt with high neckline.
                                                            Soft and stretchy material for a comfortable fit.
                                                            Accessorize with a straw hat and you're ready for
                                                            summer! </p>
                                                        <div class="action">
                                                            <div class="cart-box">
                                                                <div class="product-text">
                                                                    <a href="#"><span class="heart"><i
                                                                                class="fa fa-heart"></i></span></a>
                                                                    <a href="#"><p>add to card</p></a>
                                                                    <a href="#"><span class="retweet"><i
                                                                                class="fa fa-retweet"></i></span></a>
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
                                                        <a href="#"><img src="img/product/printed-dress.chear.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <a href="#"><span class="leval">new</span></a>
                                                </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                                    <div class="price-box">
                                                        <a href="#"><p class="price-box-heading">Faded Short Sleeves
                                                                T-shirt</p></a>
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
                                                        <p class="desc">Faded short sleeves t-shirt with high neckline.
                                                            Soft and stretchy material for a comfortable fit.
                                                            Accessorize with a straw hat and you're ready for
                                                            summer! </p>
                                                        <div class="action">
                                                            <div class="cart-box">
                                                                <div class="product-text">
                                                                    <a href="#"><span class="heart"><i
                                                                                class="fa fa-heart"></i></span></a>
                                                                    <a href="#"><p>add to card</p></a>
                                                                    <a href="#"><span class="retweet"><i
                                                                                class="fa fa-retweet"></i></span></a>
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
                                                        <a href="#"><img src="img/product/printed-dress.jpg.png"
                                                                         alt=""/> </a>
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
                                                        <p class="desc">Faded short sleeves t-shirt with high neckline.
                                                            Soft and stretchy material for a comfortable fit.
                                                            Accessorize with a straw hat and you're ready for
                                                            summer! </p>
                                                        <div class="action">
                                                            <div class="cart-box">
                                                                <div class="product-text">
                                                                    <a href="#"><span class="heart"><i
                                                                                class="fa fa-heart"></i></span></a>
                                                                    <a href="#"><p>add to card</p></a>
                                                                    <a href="#"><span class="retweet"><i
                                                                                class="fa fa-retweet"></i></span></a>
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
                                                        <a href="#"><img src="img/product/blouse.jpg.png" alt=""/> </a>
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
                                                        <p class="desc">Faded short sleeves t-shirt with high neckline.
                                                            Soft and stretchy material for a comfortable fit.
                                                            Accessorize with a straw hat and you're ready for
                                                            summer! </p>
                                                        <div class="action">
                                                            <div class="cart-box">
                                                                <div class="product-text">
                                                                    <a href="#"><span class="heart"><i
                                                                                class="fa fa-heart"></i></span></a>
                                                                    <a href="#"><p>add to card</p></a>
                                                                    <a href="#"><span class="retweet"><i
                                                                                class="fa fa-retweet"></i></span></a>
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
                                                        <a href="#"><img src="img/product/printed-chiffon-dress.jpg.png"
                                                                         alt=""/> </a>
                                                    </div>
                                                    <a href="#"><span class="leval">new</span></a>
                                                </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                                    <div class="price-box">
                                                        <a href="#"><p class="price-box-heading">Printed Chiffon
                                                                Dress</p></a>
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
                                                        <p class="desc">Faded short sleeves t-shirt with high neckline.
                                                            Soft and stretchy material for a comfortable fit.
                                                            Accessorize with a straw hat and you're ready for
                                                            summer! </p>
                                                        <div class="action">
                                                            <div class="cart-box">
                                                                <div class="product-text">
                                                                    <a href="#"><span class="heart"><i
                                                                                class="fa fa-heart"></i></span></a>
                                                                    <a href="#"><p>add to card</p></a>
                                                                    <a href="#"><span class="retweet"><i
                                                                                class="fa fa-retweet"></i></span></a>
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

                <div class="catalog-section  bg-bd">
                    <h4 class="pp-left-heading">Магазини:</h4>
                    <div class="form-section">
                        @foreach($clients as $client)
                            <div class="owl-item active" style="width: 146.4px; margin-right: 30px;">
                                <div class="brand-logo">
                                    <a href="{{route('category',[$categoryID,$currentPage, $filter,$client['id']])}}"><img
                                            src="{{$client['logo']}}"
                                            alt=""></a>
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
<!-- Featured Product Area End-->
@include('components.footer')
