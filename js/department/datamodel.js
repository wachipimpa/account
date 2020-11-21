/**
 * Created by aungpoa on 21/11/2020 AD.
 */
var createmodal = function () {
    $('#create_department').modal('toggle');
}
var createdepartment = function () {
    $.post(url+"/InsertData/insert_department",{
        department_code : $('#department_code').val(),
        department_name : $('#department_name').val()
    },function () {
        window.location.href = url+"/welcome/listdepartment";
    });
}
var set_updatemodal = function (department_id, department_code, department_name) {
    $('#edit_department_id').val(department_id);
    $('#edit_department_code').val(department_code);
    $('#edit_department_name').val(department_name);
    $('#update_department').modal('toggle');
}
var updatedepartment = function () {
    $.post(url+"/UpdateData/update_department",{
        edit_department_id : $('#edit_department_id').val(),
        edit_department_code : $('#edit_department_code').val(),
        edit_department_name : $('#edit_department_name').val()
    },function () {
        window.location.href = url+"/welcome/listdepartment";
    });
}
var alarmstatusdepartment = function (department_id, department_name, department_status) {
    if(department_status == 0){
        $('#txt_alarm').html('ยืนยันการปิดใช้งาน : ' + department_name);
    }else{
        $('#txt_alarm').html('ยืนยันการเปิดใช้งาน : ' + department_name);
    }

    $('#change_department_id').val(department_id);
    $('#change_department_status').val(department_status);
    $('#alertdepartment').modal('toggle');
}
var changestatusdepartment = function () {
    $.post(url+'/DeleteData/changedepartment',{
        change_department_id : $('#change_department_id').val(),
        change_department_status : $('#change_department_status').val()
    },function () {

    }); window.location.href = url+"/welcome/listdepartment";
}