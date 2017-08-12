<?php

namespace Tests\Feature;

use App\HighScore\Documents\HighScoreRecord;
use Doctrine\ODM\MongoDB\DocumentManager;
use Tests\TestCase;

class SubmitControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSubmit()
    {
        $dm = $this->getDocumentManager();

        $dm->getSchemaManager()->dropCollections();

        $response = $this->postJson('/high-score/submit', [
            'score' => 1000,
            'time'  => 30,
            'userName'  => 'foobar',
            'steamId'  => '123',
        ]);

        $response->assertStatus(200);

        $dm->clear();

        $repo = $dm->getRepository(HighScoreRecord::class);

        $records = $repo->findAll();

        $this->assertCount(1, $records);
        $this->assertEquals(1000, $records[0]->getScore());
        $this->assertEquals('foobar', $records[0]->getUserName());
    }

    /**
     * @return DocumentManager
     */
    private function getDocumentManager()
    {
        return $this->app[DocumentManager::class];
    }
}
