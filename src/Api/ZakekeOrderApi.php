<?php declare(strict_types=1);

namespace Scraper\ScraperZakeke\Api;

use Scraper\ScraperZakeke\Model\Order;

class ZakekeOrderApi extends ZakekeApi
{
    public function execute(): Order
    {
        return $this->serializer->deserialize(
            $this->response->getContent(),
            Order::class,
            'json'
        );
    }
}
