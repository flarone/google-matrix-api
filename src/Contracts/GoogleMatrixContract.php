<?php

namespace Flarone\GoogleMatrix\Contracts;

interface GoogleMatrixContract
{
    /**
     * Calculate distance from origins to destinations.
     *
     * @param string $origins
     * @param string $destinations
     *
     */
    public function calculate($origins, $destinations);
}
