<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as IlluminateTestCase;

class SomeDBTest extends IlluminateTestCase
{
    use RefreshDatabase, CreatesApplication;

    /**
     * @test
     */
    public function something_is_something()
    {
        $this->assertTrue(true);
    }
}
