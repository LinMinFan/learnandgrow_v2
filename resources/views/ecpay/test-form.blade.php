<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>綠界科技金流測試</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset($site->firstWhere('key', 'favicon')->value) ?? config('admin_site.favicon') }}">

    <!-- bootstrap -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 500px;
            margin-top: 50px;
            padding: 30px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
        .card {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">綠界科技金流測試</h2>

    <form method="POST" action="{{ route('ecpay.create.order') }}">
        @csrf
        <div class="form-group">
            <label for="amount">訂單金額：</label>
            <input type="number" class="form-control" name="amount" id="amount" value="100" required>
        </div>
        <div class="form-group">
            <label for="item_name">商品名稱：</label>
            <input type="text" class="form-control" name="item_name" id="item_name" value="測試商品" required>
        </div>
        <button type="submit" class="btn btn-custom btn-block">建立訂單並前往付款</button>
    </form>
    <!-- 測試信用卡資訊 -->
    <div class="card mt-4">
        <div class="card-header bg-primary text-white">
            測試信用卡資訊
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li><strong>一般信用卡測試卡號：</strong></li>
                <ul>
                    <li>4311-9511-1111-1111 (安全碼：任意三碼數字)</li>
                    <li>4311-9522-2222-2222 (安全碼：任意三碼數字)</li>
                </ul>
                <li><strong>海外信用卡測試卡號：</strong></li>
                <ul>
                    <li>4000-2011-1111-1111 (安全碼：任意三碼數字)</li>
                </ul>
                <li><strong>美國運通信用卡測試卡號 (限閘道商使用)：</strong></li>
                <ul>
                    <li>國內：3403-532780-80900</li>
                    <li>國外：3712-222222-22222</li>
                </ul>
            </ul>
        </div>
    </div>
</div>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- font-awesome -->
    <script defer src="{{ asset('js/all.min.js') }}"></script>

</body>
</html>
