<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>สมุดรายวัน</label>
                                <select class="form-control" id="book_acc">
                                    <option value="0">เลือกสมุดบัญชี</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>วันที่สร้างเอกสาร</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>เลขที่เอกสาร</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>วันที่อ้างอิง</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>เอกสารอ้างอิง</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>คำอธิบาย</label>
                                <textarea rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ผังบัญชี</label>
                                <input type="text" class="form-control" list="browsers">
                                <datalist id="browsers">
                                    <option data-value="42">42 Edge</option>
                                    <option data-value="43">43 Firefox</option>
                                    <option data-value="44">44 Chrome</option>
                                    <option data-value="45">45 Opera</option>
                                    <option data-value="46">46 Safari</option>
                                </datalist>
                            </div>
                            <div class="form-group">
                                <label>ชื่อผังบัญชี</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>แผนก</label>
                                        ​<select class="form-control" id="department">
                                            <option value="0">เลือกแผนก</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>เดบิต/เครดิต</label>
                                        ​<select class="form-control">
                                            <option value="0">เดบิต</option>
                                            <option value="1">เครดิต</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>จำนวนเงิน</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                           <button class="btn btn-success"><i class="fa fa-save"></i> บันทึกข้อมูล</button>
                            <button class="btn btn-danger"><i class="fa fa-trash"></i> ยกเลิกบันทึก</button>

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
                            <tr style="background-color: gainsboro;">
                                <th style="text-align: center">ผังบัญชี</th>
                                <th style="text-align: center">ชื่อผังบัญชี</th>
                                <th style="text-align: center">แผนก</th>
                                <th style="text-align: center">เดบิต</th>
                                <th style="text-align: center">เครดิต</th>
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

