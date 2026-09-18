<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Some dev shells export SESSION_DRIVER=database globally, which phpunit.xml
     * cannot reliably override once the framework boots. Pin the driver here so
     * feature tests stay hermetic and never need a sessions table.
     */
    protected function setUp(): void
    {
        parent::setUp();

        config(['session.driver' => 'array']);
    }
}
