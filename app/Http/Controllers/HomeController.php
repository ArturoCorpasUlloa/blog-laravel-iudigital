<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $slides = [
            [
                'title' => 'Ave1',
                'image' => (asset('images/png/ave1.png'))
            ],
            [
                'title' => 'Ave2',
                'image' => (asset('images/png/ave2.png'))
            ],
            // Agrega más elementos de slide según sea necesario
        ];

        return view('bienvenido', compact('slides'));
    }
}
