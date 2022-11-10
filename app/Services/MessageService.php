<?php

declare(strict_types=1);

namespace App\Services;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class MessageService
{
    const LOGIN_LINK = 'https://website.com';

    public function makeGuzzleRequest(string $recipient, string $textMessage): ResponseInterface
    {
        $url = 'https://apis.sematime.com/v1/f9f0a0311d6a49259f52182753550afe/messages/single';
        $client = new Client(['headers' => ['AuthToken' => 'a256fe5cd8fb4404a24ae60a70db10d6', 'content-type' => 'application/json']]);

        return $client->post($url, [
            'json' => [
                'recipients' => $recipient->phone,
                'text' => $textMessage,
            ],
        ]);
    }

    public function successfulUserRegistrationMessage(int $id): ResponseInterface
    {
        $recipient = User::where('id', $id)->value('phone');
        $textMessage = ucfirst(User::where('id', $id)->value('firstname')).' Congratulations and welcome to Carstore. You can access your dashboard and post cars by clicking'.self::LOGIN_LINK.'STOP*456*9*5#';

        return $this->makeGuzzleRequest($recipient, $textMessage);
    }
}
