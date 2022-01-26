$('#button').click(function () {

    var uname = $('#name').val();
    var umsg = $('#msg').val();

    $.post('page.php', { user: uname, msg: umsg }, function (data) {
        $('#feedback').html(data);

    });


});