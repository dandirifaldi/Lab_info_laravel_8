<?php

namespace Tests\Unit;

use Tests\TestCase;

class BarangTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_route_can_running_amazingly()
    {
        // $this->assertTrue(true);
        $this->get("/")->assertStatus(302);
        $this->get("/license")->assertStatus(302);
        $this->get("/report")->assertStatus(302);
        $this->get("/barang")->assertStatus(302);
        $this->get("/bagus")->assertStatus(302);
        $this->get("/rusak")->assertStatus(302);
        $this->get("/new")->assertStatus(302);
        $this->get("/maintenance")->assertStatus(302);
    }
}
