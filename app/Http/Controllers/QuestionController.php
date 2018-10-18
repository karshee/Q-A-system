<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class QuestionController extends Controller
{
    public function index()
    {
     $view = view("questions/index");
        return $view;
        
    }
    

    public function show(){
       return 'This is a detail of a question';
    }
}
