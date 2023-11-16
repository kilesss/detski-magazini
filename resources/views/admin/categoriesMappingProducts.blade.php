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
                </div>
                <button onclick="addAll()">Добави всички</button>
                <button onclick="removeAll()">Премахни всички</button>
                <div class="widget-container">
                    <div class="widget-block">
                            @foreach($categories as $ckey =>$cat)
                                <div class="row" style="border: 1px solid; padding-bottom: 15px">
                                    <button style="background-color: green" disabled>{{$cat['title']}}</button>
                                    @if(isset($cat['elements']))
                                        @foreach($cat['elements'] as $kelem => $elem)
                                          <div class="col-md-2">  <button name="category_id" type="button" onclick="addCategory({{$kelem}})">{{$elem['title']}} </button> <i style="background-color: red" onclick="removeCategory({{$kelem}})"> X </i></div>
                                        @endforeach
                                    @endif
                                </div>

                            @endforeach


                    </div>
                    <h1>Избрани категории</h1>
                    <div class="widget-block">
                        @foreach($cat_mapping as $kelem => $elem)
                            <div class="col-md-2">  <button name="category_id" type="button" >{{$elem['title']}} </button> <i style="background-color: red" onclick="removeCategory({{$elem['category_id']}})"> X </i></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
    </div>
    @include('admin.components.footer')

        <script>
            function addCategory(id){
                $.ajax({
                    type: "POST",
                    url: "{{Url::to('/')}}/admin/categoriesMappingProducts/",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id:id,
                        type:'add'
                    },

                    cache: false,
                    success: function (data) {
                        location.reload();

                    }
                });
            }
            function removeCategory(id){
                $.ajax({
                    type: "POST",
                    url: "{{Url::to('/')}}/admin/categoriesMappingProducts/",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id:id,
                        type:'remove'
                    },

                    cache: false,
                    success: function (data) {
                        location.reload();

                    }
                });
            }
            function addAll( ){
                $.ajax({
                    type: "POST",
                    url: "{{Url::to('/')}}/admin/categoriesMappingProducts/",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        type:'all'
                    },

                    cache: false,
                    success: function (data) {
                        location.reload();

                    }
                });
            }
            function removeAll( ){
                $.ajax({
                    type: "POST",
                    url: "{{Url::to('/')}}/admin/categoriesMappingProducts/",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        type:'delete'
                    },

                    cache: false,
                    success: function (data) {
                        location.reload();

                    }
                });
            }
        </script>
    </body>
    </html>
