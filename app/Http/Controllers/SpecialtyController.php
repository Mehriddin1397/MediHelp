<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    /**
     * Soha ro'yxatini ko'rsatish
     */
    public function index()
    {
        $specialties = Specialty::all();
        return view('admin.specialties.index', compact('specialties'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required',
        ]);



        Specialty::create([
            'name' => $request->name,
            'slug' => $request->slug
        ]);

        return redirect()->route('specialties.index')
            ->with('success', 'Soha muvaffaqiyatli qo‘shildi.');
    }

    /**
     * Soha ma'lumotlarini ko'rsatish
     */
    public function show($id)
    {
        $specialty = Specialty::findOrFail($id);
        return view('specialties.show', compact('specialty'));
    }

    /**
     * Soha tahrirlash formasi
     */
    public function edit($id)
    {
        $specialty = Specialty::findOrFail($id);
        return view('specialties.edit', compact('specialty'));
    }

    /**
     * Soha ma'lumotlarini yangilash
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $specialty = Specialty::findOrFail($id);
        $specialty->update($request->all());

        return redirect()->route('specialties.index')
            ->with('success', 'Soha maʼlumotlari yangilandi.');
    }

    /**
     * Soha ma'lumotlarini o'chirish
     */
    public function destroy($id)
    {
        $specialty = Specialty::findOrFail($id);
        $specialty->delete();

        return redirect()->route('specialties.index')
            ->with('success', 'Soha muvaffaqiyatli o‘chirildi.');
    }
}
