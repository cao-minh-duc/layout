<?php

namespace UiBuilder\Layout\Tests;

use Orchestra\Testbench\TestCase;
use UiBuilder\Layout\LayoutServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LayoutServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
