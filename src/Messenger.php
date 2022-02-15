<?php

declare(strict_types=1);

namespace Changelog\Messenger\Slack;

use Changelog\Messenger\Messenger as Contract;
use Illuminate\Support\Facades\Http;

final class Messenger implements Contract
{
    public function message(string $from, string $to, string $text, ?array $options = []): void
    {
        Http::post($to, [
            'text' => $text,
            'type' => 'mrkdwn',
            ...$options,
        ]);
    }
}
