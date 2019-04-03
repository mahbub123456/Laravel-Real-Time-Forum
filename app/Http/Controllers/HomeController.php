<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $all_questions = Question::orderBy('created_at','desc')->paginate(5);
        $all_category = Category::orderBy('created_at','desc')->paginate(5);
        //News::orderBy('created_at', 'desc')->take(10)->get();
        return view('home')
            ->with('questions',$all_questions)
            ->with('categorys',$all_category);
    }
}
