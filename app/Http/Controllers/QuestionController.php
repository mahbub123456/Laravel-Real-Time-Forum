<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$name = "Mahbub";
        $category = Category::all();
       return view('questioncreate')->with('category',$category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $questions = new Question();

        $request->validate([
            'title' => 'required|unique:questions|max:255',
            'category_id'=>'required',
            'body'=>'required'
        ]);

        $questions->title = $request->title;
        $questions->slug = str_slug($request->title);
        $questions->body = $request->body;
        $questions->category_id = $request->category_id;
        $questions->user_id = auth()->user()->id;

        //dd( $questions->user_id = auth()->user()->id);
        //dd( $questions->category_id = $request->category_id);
        //dd( $questions->slug = str_slug($request->title));
        $questions->save();

        $request->session()->flash("msg","Question Created Successfully");
        return redirect()->route('home');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
//    public function edit(Question $question)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, Question $question)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }

    public function delete(Request $request,$id){

        $find_question = Question::find($id);
        $find_question->delete();
        $request->session()->flash('msg',"Your Question has been Deleted");
        return redirect()->route('home');

    }

    public function details($id){


//        $question_id = Question::all();
        $product = Question::find($id);
        return view('details')
            ->with('products',$product);


    }

    public function edit(Request $request,$id){
        $category = Category::all();
        $questions = Question::find($id);
        return view('updatequestion')
            ->with('category',$category)
            ->with('question',$questions);

    }

    public function update(Request $request,$id){

        $all_questions = Question::find($id);

        $request->validate([
            'title' => 'required|unique:questions|max:255',
            'category_id'=>'required',
            'body'=>'required'
        ]);

        $all_questions->update([
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'body'=>$request->body,
        ]);

        $request->session()->flash("msg","Question Updated Successfully");
        return redirect()->route('home');

    }


}
