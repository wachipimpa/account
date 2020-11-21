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
                                    <h2>รายละเอียดสมุดรายวัน</h2>
                                    <!--                                    <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <a onclick="createbookac();">
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
                                <th>ชื่อสมุด</th>
                                <th>หัวเอกสาร</th>
                                <th>แก้ไข</th>
                                <th>ปิด</th>
                            </tr>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('js/bookac/datamodel.js') ?>"></script>

<!-- modal -->
<!-- The Modal -->
<div class="modal" id="frombookac">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header" style="background-color: #00acee">
                <h4 class="modal-title">สร้างสมุดบัญชี  </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label>รหัสสมุด</label>
                    <input type="text" class="form-control" id="bookac_code">
                </div>
                <div class="form-group">
                    <label>ชื่อสมุด</label>
                    <input type="text" class="form-control" id="bookac_name">
                </div>
                <div class="form-group">
                    <label>หัวเอกสาร</label>
                    <input type="text" class="form-control" id="bookac_doc">
                </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="confirmcreatebookac();">ยืนยัน</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
            </div>

        </div>
    </div>
</div>

<div class="modal" id="fromeditbookac">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header" style="background-color: #00acee">
                <h4 class="modal-title">สร้างสมุดบัญชี  </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="hidden" id="edit_bookac_id">
                <div class="form-group">
                    <label>รหัสสมุด</label>
                    <input type="text" class="form-control" id="edit_bookac_code">
                </div>
                <div class="form-group">
                    <label>ชื่อสมุด</label>
                    <input type="text" class="form-control" id="edit_bookac_name">
                </div>
                <div class="form-group">
                    <label>หัวเอกสาร</label>
                    <input type="text" class="form-control" id="edit_bookac_doc">
                </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="confirmcreatebookac();">ยืนยัน</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="alertcompay">
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
                <input type="hidden" id="edit_comp_id">
                <input type="hidden" id="edit_comp_status">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updatestatuscomp();">ยืนยัน</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
            </div>

        </div>
    </div>
</div>