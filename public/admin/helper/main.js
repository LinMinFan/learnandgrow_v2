$(document).ready(function () {
    $('#logout').on('click', function () {
        let url = $(location).attr('origin') + '/logout';
        let csrfToken = $('meta[name="_token"]').attr('content'); // 取得 CSRF Token

        $.ajax({
            url: url,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken // 設定 CSRF Token
            },
            success: function (response) {
                location.reload();
            },
            error: function (xhr, status, error) {
                console.error('登出失敗', xhr.responseText);
            }
        });
    });
});
