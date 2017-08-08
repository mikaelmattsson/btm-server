<?php

namespace Tests\Feature;

use App\HighScore\Documents\HighScoreRecord;
use Doctrine\ODM\MongoDB\DocumentManager;
use Tests\TestCase;

class ListControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSubmit()
    {
        $response = $this->get('/high-score/list');

        $response->assertStatus(200);

        $response->assertSee('High Score');
    }

}
