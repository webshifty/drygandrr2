<?php

namespace App\Services;

use TuriBot\Client;

class TelegramService
{
	private $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function sendMessage(int $chatId, string $message)
	{
		$this->client->sendMessage(
			$chatId,
			$message,
			'HTML',
			null,
			null,
			null,
			null,
			null,
			null
		);
	}

    public function sendSticker(int $chatId, string $sticker)
    {
        $this->client->sendSticker(
            $chatId,
            $sticker,
            null,
            null,
            null,
            null
        );
    }
}
