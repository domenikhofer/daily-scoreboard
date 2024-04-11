<?php

namespace App\Http\Controllers;

use App\Models\Score;
use DateInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ScoreController extends Controller
{
    public function index()
    {
        $score = Score::min('time');
        $format = 'i:s';
        $formatted = gmdate($format, $score / 1000);
        $millis = explode('.', $score/1000)[1] ?? '000';

        $scoreMax = Score::max('time');
        $formatMax = 'i:s';
        $formattedMax = gmdate($formatMax, $scoreMax / 1000);
        $millisMax = explode('.', $scoreMax/1000)[1] ?? '000';

        $scoreLast = Score::latest()->first()->time;
        $formatLast = 'i:s';
        $formattedLast = gmdate($formatLast, $scoreLast / 1000);
        $millisLast = explode('.', $scoreLast/1000)[1] ?? '000';


        return view('index', ['score' => $score, 'formatted' => $formatted.'.'.$millis, 'scoreMax' => $scoreMax, 'formattedMax' => $formattedMax.'.'.$millisMax, 'scoreLast' => $scoreLast, 'formattedLast' => $formattedLast.'.'.$millisLast]);
    }

    public function store(Request $request)
    {
        $score = new Score();
        $score->time = $request->time;
        $score->save();
    }
}
