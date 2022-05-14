<?php

declare(strict_types=1);

namespace Amadeus;

use Amadeus\Airport\DirectDestinations;

class Airport
{
    /** @phpstan-ignore-next-line */
    private Amadeus $client;

    public ?DirectDestinations $directDestinations;

    /**
     * @param Amadeus $client
     */
    public function __construct(Amadeus $client)
    {
        $this->client = $client;
        $this->directDestinations = new DirectDestinations($client);
    }
}
