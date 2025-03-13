<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ChatGPTService
{
    protected string $apiUrl = 'https://api.openai.com/v1/chat/completions';
    protected Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'timeout'  => 10.0, // 設定請求超時時間
        ]);
    }

    public function chat(string $message, array $history = []): string
    {
        $apiKey = env('OPENAI_API_KEY');

        $messages = array_merge($history, [
            ['role' => 'user', 'content' => $message]
        ]);

        try {
            $response = $this->client->post($this->apiUrl, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type'  => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-4o-mini', // gpt-3.5-turbo 或 gpt-4o-mini gpt-4o
                    'messages' => $messages,
                    'temperature' => 0.7,
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            return $data['choices'][0]['message']['content'] ?? '無法取得回應';

        } catch (RequestException $e) {
            return $e->getResponse()
                ? json_decode($e->getResponse()->getBody()->getContents(), true)['error']['message'] ?? '發生未知錯誤'
                : '發生請求錯誤';
        }
    }
}
