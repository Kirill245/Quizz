<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function showAll(){
        return view('question', ['data' => Question::all()]);
    }

}
