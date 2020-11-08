<?php

namespace Resto2web\Templates\Tests;

use Orchestra\Testbench\TestCase;
use Resto2web\Templates\TemplatesServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TemplatesServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
