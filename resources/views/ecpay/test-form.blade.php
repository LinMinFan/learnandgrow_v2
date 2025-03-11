<!DOCTYPE html>
<html>
<head>
    <title>綠界科技測試</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>綠界科技金流測試</h1>
    
    <form method="POST" action="{{ route('ecpay.create.order') }}">
        @csrf
        <div>
            <label for="amount">訂單金額：</label>
            <input type="number" name="amount" id="amount" value="100" required>
        </div>
        <div>
            <label for="item_name">商品名稱：</label>
            <input type="text" name="item_name" id="item_name" value="測試商品" required>
        </div>
        <button type="submit">建立訂單並前往付款</button>
    </form>
</body>
</html>