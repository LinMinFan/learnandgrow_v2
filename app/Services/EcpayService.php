<?php
namespace App\Services;

use Ecpay\Sdk\Factories\Factory;
use Ecpay\Sdk\Services\UrlService;
use Ecpay\Sdk\Response\VerifiedArrayResponse;

class EcpayService
{
    protected $merchantId;
    protected $hashKey;
    protected $hashIv;
    protected $isProduction;
    
    public function __construct()
    {
        $this->merchantId = config('ecpay.merchant_id');
        $this->hashKey = config('ecpay.hash_key');
        $this->hashIv = config('ecpay.hash_iv');
        $this->isProduction = config('ecpay.is_production');
    }
    
    public function createOrder($orderData)
    {
        $factory = new Factory([
            'hashKey' => $this->hashKey,
            'hashIv' => $this->hashIv,
        ]);
        
        $autoSubmitFormService = $factory->create('AutoSubmitFormWithCmvService');
        
        // 準備基本訂單資料
        $input = [
            'MerchantID' => $this->merchantId,
            'MerchantTradeNo' => $orderData['order_id'], // 訂單編號
            'MerchantTradeDate' => date('Y/m/d H:i:s'),
            'PaymentType' => 'aio',
            'TotalAmount' => $orderData['amount'],
            'TradeDesc' => UrlService::ecpayUrlEncode($orderData['description']),
            'ItemName' => $orderData['item_name'],
            'ReturnURL' => route('ecpay.notify'), // 設定綠界付款完成通知的路由
            'ChoosePayment' => 'ALL', // 可使用所有付款方式
            'ClientBackURL' => route('ecpay.return'), // 消費者付款完成後的返回頁面
            'OrderResultURL' => route('ecpay.client.notify'), // 消費者付款完成後的通知頁面
            'EncryptType' => 1,
        ];
        
        // 依照不同支付方式增加其他參數，如信用卡分期等
        
        // 產生表單
        $action = $this->isProduction
            ? 'https://payment.ecpay.com.tw/Cashier/AioCheckOut/V5' // 綠界正式機網址
            : 'https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5'; // 綠界測試機網址
        
        return $autoSubmitFormService->generate($input, $action);
    }
    
    // 處理回傳通知的方法
    public function verifyNotification($request)
    {
        $factory = new Factory([
            'hashKey' => $this->hashKey,
            'hashIv' => $this->hashIv,
        ]);
        
        $checkoutResponse = $factory->create(VerifiedArrayResponse::class);
        
        // 取得所有參數
        $data = $request->all();
        
        // 驗證參數
        $isValid = $checkoutResponse->get($data);
        
        if (!$isValid) {
            return false;
        }
        
        return $data;
    }
}