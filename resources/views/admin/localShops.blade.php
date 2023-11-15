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
                    <h4>Физически магазини</h4>
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
                                                <p class="btn btn-success" data-toggle="modal"
                                                        onclick="editShop(null)" style="float: right"> Нов магазин
                                                </p>
                                            </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan="4">
                                        Име
                                    </th>
                                    <th colspan="2">
                                        Адрес
                                    </th>
                                    <th class="tc-center" colspan="1">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($shops as $shop)
                                    <tr>
                                        <td colspan="4">
                                            {{$shop['title']}}
                                        </td>
                                        <td colspan="2">
                                            {{$shop['adress']}}
                                        </td>
                                        <td class="tc-center" colspan="1">
                                            <div class="btn-toolbar" role="toolbar">
                                                <div class="btn-group" role="group">
                                                    <a href="#" class="btn btn-default btn-sm m-user-edit"
                                                       data-toggle="modal"
                                                       onclick="editShop({{$shop['id']}})">Редактирай</a>
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
                        <input type="hidden" id="id_phisical" name="id_phisical" value="">

                        <div class="content">
                        <div class="col-md-12" style="padding-bottom: 22px; padding-top: 22px">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Име</label>
                                <div class=" col-md-8">
                                    <input type="text" name="title" id="title" style=" margin-bottom: 14px;" value="" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Адрес</label>
                                <div class=" col-md-8">
                                    <input type="text" name="address" id="address" style=" margin-bottom: 14px;" value=""
                                           class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Работно време</label>
                                <div class=" col-md-8">
                                    <textarea class="col-md-12" style=" margin-bottom: 14px;"
                                              name="working_time" id="working_time"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Емайл</label>
                                <div class=" col-md-8">
                                    <input type="text" name="email" id="email" style=" margin-bottom: 14px;" value="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Телефони</label>
                                <div class=" col-md-8">
                                    <textarea class="col-md-12" style=" margin-bottom: 14px;" name="phones" id="phones"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">снимки</label>
                                <div class=" col-md-8">
                                    <i>Разделени с интервал</i>
                                    <textarea class="col-md-12" style=" margin-bottom: 14px;" name="images" id="images"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Гоогле урл</label>
                                <div class=" col-md-8">
                                    <input type="text" name="google_url" id="google_url" value="" style=" margin-bottom: 14px;"
                                           class="form-control">
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
        /*Edit Delete Alert in Table*/


        jQuery(document).ready(function ($) {


        });
        var $ = jQuery.noConflict();


        function editShop(id) {
            if (id === null) {
                $("#editshopModal").modal('show');
            } else {

                $.ajax({
                    type: "GET",
                    url: "{{Url::to('/')}}/admin/local-shops/" + id + '/json',
                    cache: false,
                    success: function (data) {
                        var dat = $.parseJSON(data)
                        console.log(dat.title)
                        // id_shop
                        $("#id_shop").val(dat.shop_id)
                        $("#id_phisical").val(dat.id)
                        $("#address").val(dat.adress)
                        $("#working_time").val(dat.working_time)
                        $("#phones").val(dat.phone)
                        $("#images").val(dat.image)
                        $("#email").val(dat.email)
                        $("#title").val(dat.title)
                        $("#google_url").val(dat.google)

                        $("#editshopModal").modal('show');

                    }

                });
            }
        }

    </script>
    </body>
    </html>
