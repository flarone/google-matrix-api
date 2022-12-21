<?php

namespace Flarone\GoogleMatrix\Tests\Feature;

use Illuminate\Support\ServiceProvider;
use Flarone\GoogleMatrix\Providers\GoogleMatrixServiceProvider;
use Flarone\GoogleMatrix\Tests\TestCase;

class GoogleMatrixServiceProviderTest extends TestCase
{
    /** @test */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf(ServiceProvider::class, new GoogleMatrixServiceProvider($this->app));
    }
}
