<?php

namespace Src\CandidateManagement\Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    /** @test */
    public function it_access_home_page()
    {
        $this->get("/candidate-pool")
            ->assertOk();
    }
}
