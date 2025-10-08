<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request, $doctorId)
    {
        $data = $request->validate([
            'title' => 'required|string|max:150',
            'body' => 'required|string|max:2000',
            'is_public' => 'boolean'
        ]);

        $data['patient_id'] = auth()->id();
        $data['doctor_id'] = $doctorId;
        $data['status'] = 'pending';

        Question::create($data);

        return back()->with('success', 'Savolingiz yuborildi.');
    }
}
