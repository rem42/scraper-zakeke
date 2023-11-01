<?php declare(strict_types=1);

namespace Scraper\ScraperZakeke\Api;

use Scraper\ScraperZakeke\Model\Token;

class ZakekeTokenApi extends ZakekeApi
{
    public function execute(): Token
    {
        return $this->serializer->deserialize(
            $this->response->getContent(),
            Token::class,
            'json'
        );
    }
}
