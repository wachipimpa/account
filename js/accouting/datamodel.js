/**
 * Created by aungpoa on 22/11/2020 AD.
 */
$(document).ready(function () {
    $.getJSON(url+'/MainApi/get_booking_account',function (data) {
        $.each(data, function (k,v) {
            $('#book_acc').append('<option value="'+v['bc_id']+'">'+v['bc_name']+'</option>');
        });
    });
    $.getJSON(url+'/MainApi/get_department',function (data) {
        $.each(data, function (k,v) {
            $('#department').append('<option value="'+v['department_id']+'">'+v['department_name']+'</option>');
        });
    });
    $.getJSON(url+'/MainApi/get_chartacc',function (data) {
        $.each(data, function (k,v) {
            $('#browsers').append('<option data-value="'+v['acc_id']+'"> '+v['acc_code']+ ' '+v['acc_name']+ '</option>');
        });
    });
});
