<?php

namespace RicorocksDigitalAgency\Giveaninch\Tests;

use Orchestra\Testbench\TestCase;
use RicorocksDigitalAgency\Giveaninch\GiveaninchServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [GiveaninchServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
