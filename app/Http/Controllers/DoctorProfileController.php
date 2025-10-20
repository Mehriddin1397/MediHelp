<?php

namespace App\Http\Controllers;

use App\Models\DoctorProfile;
use App\Models\Specialty;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class DoctorProfileController extends Controller
{
    public function edit()
    {
        $specialties = Specialty::all();
        $profile = auth()->user()->doctorProfile;
        return view('doctor.edit', compact('specialties', 'profile'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'specialty_id' => 'required|exists:specialties,id',
            'workplace' => 'nullable|string|max:255',
            'experience_years' => 'nullable|integer|min:0|max:80',
            'bio' => 'nullable|string',
            'avatar' => 'nullable|image|max:5120',
        ]);

        if ($request->hasFile('avatar')) {
            $img = $request->file('avatar');
            $filename = 'avatar_' . auth()->id() . '_' . time() . '.jpg';
            $image = Image::make($img->getPathname())
                ->fit(400, 400)
                ->encode('jpg', 85);
            Storage::disk('public')->put('avatars/' . $filename, (string) $image);
            $data['avatar_path'] = 'avatars/' . $filename;
        }

        auth()->user()->doctorProfile()->updateOrCreate(['user_id' => auth()->id()], $data);

        return back()->with('success', 'Profil yangilandi.');
    }

    public function show($id)
    {
        // Shifokorni profili, mutaxassisligi va sharhlari bilan yuklaymiz
        $doctor = User::with([
            'doctorProfile.specialty', // ✅ to‘g‘ri nom
            'reviews.patient'
        ])
            ->where('role', 'doctor')
            ->findOrFail($id);

        return view('pages.doctor_show', compact('doctor'));
    }
}

