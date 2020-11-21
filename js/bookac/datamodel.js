/**
 * Created by aungpoa on 21/11/2020 AD.
 */
var createbookac = function () {
    $('#frombookac').modal('toggle');
}
var confirmcreatebookac = function () {
    $.post(url+'/InsertData/insert_book_account',{
        bookac_code : $('#bookac_code').val(),
        bookac_name : $('#bookac_name').val(),
        bookac_doc : $('#bookac_doc').val()
    },function () {
        window.location.href = url+'/welcome/listbookac';
    });
}
var setformedit = function (bc_id, bookac_code, bookac_name, bookac_doc) {
    $('#edit_bookac_id').val(bc_id);
    $('#edit_bookac_code').val(bookac_code);
    $('#edit_bookac_name').val(bookac_name);
    $('#edit_bookac_doc').val(bookac_doc);
    $('#fromeditbookac').modal('toggle');
}
var updatebookaccount = function () {
    $.post(url+'/UpdateData/updatebook_account',{
        edit_bookac_id : $('#edit_bookac_id').val(),
        edit_bookac_code : $('#edit_bookac_code').val(),
        edit_bookac_name :$('#edit_bookac_name').val(),
        edit_bookac_doc : $('#edit_bookac_doc').val()
    },function () {
        window.location.href = url+'/welcome/listbookac';
    });
}
var setalertbookaccount = function (bc_id, bookac_name, status) {
    if(status == 0){
        $('#txt_alarm').html("ยืนยันการปิดใช้งาน : "+bookac_name +' หรือไม่');
    }else{
        $('#txt_alarm').html("ยืนยันการเปิดใช้งาน : "+bookac_name+' หรือไม่');
    }
    $('#change_bookacc_id').val(bc_id);
    $('#change_bookacc_status').val(status);
    $('#alertbookaccount').modal('toggle');

}
var confirmchangebookacc = function () {
    $.post(url+ "/DeleteData/changebook_acc",{
        change_bookacc_id : $('#change_bookacc_id').val(),
        change_bookacc_status : $('#change_bookacc_status').val()
    },function () {
        window.location.href = url+'/welcome/listbookac';
    });
}