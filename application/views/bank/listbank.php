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
                                    <h2>สมุดธนาคาร</h2>
                                    <!--                                    <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <a onclick="createbank();">
                                    <button data-toggle="tooltip" data-placement="left" title=""
                                            class="btn waves-effect" data-original-title="สร้างสมุด บัญชี"><i
                                            class="fa fa-plus fa-lg"></i></button>
                                </a>
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
                        <table class="table">
                            <tr style="background-color: gainsboro">
                                <th>#</th>
                                <th>รหัส</th>
                                <th>ชื่อธนาคาร</th>
                                <th>แก้ไข</th>
                                <th>ปิด</th>
                            </tr>
                            <tbody>
                            <?php $row = 1 ;
                            foreach ($bank as $item){?>
                            <tr>
                                <td><?=$row?></td>
                                <td><?=$item->bank_code?></td>
                                <td><?=$item->bank_name?></td>
                                <td><a onclick="seteditform('<?=$item->bank_id?>','<?=$item->bank_code?>',
                                        '<?=$item->bank_name?>');"><i class="fa fa-edit fa-lg" style="color: #0000cc"></i> </a></td>
                                <td><a onclick="setalertbank('<?=$item->bank_id?>','<?=$item->bank_name?>',
                                        '<?=$item->bank_trash?>');"><i class="fa fa-trash fa-lg" style="color: red;"></i></a> </td>
                            </tr>
                            <?php $row++; }?>
                            </tbody>
                        </table>
                        <?=$links?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('js/bank/datamodel.js') ?>"></script>

<!-- modal -->
<!-- The Modal -->
<div class="modal" id="formcreatebank">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header" style="background-color: #00acee">
                <h4 class="modal-title">สร้างธนาคาร  </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label>รหัสธนาคาร</label>
                    <input type="text" class="form-control" id="bank_code">
                </div>
                <div class="form-group">
                    <label>ชื่อธนาคาร</label>
                    <input type="text" class="form-control" id="bank_name">
                </div>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="confirmcreatebank();">ยืนยัน</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
            </div>

        </div>
    </div>
</div>

<div class="modal" id="formeditbank">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header" style="background-color: #00acee">
                <h4 class="modal-title">สร้างสมุดบัญชี  </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="hidden" id="edit_bank_id">
                <div class="form-group">
                    <label>รหัสธนาคาร</label>
                    <input type="text" class="form-control" id="edit_bank_code">
                </div>
                <div class="form-group">
                    <label>ชื่อธนาคาร</label>
                    <input type="text" class="form-control" id="edit_bank_name">
                </div>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="confirmupdatebank();">ยืนยัน</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="alertbank">
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
                <input type="hidden" id="change_bank_id">
                <input type="hidden" id="change_bank_status">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="confirmchangebank();">ยืนยัน</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
            </div>

        </div>
    </div>
</div>