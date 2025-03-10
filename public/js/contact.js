$(document).ready(function() {
    if ($('.home_index').hasClass('active')) {
        $('.home_index').removeClass('active');
        $('.contact').addClass('active');
    }

    if (!$('.contact').hasClass('active')) {
        $('.contact').addClass('active');
    }

    $('.contact_form').on('blur', 'input, textarea, select', function() {
        // 檢查輸入框是否有值
        if ($(this).val() !== '') {
            let url = $(location).attr('origin') + $(location).attr('pathname');
    
            // 建立一個 FormData 物件來收集表單資料
            let formData = new FormData($('.contact_form')[0]);
    
            // 發送 AJAX 請求
            $.ajax({
                url: url + '/temporary',
                method: 'POST',
                data: formData,
                processData: false,  // 不要讓 jQuery 處理 data (避免 FormData 轉為字串)
                contentType: false   // 不設置 contentType，讓瀏覽器自動設定 (適用於 multipart/form-data)
            }).done(function (res) {
                if (res.success) {
                    $('main').prepend('<p class="notice-success h3 text-success text-center">資料已暫存</p>');
    
                    setTimeout(function() {
                        $('.notice-success').remove();
                    }, 800);
                } else {
                    $('main').prepend('<p class="notice-error h3 text-danger text-center">沒有資料需要暫存</p>');
    
                    setTimeout(function() {
                        $('.notice-error').remove();
                    }, 800);
                }
            });
        }
    });

});
