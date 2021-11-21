<?php

namespace App\Services;

use App\Contracts\LeadsStore;

class TelegramBotLeadStore implements LeadsStore
{
    public function __construct(protected \Telegram\Bot\Api $telegramBotApi, protected string $telegramChatId)
    {
    }

    /** {@inheritDoc} */
    public function store(string $telegram, string $about): void
    {
        $this->telegramBotApi->sendMessage(
            [
                'chat_id' => $this->telegramChatId,
                'parse_mode' => 'MarkdownV2',
                'text' => sprintf(
                    "*Telegram:* @%s\n*About:* %s",
                    $telegram,
                    $about
                )
            ]
        );
    }
}
