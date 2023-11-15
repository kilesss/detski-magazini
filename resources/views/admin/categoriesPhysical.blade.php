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
                    <h4>Категории</h4>
                </div>
                <div class="widget-container">
                    <div class="widget-block">
                        <div class="row">

                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered matmix-dt bg-hc-border">
                                <thead>
                                <tr>
                                    <th colspan="6"></th>
                                    <th colspan="1">
                                            <div class="form-group td-bulk-action">
                                                <button class="btn btn-success" data-toggle="modal" data-target="#editshopModal"
                                                        onclick="fillCategory('','', '0', '0')" style="float: right">Нова категория
                                                </button>
                                            </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan="3">
                                        Име
                                    </th>
                                    <th colspan="2">
                                         Категория в магазина
                                    </th>
                                    <th class="tc-center" colspan="2">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($shop_cat as $sc)
                                <tr>
                                    <td colspan="2">
                                        @if(isset($sc->master_title))
                                            {{$sc->master_title}} => 
                                        @endif
                                        {{$sc->latin_title}}
                                        {{$sc->id}}
                                    </td>
                                    <td colspan="3">
                                        {{$sc->link}}
                                    </td>
                                    <td class="tc-center" colspan="2">
                                        @foreach($categories as $cat)
                                            @if($cat->id == $sc->master_id)  <p @if($cat['master_id'] == 0) style="background-color: red" @endif>{{$cat->title}}</p> @endif
                                        @endforeach
                                    </td>
                                    <td class="tc-center" colspan="2">
                                        <div class="btn-toolbar" role="toolbar">
                                            <select name="parent_cat" id="parent_cat_{{$sc->id}}" class="form-control"
                                                    onchange="fillCategorySubmit('{{$sc->title}}','{{$sc->link}}', '{{$sc->master_id}}', '{{$sc->id}}')">

                                                <option value="0">Няма</option>
                                                @foreach($categories as $cat)
                                                    @if($cat['master_id'] != 0)<option value="{{$cat->id}}"   @if($cat->id == $sc->master_id) selected @endif>{{$cat->title}}</option> @endif
                                                @endforeach
                                            </select>
                                            <div class="btn-group" role="group">
{{--                                                <a href="#" class="btn btn-default btn-sm m-user-edit"--}}
{{--                                                   data-toggle="modal" data-target="#editshopModal"--}}
{{--                                                   onclick="fillCategory('{{$sc->title}}','{{$sc->link}}', '{{$sc->cat_id}}', '{{$sc->id}}')">Редактирай</a>--}}
                                                <a href="#" class="btn btn-default btn-sm m-user-delete">Изтрий</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="editshopModal" tabindex="-1" role="dialog" aria-labelledby="editshop"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editshop">категории</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" id="formID" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" id="cat_id234" name="cat_id234" value="{{$id23}}">

                        <div class="content">
                        <div class="col-md-12" style="padding-bottom: 22px; padding-top: 22px">
                            <div class="form-group">
                                <label class="col-md-4 control-label" style="padding-left: 0px; padding-top: 19px;">Име</label>
                                <div class=" col-md-8" style="padding-left: 0px; padding-top: 19px;">
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" style="padding-left: 0px; padding-top: 19px;">Link</label>
                                <div class=" col-md-8" style="padding-left: 0px; padding-top: 19px;">
                                    <input type="text" name="url" id="url" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" style="padding-left: 0px; padding-top: 19px;">Категория на нашия магазин</label>
                                <div class="col-md-8" style="padding-left: 0px; padding-top: 19px;">
                                    <input type="text" name="parent_cat" id="parent_cat" class="form-control">


                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('admin.components.footer')
    <script>



        function fillCategory(name,link, parent, id) {

            $("#title").val(name);
            $("#cat_id").val(id);
            $("#url").val(link);
            $("#parent_cat").val($("#parent_cat_" + id).val())
        }

        function fillCategorySubmit(name,link, parent, id){
            fillCategory(name,link, parent, id)
            $.ajax({

                url : "http://127.0.0.1:8000/admin/categories/"+$("#cat_id234").val(),
                data : {                    "_token": "{{ csrf_token() }}",
                     cat_id: id, parent_cat: $("#parent_cat_" + id).val(), title:name, url:link},
                type : 'POST',
                dataType : 'json',
                success : function(result){

                    console.log("===== " + result + " =====");

                }
            });
        }
    </script>
    </body>
    </html>
