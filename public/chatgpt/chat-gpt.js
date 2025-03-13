$(document).ready(function() {
    $('#send').click(function() {
        let message = $('#message').val();
        if (message.trim() === '') return;

        $('#chat-box').append(`<p><b>你:</b> ${message}</p>`);
        $('#message').val('');

        $.ajax({
            url: '/api/chat',
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({ message }),
            success: function(response) {
                $('#chat-box').append(`<p><b>ChatGPT:</b> ${response.response}</p>`);
            },
            error: function() {
                alert('發生錯誤，請稍後再試');
            }
        });
    });
});