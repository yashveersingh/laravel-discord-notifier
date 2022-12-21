<?php

namespace yashveersingh\laravelDiscordNotifier;

use Illuminate\Support\Facades\Http;

class DiscordNotifier
{
    private $webHook, $username;

    /**
     * @param string|null $webHook
     */
    public function __construct(string $webHook = null)
    {
        $this->webHook = is_null($webHook) ? env('DISCORD_WEBHOOK', null) : $webHook;
    }

    /**
     * @param string $webHook
     * @return $this
     */
    public function setWebhook(string $webHook): DiscordNotifier
    {
        $this->webHook = $webHook;
        return $this;
    }

    /**
     * @param string $username
     * @return DiscordNotifier
     */
    public function setUserName(string $username): DiscordNotifier
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @param string $content
     * @return bool
     */
    public function send(string $content): bool
    {
        $data = [
            'content' => $content
        ];
        if (!is_null($this->username))
            $data['username'] = $this->username;
        $pendingRequest = Http::asMultipart();
        $pendingRequest = $pendingRequest->retry(2, 5);
        $response = $pendingRequest->post($this->webHook, $data);
        return $response->ok();
    }
}
