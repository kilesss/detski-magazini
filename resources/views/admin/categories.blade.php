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
                                    <th colspan="6">
                                        Име
                                    </th>
                                    <th class="tc-center" colspan="1">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $cat)
                                <tr>
                                    <td colspan="6">
                                        {{$cat->title}}
                                    </td>
                                    <td class="tc-center" colspan="1">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group" role="group">
                                                <a href="#" class="btn btn-default btn-sm m-user-edit"
                                                   data-toggle="modal" data-target="#editshopModal"
                                                   onclick="fillCategory('{{$cat->title}}','{{$cat->master_id}}', '{{$cat->id}}')">Редактирай</a>
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
                        <h5 class="modal-title" id="editshop">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" id="formID" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="content">
                        <div class="col-md-12" style="padding-bottom: 22px; padding-top: 22px">
                            <div class="form-group">
                                <label class="col-md-4 control-label" style="padding-left: 0px; padding-top: 19px;">Име</label>
                                <div class=" col-md-8" style="padding-left: 0px; padding-top: 19px;">
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                            </div>
                            <input type="hidden" name="id" id="id" value="0">
                            <div class="form-group">
                                <label class="col-md-4 control-label" style="padding-left: 0px; padding-top: 19px;">Основна категория</label>
                                <div class="col-md-8" style="padding-left: 0px; padding-top: 19px;">
                                    <select name="parent_cat" id="parent_cat" class="form-control">

                                        <option value="0">Няма</option>
                                        @foreach($categories as $cat)
                                            @if($cat['master_id'] == 0)
                                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
{{--                            <div class="form-group" >--}}
{{--                                <label class="col-md-4 control-label" style="padding-left: 0px; padding-top: 19px;">Свързана категория </label>--}}
{{--                                <div class="col-md-8" style="padding-left: 0px; padding-top: 19px;">--}}
{{--                                    <select class="form-control">--}}
{{--                                        <option>1</option>--}}
{{--                                        <option>2</option>--}}
{{--                                        <option>3</option>--}}
{{--                                        <option>4</option>--}}
{{--                                        <option>5</option>--}}
{{--                                    </select>--}}
{{--                                    <i>Мапване към категория от нашия сайт</i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label class="col-md-4 control-label" style="padding-left: 0px; padding-top: 19px;">Link</label>--}}
{{--                                <div class=" col-md-8" style="padding-left: 0px; padding-top: 19px;">--}}
{{--                                    <input type="text" name="url" class="form-control">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <div class="col-md-4" style="padding-left: 0px; padding-top: 19px;"></div>--}}
{{--                                <div class="col-md-8" style="padding-left: 0px; padding-top: 19px;">--}}
{{--                                    <label>--}}
{{--                                        <input type="checkbox" value=""> Основна категория </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}


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
        /*Edit Delete Alert in Table*/

        function fillCategory(name, parent, id){
            $("#title").val(name);
            $("#id").val(id);
            $("#parent_cat").val(parent)

        }
    </script>
    </body>
    </html>
