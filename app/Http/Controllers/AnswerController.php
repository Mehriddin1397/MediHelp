<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Request $request, Question $question)
    {
        $request->validate([
            'body' => 'required|string|max:3000',
        ]);

        Answer::create([
            'question_id' => $question->id,
            'doctor_id' => auth()->id(),
            'body' => $request->body
        ]);

        $question->update(['status' => 'answered']);

        return back()->with('success', 'Javob yuborildi.');
    }
}
