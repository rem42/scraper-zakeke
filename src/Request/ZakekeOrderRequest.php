<?php declare(strict_types=1);

namespace Scraper\ScraperZakeke\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestHeaders;

#[Scraper(method: Method::GET, path: 'v1/order/{id}')]
class ZakekeOrderRequest extends ZakekeRequest implements RequestHeaders
{
    public function __construct(
        protected readonly string $token,
        protected readonly string $id,
    ) {}

    public function getId(): string
    {
        return $this->id;
    }

    public function getHeaders(): array
    {
        return [
            'Authorization' => 'Bearer ' . $this->token,
            'Accept' => 'application/json',
        ];
    }
}
