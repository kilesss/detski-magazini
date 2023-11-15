@include('admin.components.header')
<div class="page-container iconic-view">
    <!--Leftbar Start Here -->
    @include('admin.components.leftMenu')
    <div class="page-content">
        <!--Topbar Start Here -->
        @include('admin.components.topMenu')
        <div class="main-container">
            <!--Content of the pafe -->
            <div class="box-widget widget-module">
                <div class="widget-head clearfix">
                    <span class="h-icon"><i class="fa fa-table"></i></span>
                    <h4>Продукти за категоризиране {{$count}}</h4>
                </div>
                <div class="widget-container">
                    <div class="widget-block">
                        <form method="post" id="formID" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="product_id" value="{{$product['id']}}">
                        @foreach($categories as $ckey =>$cat)
                            <div class="row" style="border: 1px solid; padding-bottom: 15px">
                                <button style="background-color: green" disabled>{{$cat['title']}}</button>
                                @if(isset($cat['elements']))
                                    @foreach($cat['elements'] as $kelem => $elem)
                                        <button name="category_id" type="submit" value="{{$kelem}}">{{$elem['title']}} {{$kelem}}</button>
                                    @endforeach
                                @endif
                            </div>

                        @endforeach
                        </form>
                        <div class="table-responsive">
                            <h3>{{$product['title']}}</h3>
                            <p>{{$product['link']}}</p>
                            <img src="{{$image}}">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
    </div>
    @include('admin.components.footer')

    </body>
    </html>
