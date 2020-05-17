<?php

namespace UiBuilder\Layout\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use UiBuilder\Layout\LayoutServiceProvider;

class TestCase extends BaseTestCase
{

    protected function getPackageProviders($app)
    {
        return [LayoutServiceProvider::class];
    }
}
