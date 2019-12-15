<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\TestCase;
use Tests\CreatesApplication;

class MigrateFresh extends TestCase
{
    use CreatesApplication;

    /**
     * @test
     */
    public function migrate_fresh()
    {
        $this->artisan('migrate:fresh');
        $this->assertTrue(true);
    }
}
