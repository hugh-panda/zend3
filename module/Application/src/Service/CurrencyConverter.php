<?php

namespace Application\Service;

class CurrencyConverter
{
    /**
     * @param float $amount
     * @return float
     */
    public function convertEURtoUSD(float $amount): float
    {
        return $amount*1.25;
    }
}