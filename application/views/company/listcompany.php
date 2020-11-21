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
                                    <h2>รายชื่อ บริษัท</h2>
                                    <!--                                    <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <a href="<?= site_url('welcome/create_compay') ?>">
                                    <button data-toggle="tooltip" data-placement="left" title=""
                                            class="btn waves-effect" data-original-title="สร้าง บริษัท"><i
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
                                <th>ชื่อบริษัท</th>
                                <th>เลขที่เสียภาษี</th>
                                <th>สถานะ</th>
                                <th>แก้ไข</th>
                                <th>ปิด</th>
                            </tr>
                            <tbody>
                            <?php $row = 1;
                            foreach ($company as $item) {
                                ?>
                                <tr>
                                    <td><?= $row ?></td>
                                    <td><?= $item->comp_name ?></td>
                                    <td><?= $item->comp_serial_tax ?></td>
                                    <?php if ($item->comp_trash == 0) { ?>
                                        <td><p style="color: green">เปิดใช้งาน</p></td>
                                    <?php } else { ?>
                                        <td><p style="color: red">ปิดใช้งาน</p></td>
                                    <?php } ?>
                                    <td><a href="<?= site_url('welcome/edit_company?comp_id=' . $item->comp_id) ?>"><i
                                                    class="fa fa-edit fa-lg" style="color: #0000cc"></i></td>
                                    <td>
                                        <a onclick="setcompany('<?= $item->comp_id ?>','<?= $item->comp_trash ?>','<?=$item->comp_name?>');"><i
                                                    class="fa fa-trash fa-lg" style="color: red;"></i> </a></td>
                                </tr>
                                <?php $row++;
                            } ?>
                            </tbody>
                        </table>
                        <?= $links ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('js/company/datamodel.js') ?>"></script>

<!-- modal -->
<!-- The Modal -->
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