<?php

namespace RicorocksDigitalAgency\Giveaninch\Tests;

use Orchestra\Testbench\TestCase;
use RicorocksDigitalAgency\Giveaninch\Facades\GiveAnInch;
use RicorocksDigitalAgency\Giveaninch\GiveAnInchServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [GiveAnInchServiceProvider::class];
    }

    /** @test */
    public function it_calculates_the_distance_between_points()
    {
        $this->assertEquals(0, GiveAnInch::from(0, 0)->to(0, 0)->getDistance());
        $this->assertEquals(1571.3484026368, GiveAnInch::from(0, 0)->to(10, 10)->getDistance());
        $this->assertEquals(15530.564562899437, GiveAnInch::from(-5, -50)->to(70, 68.4)->getDistance());
    }

    /** @test */
    public function it_can_say_if_something_is_within_a_certain_radius()
    {
        $this->assertTrue(GiveAnInch::from(0, 0)->to(0, 0)->isWithin(5));
        $this->assertFalse(GiveAnInch::from(0, 0)->to(100, 100)->isWithin(5));
    }
}
