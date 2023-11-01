<?php declare(strict_types=1);

namespace Scraper\ScraperZakeke\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestAuthBasic;
use Scraper\Scraper\Request\RequestBody;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\Scraper\Request\RequestQuery;

#[Scraper(method: Method::POST, path: 'token')]
class ZakekeTokenRequest extends ZakekeRequest implements RequestAuthBasic, RequestBody, RequestHeaders, RequestQuery
{
    public function __construct(
        protected readonly string $clientId,
        protected readonly string $clientSecret,
    ) {}

    public function getHeaders(): array
    {
        return [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];
    }

    public function getBody(): array
    {
        return [
            'grant_type' => 'client_credentials',
        ];
    }

    public function getQuery(): array
    {
        return [
            'access_type' => 'S2S',
        ];
    }

    public function getAuthBasic(): string
    {
        return $this->clientId . ':' . $this->clientSecret;
    }
}
