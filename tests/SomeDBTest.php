<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as IlluminateTestCase;
use Tests\Concerns\RefreshDatabaseLite;

class SomeDBTest extends IlluminateTestCase
{
    use RefreshDatabaseLite, CreatesApplication;

    /**
     * @test
     */
    public function something_is_something()
    {
        $this->assertTrue(true);
    }
}
