<?php

namespace App\Http\Controllers;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Foydalanuvchini tekshiramiz
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Bunday foydalanuvchi mavjud emas.']);
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Noto‘g‘ri parol!']);
        }

        // Login qilish
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            // 🔥 Foydalanuvchini login sahifasidan oldingi manziliga qaytaramiz
            return redirect()->intended(route('main'))->with('success', 'Xush kelibsiz!');
        }

        return back()->withErrors([
            'email' => 'Login amalga oshmadi, iltimos tekshirib qaytadan urinib ko‘ring.'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('main');
    }

    public function main()
    {
        return view('pages.main');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function service()
    {
        return view('pages.service');
    }
    public function doctors()
    {
        return view('pages.doctors');
    }

    public function dashboard()
    {
//        $month = now()->format('Y-m');
//
//        $tasks = Task::whereYear('created_at', now()->year)
//            ->whereMonth('created_at', now()->month)
//            ->get();
//
//        $total = $tasks->count();
//        $completed = $tasks->where('status', 'bajarildi')->count();
//        $incomplete = $total - $completed;
//
//        // Har bir xodim va unga tegishli topshiriqlarni olish
//        $tasksWithUsers = User::where('role', 'xodim')
//            ->with(['assignedTasks' => function ($query) {
//                $query->select('tasks.id', 'title', 'status'); // ustunlarni aniqlab beramiz
//            }])
//            ->get();
//
//
        return view('admin.dashboard');
    }
    public function chat(){
        return view('admin.chat');
    }

    public function profile(){
        return view('admin.dashboard');
    }





}
