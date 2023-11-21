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
                                                        @auth
                                                            <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="addChangeCategeory({{$item->id}})" >Смени категория</button>
                                                        @endauth
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

                                    <!-- Modal -->

                                </div>
                                <div class="right-all-product" id="right-ap">
                                <div class="previous-next">
                                    <ul class="pagination">
                                        @if($currentPage >=2)

                                        <li class="previous"><a href="{{route('category',[$categoryID,$currentPage-1])}}">Предишна</a></li>
                                        <li><a href="{{route('category',[$categoryID,$currentPage-1])}}">{{$currentPage-1}}</a></li>
                                        @endif

                                        <li class="active"><a href="{{route('category',[$categoryID,$currentPage])}}">{{$currentPage}}</a></li>
                                            @if($currentPage<$lastPage)
                                        <li><a href="{{route('category',[$categoryID,$currentPage+1])}}">{{$currentPage+1}}</a></li>
                                        <li class="next"><a href="{{route('category',[$categoryID,$currentPage+1])}}">Следваща</a></li>
                                            @endif

                                    </ul>
                                </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="bestseller">
                                <div class="right-all-product" id="right-ap">
                                    <ul>
                                        <li>
                                            <div class="row">
                                                @foreach($items as $item)
{{--                                                    /===============================--}}
{{--                                                    <div class="col-xl-4 col-lg-6 col-md-4 col-12">--}}

{{--                                                        <div class="single-product">--}}
{{--                                                            <div class="product-image">--}}
{{--                                                                @auth--}}
{{--                                                                    <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="addChangeCategeory({{$item->id}})" >Смени категория</button>--}}
{{--                                                                @endauth--}}
{{--                                                                <a href="{{route('product',$item->id)}}"><img--}}
{{--                                                                        src="{{$item->image_url}}" alt=""/>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="price-box">--}}

{{--                                                                <a href="{{route('product',$item->id)}}"><p>{{$item->title}}</p>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="price">--}}
{{--                                                                    <a href=""><h5>{{$item->price}} лв.</h5></a>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

                                                    {{----------------------------------------------------------------------}}

                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                    <div class="product-image">
                                                        <a href="{{route('product',$item->id)}}"><img src="{{$item->image_url}}"
                                                                         alt=""/> </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                                    <div class="price-box">
                                                        <a href="{{route('product',$item->id)}}"><p class="price-box-heading"><b>{{$item->title}}</b></p></a>
                                                        <div class="price">
                                                            <a href=""><h5>{{$item->price}} лв.</h5></a>

                                                        </div>
                                                        <p class="desc">{{strip_tags($item->description)}}</p>


                                                        @auth
                                                            <span> <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="addChangeCategeory({{$item->id}})" >Смени категория</button></span>
                                                                                                                        @endauth
                                                    </div>
                                                </div>

                                                @endforeach


                                            </div>
                                        </li>
                                    </ul>
                                    <div class="previous-next">
                                        <ul class="pagination">
                                            @if($currentPage >=2)

                                                <li class="previous"><a href="{{route('category',[$categoryID,$currentPage-1])}}">Предишна</a></li>
                                                <li><a href="{{route('category',[$categoryID,$currentPage-1])}}">{{$currentPage-1}}</a></li>
                                            @endif

                                            <li class="active"><a href="{{route('category',[$categoryID,$currentPage])}}">{{$currentPage}}</a></li>
                                            @if($currentPage<$lastPage)
                                                <li><a href="{{route('category',[$categoryID,$currentPage+1])}}">{{$currentPage+1}}</a></li>
                                                <li class="next"><a href="{{route('category',[$categoryID,$currentPage+1])}}">Следваща</a></li>
                                            @endif

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @foreach($categoriesMapping as $cat)
                                                <p onclick="changeProductCategory({{$cat['id']}})"> {{$cat['title']}}</p>
                                            @endforeach
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
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
                                    <a href="{{route('category',[$categoryID,$currentPage, 1,$client['id']])}}"><img
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
