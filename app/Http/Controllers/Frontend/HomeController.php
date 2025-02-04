<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Chakri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $chakris = Chakri::latest()->get();
        $chakris = Chakri::when($request->search, function ($query) use ($request) {
            return $query->where('title', 'LIKE', "%{$request->search}%");
        })->latest()->get();
        return view('frontend.home', compact('chakris'));
    }
}
