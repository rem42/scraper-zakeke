<?php declare(strict_types=1);

namespace Scraper\ScraperZakeke\Model;

class Order
{
    public ?int $id = null;
    public ?string $code = null;
    public ?string $orderNumber = null;
    public ?SalesChannel $salesChannel = null;
    /** @var array<int, Item> */
    public array $items = [];
    public ?string $orderDate = null;

    public function addItem(Item $item): self
    {
        $this->items[] = $item;
        return $this;
    }
}
