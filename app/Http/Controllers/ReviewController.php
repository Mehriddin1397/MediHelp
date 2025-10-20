<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'doctor_id' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000'
        ]);

        $data['patient_id'] = auth()->id();

        Review::updateOrCreate(
            ['patient_id' => $data['patient_id'], 'doctor_id' => $data['doctor_id']],
            $data
        );

        return back()->with('success', 'Sharhingiz saqlandi.');
    }
}
