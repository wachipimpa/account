/**
 * Created by aungpoa on 21/11/2020 AD.
 */
var createcompany = function () {
    $.post(url + '/InsertData/insert_company',{
        review_picture : $('#review_picture').val(),
        comp_name : $('#comp_name').val(),
        comp_user : $('#comp_user').val(),
        comp_phone : $('#comp_phone').val(),
        comp_serail : $('#comp_serail').val(),
        comp_address : $('#comp_address').val(),
        comp_tax : $('#comp_tax').val(),
        comp_decimal : $('#comp_decimal').val()
    },function () {
        window.location.href = url+"/welcome/company";
    });
}

var updatecompany = function () {
    $.post(url + '/UpdateData/update_company',{
        comp_id : $('#comp_id').val(),
        review_picture : $('#review_picture').val(),
        comp_name : $('#comp_name').val(),
        comp_user : $('#comp_user').val(),
        comp_phone : $('#comp_phone').val(),
        comp_serail : $('#comp_serail').val(),
        comp_address : $('#comp_address').val(),
        comp_tax : $('#comp_tax').val(),
        comp_decimal : $('#comp_decimal').val()
    },function () {
        window.location.href = url+"/welcome/company";
    });
}

var setcompany = function (comp_id, status, comp_name) {
    $('#edit_comp_id').val(comp_id);
    $('#edit_comp_status').val(status);
    if(status == 0){
        $('#txt_alarm').html("คุณต้องการที่จะปิดการใช้งาน : "+ comp_name+' หรือไม่');
    }else{
        $('#txt_alarm').html("คุณต้องการที่จะเปิดการใช้งาน : "+ comp_name+' หรือไม่');
    }

    $('#alertcompay').modal('toggle');
}

var updatestatuscomp = function () {
    $.post(url +'/DeleteData/changestatuscompany', {
        edit_comp_id : $('#edit_comp_id').val(),
        edit_comp_status : $('#edit_comp_status').val()
    },function () {
        window.location.href = url+"/welcome/company";
    });
}