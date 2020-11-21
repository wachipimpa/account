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
