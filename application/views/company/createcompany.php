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
                                    <h2>สร้างข้อมูลบริษัท</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <button data-toggle="tooltip" data-placement="left" title="" class="btn waves-effect" data-original-title="สร้าง บริษัท" onclick="createcompany();"><i class="fa fa-save fa-lg"></i></button>
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
                    <div class="row">
                        <div class="col-md-5">
                            <img class="editable img-responsive" id="output" style="width: 150px; height: 150px; border-color: gainsboro; margin: auto; border-radius: 5px;">
                            <div class="space space-4"></div>
                            <input type="hidden" id="review_picture" name="review_picture">
                            <input type="file" class="form-control" id="picture_header" style="margin-top: 15px"
                                   onchange="loadFile(event)"
                                   accept="image/*">
                            <script>
                                var loadFile = function (event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                                $("input#picture_header:file").change(function (e) {
                                    sendFile2(e.target.files[0]);
                                });

                                function sendFile2(file) {
                                    data = new FormData();
                                    data.append("file", file);
                                    $.ajax({
                                        url: "<?php echo site_url('UploadImage/uploadcomp')?>",
                                        data: data,
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        dataType: 'JSON',
                                        type: "POST",
                                        success: function (data) {
                                            console.log(data);
                                            if (typeof data.success !== "undefined") {
                                                var url_picture = "<?php echo base_url('images/comp/' .date('Y-m-d') .'/')?>" + data.success.file_name;
                                                $('#review_picture').val(url_picture);
                                            }
                                            if (typeof data.error !== "undefined") {
                                                $("div#error-box-header").removeClass("display-hide");
                                                $("div#error-box-header p").html(data.error);
                                            }
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus + " " + errorThrown);
                                        }
                                    });
                                }
                            </script>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-md-6">
                                    <button class="btn btn-success form-control" onclick="createcompany();"><i class="fa fa-save fa-lg"></i> บันทึก</button>
                                </div>
                                <div class="col-md-6">
                                    <a href="<?=site_url('welcome/company')?>"> <button class="btn btn-danger form-control"><i class="fa fa-trash fa-lg"></i> ยกเลิก</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>ชื่อบริษัท</label>
                                <input type="text" class="form-control" id="comp_name">
                            </div>
                            <div class="form-group">
                                <label>ชื่อผู้ประกอบการ</label>
                                <input type="text" class="form-control" id="comp_user">
                            </div>
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" id="comp_phone">
                            </div>
                            <div class="form-group">
                                <label>เลขที่เสียภาษี</label>
                                <input type="text" class="form-control" id="comp_serail">
                            </div>
                            <div class="form-group">
                                <label>ที่อยู่</label>
                                <textarea class="form-control" id="comp_address" rows="5"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>อัตราภาษี (%)</label>
                                        <input type="number" class="form-control" value="7" id="comp_tax">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>จำนวนทศนิยม</label>
                                        <input type="number" class="form-control" value="2" id="comp_decimal">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?=base_url('js/company/datamodel.js')?>"></script>

