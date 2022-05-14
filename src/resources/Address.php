<?php

declare(strict_types=1);

namespace Amadeus\Resources;

class Address
{
    private ?string $cityName = null;
    private ?string $cityCode = null;
    private ?string $countryName = null;
    private ?string $countryCode = null;
    private ?string $statusCode = null;
    private ?string $regionCode = null;

    /**
     * @return string|null
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * @return string|null
     */
    public function getCityCode(): ?string
    {
        return $this->cityCode;
    }

    /**
     * @return string|null
     */
    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @return string|null
     */
    public function getStatusCode(): ?string
    {
        return $this->statusCode;
    }

    /**
     * @return string|null
     */
    public function getRegionCode(): ?string
    {
        return $this->regionCode;
    }

    // Setter
    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}
