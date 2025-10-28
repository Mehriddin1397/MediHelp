<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Factory;

class AIChatController extends Controller
{
    /**
     * Chat oynasini ko‘rsatadi
     */
    public function index()
    {
        return view('admin.Aichat'); // e’tibor ber: fayl nomidagi harf katta-kichik farq qiladi
    }

    /**
     * Foydalanuvchi xabarini AI ga yuboradi va javobni qaytaradi
     */
    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:500',
        ]);

        // 🔑 OpenAI mijozini yaratamiz
        $client = (new Factory())
            ->withApiKey(env('OPENAI_API_KEY'))
            ->make();

        // 💬 AI ga xabar yuborish
        $response = $client->chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Sen tibbiyot bo‘yicha foydali maslahat beruvchi virtual yordamchisan. Foydalanuvchiga xushmuomala, qisqa va aniq javob ber.',
                ],
                [
                    'role' => 'user',
                    'content' => $request->message,
                ],
            ],
        ]);

        // 🧠 AI javobini olish
        $reply = $response->choices[0]->message->content ?? 'Kechirasiz, javob olishda xatolik yuz berdi.';

        return response()->json([
            'reply' => $reply,
        ]);
    }
}
