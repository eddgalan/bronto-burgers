<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index(): Factory|View
    {
        return view('home');
    }
}
