<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatGPT 聊天機器人</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset($site->firstWhere('key', 'favicon')->value) ?? config('admin_site.favicon') }}">

    <!-- bootstrap -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        #chat-box {
            max-height: 400px;
            overflow-y: scroll;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 15px;
        }
        .message {
            margin-bottom: 10px;
        }
        .user-message {
            background-color: #d1e7dd;
            padding: 10px;
            border-radius: 10px;
            max-width: 70%;
        }
        .bot-message {
            background-color: #f8d7da;
            padding: 10px;
            border-radius: 10px;
            max-width: 70%;
        }
        .input-group {
            width: 100%;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>ChatGPT 聊天機器人</h2>
                    </div>
                    <div class="card-body">
                        <div id="chat-box" class="mb-3"></div>
                        <div class="input-group">
                            <input type="text" id="message" class="form-control" placeholder="輸入訊息">
                            <button id="send" class="btn btn-primary">發送</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- font-awesome -->
    <script defer src="{{ asset('js/all.min.js') }}"></script>

    <script defer src="{{ asset('chatgpt/chat-gpt.js') }}"></script>
</body>
</html>
