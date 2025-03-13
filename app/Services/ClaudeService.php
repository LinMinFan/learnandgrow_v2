<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class ClaudeService
{
    protected $client;
    protected $apiKey;
    
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.anthropic.com/v1/',
            'headers' => [
                'x-api-key' => env('ANTHROPIC_API_KEY'),
                'anthropic-version' => '2023-06-01', // 使用最新版本
                'Content-Type' => 'application/json',
            ]
        ]);
        
        $this->apiKey = env('ANTHROPIC_API_KEY');
    }
    
    public function generateCompletion($prompt, $maxTokens = 1000, $model = 'claude-3-5-sonnet-20240620')
    {
        try {
            $response = $this->client->post('messages', [
                'json' => [
                    'model' => $model,
                    'max_tokens' => $maxTokens,
                    'messages' => [
                        ['role' => 'user', 'content' => $prompt]
                    ]
                ]
            ]);
            
            return json_decode($response->getBody(), true);
        } catch (RequestException $e) {
            // 專門處理 HTTP 請求異常
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : 'Unknown';
            $errorBody = $e->hasResponse() ? $e->getResponse()->getBody()->getContents() : '';
            
            Log::error('Claude API Request Error: ' . $e->getMessage(), [
                'status_code' => $statusCode,
                'error_body' => $errorBody,
                'request' => $e->getRequest()
            ]);
            
            return [
                'error' => true,
                'message' => '與 Claude API 通信時發生錯誤',
                'status_code' => $statusCode,
                'details' => json_decode($errorBody, true)
            ];
        } catch (\Exception $e) {
            // 處理其他所有異常
            Log::error('Claude Service General Error: ' . $e->getMessage());
            
            return [
                'error' => true,
                'message' => '處理請求時發生錯誤',
                'details' => $e->getMessage()
            ];
        }
    }
}