<?php declare(strict_types=1);

namespace Scraper\ScraperZakeke\Model;

class Item
{
    public ?string $code = null;
    public ?string $productSku = null;
    public ?string $productName = null;
    public ?string $productTemplateId = null;
    public ?string $thumbnail = null;
    public ?int $quantity = null;
    public ?string $design = null;
    public ?string $preDesignedTemplateName = null;
    public ?string $printFilesStatus = null;
    public ?string $printingFilesZip = null;
    /** @var array<int, PrintingFile> */
    public array $printingFiles = [];
    public ?Price $price = null;

    public function addPrintingFile(PrintingFile $printingFile): self
    {
        $this->printingFiles[] = $printingFile;
        return $this;
    }
}
