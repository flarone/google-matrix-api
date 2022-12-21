<?php

namespace Flarone\GoogleMatrix\Tests;

use Flarone\GoogleMatrix\Providers\GoogleMatrixServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function getPackageProviders($app)
    {
        return [
            GoogleMatrixServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('google-matrix.api_key', 'foo');
    }
}
