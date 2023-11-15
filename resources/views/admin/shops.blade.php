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
                    <h4>Магазини</h4>
                </div>
                <div class="widget-container">
                    <div class="widget-block">
                        <div class="row">

                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered matmix-dt bg-hc-border">
                                <thead>
                                <tr>
                                    <th colspan="8"></th>
                                    <th colspan="2">
                                        <div class="form-group td-bulk-action">
                                            <button class="btn btn-success" style="float: right" data-toggle="modal"
                                                    data-target="#editshopModal"> Нов магазин
                                            </button>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan="4">
                                        Име
                                    </th>
                                    <th colspan="2">
                                        URL
                                    </th>
                                    <th colspan="2">
                                        logo
                                    </th>
                                    <th class="tc-center" colspan="1">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($shops as $shop)

                                    <tr>
                                        <th colspan="4">
                                            {{$shop->title}}
                                        </th>
                                        <th colspan="2">
                                            {{$shop->url}}
                                        </th>
                                        <th class="tc-center" colspan="2">
                                            {{$shop->logo}}
                                        </th>
                                        <td class="tc-center" colspan="1">
                                            <div class="btn-toolbar" role="toolbar">
                                                <div class="btn-group" role="group">
                                                    <a href="#" class="btn btn-default btn-sm m-user-edit"
                                                       data-toggle="modal"
                                                       onclick="editShop({{$shop->id}})">Редактирай</a>
                                                    <a href="#" class="btn btn-default btn-sm m-user-delete">Изтрий</a>
                                                </div>
                                            </div>
                                        </td>

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
                    <div class="content">
                        <form method="post" id="formID" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" id="id_shop" value="">
                            <div class="col-md-12" style="padding-bottom: 22px; padding-top: 22px">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Име</label>
                                    <div class=" col-md-8">
                                        <input type="text" id="title" name="title" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Url</label>
                                    <div class=" col-md-8">
                                        <input type="text" name="url" id="url" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Logo url</label>
                                    <div class=" col-md-8">
                                        <input type="text" id="logo" name="logo" class="form-control">
                                    </div>
                                </div>
                                <div class=" col-md-4" style="padding-left: 0px; padding-top: 19px;">
                                    <a href="{{ URL::to('admin/local-shops') }}" id="physical_shops" class="btn btn-success col-md-12">Физически
                                        магазини</a>
                                </div>
                                <div class=" col-md-4" style="padding-left: 0px; padding-top: 19px;">
                                    <a href="{{ URL::to('admin/local-shops') }}" id="categories" class="btn btn-success col-md-12">Категории</a>
                                </div>

                                <div class=" col-md-4" style="padding-left: 0px; padding-top: 19px;">
                                    <a href="{{ URL::to('admin/local-shops') }}" id="attributes" class="btn btn-success col-md-12">Атрибути</a>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="submitForm">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.components.footer')
    <script>
        /*Edit Delete Alert in Table*/


        jQuery(document).ready(function ($) {


        });
        var $ = jQuery.noConflict();


        function editShop(id) {
            $.ajax({
                type: "GET",
                url: "{{Url::to('/')}}/admin/shops/" + id,
                cache: false,
                success: function (data) {
                    var dat = $.parseJSON(data)
                    $("#title").val(dat.title)
                    $("#url").val(dat.url)
                    $("#logo").val(dat.logo)
                    $("#id_shop").val(id);
                    $("#physical_shops").attr("href", "{{ URL::to('admin/local-shops') }}/"+id)
                    $("#categories").attr("href", "{{ URL::to('admin/categories')}}/"+id)
                    $("#attributes").attr("href", "{{ URL::to('admin/attributes') }}/"+id)

                    $("#editshopModal").modal('show');

                }

            })
        }

    </script>
    </body>
    </html>
