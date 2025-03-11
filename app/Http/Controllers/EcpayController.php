<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EcpayService;

class EcpayController extends Controller
{
    protected $ecpayService;

    public function __construct(EcpayService $ecpayService)
    {
        $this->ecpayService = $ecpayService;
    }

    // 生成訂單並導向至綠界付款頁面
    public function createOrder(Request $request)
    {
        // 從請求中取得訂單資料或從資料庫取得
        $orderData = [
            'order_id' => 'ORDER' . time(), // 產生唯一訂單編號
            'amount' => $request->amount,
            'description' => '訂單描述',
            'item_name' => $request->item_name ?: '商品名稱',
        ];
        
        // 儲存訂單到資料庫
        // ...
        
        // 創建綠界訂單
        $form = $this->ecpayService->createOrder($orderData);
        
        return view('ecpay.checkout', compact('form'));
    }

    // 綠界伺服器回傳通知
    public function notify(Request $request)
    {
        $result = $this->ecpayService->verifyNotification($request);
        
        if ($result) {
            // 更新訂單狀態
            // ...
            
            return '1|OK'; // 必須回傳此字串給綠界
        }
        
        return '0|FAIL';
    }
    
    // 消費者完成付款後的轉導頁面
    public function returnPage(Request $request)
    {
        return view('index');
    }
    
    // 消費者完成付款後的通知頁面
    public function clientNotify(Request $request)
    {
        $result = $this->ecpayService->verifyNotification($request);
        
        if ($result) {
            // 可以在這裡處理一些通知客戶端的邏輯
            return view('ecpay.success');
        }
        
        return view('ecpay.fail');
    }
}
