/**
 * Created by aungpoa on 21/11/2020 AD.
 */
var createbank = function () {
    $('#formcreatebank').modal('toggle');
}
var confirmcreatebank = function () {
    $.post(url+'/InsertData/insert_bank',{
        bank_code : $('#bank_code').val(),
        bank_name : $('#bank_name').val()
    },function () {
       window.location.href = url+'/welcome/listbank';
    });
}
var seteditform = function (bank_id, bank_code, bank_name) {
    $('#edit_bank_id').val(bank_id);
    $('#edit_bank_code').val(bank_code);
    $('#edit_bank_name').val(bank_name);
    $('#formeditbank').modal('toggle');
}
var confirmupdatebank = function () {
    $.post(url+'/UpdateData/update_bank',{
        edit_bank_id : $('#edit_bank_id').val(),
        edit_bank_code : $('#edit_bank_code').val(),
        edit_bank_name : $('#edit_bank_name').val()
    },function () {
        window.location.href = url+'/welcome/listbank';
    });
}
var setalertbank = function (bank_id, bank_code, bank_status) {
    if(bank_status == 0){
        $('#txt_alarm').html('ยืนยันการปิดใช้งาน : '+ bank_status +' หรือไม่');
    }else{
        $('#txt_alarm').html('ยืนยันการเปิดใช้งาน : '+ bank_status +' หรือไม่');
    }
    $('#change_bank_id').val(bank_id);
    $('#change_bank_status').val(bank_status);
    $('#alertbank').modal('toggle');
}
var confirmchangebank = function () {
    $.post(url+'/DeleteData/changebank',{
        change_bank_id : $('#change_bank_id').val(),
        change_bank_status : $('#change_bank_status').val()
    },function () {
        window.location.href = url+'/welcome/listbank';
    });
}