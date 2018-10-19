<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class QuestionController extends Controller
{
    public function index()
    {
        $questions = \App\Question::withCount('answers')
        ->OrderBy('created_at', 'desc')
        ->get();

     $view = view("questions/index", ['questions' => $questions]);
        return $view;
        
    }
    

    public function show(){
       return 'This is a detail of a question';
    }
}
