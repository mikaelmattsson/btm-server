<?php

namespace App\HighScore\Http\Controllers;

use App\Core\Http\Controllers\Controller;
use App\HighScore\Documents\HighScoreRecord;
use Doctrine\ODM\MongoDB\DocumentManager;
use Illuminate\Http\Request;

class SubmitController extends Controller
{
    /**
     * @param Request $request
     * @param DocumentManager $documentManager
     * @return array
     */
    public function submit(Request $request, DocumentManager $documentManager)
    {
        $record = new HighScoreRecord();

        $record->setScore((int) $request->input('score', 0));
        $record->setTime((int) $request->input('time', 0));
        $record->setUserName((int) $request->input('userName', ''));
        $record->setSteamId((int) $request->input('steamId', ''));

        $documentManager->persist($record);

        $documentManager->flush();

        return ['success' => true];
    }
}
