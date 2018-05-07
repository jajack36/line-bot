<?php
namespace App\Services;

use LINE\LINEBot;
use LINE\LINEBot\Response;
// use LINE\LINEBot\MessageBuilder\TemplateMessageBuilder;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
// use LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder;
// use LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselColumnTemplateBuilder;
// use LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselTemplateBuilder;
// use LINE\LINEBot\MessageBuilder;

class LineBotService
{
	private $lineBot;
	private $lineUserID;

	public function __contruct($lineUserID)
	{
		$this->LineBot = app(LineBot::class);
		$this->lineUserID = $lineUserID;
	}

    public function pushMessage($content): Response
    {
        if (is_string($content)) {
            $content = new TextMessageBuilder($content);
        }
        return $this->lineBot->pushMessage($this->lineUserId, $content);
    }


}