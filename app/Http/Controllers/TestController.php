<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function details($slug){

        $questions = Question::find($slug);

        return view('details')->with('t',$questions);

    }
}
