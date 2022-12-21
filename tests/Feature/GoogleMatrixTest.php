<?php

namespace Flarone\tests;

use Flarone\GoogleMatrix\GoogleMatrix;
use Flarone\GoogleMatrix\Tests\TestCase;

class GoogleDistanceTest extends TestCase
{
    /** @test */
    public function it_can_created()
    {
        $googleDistanceApi = new GoogleMatrix('foo');

        $this->assertNotNull($googleDistanceApi);
    }

    /** @test */
    public function google_api_key_was_wrong_or_over_query_limit()
    {
        $distance = (new GoogleMatrix('google_api_key'))
            ->calculate('79 Đinh Tiên Hoàng, P Đa Kao, Q1, TPHCM', '265 Nguyễn Đình Chiểu, P5, Q3');

        $this->assertEquals(-1, $distance);
    }

    /** @test */
    public function origins_address_is_wrong()
    {
        $distance = (new GoogleMatrix('google_api_key'))
            ->calculate('', '265 Nguyễn Đình Chiểu, P5, Q3');

        $this->assertEquals(-1, $distance);
    }

    /** @test */
    public function destinations_address_is_wrong()
    {
        $distance = (new GoogleMatrix('google_api_key'))
            ->calculate('79 Đinh Tiên Hoàng, P Đa Kao, Q1, TPHCM', '');

        $this->assertEquals(-1, $distance);
    }

    /** @test */
    public function origins_address_and_destinations_address_are_same()
    {
        $distance = (new GoogleMatrix('google_api_key'))
            ->calculate('79 Đinh Tiên Hoàng, P Đa Kao, Q1, TPHCM', '79 Đinh Tiên Hoàng, P Đa Kao, Q1, TPHCM');

        $this->assertEquals(-1, $distance);
    }

    /** @test */
    public function origins_address_and_destinations_address_are_an_empty_string()
    {
        $distance = (new GoogleMatrix('google_api_key'))->calculate('', '');

        $this->assertEquals(-1, $distance);
    }
}
