<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Siswa;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;
        $siswas = Siswa::all()->where('user_id', $id);
        $count = $siswas->count();
        return view('user.index', compact('siswas'), compact('count'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $siswas = Siswa::latest()->paginate(5);
  
        return view('admin.index',compact('siswas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
