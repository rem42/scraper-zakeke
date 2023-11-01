<?php declare(strict_types=1);

namespace Scraper\ScraperZakeke\Request;

use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(scheme: Scheme::HTTPS, host: 'api.zakeke.com')]
abstract class ZakekeRequest extends ScraperRequest {}
