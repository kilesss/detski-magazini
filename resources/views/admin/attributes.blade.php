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
                    <h4>Атрибути</h4>
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
                                        <form class="form-horizontal">
                                            <div class="form-group td-bulk-action">
                                                <button class="btn btn-success" style="float: right">Нов атрибут
                                                </button>
                                            </div>
                                        </form>
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
                                @foreach($attributes as $attr)
                                <tr>
                                    <td colspan="6">
                                        {{$attr->title}} {{$attr->id}}
                                    </td>
                                    <td class="tc-center" colspan="1">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group" role="group">
                                                <a href="#" class="btn btn-default btn-sm m-user-edit"
                                                   data-toggle="modal" data-target="#editshopModal" onclick="getAttributes('{{$attr->id}}','{{$attr->title}}')">Редактирай</a>
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
                <form method="post" id="formID" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" id="attrId" name="id" value="">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editshop">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="content">
                        <div class="col-md-12" style="padding-bottom: 22px; padding-top: 22px">
                            <div class="form-group">
                                <label class="col-md-4 control-label" style="padding-left: 0px; padding-top: 19px;">Име</label>
                                <div class=" col-md-8" style="padding-left: 0px; padding-top: 19px;">
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label" style="padding-left: 0px; padding-top: 19px;">Стойност</label>
                                <div class=" col-md-7" style="padding-left: 0px; padding-top: 19px;">
                                    <input type="text" id="amount" name="amount" class="form-control">
                                </div>
                                <div class="col-md-1" style=" padding-left: 4px; padding-top: 25px;color: green;" onclick="addNewValue()"><i class="fa fa-plus fa-2x"></i></div>
                            </div>
                            <div class="form-group" class="col-md-12" id="displayAmounts">
                            </div>

                            <script>
                                var attrCount = 1;
                                function addNewValue(){
                                    var amount = $("#amount").val()
                                    $("#displayAmounts").append(
                                        '<div class="col-md-12" id="attr_'+attrCount+'"><input type="hidden" name="amounts[]" value="'+amount+'">' +
                                        '<p>'+amount+' <i style="color: red;font-size: 20px;" onclick="deteleAttr(\''+attrCount+'\', \'0\')">X</i>' +
                                        "</p>" +
                                        "</div> ");
                                    attrCount = attrCount+1;
                                }

                            </script>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.components.footer')
    <script>
        /*Edit Delete Alert in Table*/

        jQuery(document).ready(function ($) {

        });
        function getAttributes(id,title){
            console.log(id)
            $("#title").val(title)
            $("#attrId").val(id)
            $.ajax({
                type: "GET",
                url: "{{Url::to('/')}}/admin/getAttributesValues/" + id,
                cache: false,
                success: function (data) {
                    var dat = $.parseJSON(data)
                    $.each(dat, function (i, currProgram) {
                        $("#displayAmounts").append(
                            '<div class="col-md-12" id="attr_'+attrCount+'"><input type="hidden" name="amounts[]" value="'+currProgram.value+'">' +
                            '<p>'+currProgram.value+' <i style="color: red;font-size: 20px;" onclick="deteleAttr(\''+attrCount+'\', \''+currProgram.id+'\')">X</i>' +
                            "</p>" +
                            "</div> ");
                        attrCount = attrCount+1;


                    })
                    $("#editshopModal").modal('show');

                }

            })
        }

        function deteleAttr(id, attrId){
            $("#attr_"+id).remove();
            if(attrId !== '0'){
                $.ajax({
                    type: "GET",
                    url: "{{Url::to('/')}}/admin/deleteAttributesValues/" + attrId,
                    cache: false,
                    success: function (data) {
                    }

                })

            }
        }

    </script>
    </body>
    </html>
