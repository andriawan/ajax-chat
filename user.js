/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    //Prompt berfungsi mengambil variable nama saat pertama kali browser dijalankan
    var user_name = prompt('Please enter your name:');
    //mengambil nilai berupa string dari textarea dengan ID #cont
    $('#cont').val('');
    
    /* 19 - 26 handler click apabila dijalankan akan mengambil nilai pada textarea
     * dengan ID #cont berupa string. Fungsi 
     * 
     * $.post bertugas mengirim variable user_name & cont ke 
     * file pemroses chat.php, file chat.php akan menerima
     * passing variable dalam bentuk $_POST['user_name'] & $_POST['content']
     * 
     */
    $('#ready').click(function () {
        var cont = $('#cont').val();
        $.post('chat.php', {user_name: user_name, content: cont}, function (data) {

        });

        $('#cont').val('');
    });

    $('#cont').keypress(function (e) {
        if (e.which === 13) {
            var cont = $('#cont').val();
            $.post('chat.php', {user_name: user_name, content: cont}, function (data) {

            });

            $('#cont').val('');
        }
    });

    $('#cont').focusin(function () {
        $.post('notif.php', {user_name: user_name}, function (data) {

        });
    });

    $('#cont').focusout(function () {
        $.post('delnotif.php', {user_name: user_name}, function (data) {

        });
    });


    //send useruser_name to users.php action: joined
    $.post('users.php', {user_name: user_name, action: 'joined'});

    setInterval(function () {
        
        $.post('count.php', function (data) {
            $('#all').html(data);
        });

        $.post('is_writing.php', {user_name: user_name}, function (data) {
            $('#is').html(data);
        });

        // get list of users, action: list
        $.post('users.php', {action: 'list'}, function (data) {
            $('#user_online').html(data);
        });

        $.post('timed.php', {action: 'list'}, function (data) {
            $('#timed').html(data);
        });

        $.post('chat_result.php', function (data) {
            $('#sel').html(data);
        });

    }, 500);

    $(window).unload(function () {
        // remove username, action: left
        $.post('users.php', {user_name: user_name, action: 'left'});

        $.post('delnotif.php', {user_name: user_name}, function (data) {

        });
    });

});
