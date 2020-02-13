<?php

namespace Adalessa\GoogleSpreadsheets\Tests;

use Orchestra\Testbench\TestCase;
use Adalessa\GoogleSpreadsheets\GoogleSpreadsheetsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [GoogleSpreadsheetsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
