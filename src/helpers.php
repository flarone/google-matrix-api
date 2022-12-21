<?php

use Flarone\GoogleMatrix\Facades\GoogleMatrix;

if (!function_exists('google_matrix')) {
    /**
     * @author Flarone
     *
     * @param string $origins
     * @param string $destinations
     *
     * @return int
     */
    function google_matrix($origins, $destinations)
    {
        return GoogleMatrix::calculate($origins, $destinations);
    }
}
