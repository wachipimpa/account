<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-bar-chart"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>ผังบัญชี</h2>
                                    <!--                                    <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
<!--                                <a onclick="createbookac();">-->
<!--                                    <button data-toggle="tooltip" data-placement="left" title=""-->
<!--                                            class="btn waves-effect" data-original-title="สร้างสมุด บัญชี"><i-->
<!--                                            class="fa fa-plus fa-lg"></i></button>-->
<!--                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>รหัสบัญชี</label>
                                    <input type="text" class="form-control" id="acc_code" placeholder="10000">
                                </div>
                                <div class="form-group">
                                    <label>ชื่อบัญชี</label>
                                    <input type="text" class="form-control" id="acc_name" placeholder="สินทรัพย์">
                                </div>
                                <div class="form-group">
                                    <label>หมวด</label>
                                    <input type="text" class="form-control" id="acc_mode" placeholder="1">
                                </div>
                                <div class="form-group">
                                    <label>รายะละเอียด</label>
                                    <textarea rows="3" class="form-control" id="acc_detail"></textarea>
                                </div>
                                <button class="btn btn-success" onclick="create_chartac();">จัดเก็บ</button>
                            </div>
                            <div class="col-md-8">
                                <table class="table">
                                    <tr style="background-color: gainsboro">
                                        <th>#</th>
                                        <th>รหัสบัญชี</th>
                                        <th>ชื่อบัญชี</th>
                                        <th>หมวด</th>
                                        <th>แก้ไข</th>
                                        <th>ปิด</th>
                                    </tr>
                                    <tbody>
                                    <?php $row = 1 ;
                                    foreach ($chartac as $item){?>
                                    <tr>
                                        <td><?=$row?></td>
                                        <td><?=$item->acc_code?></td>
                                        <td><?=$item->acc_name?></td>
                                        <td><?=$item->acc_mode?></td>
                                        <td><a onclick="seteditchartacc('<?=$item->acc_id?>','<?=$item->acc_code?>','<?=$item->acc_name?>',
                                                '<?=$item->acc_mode?>','<?=$item->acc_detail?>');"><i class="fa fa-edit fa-lg" style="color: #0000cc"></i> </a></td>
                                        <td><a onclick="alertmdoaldrop('<?=$item->acc_id?>','<?=$item->acc_code?>','<?=$item->acc_name?>',
                                                '<?=$item->acc_trash?>');"><i class="fa fa-trash fa-lg" style="color: red;"></i> </a></td>
                                    </tr>
                                    <?php $row++ ; }?>
                                    </tbody>
                                </table>
                                <?=$links?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('js/chartac/datamodel.js') ?>"></script>

<!-- modal -->
<div class="modal" id="formeditchartac">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header" style="background-color: #00acee">
                <h4 class="modal-title">แก้ไขผังบัญชี  </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="hidden" id="edit_acc_id">
                <div class="form-group">
                    <label>รหัสสมุด</label>
                    <input type="text" class="form-control" id="edit_acc_code">
                </div>
                <div class="form-group">
                    <label>ชื่อสมุด</label>
                    <input type="text" class="form-control" id="edit_acc_name">
                </div>
                <div class="form-group">
                    <label>หัวเอกสาร</label>
                    <input type="text" class="form-control" id="edit_acc_mode">
                </div>
                <div class="form-group">
                    <label>รายะละเอียด</label>
                    <textarea rows="3" class="form-control" id="edit_acc_detail"></textarea>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updatechartacc();">ยืนยัน</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="alertchangechart">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header" style="background-color: #00acee">
                <h4 class="modal-title">แจ้งเตือนจากระบบ <i class="fa fa-bell fa-lg"></i> </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 style="text-align: center"><div id="txt_alarm"></div> </h4>
                <input type="hidden" id="change_chart_id">
                <input type="hidden" id="change_chart_status">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="confirmchangechart();">ยืนยัน</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
            </div>

        </div>
    </div>
</div>