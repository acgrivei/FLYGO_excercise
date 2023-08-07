<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crossword;

class CrosswordController extends Controller
{
    //
    public static function getCrosswordsForDate($date){
        $result = Crossword::where('date', $date)->get();
        if (!$result->isEmpty()) {
            return response()->json($result);
        } else {
            return response()->json(['error' => 'No crosswords found for the given date'], 404);
        }
    }

    public static function getAllCrosswords(){
        return Crossword::all();
    }
}
