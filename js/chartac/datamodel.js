var create_chartac = function () {
    $.post(url+'/InsertData/insert_chartaccount',{
        acc_code : $('#acc_code').val(),
        acc_name : $('#acc_name').val(),
        acc_mode  :$('#acc_mode').val(),
        acc_detail : $('#acc_detail').val()
    },function () {
        window.location.href = url+'/welcome/list_chart_of_account';
    });
}
var seteditchartacc = function (acc_id, acc_code, acc_name, acc_mode, acc_detail) {
    $('#edit_acc_id').val(acc_id);
    $('#edit_acc_code').val(acc_code);
    $('#edit_acc_name').val(acc_name);
    $('#edit_acc_mode').val(acc_mode);
    $('textarea#edit_acc_detail').val(acc_detail);
}
var updatechartacc = function () {
    $.post(url + '/UpdateData/update_chartacc',{
        edit_acc_id : $('#edit_acc_id').val(),
        edit_acc_code : $('#edit_acc_code').val(),
        edit_acc_name : $('#edit_acc_name').val(),
        edit_acc_mode : $('#edit_acc_mode').val(),
        edit_acc_detail : $("#edit_acc_detail").val()
    },function () {
        window.location.href = url+'/welcome/list_chart_of_account';
    });
}
var alertmdoaldrop = function (acc_id, acc_code, acc_name, acc_trash) {
    if(acc_trash == 0){
        $('#txt_alarm').html('คุณต้องการปิดการใช้งาน : '+acc_code +' '+acc_name +' น้ำหรือไม่');
    }else{
        $('#txt_alarm').html('คุณต้องการเปิดการใช้งาน : '+acc_code +' '+acc_name +' น้ำหรือไม่');
    }
    $('#change_chart_id').val(acc_id);
    $('#change_chart_status').val(acc_trash);
    $('#alertchangechart').modal('toggle');
}
var confirmchangechart = function () {
    $.post(url + '/DeleteData/changechartacc',{
        change_chart_id : $('#change_chart_id').val(),
        change_chart_status : $('#change_chart_status').val()
    },function () {
        window.location.href = url+'/welcome/list_chart_of_account';
    });
}