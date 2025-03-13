$(document).ready(function() {
    $('#chat-form').on('submit', function(e) {
      e.preventDefault();
      
      const prompt = $('#prompt').val().trim();
      if (!prompt) return;
      
      // 顯示使用者訊息
      const chatHistory = $('#chat-history');
      chatHistory.append(`<div class="user-message mb-2"><strong>您:</strong> ${prompt}</div>`);
      
      // 清空輸入框
      $('#prompt').val('');
      
      // 發送請求到API
      $.ajax({
        url: '/api/ask-claude',
        type: 'POST',
        contentType: 'application/json',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: JSON.stringify({ prompt }),
        success: function(data) {
          // 顯示Claude的回應
          if (data.content && data.content[0] && data.content[0].text) {
            chatHistory.append(`<div class="claude-message mb-2"><strong>Claude:</strong> ${data.content[0].text}</div>`);
          } else if (data.error) {
            chatHistory.append(`<div class="error-message mb-2"><strong>錯誤:</strong> ${data.error}</div>`);
          }
          
          // 滾動到最新訊息
          chatHistory.scrollTop(chatHistory[0].scrollHeight);
        },
        error: function(xhr, status, error) {
          console.error('Error:', error);
          $('#chat-history').append(`<div class="error-message mb-2"><strong>錯誤:</strong> 無法連接到伺服器</div>`);
        }
      });
    });
  });