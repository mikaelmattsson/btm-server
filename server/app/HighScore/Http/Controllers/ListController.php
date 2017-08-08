<?php

namespace App\HighScore\Http\Controllers;

use App\Core\Http\Controllers\Controller;
use App\HighScore\Documents\HighScoreRecord;
use Doctrine\ODM\MongoDB\DocumentManager;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ListController extends Controller
{
    /**
     * @param Request $request
     * @param DocumentManager $documentManager
     * @return View
     */
    public function list(Request $request, DocumentManager $documentManager): View
    {
        $repo = $documentManager->getRepository(HighScoreRecord::class);

        $list = $repo->findBy([], ['score' => 'desc'], 100);

        return view('high-score.list', ['highScores' => $list]);
    }
}
